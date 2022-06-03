<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Hello, Welcome to main page";
});
Route::get('/sobre-nos',function() {
    return "sobre-nos";
});
Route::get("contato",function() {
    return "contato";
});