<?php

use Illuminate\Support\Facades\Route;

Route::get('/',"PrincipalController@principal");
Route::get('/sobreNos',function() {
    return "sobreNos";
});
Route::get("contato",function() {
    return "contato";
});
