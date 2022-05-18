<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\modelo;
use App\Models\usuario;

class carro extends Model
{
    use HasFactory;
    protected $table="carros";
    
    public function modelos(){
        return $this->hasMany(modelo::class,'id','id_modelo');
    }
    public function interesses(){
        return $this->belongsToMany(usuario::class,'interesses','id_carro','id_usuario');
    }
    
}
