<?php

namespace App\Http\Controllers;

use App\user;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;
use App\Http\Requests\registrationRequest;
use DeepCopy\Filter\KeepFilter;
use PharIo\Manifest\Email;


class userController extends Controller
{
    public function confirmRegistration(registrationRequest $req)
    {

        $user = new user;
        $user->Full_name = $req->Fname;
        $user->user_name = $req->user_name;
        $user->Email = $req->email;
        $user->password =  ($req->password);
        $user->Phone_number = $req->number;
        $user->company = $req->company_name;
        $user->city = $req->city;
        $user->country = $req->country;
        $user->user_type = 'customer';
        $user->save();
        return redirect()->route('showLogin');
    }

    public function admindashbord()
    {

        return view('admin.dashbord');
    }

    public function customerLists()
    {
        $lists = user::all();
        return view('admin.customerLists')->with('users', $lists);
    }
}
