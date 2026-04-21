<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessionController extends Controller
{
    public function index(){
        $value = session()->all();
        echo "<pre>";
        print_r($value);
        echo "<pre>";
    }
    public function store() {
        session()->put('class', 'Laravel Programming');
        return 'Session variable "class" has been set!';
    }
    public function get() {
        if(session()->has('name')){
            $value = session()->get('class');
            echo $value;
        }
        else{
            echo 'does not exist';
        }
    }
    public function destroy() {
        session()->forget('class');
        return 'Session variable "class" has been deleted!';
    }
}
