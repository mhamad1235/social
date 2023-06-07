<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    function mh(){
        return view('welcome');
    }
    function register(Request $request){
dd($request);

}
}