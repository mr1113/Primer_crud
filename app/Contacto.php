<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $table = 'Contactos';
    protected $primarykey ='id';
    public $timestap = false;
    protected $filable = ['id', 'nombre_apellido',
     'telefono', 'direccion', 'email', 'nacimiento'];
}
