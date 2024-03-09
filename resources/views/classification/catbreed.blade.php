@extends('layouts.app')
@extends('navbars.dashboard-navbar')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/dogbreed.css') }}"/>
@endsection   

@section('content')
<div class="card">
    <img src="/img/ragdoll.jpg" alt="Button 1">
    <div class="overlay">
        <h2>Ragdoll</h2>
    </div>
</div>

<div class="card">
    <img src="/img/scottishfold.jpg" alt="Button 1">
    <div class="overlay">
        <h2>Scottish Fold</h2>
    </div>
</div>

<div class="card">
    <img src="/img/britishshortcair.jpg" alt="Button 1">
    <div class="overlay">
        <h2>British Shorthair</h2>
    </div>
</div>

<div class="card">
    <img src="/img/russianblue.jpg" alt="Button 1">
    <div class="overlay">
        <h2>Russian Blue</h2>
    </div>
</div>

<div class="card">
    <img src="/img/americanshorthair.jpg" alt="Button 1">
    <div class="overlay">
        <h2>American Shorthair</h2>
    </div>
</div>

<div class="card">
    <img src="/img/turkishangora.jpg" alt="Button 1">
    <div class="overlay">
        <h2>Turkish Angora</h2>
    </div>
</div>

<div class="card">
    <img src="/img/exoticshorthair.jpeg" alt="Button 1">
    <div class="overlay">
        <h2>Exotic Shorthair</h2>
    </div>
</div>

<div class="card">
    <img src="/img/chartreux.jpg" alt="Button 1">
    <div class="overlay">
        <h2>Chartreux</h2>
    </div>
</div>

<div class="card">
    <img src="/img/cornishrex.jpg" alt="Button 1">
    <div class="overlay">
        <h2>Cornish Rex</h2>
    </div>
</div>

<div class="card">
    <img src="/img/havanese.jpg" alt="Button 1">
    <div class="overlay">
        <h2>Burmese</h2>
    </div>
</div>

<!-- <div class="explore-more-btn-container">
    <a href="{{ route('dog') }}">
        <button class="explore-more-btn">Explore More</button>
    </a>
</div> -->
</section>
@endsection