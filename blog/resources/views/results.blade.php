<!-- resources/views/home.blade.php -->

@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">{{$bread[0]}}</h1>
            <img src="{{$bread[1]}}", alt="{{$bread[0]}}">
            <p class="lead">{{$bread[2]}}</p>
            <a class="btn btn-secondary btn-xl" href="q1" role="button">Try Again!</a>
        </div>
    </div>

@endsection