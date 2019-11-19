@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Profile Details</h1>

        <form method="post" action="/profile" >

            @method('PATCH')

            <div>
                <label for="name">Name</label>
                <input type="text" name="name" autocomplete="off" value="{{ old('name') ?? $user->name }}">
                @error('name') <p style="color: red">{{ $message }}</p> @enderror 
            </div>

            <div>
                <label for="email">Email</label>
                <input type="email" name="email" autocomplete="off" value="{{ old('email') ?? $user->email }}">
                @error('email') <p style="color: red">{{ $message }}</p> @enderror 
            </div>

            @csrf

            <button>Save Profile</button>
            
        </form>     
    </div>
@endsection