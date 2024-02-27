@extends('layouts.app')
@extends('navbars.dashboard-navbar')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/dogpetcare.css') }}"/>
@endsection   

@section('content')
<section id="projects" class="pt-5 pb-5 project-section">
    <div class="projects-header pt-5 pb-5">
        <h1 class="section-title"><span class="highlight">DOG </span>CARE</h1>
    </div>
    <div class="project-items row">
        <!-- Card Code Starts Here -->
        <div class="project-item col-lg-4 col-md-6 mb-4">
            <a href="{{ route('dogpetcare') }}" class="card-link">
                <div class="card">
                    <h2 class="card-title text-center my-3">PET CARE</h2>
                    <img src="/img/dogpet.jpg" alt="Button 1">
                    <div class="card-body" style="height: 150px;"> 
                        <p class="card-text">Pet Care is essential for maintaining the health and well-being of your furry friend. From regular grooming to proper 
                            nutrition and exercise, it's important to provide your pet with the care they need to thrive. Whether it's scheduling vet appointments, 
                            keeping up with vaccinations, or simply spending quality time together.</p>
                    </div>
                </div>
            </a>
        </div>
        <!-- Card Code Ends Here -->
        
        <!-- Duplicate Card Code Starts Here -->
        <div class="project-item col-lg-4 col-md-6 mb-4">
            <a href="{{ route('dogpetcare') }}" class="card-link">
                <div class="card">
                    <h2 class="card-title text-center my-3">PET CARE</h2>
                    <img src="/img/dogpet.jpg" alt="Button 1">
                    <div class="card-body" style="height: 150px;"> 
                        <p class="card-text">Pet Care is essential for maintaining the health and well-being of your furry friend. From regular grooming to proper 
                            nutrition and exercise, it's important to provide your pet with the care they need to thrive. Whether it's scheduling vet appointments, 
                            keeping up with vaccinations, or simply spending quality time together.</p>
                    </div>
                </div>
            </a>
        </div>
        <!-- Duplicate Card Code Ends Here -->
        
        <!-- Duplicate Card Code Starts Here -->
        <div class="project-item col-lg-4 col-md-6 mb-4">
            <a href="{{ route('dogpetcare') }}" class="card-link">
                <div class="card">
                    <h2 class="card-title text-center my-3">PET CARE</h2>
                    <img src="/img/dogpet.jpg" alt="Button 1">
                    <div class="card-body" style="height: 150px;"> 
                        <p class="card-text">Pet Care is essential for maintaining the health and well-being of your furry friend. From regular grooming to proper 
                            nutrition and exercise, it's important to provide your pet with the care they need to thrive. Whether it's scheduling vet appointments, 
                            keeping up with vaccinations, or simply spending quality time together.</p>
                    </div>
                </div>
            </a>
        </div>
        <!-- Duplicate Card Code Ends Here -->
        
    </div>
</section>
@endsection
