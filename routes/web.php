<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test', function () {
    return "Wellcome to my first laravel docker project";
});
