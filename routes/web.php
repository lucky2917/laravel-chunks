<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    $abc = "Hellooo";
    echo($abc);
    return "hii";
    
});


Route::get('/table2/{number?}', function ($number) {
    return view('table', ['number' => $number]);
})->whereNumber('number');

Route::get('/abcd/{id?}', function($id = null) {
    return "welcome" . $id;
});

Route::get('abc/{id1}/xyz/{id2}', function($id1,$id2){
    if($id1){
        return "welcome user id: " . $id1 . " and name is " . $id2;
    }
    else{
        return "Not found";
    }
})->whereNumber('id1')->whereAlpha('id2');

Route::get('/sum/{num1}/{num2}', function($num1,$num2){
    return $num1 + $num2;
})->where('num','[0-9]+');

Route::get('/table/{number?}', function ($number) {
    for ($i = 1; $i <= 10; $i++) {
        echo "<h2>" . $number . " * " . $i . " = " . ($number * $i) . "<br></h2>";
    }
})->whereNumber('number');

Route::fallback(function(){
    return "<h1> Page not exist, try agai later</h1>";
});

Route::get('/aboutus', function () {
    return view('about');
})->name('about');

Route::get('/homepage', function(){
    return view('home');
})->name('home');

Route::get('/welcomepage', function(){
    return view('welcome');
})->name('welcome');

