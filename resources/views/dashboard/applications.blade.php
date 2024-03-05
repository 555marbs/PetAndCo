@extends('layouts.app')
@extends('navbars.dashboard-navbar')

@section('content')
<div class="container">
    <h2>Received Applications for "{{ $adoption->title }}"</h2>
    @foreach($adoption->applications as $application)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $application->user->name }}</h5>
                <p class="card-text">{{ $application->fullname }}</p>
                <p class="card-text">{{ $application->tel }}</p>
                <p class="card-text">{{ $application->address }}</p>
                <p class="card-text">{{ $application->exp }}</p>
                <form action="{{ route('adoption.application.accept', $application->id) }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" class="btn btn-success">Accept</button>
                </form>
                <form action="{{ route('adoption.application.reject', $application->id) }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" class="btn btn-danger">Reject</button>
                </form>
            </div>
        </div>
    @endforeach
</div>
@endsection
