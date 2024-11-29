<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
            return view('common.login');
    }

    public function loginSubmit(LoginRequest $request){
        // $request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required|min:5|max:10',
        // ], [
        //     'email.required' => 'Are you sure your email is correct?',
        //     'email.email' => 'Are you sure your email is correct?',
        //     'password.required' => 'Are you sure your password is correct?'
        // ]);
    }
}