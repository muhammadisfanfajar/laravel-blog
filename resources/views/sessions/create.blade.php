@extends('layouts.master')

@section('content')
    <h1>Login</h1>

    <form action="{{ url('/login') }}" method="post">

        @csrf

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="" placeholder="Ex: john@doe.com" required>          
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="********" required>
        </div>

        <div class="form-group">
            <input name="" id="" class="btn btn-primary" type="submit" value="Login">
        </div>

    </form>

    @include('partials.errors')
@endsection

@section('js')
    
@endsection