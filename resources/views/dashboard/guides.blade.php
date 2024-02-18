@extends('layouts.app')

@extends('navbars.dashboard-navbar')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/guides.css')}}">
@endsection

@section('content')
<div class="container">
    <div class="grid-item">
        <img src="/img/dog1.jpg" alt="Dog">
        <p>BRIEF DESCRIPTION:<p>
    </div>

    <div class="grid-item2">
        <img src="/img/dog1.jpg" alt="Dog">
        <p>BRIEF DESCRIPTION:<p>
    </div>

    <div class="grid-item3">
        <img src="/img/dog1.jpg" alt="Dog">
        <p>BRIEF DESCRIPTION:<p>
    </div>


    <div class="grid-item4">
        <img src="/img/dog1.jpg" alt="Dog">
        <p>BRIEF DESCRIPTION:<p>
    </div>


</div>
@endsection
