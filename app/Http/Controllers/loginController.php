<?php

namespace App\Http\Controllers;

use App\user;
use Illuminate\Http\Request;
use App\Http\Requests\loginRequest;

class loginController extends Controller
{
    public function showLoginPage()
    {
        return view('login.login');
    }

    public function showRegistrationPage()
    {
        return view('Registration.registration');
    }

    public function loginVarify(loginRequest $req)
    {


        $user = user::where('user_name', $req->user_name)
            ->where('password', md5($req->password))
            ->first();




        if (count($user) > 0) {
            $req->session()->put('user_name', $user['user_name']);
            $req->session()->put('type', $user['type']);
            return redirect('/home');
        } else {
            $req->session()->flash('msg', 'invalid username/password');
            return redirect('/login');
        }
    }
}
