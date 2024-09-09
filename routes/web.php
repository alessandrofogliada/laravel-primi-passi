<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $name_framework = 'Laravel';

    return view('homepage' , compact('name_framework'));
});
