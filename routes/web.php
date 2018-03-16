<?php

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
    return view('Home');
});
Route::get('/usuario', function () {
    return view('Forusuarios');
});
Route::get('/reporte', function () {
    return view('reporteCajeros');
});
Route::get('/cajeros', function () {
    return view('cajeros');
});
Route::get('/atender', function () {
    return view('reporteCajeros');
});
Route::post('formusuarios','CrearUsuariosController@CrearUsuarios');
Route::post('cajerosa','cajeroIdentificacionController@cajeroIdentificacion');
Route::post('cajerosb','cajeroPrioridadController@cajeroPrioridad');
Route::post('cajerosd','cajeroEdadController@cajeroEdad');
Route::get('atendidos','atendidosController@atendidos');