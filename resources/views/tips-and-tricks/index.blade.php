@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>Tips & Tricks</h1>
                </div>

                <div class="panel-body">
                       
                    <div class="row">
                        <ul><a href="/tips-and-tricks/create">Add new Tip or Trick</a></ul>
                    </div>
                    <div>
                        @forelse($tipsAndTricks as $tipAndTrick)
                         Name:
                        <p><strong>
                            <a href="/tips-and-tricks/{{ $tipAndTrick->id }}">{{ $tipAndTrick->title }}</a>
                        </strong></p>
                        Subject:
                        <p><strong>
                            {{ $tipAndTrick->subject }}
                        </strong></p>
                        description
                        <p><strong>
                            {{ $tipAndTrick->description }}
                        </strong></p>
                        <p>---------------------------------------------------------------------------------------------------------</p>
                        @empty
                            <p>No Tips & Tricks to show</p>
                        @endforelse
                    </div>
                </div>
            </div>   
        </div>
    </div>
</div>
@endsection