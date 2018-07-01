<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','phone_number','town'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function editUserData(Request $request, $id){
        $user = User::find($id);
        $user->name = $request->get('name');
        $user->password = bcrypt($request->get('password'));
        $user->phone_number = $request->get('phone_number');
        $user->town = $request->get('town');
        if($user->save()){
            return true;
        }
        else return false;

    }
}
