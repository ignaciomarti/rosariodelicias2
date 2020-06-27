<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    public $guarded = [];

    protected $fillable = [
        'nombre', 'apellido', 'email', 'mensaje', 'status',
    ];
}
