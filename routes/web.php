<?php

use Illuminate\Support\Facades\Route;

Log::info('hi');
Route::get('/', function () {
    return view('welcome');
});
