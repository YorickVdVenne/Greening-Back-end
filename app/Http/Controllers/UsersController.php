<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all()->toJson();
        header('Content-Type: application/json');
        return $users;
        
 
    }

}
