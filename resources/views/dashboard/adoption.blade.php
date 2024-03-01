@extends('layouts.app')

@extends('navbars.dashboard-navbar')

@section('content')
<div class="container">
    <div>
        @foreach($adoptions as $adoption)
            <div>
                <img src="{{ asset('/' . $adoption->image) }}" alt="{{ $adoption->title }}">
                <h2>{{ $adoption->title }}</h2>
                <h3>{{ $adoption->contact}}</h3>
                <p>{{ $adoption->content }}</p>

                <!-- Adopt button -->
                <a href="{{ url('/adopt/' . $adoption->id) }}" class="btn btn-primary">Adopt</a>
            </div>
        @endforeach
    </div>
</div>
@endsection
