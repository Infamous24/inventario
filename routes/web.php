<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\inicioController;
use App\Http\Controllers\productoController;
use App\Http\Controllers\categoriaController;
use App\Http\Controllers\rolesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', inicioController::class);



Route::controller(productoController::class)->group(function(){

    route::get('producto', 'principal')->name('producto.principal');

    route::get('producto/crear', 'crear')->name('producto.crear');

    route::post('producto','store')->name('producto.store');

    Route::get('producto/{variable}', 'mostrar')->name('producto.mostrar');

    route::get('producto/{producto}/edit', 'editar')->name('producto.editar');

    Route::put('producto/{producto}', 'update')->name('producto.update');

    Route::delete('producto/{id}', 'borrar')->name('producto.borrar');
    Route::get('desactiva/{id}', 'desactivaproducto')->name('desactivapro');
    Route::get('activa/{id}', 'activaproducto')->name('activapro');


});

Route::controller(categoriaController::class)->group(function(){

    route::get('categorias', 'principal')->name('categoria.principal');

    route::get('categorias/crear', 'crear')->name('categorias.crear');

    route::post('categorias','store')->name('categorias.store');

    Route::get('categorias/{categoria}', 'mostrar')->name('categorias.mostrar');

    route::get('categorias/{producto}/edit', 'editar')->name('categorias.editar');

    Route::put('categorias/{producto}', 'update')->name('categorias.update');

    Route::delete('producto/{id}', 'borrar')->name('producto.borrar');
    Route::get('desactiva/{id}', 'desactivaproducto')->name('desactivapro');
    Route::get('activa/{id}', 'activaproducto')->name('activapro');


});

Route::controller(rolesController::class)->group(function(){

    route::get('roles', 'principal')->name('roles.principal');
    route::get('roles/crear', 'crear')->name('roles.crear');

    route::post('roles','store')->name('roles.store');
    Route::get('roles/{categoria}', 'mostrar')->name('roles.mostrar');
    route::get('roles/{producto}/edit', 'editar')->name('roles.editar');

    Route::put('roles/{producto}', 'update')->name('roles.update');

    Route::delete('producto/{id}', 'borrar')->name('producto.borrar');
    Route::get('desactiva/{id}', 'desactivaproducto')->name('desactivapro');
    Route::get('activa/{id}', 'activaproducto')->name('activapro');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
