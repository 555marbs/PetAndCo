@extends('layouts.app')

@extends('navbars.dashboard-navbar')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/guides.css')}}">
@endsection

@section('content')
<div class="container">
    <div class="animal-item">
        <img src="/img/dog1.jpg" alt="Dog">
        <div class="description">BRIEF DESCRIPTION:</div>
    </div>
    <div class="animal-item">
        <img src="/img/dog1.jpg" alt="Cat">
        <div class="description">BRIEF DESCRIPTION:</div>
    </div>
    <div class="animal-item">
        <img src="/img/dog1.jpg" alt="Rabbit">
        <div class="description">BRIEF DESCRIPTION:</div>
    </div>
    <div class="animal-item">
        <img src="/img/dog1.jpg" alt="Parrot">
        <div class="description">BRIEF DESCRIPTION:</div>
    </div>
</div>
@endsection
