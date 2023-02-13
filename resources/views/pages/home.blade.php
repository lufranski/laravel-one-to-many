@extends('layouts.main-layout')

@section('content')
    
    <h1>Top GardenGnomesBook accounts:</h1>

    <ul>
        @foreach ($people as $person) 
            <li>
                <h3>{{ $person -> name }}</h3>
                Email: {{ $person -> mail }}
                <br>
                Phone: {{ $person -> personDetail -> phone }}
                <br>
                Address: {{ $person -> personDetail -> address }}
                <br>
                @if ($person -> posts -> count() > 0)
                    <h3>Posts: {{ $person -> posts -> count() }}</h3>
                    <ul>
                        @foreach ($person -> posts as $post)
                            <li>
                                <b>{{ $post -> title}}</b>
                                <div>
                                    {{ $post -> body }}
                                </div>
                            </li>
                        @endforeach
                    </ul>
                @endif
                <hr>
            </li>
        @endforeach
        
    </ul>
@endsection