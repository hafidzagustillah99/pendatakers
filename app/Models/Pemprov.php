<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemprov extends Model
{
    use HasFactory;

    protected $table = "pemprov";

    protected $fillable = [
        'tentang', 'mou', 'pks','tanggal', 'jangka_waktu', 'unitkerja', 'mitrakerja',
        'tahapan', 'provinsi', 'nama_daerah','file', 'tahun',
    ];


}
