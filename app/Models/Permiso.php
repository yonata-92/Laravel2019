<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    protected $table = "permiso"; //como las tablas no estan en pproral se le debe indicar a que tabla appunta ese modelo, normalmente las tablas van en prural y los modelos en singural para que laravel los tome por defecto
}
