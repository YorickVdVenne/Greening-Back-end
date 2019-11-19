<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IdeasController extends Controller
{
    public function index()
    {
         // useful info https://stackoverflow.com/questions/37922094/how-to-pass-data-to-json-from-database-in-laravel
        $ideas = Idea::all()->toJson(); //idea model and table don't exist yet
        return not-a-view('blabla', compact('ideas')); //probably some URL instead of a view
    }

    public function create()
    {

    }

    public function store()
    {

    }

    public function show()
    {

    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}
