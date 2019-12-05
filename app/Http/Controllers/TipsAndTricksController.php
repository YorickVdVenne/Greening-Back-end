<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Request;
use App\TipAndTrick;


class TipsAndTricksController extends Controller
{
    public function index()
    {
        $tipsAndTricks = TipAndTrick::all();

        return view('tips-and-tricks.index', compact('tipsAndTricks'));
    }

    public function create()
    {
        $tipAndTrick = new TipAndTrick(); 
    
        return view('tips-and-tricks.create', compact('tipAndTrick'));
    }

    public function store()
    {
        $data = request()->validate([ 
            'title' => 'required',
            'subject' => 'required',
            'description' => 'required'
        ]);

        $user_id = Auth::user()->id;

        TipAndTrick::create([
            'user_id' => $user_id,
            'title' => $data['title'],
            'subject' => $data['subject'],
            'description' => $data['description'],
        ]);

        return redirect('/tips-and-tricks');
    }

    public function show(TipAndTrick $tipAndTrick)
    {
        return view('tips-and-tricks.show', compact('tipAndTrick'));
    }

    public function edit(TipAndTrick $tipAndTrick)
    {
        return view('tips-and-tricks.edit', compact('tipAndTrick'));
    }

    public function update(TipAndTrick $tipAndTrick)
    {
        $data = request()->validate([ 
            'title' => 'required',
            'subject' => 'required',
            'description' => 'required',
        ]);

        $tipAndTrick->update([
            'title' => $data['title'],
            'subject' => $data['subject'],
            'description' => $data['description'],
        ]);

        return redirect('/tips-and-tricks');
    }

    public function destroy(TipAndTrick $tipAndTrick)
    {
        $tipAndTrick->delete();

        return redirect('/tips-and-tricks');
    }

}
