@extends('layouts.master')

@section('content')
    <h1>Register</h1>

    <form action="{{ url('/register') }}" method="post">

        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" aria-describedby="" placeholder="Ex: John Doe" required>
            {{-- <small id="" class="form-text text-muted">Your Full Name</small> --}}
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="" placeholder="Ex: john@doe.com" required>          
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="********" required>
        </div>

        <div class="form-group">
            <label for="password_confirmation">Password Confirmation</label>
            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="********" required>
        </div>

        <div class="form-group">
            <input name="register" id="register" class="btn btn-primary" type="submit" value="Register">
        </div>

    </form>

    @include('partials.errors')
@endsection

@section('js')
    
@endsection