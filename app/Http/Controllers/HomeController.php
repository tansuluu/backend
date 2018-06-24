<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all()->toArray();
        return view('user.index', compact('users'));

    }
    public function edit($id)
    {
        $user = User::find($id);
        return view('user.edit', compact('user', 'id'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'    =>  'required',
            'password' => 'required|string|min:6'
        ]);
        $user = User::find($id);
        $user->name = $request->get('name');
        $user->password = $request->get('password');
        $user->phone_number = $request->get('phone_number');
        $user->town = $request->get('town');
        $user->save();
        return redirect()->route('user.index')->with('success', 'Data Updated');
    }
}
