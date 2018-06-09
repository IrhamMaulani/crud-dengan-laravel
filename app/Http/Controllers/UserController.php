<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;


class UserController extends Controller
{

    public function kirimArray()
    {
        $users = Users::all();
        $title = "halo";

        return view('user.user',['users' => $users , 'title' => $title]);
    }


    

}
