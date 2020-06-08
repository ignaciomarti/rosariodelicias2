<?php

use App\Http\Controllers\productosController;
use App\pageAdministration;
use Illuminate\Support\Facades\Route;
use App\Categoria;
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
Route::get('include', function(){
    $categorias = Categoria::all();
    return view('front.layouts.app', compact('categorias'));
});
Route::get('/', function () {
    $collection = pageAdministration::all();
    $datos = $collection[0];
    return view('front.index', compact('datos'));
});
Route::get('contacto', function () {
    return view('front.contacto');
});

Route::get('empresa', function () {
    $collection = pageAdministration::all();
    $datos = $collection[0];
    return view('front.empresa', compact('datos'));
});

Route::resource('productos', 'productosController');
Route::resource('categorias', 'categoriasController');
Route::resource('carrito', 'carritosController');
Route::resource('administration', 'pagesAdministrationController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
