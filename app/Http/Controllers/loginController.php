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

    public function loginVarify(Request $req)
    {

        // echo $req->user_name;
        // echo $req->password;
        $user = user::where('user_name', $req->user_name)
            ->where('password', $req->password)
            ->first();

        //print_r($user);
        // $users = user::all();
        //echo $user['user_name'];

        if ($user) {
            $req->session()->put('user_name', $user['user_name']);
            $req->session()->put('type', $user['type']);

            if ($user['User_type'] == 'admin') {
                return redirect()->route('admin');
            } elseif ($user['User_type'] == 'customer') {
                return redirect()->route('customer');
            }
        } else {
            $req->session()->flash('msg', 'invalid username/password');
            return redirect()->route('showLogin');
        }
    }
}
