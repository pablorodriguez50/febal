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
    return view('pages.index');
});

Route::get('/nosotros', function () {
    return view('pages.nosotros');
});

Route::get('/contacto', function () {
    return view('pages.contacto');
});

Route::get('/aseo', function () {
    return view('pages.aseo');
});

Route::get('/financiero', function () {
    return view('pages.financiero');
});

Route::get('/rrhh', function () {
    return view('pages.rrhh');
});

Route::get('/informatico', function () {
    return view('pages.informatico');
});

