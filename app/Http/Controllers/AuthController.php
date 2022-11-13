<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;


class AuthController extends Controller
{
    public function index(Request $request){
        return view('login');
    }

    public function login_action(Request $request){
        $validator = $request->validator([
            'email'=> 'required|email',
            'password'=> 'required|min:6'
        ]);

      //  $data = $request->only('name','email','password');

      //  $data['password'] = Hash::make($data['password']);

      if(Auth::attempt($validator)){
        return redirect()->route('home');
      };

    }

    public function register(Request $request){
        return view('register');
    }

    public function registerAction(Request $request){

        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique|users',
            'password'=>'required|min:6|confirmed'

        ]);
        $data = $request->only('name','email','password');

      //  $userCreated = User::create($data);
        return redirect(route('login'));
    }
}
