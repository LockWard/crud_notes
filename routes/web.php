<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ViewErrorBag;

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

Route::get('/', 'PagesController@inicio')->name('welcome');

Route::get('/detalle/{id}', 'PagesController@detalle')->name('notas.detalle');

Route::post('/detalle/crear', 'PagesController@crear')->name('notas.crear');

Route::get('/editar/{id}', 'PagesController@editar')->name('notas.editar');

Route::put('/editar/{id}', 'PagesController@update')->name('notas.update');

Route::delete('/eliminar/{id}', 'PagesController@eliminar')->name('notas.eliminar');

Route::get('/fotos', 'PagesController@fotos')->name('fotos');

Route::get('/noticias', 'PagesController@noticias')->name('noticias');

Route::get('/nosotros/{nombre?}', 'PagesController@nosotros')->name('nosotros');


/*
Route::get('fotos/{numero?}', function($numero = 'sin numero'){
    return 'Estas en la galeria de fotos: '.$numero; 
})->where('numero', '[0-9]+');

Route::view('galeria', 'fotos', ['numero'=> 125]);

Route::get('/', function () {
    return view('welcome');
});

Route::get('fotos', function(){
    return view('fotos');
})->name('fotos');

Route::get('noticias', function(){
    return view('blog');
})->name('noticias');

Route::get('nosotros/{nombre?}', function($nombre = null){
    $equipo = ['Ignacio', 'Juanito', 'Pedrito'];
    return view('nosotros', ['equipo'=>$equipo, 'nombre'=>$nombre]);
    return view('nosotros', compact('equipo', 'nombre'));
})->name('nosotros');*/