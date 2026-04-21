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

    public function products(){
        $jewellery = [
            1=>["name"=>"Gold necklace","price"=>15000],
            2=>["name"=>"Diamond Ring","price"=>25000],
            3=>["name"=>"Silver earrings","price"=>3000],
            4=>["name"=>"Bracelet","price"=>8000],
            5=>["name"=>"Ruby pendant","price"=>12000]
        ];
        return view('jewelery', compact('jewellery'));
    }
    public function productsShow($id){
        $jewellery = [
            1=>["name"=>"Gold necklace","price"=>15000],
            2=>["name"=>"Diamond Ring","price"=>25000],
            3=>["name"=>"Silver earrings","price"=>3000],
            4=>["name"=>"Bracelet","price"=>8000],
            5=>["name"=>"Ruby pendant","price"=>12000]
        ];
        $item = $jewellery[$id];
        return view('jeweleryShow', compact('item', 'id'));
    }


}

