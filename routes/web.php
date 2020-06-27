<?php

use App\Http\Controllers\productosController;
use App\pageAdministration;
use Illuminate\Support\Facades\Route;
use App\Categoria;
use App\Producto;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    $collection = pageAdministration::all();
    $datos = $collection[0];
    $productosDestacados = Producto::where('es_destacado', 1)->get();
    return view('front.index', compact('datos', 'productosDestacados'));
});

Route::get('empresa', function () {
    $collection = pageAdministration::all();
    $datos = $collection[0];
    return view('front.empresa', compact('datos'));
});

Route::resource('productos', 'productosController');
Route::resource('categorias', 'categoriasController');
Route::resource('carrito', 'carritosController');
Route::resource('administration', 'pagesAdministrationController')->middleware('administrador');
Route::resource('contactos', 'ContactosController');

Route::POST('contacto', 'ContactosController@insert')->name("contactos.insert");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
