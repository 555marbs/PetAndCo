@extends('layouts.app')

@extends('navbars.dashboard-navbar')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endsection

@section('content')
    <div class="image-container">
        <img src="/img/cat2.jpg" alt="Changing Image" class="changing-image" id="changingImage">
        <p>Lorem ipsum litora mi conubia enim nisi duis senectus <br>
            aptent arcu elit fusce sociosqu, elit curabitur porttitor<br>
            curae sodales quisque molestie conubia euismod suscipit<br>
            massa mattis. Viverra morbi orci nisl a facilisis ad porta<br>
            adipiscing, vivamus ligula nunc consectetur sagittis<br>
            placerat magna, platea <br></p>
    </div>

    <div class="button-container">
        <div class="button-grid">
            <a href="{{ route('dog') }}">
                <img src="/img/1.png" alt="Button 1">
            </a>

            <a href="{{ route('cat') }}">
                <img src="/img/2.png" alt="Button 2">
            </a>

            <a href="{{ route('bird') }}">
                <img src="/img/3.png" alt="Button 3">
            </a>

            <a href="{{ route('fish') }}">
                <img src="/img/4.png" alt="Button 4">
            </a>
        </div>
    </div>

<script src="{{ asset('js/dashboard.js') }}" @endsection
