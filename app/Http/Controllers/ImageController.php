<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function handleImage(Request $request){
        //dd($request->file('image')->store('images'));
        //*dd($request->file('image'));*/
//        $request->image->storeAs('./public/images', 'new_image.jpg');

        $request->image->store('./public/images');

        //starting to Request and Response Udemy


    }
}
