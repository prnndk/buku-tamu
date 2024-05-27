<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeperluanKunjungan extends Model
{
    use HasFactory;

    private static $dataKeperluanKunjungan = [
        ['id' => 1, 'keperluan' => 'Kunjungan Kerja'],
        ['id' => 2, 'keperluan' => 'Kunjungan Bisnis'],
        ['id' => 3, 'keperluan' => 'Kunjungan Umum'],
        ['id' => 4, 'keperluan' => 'Kunjungan Alumni'],
        ['id' => 5, 'keperluan' => 'Kunjungan Orang Tua'],
        ['id' => 6, 'keperluan' => 'Kunjungan Lainnya'],
    ];

    public static function getAllKeperluanKunjungan(): array
    {
        return self::$dataKeperluanKunjungan;
    }
}
