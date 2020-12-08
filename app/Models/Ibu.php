<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ibu extends Model
{
    use HasFactory;

    protected $table    = 'ibu';
    protected $fillable = ['id_siswa', 'nama_lengkap', 'pendidikan_id', 'pekerjaan_id', 'no_hp', 'tempat_lahir', 'tanggal_lahir', 'penghasilan_perbulan', 'is_live'];
    
    public function pekerjaan()
    {
        return $this->belongsTo(Pekerjaan::class,'pekerjaan_id','id')->withTrashed();
    }

    public function pendidikan()
    {
        return $this->belongsTo(Pendidikan::class,'pendidikan_id')->withTrashed();
    }
    
    public function siswa()
    {
        return $this->belongsTo(Siswa::class,'id_siswa');
    }

    
}
