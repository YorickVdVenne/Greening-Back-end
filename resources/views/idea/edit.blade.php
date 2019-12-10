@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Ideas Details</h1>

        <a href="/ideas/{{$idea->id}}"> < Back</a>

        <form method="post" action="/ideas/{{$idea->id}}">

        @method('PATCH')

        <div>
            <label for="title">Title</label>
            <input type="text" name="title" autocomplete="off" value="{{ old('titel') ?? $idea->title }}">
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

            <button>Save Idea</button>

        </form> 
    </div>
@endsection