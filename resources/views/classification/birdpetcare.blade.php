@extends('layouts.app')

@extends('navbars.dashboard-navbar')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/dogpetcare.css') }}"/>
@endsection   

@section('content')
<section id="projects" class="pt-5 pb-5 project-section">
    <div class="projects-header pt-5 pb-5">
        <h1 class="section-title"><span class="highlight">EXP</span>LORE <span class="highlight">BIR</span><span>DS</span></h1>
    </div>
    <div class="project-items row">
        <div class="project-item col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <h2 class="card-title text-center my-3">Nutrition</h2>
                    <img src="/img/birdnutrition.jpg" alt="Button 1">
                    <div class="card-body" style="height: 150px;">
                        <ul>
                            <li>Offer a balanced diet appropriate for your bird's species.</li>
                            <li>Include seeds, pellets, fruits, vegetables, and occasional treats.</li>
                            <li>Ensure fresh water is always available.</li>
                        </ul>
                    </div>
                </div>
            </a>
        </div>
        <div class="project-item col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <h2 class="card-title text-center my-3">Clean environment</h2>
                    <img src="/img/cleanenvironmentbird.jpg" alt="Button 1">
                    <div class="card-body" style="height: 150px;">
                    <ul>
                        <li>Clean the cage daily, removing droppings and leftover food.</li>
                        <li>Deep clean the cage weekly with bird-safe cleaners.</li>
                        <li>Maintain hygiene to prevent the buildup of bacteria and parasites.</li>
                    </ul>                  
                    </div>
                </div>
            </a>
        </div>
        <div class="project-item col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <h2 class="card-title text-center my-3">Safe housing</h2>
                    <img src="/img/safehousingbird.jpg" alt="Button 1">
                    <div class="card-body" style="height: 150px;">
                    <ul>
                        <li>Provide a spacious and secure enclosure with appropriate perches.</li>
                        <li>Ensure cage bars are spaced to prevent escape or injury.</li>
                        <li>Include various perches to promote foot health and exercise.</li>
                    </ul>          
                    </div>
                </div>
            </a>
        </div>
        <div class="project-item col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <h2 class="card-title text-center my-3">Social interaction</h2>
                    <img src="/img/socialinteractionbird.jpg" alt="Button 1">
                    <div class="card-body" style="height: 150px;">
                    <ul>
                        <li>Interact with your bird daily through talking, playing, and training.</li>
                        <li>Consider getting a companion bird for socialization.</li>
                        <li>Prevent loneliness and boredom.</li>
                    </ul>               
                    </div>
                </div>
            </a>
        </div>
        <div class="project-item col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <h2 class="card-title text-center my-3">Regular vet check-ups</h2>
                    <img src="/img/regularvetcarebird.jpg" alt="Button 1">
                    <div class="card-body" style="height: 150px;">
                    <ul>
                        <li>Schedule annual check-ups with an avian veterinarian.</li>
                        <li>Monitor your bird's health and detect issues early.</li>
                        <li>Seek veterinary care promptly for any concerns.</li>

                    </ul>          
                    </div>
                </div>
            </a>
        </div>
        <div class="project-item col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <h2 class="card-title text-center my-3">Environmental enrichment</h2>
                    <img src="/img/enrvironmentalbird.jpg" alt="Button 1">
                    <div class="card-body" style="height: 150px;">
                    <ul>
                        <li>Offer toys, puzzles, and foraging opportunities.</li>
                        <li>Rotate toys regularly to keep your bird engaged.</li>
                        <li>Mimic natural behaviors for mental stimulation. </li>
                    </ul>           
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>
@endsection
