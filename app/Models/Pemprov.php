<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemprov extends Model
{
    use HasFactory;

    protected $table = "pendataker";

    protected $fillable = [
        'tentang', 'mou', 'pks','tanggal', 'jangka_waktu', 'unitkerja', 'mitrakerja',
        'tahapan', 'provinsi', 'nama_daerah','file', 'tahun','daftar_daerah_id'
    ];

    public function daerah()
    {
        return $this->belongsTo(Daerah::class,'daftar_daerah_id')->where('daftar','like','%Provinsi Kaltim%');
    }

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            try {
                $daerah = Daerah::where('daftar','like','%Provinsi Kaltim%')->first();
                $model->daftar_daerah_id = $daerah->id;

            } catch (UnsatisfiedDependencyException $e) {
                abort(500, $e->getMessage());
            }
        });
    }
}
