<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

	public function not_found()
	{
		$this->cachePage(360);
		$data = [
			'class_body' 		=> 'class="body-scroll d-flex flex-column h-100" data-page="404"',
		];
		return view('errors/404', $data);
	}

	public function login()
	{
		if (session('login')) {
            return redirect()->to('home/index');
        }
		$tgl  = date("d M Y");
		$data = [
			'class_body' 		=> 'class="body-scroll d-flex flex-column h-100" data-page="signin"',
			'tgl'				=> $tgl,
			'site_key' 			=> getenv('recaptchaKey'),
		];
		return view('v_login', $data);
	}

	public function validasi()
	{
		if ($this->request->isAJAX()) {
            $username 			= $this->request->getVar('username');
            $password 			= $this->request->getVar('password');
            $recaptchaResponse = trim($this->request->getVar('g-recaptcha-response'));

            $validation = \Config\Services::validation();

            $valid = $this->validate([
                'username' => [
                    'label' => 'Username',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} wajib diisi!'
                    ]
                ],
                'password' => [
                    'label' => 'Password',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} wajib diisi!'
                    ]
                ]
            ]);

            if (!$valid) {
                $msg = [
                    'eror' => [
						'respon' => 'Invalid Username or Password!',
						'link'   => 'login'
					]
                ];
            } else {

                //cek user
                $query_cekuser = $this->db->query("SELECT * FROM tb_user WHERE username='$username'");

                $result = $query_cekuser->getResult();

                $secret = getenv('recaptchaSecret');
                $credential = array(
                    'secret' => $secret,
                    'response' => $recaptchaResponse
                );

                $verify = curl_init();
                curl_setopt($verify, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
                curl_setopt($verify, CURLOPT_POST, true);
                curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($credential));
                curl_setopt($verify, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
                $response = curl_exec($verify);

                $status = json_decode($response, true);

                
                if (count($result) > 0) {
                    $row = $query_cekuser->getRow();
                    $password_user = $row->password;

                    if (password_verify($password, $password_user) && $status["success"]) {
                        if ($row->active == 1) {
                            $simpan_session = [
                                'login' 	=> true,
                                'user_id' 	=> $row->user_id,
                                'username' 	=> $username,
                                'name'  	=> $row->name,
                                'role' 		=> $row->role,
                            ];

                            $this->session->set($simpan_session);

                            $msg = [
                                'sukses' => [
                                    'link' => 'home'
                                ]
                            ];
                        } else {
                            $msg = [
                                'eror' => [
                                    'respon' => 'Inactive User',
                                    'link'   => 'login'
                                ]
                            ];
                        }
                    } else {
                        $msg = [
                            'eror' => [
                                'respon' => 'Username or Password 404',
                                'link'   => 'login'
                            ]
                        ];
                    }
                } else {
                    $msg = [
                        'eror' => [
                            'respon' => 'Username or Password 404',
                            'link'   => 'login'
                        ]
                    ];
                }
            }
            echo json_encode($msg);
			
		}
	}

	public function index()
	{
		if (!session()->get('user_id')) {
            return redirect()->to('login');
        }

		$tgl  = date("d M Y");
		$data = [
			'class_body' 		=> 'class="body-scroll" data-page="index"',
			'tgl'				=> $tgl,
		];
		return view('index', $data);
	}

	public function getdata()
    {
        if ($this->request->isAJAX()) {
			
			$tgl  = date("d M Y");
            $data = [
                'class_body' 		=> 'class="body-scroll" data-page="index"',
				'tgl'				=> $tgl,
				'monray' 			=> $this->data->last()
            ];
            $msg = [
                'data' => view('monray', $data)
            ];
            echo json_encode($msg);
        }
    }

	public function splash()
	{
		$data = [
			'class_body' 		=> 'class="body-scroll d-flex flex-column h-100 dark-bg" data-page="splash"',
		];
		return view('v_splash', $data);
	}

}
