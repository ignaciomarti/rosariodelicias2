<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public $guarded = [];
    public $timestamps = false;
    public $fillable = [
        'nombre_categoria',
        'poster'
    ];

    public function productos(){
        return $this->hasMany("App\Producto", "categoria_id");
    }
}
