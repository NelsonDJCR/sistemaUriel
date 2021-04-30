<?php
use Illuminate\Support\Facades\Route;

Route::get('/listado-casos', function () {
    return view('listado-casos');
});
Route::get('/ver-caso', function () {
    return view('ver-caso');
});
Route::get('/informe-casos', function () {
    return view('informe-casos');
});
Route::get('/casos-asignados', function () {
    return view('casos-asignado');
});
Route::get('/tipos-archivos', function () {
    return view('tipo-archivo');
});
Route::get('/tipo-identificacion', function () {
    return view('tipo-identificacion');
});
Route::get('/departamentos', function () {
    return view('departamentos');
});
Route::get('/municipios', function () {
    return view('municipios');
});
Route::get('/prioridad', function () {
    return view('prioridad');
});
Route::get('/tipos-eleccion', function () {
    return view('tipo-eleccion');
});
Route::get('/tipo-tramite', function () {
    return view('tipo-tramite');
});
Route::get('/medios-recepcion', function () {
    return view('medios-recepcion');
});
Route::get('/estado', function () {
    return view('estado');
});



