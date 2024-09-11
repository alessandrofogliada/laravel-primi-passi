<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $name_framework = 'Laravel';

    return view('homepage' , compact('name_framework'));
})->name('homepage');

Route::get('/colors' , function (){

    $colors = ['giallo' , 'verde' , 'blu' , 'viola' , 'rosso'];

    return view('colors' , compact('colors'));
})->name('colors');

Route::get('/teams' , function (){
    $teams = [
        $first_team = ' Como ',
        $first_team = ' Milan ',
        $first_team = ' Bologna ',
        $first_team = ' Roma '
    ];

    return view('teams' , compact('teams'));
})->name('teams');


