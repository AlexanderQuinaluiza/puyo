<?php

namespace sisAdminPuyo;

use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    //
    protected $table ='MODELO';
    protected $primaryKey='ID';

    public $ timestamps=false;

    protected $fillable =[
     'nombre',
     'descripcion'
    ];

    protected $guarded =[
    ];

}
