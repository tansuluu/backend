<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $users = User::all()->toArray();
        return view('index', compact('users'));
    }
}
