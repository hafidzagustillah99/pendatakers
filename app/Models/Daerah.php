<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daerah extends Model
{
    use HasFactory;

    protected $table = "daftar_daerah";

    protected $fillable = [
        'daftar'
    ];

    public function samarinda()
    {
        return $this->hasMany(Samarinda::class,'daftar_daerah_id');
    }

    public function balikpapan()
    {
        return $this->hasMany(Balikpapan::class,'daftar_daerah_id');
    }

    public function kubar()
    {
        return $this->hasMany(Kubar::class,'daftar_daerah_id');
    }

    public function kutim()
    {
        return $this->hasMany(Kutim::class,'daftar_daerah_id');
    }

    public function kukar()
    {
        return $this->hasMany(Kukar::class,'daftar_daerah_id');
    }

    public function paser()
    {
        return $this->hasMany(Paser::class,'daftar_daerah_id');
    }

    public function bontang()
    {
        return $this->hasMany(Bontang::class,'daftar_daerah_id');
    }

    public function mahakam()
    {
        return $this->hasMany(Mahakam::class,'daftar_daerah_id');
    }

    public function penajam()
    {
        return $this->hasMany(Penajam::class,'daftar_daerah_id');
    }

    public function berau()
    {
        return $this->hasMany(Berau::class,'daftar_daerah_id');
    }

    public function pemprov()
    {
        return $this->hasMany(Pemprov::class,'daftar_daerah_id');
    }
}
