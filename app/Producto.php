<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public $table = 'products';

    public $fillable = [
        'titulo',
        'precio',
        'price_per_three',
        'price_per_six',
        'price_per_twelve',
        'price_per_twentyfour',
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
