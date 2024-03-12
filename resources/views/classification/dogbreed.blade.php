@extends('layouts.app')
@extends('navbars.dashboard-navbar')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/dogbreed.css') }}"/>
@endsection   

@section('content')
<div class="card">
    <img src="/img/kingcavalier.jpg" alt="Button 1">
    <div class="overlay">
        <h2>Cavalier King Charles Spaniel</h2>
    </div>
</div>

<div class="card">
    <img src="/img/bichonfrise.jpg" alt="Button 1">
    <div class="overlay">
        <h2>Bichon Frise</h2>
    </div>
</div>

<div class="card">
    <img src="/img/maltese.jpeg" alt="Button 1">
    <div class="overlay">
        <h2>Maltese</h2>
    </div>
</div>

<div class="card">
    <img src="/img/shihtzu.jpg" alt="Button 1">
    <div class="overlay">
        <h2>Shih Tzu</h2>
    </div>
</div>

<div class="card">
    <img src="/img/pug.jpg" alt="Button 1">
    <div class="overlay">
        <h2>Pug</h2>
    </div>
</div>

<div class="card">
    <img src="/img/frenchbulldog.jpg" alt="Button 1">
    <div class="overlay">
        <h2>French Bulldog</h2>
    </div>
</div>

<div class="card">
    <img src="/img/bostonterrier.jpg" alt="Button 1">
    <div class="overlay">
        <h2>Boston Terrier</h2>
    </div>
</div>

<div class="card">
    <img src="/img/cockerspaniel.jpeg" alt="Button 1">
    <div class="overlay">
        <h2>Cocker Spaniel</h2>
    </div>
</div>

<div class="card">
    <img src="/img/miniatureschnauzer.jpg" alt="Button 1">
    <div class="overlay">
        <h2>Miniature Schnauzer</h2>
    </div>
</div>

<div class="card">
    <img src="/img/havanese.jpg" alt="Button 1">
    <div class="overlay">
        <h2>Havanese</h2>
    </div>
</div>

<!-- <div class="explore-more-btn-container">
    <a href="{{ route('dog') }}">
        <button class="explore-more-btn">Explore More</button>
    </a>
</div> -->
</section>
@endsection