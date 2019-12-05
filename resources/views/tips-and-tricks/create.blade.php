@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add new Tip or Trick</h1>

        <form method="post" action="/tips-and-tricks">

        <div>
            <label for="title">Titel</label>
            <input type="text" name="title" autocomplete="off" value="{{ old('title') ?? $tipAndTrick->title }}">
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

            <button>Add New Tip or Trick</button>

        </form> 
    </div>
@endsection