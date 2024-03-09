@extends('layouts.app')
@extends('navbars.dashboard-navbar')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/dogbreed.css') }}"/>
@endsection   

@section('content')
<div class="card">
    <img src="/img/budgeriar.jpg" alt="Button 1">
    <div class="overlay">
        <h2>Budgerigar</h2>
    </div>
</div>

<div class="card">
    <img src="/img/cockatiel.jpg" alt="Button 1">
    <div class="overlay">
        <h2>Cockatiel</h2>
    </div>
</div>

<div class="card">
    <img src="/img/lovebird.jpg" alt="Button 1">
    <div class="overlay">
        <h2>Lovebird</h2>
    </div>
</div>

<div class="card">
    <img src="/img/canary.jpg" alt="Button 1">
    <div class="overlay">
        <h2>Canary</h2>
    </div>
</div>

<div class="card">
    <img src="/img/finch.jpg" alt="Button 1">
    <div class="overlay">
        <h2>Finch</h2>
    </div>
</div>

<div class="card">
    <img src="/img/arrotlet.jpg" alt="Button 1">
    <div class="overlay">
        <h2>Parrotlet</h2>
    </div>
</div>

<div class="card">
    <img src="/img/quakerparrot.jpg" alt="Button 1">
    <div class="overlay">
        <h2>Quaker Parrot </h2>
    </div>
</div>

<div class="card">
    <img src="/img/senegalparrot.jpg" alt="Button 1">
    <div class="overlay">
        <h2>Senegal Parrot</h2>
    </div>
</div>

<div class="card">
    <img src="/img/cockatoo.jpg" alt="Button 1">
    <div class="overlay">
        <h2>Cockatoo</h2>
    </div>
</div>

<div class="card">
    <img src="/img/conure.jpg" alt="Button 1">
    <div class="overlay">
        <h2>Conure</h2>
    </div>
</div>

<!-- <div class="explore-more-btn-container">
    <a href="{{ route('dog') }}">
        <button class="explore-more-btn">Explore More</button>
    </a>
</div> -->
</section>
@endsection