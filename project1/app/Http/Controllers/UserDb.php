<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class UserDb extends Controller
{
    //
    public function insertInfo(){
        return view('userDb');
    }
    public function insert(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $admin = $request->input('admin');
        $data=array('name'=>$name,"email"=>$email, 'password'=>$password,'admin'=>$admin);
        DB::table('user')->insert($data);
        $user = DB::select('select * from user');
        return view('show',['user'=>$user]);

    }

    public function delete($id){
        // $user = User::findOrFail($id);
        // $user->delete();
        $user = DB::table('user')->delete('delete from user where id = ?',[$id]);
        return redirect('/show');
        // DB::delete('delete from user where id = ?',[$id]);
    }

    // public function update(Request $request,$id){
    //     $name = $request->input('name');
    //     $email = $request->input('email');
    //     $password = $request->input('password');
    //     $admin = $request->input('admin');
    //     $data=array('name'=>$name,"email"=>$email, 'password'=>$password,'admin'=>$admin);
    //     DB::table('user')->update($data);
    //     // $user = DB::update('update user set name =  where name = ? );
    //     return view('student.edit', compact('student'));
    // }

}
