@extends('layout')

@section('title', ' Home')  

@section('content')
    <p>
        My {{ $foo }} Website
    </p>

    <ul>
        @foreach ($tasks as $task)
            <li>  {{ $task }} </li> 
        @endforeach

    </ul>

@endsection