<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pekerjaan extends Model
{

    use HasFactory;
    use SoftDeletes;

    protected $table    = 'pekerjaan';
    protected $fillable = ['pekerjaan'];

    public function ayah()
    {
        return $this->hasMany(Ayah::class,'pekerjaan_id');
    }

    public function ibu()
    {
        return $this->hasMany(Ibu::class,'pekerjaan_id');
    }

}
