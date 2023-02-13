@extends('layouts.main-layout')

@section('content')
    
    <h1>Posts</h1>
    <ul>
        @foreach ($posts as $post)
            <li>
                <h3>{{ $post -> title }}</h3>            
                <div>{{ $post -> body }}</div>
                <br>
                <h4>Author</h4> 
                {{ $post -> person -> name }} - {{ $post -> person -> mail }}
                <br>
                Phone: {{ $post -> person -> personDetail -> phone }}
                <br>
                Address: {{ $post -> person -> personDetail -> address }}
            </li>
        @endforeach
    </ul>

@endsection