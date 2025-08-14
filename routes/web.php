<?php

use App\Http\Controllers\JobsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/404', function () {
    abort(404);
});

Route::resource('/jobs', JobsController::class);
