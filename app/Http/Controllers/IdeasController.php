<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Request;
use App\Ideas;

class IdeasController extends Controller
{
    public function index()
    {
        $ideas = Ideas::all();

        return view('idea.index', compact('ideas'));
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
