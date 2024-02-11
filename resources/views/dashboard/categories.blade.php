@extends('layouts.app')

@extends('navbars.dashboard-navbar')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/categories.css')}}">
@endsection

@section('content')
    <div class="container">
        <div class="button">
            <img src="/img/1.png" alt="DOG">
            <div class="dropdown">
                <!-- Dropdown content for button 1 -->
                <h4>Breeds of Dogs</h4>
                <a href="{{ route('home') }}">Chihuahua</a>
                <p>Corgi</p>
                <p>Dalmatian</p>
                <p>Golden Retriever</p>
                <p>Labrador</p>
                <p>Pit bull</p>
                <p>Poodle</p>
                <p>Pug</p>
            </div>
        </div>

        <div class="button">
            <img src="/img/2.png" alt="Button Image">
            <div class="dropdown">
                <!-- Dropdown content for button 2 -->
                <p>Dropdown Content 2</p>
                <p>Another item</p>
            </div>
        </div>

        <div class="button">
            <img src="/img/3.png" alt="Button Image">
            <div class="dropdown">
                <!-- Dropdown content for button 2 -->
                <p></p>
                <p>Another item</p>
            </div>
        </div>

        <div class="button">
            <img src="/img/4.png" alt="Button Image">
            <div class="dropdown">
                <!-- Dropdown content for button 2 -->
                <p>Dropdown Content 2</p>
                <p>Another item</p>
            </div>
        </div>
    @endsection
