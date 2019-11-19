<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\User;
use Request;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $userId = Auth::user()->id;
        $user = User::findOrFail($userId);

        return view('profile.index', [
            'user' => $user,
        ]);
    }

    public function edit()
    {
        
    }

    public function update()
    {

    }
}
    