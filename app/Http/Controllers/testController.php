<?php

namespace dimor\Http\Controllers;

use Illuminate\Http\Request;

use dimor\Http\Requests;
use dimor\Http\Controllers\Controller;
use dimor\User;

class testController extends Controller
{
    public function view($id){
        $user = User::find(1);
        dd($user->name);
    }
}
