@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tip Or Trick Details</h1>

    <div>
        <a href="/tips-and-tricks"> < Back</a>
    </div>

    <strong>Title</strong>
    <p>{{ $tipAndTrick->title }}</p>

    <strong>Subject</strong>
    <p>{{ $tipAndTrick->subject }}</p>

    <strong>Description</strong>
    <p>{{ $tipAndTrick->description }}</p>

    <div>
        <a href="/tips-and-tricks/{{ $tipAndTrick->id }}/edit">Edit</a>

        <form method="post" action="/tips-and-tricks/{{ $tipAndTrick->id }}">
            @method('DELETE')
            @csrf
            <button>Delete</button>
        </form>
    </div>
</div>
@endsection 