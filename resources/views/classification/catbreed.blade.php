@extends('layouts.app')
@extends('navbars.dashboard-navbar')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/dogbreed.css') }}"/>
@endsection   

@section('content')
<div class="card">
    <img src="/img/doglove.jpg" alt="Button 1">
    <div class="overlay">
        <h2>Card title</h2>
    </div>
</div>

<div class="card">
    <img src="/img/doglove.jpg" alt="Button 1">
    <div class="overlay">
        <h2>Card title</h2>
    </div>
</div>

<div class="card">
    <img src="/img/doglove.jpg" alt="Button 1">
    <div class="overlay">
        <h2>Card title</h2>
    </div>
</div>

<div class="card">
    <img src="/img/doglove.jpg" alt="Button 1">
    <div class="overlay">
        <h2>Card title</h2>
    </div>
</div>

<div class="card">
    <img src="/img/doglove.jpg" alt="Button 1">
    <div class="overlay">
        <h2>Card title</h2>
    </div>
</div>

<div class="card">
    <img src="/img/doglove.jpg" alt="Button 1">
    <div class="overlay">
        <h2>Card title</h2>
    </div>
</div>

<div class="card">
    <img src="/img/doglove.jpg" alt="Button 1">
    <div class="overlay">
        <h2>Card title</h2>
    </div>
</div>

<div class="card">
    <img src="/img/doglove.jpg" alt="Button 1">
    <div class="overlay">
        <h2>Card title</h2>
    </div>
</div>

<div class="card">
    <img src="/img/doglove.jpg" alt="Button 1">
    <div class="overlay">
        <h2>Card title</h2>
    </div>
</div>

<div class="card">
    <img src="/img/doglove.jpg" alt="Button 1">
    <div class="overlay">
        <h2>Card title</h2>
    </div>
</div>

<div class="explore-more-btn-container">
    <a href="{{ route('dog') }}">
     <button class="explore-more-btn">Explore More</button>
    </a>
</div>
</section>
@endsection