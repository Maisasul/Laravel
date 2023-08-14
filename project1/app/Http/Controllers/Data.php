<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Data extends Controller
{
    //
    public function getData(){
        return view("data");
    }

    public function postData(Request $request){
        echo "name: ".$request->name." | age: ".$request->age;
        // dd($request->name);
        // dd($request->age);
    }
}
