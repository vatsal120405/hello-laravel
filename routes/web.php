<?php

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

