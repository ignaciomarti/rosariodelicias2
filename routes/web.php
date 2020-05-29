<?php

use App\Http\Controllers\productosController;
use Illuminate\Support\Facades\Route;

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
    return view('front.index');
});
Route::get('contacto', function () {
    return view('front.contacto');
});

Route::get('empresa', function () {
    return view('front.empresa');
});

Route::resource('productos', 'productosController');
Route::resource('categorias', 'categoriasController');
Route::resource('carrito', 'carritosController');
Route::resource('administration', 'pagesAdministrationController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
