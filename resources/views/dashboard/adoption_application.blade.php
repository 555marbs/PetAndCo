@extends('layouts.app')
@extends('navbars.dashboard-navbar')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/adoption-application.css') }}">
@endsection

@section('content')
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <!-- Pet Adoption Application Form -->
    <form method="POST" action="{{ route('adoption.application.submit', ['adoption' => $adoption->id]) }}">
        @csrf

        <!-- Applicant Information -->
        <h3>Applicant Information</h3>
        <input type="text" name="fullname" placeholder="Full Name" required maxlength="30">
        <input type="text" name="tel" placeholder="Phone Number or Social Media Address" required maxlength="30"> 
        <input type="text" name="address" placeholder="Complete Address" required maxlength="30">
        <!-- Add more fields as needed for address -->

        <!-- Pet Preferences -->
        <h3>Experience as a Pet Owner</h3>
        <label for="petExperience">Do you have a experience to have a pet? If Yes, elaborate it.</label>
        <textarea id="petExperience" name="exp" required maxlength="30"></textarea>

        <!-- Submit Button -->
        <button type="submit">Submit</button>
    </form>
@endsection
