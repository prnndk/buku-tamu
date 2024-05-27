<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{
    use HasFactory;

    private static $dataTamu = [
        [
            'id' => 1,
            'name' => 'Budi',
            'no_telp' => '08123456789',
            'alamat' => 'Jl. Merdeka No. 1',
            'keperluan_kunjungan_id' => 1,
            'pesan' => 'Halo, saya ingin berkunjung',
            'created_at' => '2021-01-01 00:00:00',
        ],
        [
            'id' => 2,
            'name' => 'Dodi',
            'no_telp' => '08123456788',
            'alamat' => 'Jl. Merdeka No. 2',
            'keperluan_kunjungan_id' => 2,
            'pesan' => 'Halo, saya ingin berkunjung',
            'created_at' => '2021-01-02 00:00:00',
        ],
        [
            'id' => 3,
            'name' => 'Rudi',
            'no_telp' => '08123456787',
            'alamat' => 'Jl. Merdeka No. 3',
            'keperluan_kunjungan_id' => 3,
            'pesan' => 'Halo, saya ingin berkunjung',
            'created_at' => '2021-01-03 00:00:00',
        ],
        [
            'id' => 4,
            'name' => 'Susi',
            'no_telp' => '08123456786',
            'alamat' => 'Jl. Merdeka No. 4',
            'keperluan_kunjungan_id' => 4,
            'pesan' => 'Halo, saya ingin berkunjung',
            'created_at' => '2021-01-04 00:00:00',
        ],
        [
            'id' => 5,
            'name' => 'Tuti',
            'no_telp' => '08123456785',
            'alamat' => 'Jl. Merdeka No. 5',
            'keperluan_kunjungan_id' => 5,
            'pesan' => 'Halo, saya ingin berkunjung',
            'created_at' => '2021-01-05 00:00:00',
        ],
        [
            'id' => 6,
            'name' => 'Umi',
            'no_telp' => '08123456784',
            'alamat' => 'Jl. Merdeka No. 6',
            'keperluan_kunjungan_id' => 6,
            'pesan' => 'Halo, saya ingin berkunjung',
            'created_at' => '2021-01-06 00:00:00',
        ],
    ];

    public static function getAllTamu(): array
    {
        return self::$dataTamu;
    }
}
