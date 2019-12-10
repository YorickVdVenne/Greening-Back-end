<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    // public function getOne()
    // {
    //     $user = User::where('id', request('user_id'))->toJson(); //idea model and table don't exist yet
    //     header('Content-Type: application/json');
    //     // if(count($user) == 0){
    //     //     return redirect('/404');
    //     // } else { 
    //     return $user;
    //     // }
                            
    // }

    public function getAll()
    {
        $users = User::all()->toJson(); //idea model and table don't exist yet
        header('Content-Type: application/json');
        // if(count($users) == 0){
        //     return redirect('/404');
        // } else { 
        return $users;
        // }
 
    }

    public function edit()
    {
        if(Auth::guest()) {
            return redirect('/login');
        }

        $user = User::findOrFail(Auth::user()->id);

        return view('profile.edit', compact('user'));
    }

    public function update()
    {
        $user_id = Request::input('user_id');
        $user = User::find($user_id);

        if($user_id == null) {
            $user = Auth::user();
        }

        //Preventing Breaking Access Controll 
        $authenticated_user = Auth::user();
        if ($authenticated_user->id != $user->id) {
            return 'Unauthorised';
        }

        if ($user) {
            $user->update($this->validatedData());

            return redirect('/profile');
        }
        else {
            return 'no user found';
        }
    }

    protected function validatedData()
    {
        return request()->validate([
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
        ]);
    }
}
