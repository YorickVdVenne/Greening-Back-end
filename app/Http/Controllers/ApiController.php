<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class ApiController extends Controller
{
    public function index()
    {
             // useful info https://stackoverflow.com/questions/37922094/how-to-pass-data-to-json-from-database-in-laravel
        
           
             $users = User::all()->toJson(); //idea model and table don't exist yet
             header('Content-Type: application/json');
             return $users;
      
      
      
      
         return view('api', compact('users')); //probably some URL instead of a view
  
    }

}
