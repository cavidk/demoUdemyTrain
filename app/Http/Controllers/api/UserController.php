<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getAllUsers()
    {
        $user =  User::all();
        return response()->json($user);
    }
}
