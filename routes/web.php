<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/first', function () {
    $a = 1; // переменная 1
    $b = 2; // переменная 2
    $c = $a + $b; // сумма
    // dd($c);

    // return view('first');
    return view('first', compact('c')); // переменная должна называться точно также, только без доллара и строка
});
