@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>Profile Page</h1>
                </div>

                <div class="panel-body">
                    <p><strong>{{ $user->name }}</strong></p>
                        

                    <p><strong>{{ $user->email }}</strong></p>
                       
                    <div>
                        
                        <a href="/profile/edit">Edit</a>
                    </div>
                </div>
            </div>   
        </div>
    </div>
</div>
@endsection