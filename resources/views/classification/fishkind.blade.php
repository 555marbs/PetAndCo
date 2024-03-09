@extends('layouts.app')
@extends('navbars.dashboard-navbar')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/dogbreed.css') }}"/>
@endsection   

@section('content')
<div class="card">
    <img src="/img/bettafish.jpg" alt="Button 1">
    <div class="overlay">
        <h2>Betta Fish</h2>
    </div>
</div>

<div class="card">
    <img src="/img/goldfish.jpg" alt="Button 1">
    <div class="overlay">
        <h2>Goldfish</h2>
    </div>
</div>

<div class="card">
    <img src="/img/neonteatra.jpg" alt="Button 1">
    <div class="overlay">
        <h2>Neon Tetra</h2>
    </div>
</div>

<div class="card">
    <img src="/img/guppy.jpg" alt="Button 1">
    <div class="overlay">
        <h2>Guppy</h2>
    </div>
</div>

<div class="card">
    <img src="/img/molly.jpg" alt="Button 1">
    <div class="overlay">
        <h2>Molly</h2>
    </div>
</div>

<div class="card">
    <img src="/img/platies.jpg" alt="Button 1">
    <div class="overlay">
        <h2>Platies </h2>
    </div>
</div>

<div class="card">
    <img src="/img/cherrybarb.jpg" alt="Button 1">
    <div class="overlay">
        <h2>Cherry Barb  </h2>
    </div>
</div>

<div class="card">
    <img src="/img/swordtail.jpg" alt="Button 1">
    <div class="overlay">
        <h2>Swordtail Fish</h2>
    </div>
</div>

<div class="card">
    <img src="/img/dwarf.jpg" alt="Button 1">
    <div class="overlay">
        <h2>Dwarf Gourami </h2>
    </div>
</div>

<div class="card">
    <img src="/img/corydorascatfish.jpg" alt="Button 1">
    <div class="overlay">
        <h2>Corydoras Catfish </h2>
    </div>
</div>

<!-- <div class="explore-more-btn-container">
    <a href="{{ route('dog') }}">
        <button class="explore-more-btn">Explore More</button>
    </a>
</div> -->
</section>
@endsection