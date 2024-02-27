@extends('layouts.app')
@extends('navbars.dashboard-navbar')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/dogpetcare.css') }}"/>
@endsection   

@section('content')
<section id="projects" class="pt-5 pb-5 project-section">
    <div class="projects-header pt-5 pb-5">
        <h1 class="section-title"><span class="highlight">DOG </span>GROOM</h1>
    </div>
    <div class="project-items row">
        <!-- Card Code Starts Here -->
        <div class="project-item col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <h2 class="card-title text-center my-3">Brushing</h2>
                    <img src="/img/brushinghairdog.jpg" alt="Button 1">
                    <div class="card-body" style="height: 150px;"> 
                        <p class="card-text">Regular brushing helps to remove loose hair, prevent mats, and keep your dog's coat healthy. 
                            The type of brush you use depends on your dog's coat type. For example, slicker brushes are good for long-haired breeds,
                            while bristle brushes work well for shorter coats. Brush in the direction of hair growth, and be gentle, especially around
                            sensitive areas like the belly and ears.</p>
                    </div>
                </div>
            </a>
        </div>
        <!-- Card Code Ends Here -->
        
        <!-- Duplicate Card Code Starts Here -->
        <div class="project-item col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <h2 class="card-title text-center my-3">Bathing</h2>
                    <img src="/img/bathingdog.jpg" alt="Button 1">
                    <div class="card-body" style="height: 150px;"> 
                        <p class="card-text">How often you bathe your dog depends on their breed and lifestyle. Generally, most dogs benefit from a bath every 4-6 weeks. 
                            Use a dog-specific shampoo and warm water. Be sure to thoroughly rinse out all the shampoo to prevent skin irritation. Avoid getting water 
                            in your dog's ears and eyes.</p>
                    </div>
                </div>
            </a>
        </div>
        <!-- Duplicate Card Code Ends Here -->
        
        <!-- Duplicate Card Code Starts Here -->
        <div class="project-item col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <h2 class="card-title text-center my-3">Cleaning Ears</h2>
                    <img src="/img/cleaningearsdog.jpg" alt="Button 1">
                    <div class="card-body" style="height: 150px;"> 
                        <p class="card-text"> Regularly check your dog's ears for signs of infection, wax buildup, or pests. Use a damp cloth or cotton ball to 
                            gently clean the outer part of the ear. Avoid inserting anything into the ear canal, and if you notice any redness, swelling, or discharge, 
                            consult your veterinarian.</p>
                    </div>
                </div>
            </a>
        </div>
        <!-- Duplicate Card Code Ends Here -->
        
    </div>
</section>
@endsection
