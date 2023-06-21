<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{

    function auth(Request $req){
        $credentials = $req->only('email','password');

        if(Auth::attempt($credentials)){
            return view('home');
        }

        return redirect()->back();
    }

    function show(){
        return view('admin');
    }
    function view(){
        return view('home');
    }

    function logout(){
        Auth::logout();
        return redirect ('/');
    }

    function register(){
        return view('register');
    }


    function daftar(Request $req){

        $validate = $this->validate($req,[
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|min:5'
        ]);

        $validate['password'] = bcrypt($req->password);

        User::create($validate);
        return redirect('/');
    }
}
