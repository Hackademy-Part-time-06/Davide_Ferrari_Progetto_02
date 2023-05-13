<?php

use Illuminate\Support\Facades\Route;

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


// ROUTES:
// - HOMEPAGE               --- Definire meta e favicon, importare css e js, e definire pagina.
// - AZIENDA
// - LISTA DESTINAZIONI
// - FORM DI CONTATTI


Route::get('/', function () {
    return view('homepage');
});

Route::get('/chi-siamo', function () {
    return view('azienda');
});

Route::get('/destinazioni', function () {
    $destinazioni = [
    'Roma',
    'Milano',
    'Bari',
    'Amsterdam',
    'Napoli',
    'Praga'
    ];
    return view('destinazioni', ['destinazioni'=> $destinazioni]);
});

Route::get('/contatti', function () {
    return view('contattaci');
});