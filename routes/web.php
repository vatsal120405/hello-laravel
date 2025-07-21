<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Hello World";
});
Route::get('/example', function () {
    return view('example');
});

Route::post('/example', function () {
    // Handle the form submission
    return redirect('/example')->with('status', 'Form submitted!');
});

Route::get('/users', [UserController::class, 'index']);
Route::get('/helper', [UserController::class, 'helper']);
Route::get('/filesize', [UserController::class, 'filesize']);

