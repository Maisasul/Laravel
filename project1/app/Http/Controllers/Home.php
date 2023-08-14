<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Home extends Controller
{
    //
    public function First(){
        echo "hi";
        $name = "Maisa";
        $colors = ["red","green","blue","black"];
        return view("test",compact("name","colors"));
    }

    public function users(){
        $res = DB::table('user')->get();
        return view("users",compact("res"));
    }
}
