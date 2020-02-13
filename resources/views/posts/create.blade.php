@extends('layouts.master')

@section('content')
    <h1>Publish a Post</h1>
    <hr>

    <form method="POST" action="{{ url('post') }}">
    @csrf
        @include('posts.form')
    </form>

@endsection

@section('js')
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        var body = document.getElementById("body");
        CKEDITOR.replace(body,{
            language:'en-gb'
        });
        CKEDITOR.config.allowedContent = true;
    </script>
@endsection