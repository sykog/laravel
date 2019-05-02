<!-- resources/views/question.blade.php -->

@extends('layouts.app')

@section('content')

    <div class="container">
    @if ($index == 5)
        <form action="{{ url('results') }}" method="POST" class="form-horizontal">
    @else
        <form action="{{ url('q'. ($index + 1))}}" method="POST" class="form-horizontal">
    @endif
            {{ csrf_field() }}
            <h2 class="display-4">{{$questions}}</h2>
            @for ($i = 0; $i < count($options); $i++)
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="option" value="option{{$i}}">
                    <label class="form-check-label" for="option">
                        {{$options[$i]}}
                    </label>
                </div>
            @endfor

            @if ($index < 5)
                <button type="submit" class="btn btn-dark">Continue</button>
            @else
                <button type="submit" class="btn btn-dark">See Results</button>
            @endif
        </form>
    </div>

@endsection