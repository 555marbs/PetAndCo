@extends('layouts.app')

@extends('navbars.dashboard-navbar')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/bird.css') }}"/>
@endsection   

@section('content')
<section id="projects" class="pt-5 pb-5 project-section">
    <div class="projects-header pt-5 pb-5">
    <h1 class="section-title"><span class="highlight">EXP</span>LORE <span>BIR</span><span class="highlight">DS</span></h1>
    </div>
    <div class="project-items row">
        <div class="project-item col-lg-4 col-md-6 mb-4">
        <a href="{{ route('birdpetcare') }}" class="card-link">
                <div class="card">
                    <h2 class="card-title text-center my-3">PET CARE</h2>
                    <img src="/img/birdcare.png" alt="Button 1">
                    <div class="card-body" style="height: 150px;">
                        <p class="card-text">Pet care for birds involves several key aspects to ensure their health, happiness, and well-being. 
                            Firstly, providing a spacious and appropriately sized cage or aviary is crucial, allowing your bird to move around freely 
                            and stretch its wings. The cage should also be placed in a draft-free area away from direct sunlight and any potential hazards like 
                            fumes or other pets.</div>
                </div>
            </a>
        </div>
        <div class="project-item col-lg-4 col-md-6 mb-4">
        <a href="{{ route('birdbreed') }}" class="card-link">
                <div class="card">
                    <h2 class="card-title text-center my-3">BIRD BREEDS</h2>
                    <img src="/img/birdbreeds.png" alt="Button 1">
                    <div class="card-body" style="height: 150px;">
                        <p class="card-text">When considering pet birds, there's a diverse array of breeds and species to explore, 
                            each with its own unique traits and characteristics. Budgerigars, often affectionately called Budgies or Parakeets, 
                             beloved for their small size, playful antics, and remarkable ability to mimic sounds and speech. Cockatiels, with their 
                             striking crests and friendly demeanor.
                             
                              </p>                   
                    </div>
                </div>
            </a>
        </div>
        <div class="project-item col-lg-4 col-md-6 mb-4">
        <a href="{{ route('birdgroom') }}" class="card-link">
                <div class="card">
                    <h2 class="card-title text-center my-3">BIRD GROOMING</h2>
                    <img src="/img/birdgrooming.png" alt="Button 1">
                    <div class="card-body" style="height: 150px;">
                    <p class="card-text">contributing to their overall health and well-being. While birds groom themselves regularly by preening their feathers, 
                        there are several grooming tasks that bird owners should assist with to ensure their feathered friend remains healthy and comfortable.One crucial 
                        grooming task is maintaining proper feather condition. </p>                
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>
@endsection
