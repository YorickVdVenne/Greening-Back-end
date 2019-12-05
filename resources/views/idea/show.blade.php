@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Idea Details</h1>

    <div>
        <a href="/ideas"> < Back</a>
    </div>

    <strong>Title</strong>
    <p>{{ $idea->title }}</p>

    <strong>Subject</strong>
    <p>{{ $idea->subject }}</p>

    <strong>Description</strong>
    <p>{{ $idea->description }}</p>

    <div>
        <a href="/ideas/{{ $idea->id }}/edit">Edit</a>

        <form method="post" action="/ideas/{{ $idea->id }}">
            @method('DELETE')
            @csrf
            <button>Delete</button>
        </form>
    </div>
</div>
@endsection 