
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('/suelos', function () {
    return view('suelos');
})->name('suelos');

Route::get('/arboles', function () {
    return view('arboles');
})->name('arboles');

Route::get('/beneficios', function () {
    return view('beneficios');
})->name('beneficios');