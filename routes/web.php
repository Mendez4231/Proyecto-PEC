
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Inicio');
})->name('Inicio');

Route::get('/Suelos_p', function () {
    return view('Suelos_p');
})->name('Suelos');

Route::get('/Arboles', function () {
    return view('Arboles');
})->name('Arboles');

Route::get('/Beneficios', function () {
    return view('Beneficios');
})->name('Beneficios');