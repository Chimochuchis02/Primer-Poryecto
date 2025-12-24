<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/tarjetas', function () {
    return DB::table('services')->get(); 
});

Route::get('/tarjetas', function () {
    return response()->json(DB::table('services')->get());
});
