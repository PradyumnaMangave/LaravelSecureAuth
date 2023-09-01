@extends('layout')
@section('title', "Home Page")
@section('content')
    @auth
   <div class="container">
        <h1>Welcome to Our App</h1>
    </div>

    <style>
        .container {
            height: 200px;
            text-align: center;

        }
    </style>
    @endauth
@endsection
