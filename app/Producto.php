<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public $table = 'products';
    public $guarded = [];

    public $fillable = [
        'titulo',
        'precio',
        'descripcion',
        'descuento',
        'es_destacado',
        'categoria_id',
        'poster',
        'poster2',
        'poster3',
        'poster4',
        'poster5'
    ];

    public function categoria(){
        return $this->belongsTo("App\Categoria", "categoria_id");
    }
}
