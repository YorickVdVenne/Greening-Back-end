@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Tip or Trick Details</h1>

        <a href="/tips-and-tricks/{{$tipAndTrick->id}}"> < Back</a>

        <form method="post" action="/tips-and-tricks/{{$tipAndTrick->id}}">

        @method('PATCH')

        <div>
            <label for="title">Title</label>
            <input type="text" name="title" autocomplete="off" value="{{ old('titel') ?? $tipAndTrick->title }}">
            @error('title') <p style="color: red">{{ $message }}</p> @enderror 
        </div>

        <div>
            <label for="subject">Subject</label>
            <input type="text" name="subject" autocomplete="off" value="{{ old('subject') ?? $tipAndTrick->subject }}">
            @error('subject') <p style="color: red">{{ $message }}</p> @enderror 
        </div>

        <div>
            <label for="description">Description</label>
            <input type="text" name="description" autocomplete="off" value="{{ old('description') ?? $tipAndTrick->description }}">
            @error('description') <p style="color: red">{{ $message }}</p> @enderror 
        </div>

        @csrf

            <button>Save Tip or Trick</button>

        </form> 
    </div>
@endsection
