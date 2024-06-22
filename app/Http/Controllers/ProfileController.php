<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
   public function index($id=null){

    $name="Donal Trump";
    $age = "75";

    $data=[
        "id"=>$id,
        "name"=>$name,
        "age"=>$age
    ];

   
        $name ="profile";
        $value = json_encode($data);
        $minutes =1;
        $path ="/";
        $domain =null;
        $secure = false;
        $httpOnly =true;

        
        $cookie = cookie($name,$value,$minutes,$path,$domain,$secure,$httpOnly);
    



    return response()->json($data,200)->cookie($cookie);

   }
}
