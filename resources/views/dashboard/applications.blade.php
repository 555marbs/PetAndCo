@extends('layouts.app')
@extends('navbars.dashboard-navbar')

@section('content')
<div class="container">
    <h2>Received Applications</h2>
    @php $hasApplications = false; @endphp
    @foreach($groupedApplications as $adoptionId => $applications)
        @if($applications->first() && $applications->first()->adoption)
            @php
                $adoption = $applications->first()->adoption;
                $hasApplications = true; // Set this to true as soon as we find a valid application group
            @endphp
            <h3>{{ $adoption->title }}</h3>
            @foreach($applications as $application)
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $application->user->name }}</h5>
                        <p class="card-text">{{ $application->fullname }}</p>
                        <p class="card-text">{{ $application->tel }}</p>
                        <p class="card-text">{{ $application->address }}</p>
                        <p class="card-text">{{ $application->exp }}</p>
                        <form action="{{ route('application.accept', $application->id) }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" class="btn btn-success">Accept</button>
                        </form>
                        <form action="{{ route('application.reject', $application->id) }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" class="btn btn-danger">Reject</button>
                        </form>
                    </div>
                </div>
            @endforeach
        @endif
    @endforeach

    @if(!$hasApplications)
        <h3>No Applications yet.</h3>
    @endif
</div>
@endsection

