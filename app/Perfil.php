<?php

namespace sisAdminPuyo;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    //modelo para la tabla PERFIL 

    protected $table='PERFIL';
    protected $primaryKey='ID';
    public $timestamps=false;

    protected $fillable=[
    'nombre'
    ]

    protected $guarded=[

    ]
}
