@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add new Idea</h1>

        <form method="post" action="/ideas">

        <div>
            <label for="title">Titel</label>
            <input type="text" name="title" autocomplete="off" value="{{ old('title') ?? $idea->title }}">
            @error('title') <p style="color: red">{{ $message }}</p> @enderror 
        </div>

        <div>
            <label for="subject">Subject</label>
            <input type="text" name="subject" autocomplete="off" value="{{ old('subject') ?? $idea->subject }}">
            @error('subject') <p style="color: red">{{ $message }}</p> @enderror 
        </div>

        <div>
            <label for="description">Description</label>
            <input type="text" name="description" autocomplete="off" value="{{ old('description') ?? $idea->description }}">
            @error('description') <p style="color: red">{{ $message }}</p> @enderror 
        </div>

        @csrf

            <button>Add New Idea</button>

        </form> 
    </div>
@endsection