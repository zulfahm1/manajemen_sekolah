<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table    = 'siswa';
    protected $fillable = ['nama_lengkap', 'nama_panggilan', 'tempat_lahir', 'tanggal_lahir', 'nik', 'nis', 'anak_ke', 'jumlah_saudara', 'tinggi_badan', 'berat_badan', 'alamat_lengkap', 'no_hp', 'asal_sekolah', 'agama'];

    public function ayah()
    {
        return $this->hasOne(Ayah::class,'id_siswa');
    }

    public function ibu()
    {
        return $this->hasOne(Ibu::class,'id_siswa');
    }
}
