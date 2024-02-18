@extends('layouts.app')

@extends('navbars.dashboard-navbar')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/dog.css')}}"/>

@endsection   

@section('content')
<div class="card-container">
    <div class= "card">
    <div class="grid-item">
    <img class="dog-image" src="/img/dog1.jpg" alt="DOG">   
        <h3> Card 1</h3>
        <p  >Lorem ipsum dolor sit 
            amet consectetur adipisicing elit. 
         </p>
        <a href="" class="btn"> Read More </a>   
    </div>
</div>

<div class= "card">
    <div class="grid-item">
    <img class="dog-image" src="/img/dog1.jpg" alt="DOG">   
        <h3> Card 1</h3>
        <p>Lorem ipsum dolor sit 
            amet consectetur adipisicing elit. </p>
        <a href="" class="btn"> Read More </a>   
    </div>
</div>

<div class= "card">
    <div class="grid-item">
    <img class="dog-image" src="/img/dog1.jpg" alt="DOG"> 
         <h3> Card </h3>  
        <p>Lorem ipsum dolor sit 
            amet consectetur adipisicing elit. </p>
        <a href="" class="btn"> Read More </a>   
    </div>
</div>


<div class= "card">
    <div class="grid-item">
    <img class="dog-image" src="/img/dog1.jpg" alt="DOG">   
       <h3> Card 3</h3>
        <p>Lorem ipsum dolor sit 
            amet consectetur adipisicing elit. </p>
        <a href="" class="btn"> Read More </a>   
    </div>
</div>  
@endsection
