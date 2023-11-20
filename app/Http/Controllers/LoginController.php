<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function logIn()
    {
        return view('login');
    }

    public function handleLogin(LoginRequest $request)
    {
        //for looking credentials about request path
        //        dd($request->all());
        return $request;
//        $request->validate([
//            'name' => ['required','string','alpha','max:255'],
//            'email' => ['required','email'],
//            'password' => 'required'
//
//        ],
            //::give manual notification to user::
    }

    public function store(LoginRequest $request){
        User::create($request->validated());


    }

}
