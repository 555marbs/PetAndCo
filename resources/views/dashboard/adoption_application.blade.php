@extends('layouts.app')
@extends('navbars.dashboard-navbar')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/adoption-application.css')}}">
@endsection

@section('content')
    <!-- Pet Adoption Application Form -->
    <form id="adoptionForm">

        <!-- Applicant Information -->
        <h3>Applicant Information</h3>
        <input type="text" placeholder="Full Name" required>
        <input type="number" placeholder="Age" required>
        <input type="email" placeholder="Email Address" required>
        <input type="tel" placeholder="Phone Number" required>
        <input type="text" placeholder="Complete Address" required>
        <!-- Add more fields as needed for address -->

        <!-- Pet Preferences -->
        <h3>Pet Preferences</h3>
        <label for="petType">Type of pet you're interested in adopting:</label>
        <input type="text" id="petType" required>
        <!-- Add more input fields as needed for pet preference-related questions -->

        <!-- Experience with Pets -->
        <h3>Experience with Pets</h3>
        <label for="previousPets">Have you owned pets before?</label>
        <select id="previousPets" required>
            <option value="">Select</option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select>
        <!-- Add more input fields as needed for experience-related questions -->

        <!-- Submit Button -->
        <button type="submit">Submit</button>

    </form>
@endsection

