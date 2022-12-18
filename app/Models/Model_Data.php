<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_Data extends Model
{
    protected $table      = 'tb_data';
    protected $primaryKey = 'id';
    protected $allowedFields = ['device', 'date', 'time', 'ecg', 'spo2_1', 'spo2_2', 'resp', 'nibp_1', 'nibp_2', 'nibp_3', 'temp'];

    public function last()
    {
        return $this->table('tb_data')
            ->orderBy('id', 'desc')
            ->first();
    }

}
