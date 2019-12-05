@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>Ideas</h1>
                </div>

                <div class="panel-body">
                       
                    <div class="row">
                        <ul><a href="/ideas/create">Add new Idea</a></ul>
                    </div>
                    <div>
                        @forelse($ideas as $idea)
                         Name:
                        <p><strong>
                            <a href="/ideas/{{ $idea->id }}">{{ $idea->title }}</a>
                        </strong></p>
                        Subject:
                        <p><strong>
                            {{ $idea->subject }}
                        </strong></p>
                        description
                        <p><strong>
                            {{ $idea->description }}
                        </strong></p>
                        <p>---------------------------------------------------------------------------------------------------------</p>
                        @empty
                            <p>No Ideas to show</p>
                        @endforelse
                    </div>
                </div>
            </div>   
        </div>
    </div>
</div>
@endsection