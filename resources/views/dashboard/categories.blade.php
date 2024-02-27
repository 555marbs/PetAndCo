@extends('layouts.app')

@extends('navbars.dashboard-navbar')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/categories.css')}}">
@endsection

@section('content')
    <div class="container">
        <div class="button">
        <a href="{{ route('dog') }}" class="card-link">

            <img src="/img/1.png" alt="DOG">
        </div>

        <div class="button">
        <a href="{{ route('cat') }}" class="card-link">

            <img src="/img/2.png" alt="Button Image">
        </div>

        <div class="button">
        <a href="{{ route('bird') }}" class="card-link">

            <img src="/img/3.png" alt="Button Image">
        </div>

        <div class="button">
        <a href="{{ route('fish') }}" class="card-link">

            <img src="/img/4.png" alt="Button Image">
        </div>
    @endsection
