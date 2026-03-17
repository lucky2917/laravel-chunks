<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;

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

//compact() - dynamic
Route::get('/new/{name}/{id}', function ($name, $id) {
    return view('student', compact('name', 'id'));
});

Route::get('/new1/{name}/{id}' ,function(){
    $name = "ravi";
    $id = 20;
    return view("student")->with(['name' => $name, 'id' => $id]);
});

//response() -> returns raw data, view file, json data

Route::get('/hi', function(){
    return response("hii welcome");
});

Route::get('/hii', function(){
    return response()->view('welcome');
});

Route::get('/jsn', function(){
    return response()->json([
        "name" => 'Ravi',
        "course" => 'software enginering',
        "roll no" => '5'
    ])->header('Content-type', 'application/json');
});

// without response() and specifying json qualites it auto-converted to json data
Route::get('/json', function(){

    $student = [
        "name" => 'Ravi',
        "course" => 'software enginering',
        "roll no" => '5',
        "courses" => 'web development'
    ];
    return($student);
});

//redirect thru respose()
Route::get('/jsnold', function(){
    return response()->redirectTo("/jsn");
});

//status code thru response
Route::get('/not', function(){
    return response("page not found", 404);
});

//headers
Route::get('/header',function(){
    return response("hello this is with headers")->header('Content-Type', 'text/plain');
});

Route::get('/hdr',function(){
    return response("welcome to laravel")->header('X-welcome-header','welcome to laravel');
});

Route::get('/set-cookie', function(){
    $cookie = cookie('abc','ravi',1);
    return response("cookie is set")->cookie($cookie);
});

Route::get('/get-cookie', function(){
    $username = request()->cookie('abc');
    return response("Username: " . ($username ?? "Not found"));
});

Route::get('/del-cookie', function(){
    $cookie = Cookie::forget("abc");
    return response("deletion done")->withCookie($cookie);
});

///subview
Route::get("/subview", function(){
    return view('admin.hello');
});