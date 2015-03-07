<?php


namespace App\Http\Controllers;


class UserController extends Controller {


    public function userprofile()
    {
        return view('newuser.profile');
    }
}