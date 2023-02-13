@extends('layouts.main-layout')

@section('content')
    
    <div class="lettering">

        <img class="gothic" src="https://www.digitalscrapbook.com/sites/default/files/styles/456_scale/public/s3fs-user-content/graphic-image/user-2/node-91979/medieval-letters-3-p-graphic-template-element-alpha-letter-monogram-black.png" alt="">
        <span>osts</span>
    </div>

    <ul>
        @foreach ($posts as $post)
            <li>
                <div class="card mb-3">
                    <div class="mx-3">

                        <h3>{{ $post -> title }}</h3>            
                        <div>{{ $post -> body }}</div>
                        <div class="author mini d-flex mt-2 justify-content-end align-items-center">

                            <img class="avatar" src="https://picsum.photos/100/100" alt="">
                            <h5 class="mt-3 mx-2">{{ $post -> person -> name }}</h5>
                        </div>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>

@endsection