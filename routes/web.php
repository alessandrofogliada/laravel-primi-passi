<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $name_framework = 'Laravel';
    $colors = ['giallo' , 'verde' , 'blu' , 'viola' , 'rosso'];
    $teams = [
        $first_team = ' Como ',
        $first_team = ' Milan ',
        $first_team = ' Bologna ',
        $first_team = ' Roma '
    ];

    return view('homepage' , compact('name_framework', 'colors' ,'teams'));
});
