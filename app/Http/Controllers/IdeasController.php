<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Request;
use App\Idea;

class IdeasController extends Controller
{
    public function index()
    {
        $ideas = Idea::all()->toJson();
        header('Content-Type: application/json');
        return $ideas;        
    }

    public function create()
    {
        $idea = new Idea();

        return view('idea.create', compact('idea'));
    }

    public function store()
    {
        $data = request()->validate([ 
            'title' => 'required',
            'subject' => 'required',
            'description' => 'required'
        ]);

        $user_id = Auth::user()->id;

            Idea::create([
            'user_id' => $user_id,
            'title' => $data['title'],
            'subject' => $data['subject'],
            'description' => $data['description'],
        ]);

        return redirect('/api/ideas');
    }

    public function show(Idea $idea)
    {
        return view('idea.show', compact('idea'));
    }

    public function edit(Idea $idea)
    {
        return view('idea.edit', compact('idea'));
    }

    public function update(Idea $idea)
    {
        $data = request()->validate([ 
            'title' => 'required',
            'subject' => 'required',
            'description' => 'required'
        ]);

        $user_id = Auth::user()->id;

        $idea->update([
            'user_id' => $user_id,
            'title' => $data['title'],
            'subject' => $data['subject'],
            'description' => $data['description'],
        ]);

        return redirect('/ideas');
    }

    public function destroy(Idea $idea)
    {
        $idea->delete();

        return redirect('/ideas');
    }
}
