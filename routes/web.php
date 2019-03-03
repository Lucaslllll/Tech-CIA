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

Route::get('/home', function () {
    return view('index');
});

Route::get('/individual', function () {
    return view('individual');
});

Route::get('/faca_seu_pedido', function () {
    return view('faca_seu_pedido');
});
