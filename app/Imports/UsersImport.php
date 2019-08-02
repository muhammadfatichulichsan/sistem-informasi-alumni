<?php

namespace App\Imports;

use App\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return User|null
     */
    public function model(array $row)
    {
        return new User([
           'is_admin'     => $row[0],
           'name'     => $row[1],
           'email'    => $row[2], 
           'nisn'    => $row[3], 
           'alamat'    => $row[4], 
           'no_tlp'    => $row[5], 
           'jurusan_id'    => $row[6], 
           'status_nikah'    => $row[7], 
           'status_kerja'    => $row[8], 
           'avatar'    => $row[9], 
           'tahun_masuk'    => $row[10], 
           'tahun_keluar'    => $row[11], 
           'password' => Hash::make($row[12]),
        ]);
    }
}
