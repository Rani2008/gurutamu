<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    public static $data =[
        [
            'id' => 1,
            'nama' => 'trimara',
            'alamat' => 'bandung',
            'jenis_kelamin' => 'laki_laki',
            'agama' => 'islam',
            'umur' =>17,
        ],
    [
            'id' => 2,
            'nama' => 'siti',
            'alamat' => 'jakarta',
            'jenis_kelamin' => 'laki_laki',
            'agama' => 'islam',
            'umur' =>16,
    ]
    ];
}
