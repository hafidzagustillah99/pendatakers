<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paser extends Model
{
    use HasFactory;

    protected $table = "pendataker";

    protected $fillable = [
        'tentang', 'mou', 'pks','tanggal', 'jangka_waktu', 'unitkerja', 'mitrakerja',
        'tahapan', 'tahun', 'file','daftar_daerah_id'
    ];

    public function daerah()
    {
        return $this->belongsTo(Daerah::class,'daftar_daerah_id')->where('daftar','like','%Kabupaten Paser%');
    }

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            try {
                $daerah = Daerah::where('daftar','like','%Kabupaten Paser%')->first();
                $model->daftar_daerah_id = $daerah->id;

            } catch (UnsatisfiedDependencyException $e) {
                abort(500, $e->getMessage());
            }
        });
    }
}
