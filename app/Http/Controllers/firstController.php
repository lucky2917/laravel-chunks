<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\UserRequest;

class firstController extends Controller{
    public function read(){
        return "my first controller";
    }
    public function tablenum($number){
        for($i=1;$i<=10;$i++){
            echo "<h2>". $number ." * ". $i . " = " . $number * $i. "<br>". "</h2>";
        }
    }
    public function stulist(){
        $student = [
            "name" => 'Ravi',
            "course" => 'software enginering',
            "roll no" => '5',
            "courses" => 'web development'
        ];
        return($student);
    }

    public function redir(){
        return response()->redirectTo("/jsn");
    }
    public function validUser()
    {
        return "Valid user accessed! You are verified.";
    }



    
}

