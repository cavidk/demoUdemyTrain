<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $blogs = [
            [
                'title' => 'Title one',
                'body' => 'This is first body text',
                'status' => 1
            ],
            [
                'title' => 'Title two',
                'body' => 'This is second body text',
                'status' => 0
            ],
            [
                'title' => 'Title three',
                'body' => 'This is third body text',
                'status' => 1
            ],
            [
                'title' => 'Title four',
                'body' => 'This is four body text',
                'status' => 0
            ],
        ];

//        return view('home', compact('blogs'));

    }
}
