@extends('layouts.main-layout')

@section('content')
    
    <div class="lettering">

        <span id="top">
            <em>

                top
            </em>
        </span>

        <img class="gothic" src="https://www.digitalscrapbook.com/sites/default/files/styles/456_scale/public/s3fs-user-content/graphic-image/user-2/node-91971/medieval-letters-3-g-graphic-template-element-alpha-letter-monogram-black.png" alt="">
        <span id="hometit">ardenGnomesBook</span>

        <span id="bot">
            <em>
                accounts
            </em>
        </span>
    </div>

    <ul>
        @foreach ($people as $person) 
            <li>
                <div class="card mb-3">

                    <div class="author d-flex mt-2">

                        <img class="avatar" src="https://picsum.photos/100/100" alt="">
                        <h5 class="mt-3 mx-2">{{ $person -> name }}</h5>
                    </div>
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
                </div>
                
            </li>
        @endforeach
        
    </ul>
@endsection