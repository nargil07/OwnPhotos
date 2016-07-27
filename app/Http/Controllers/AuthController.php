<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;

class AuthController extends Controller
{
    public function connect(Request $request)
    {
        if(Auth::attempt(['name' => $request->input('login'), 'password' => $request->input('password')])){
            return redirect(route('home'));
        }else{
            return redirect(route('home'));
        }
    }
}
