@extends('layouts.app')

@extends('navbars.dashboard-navbar')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/dogpetcare.css') }}"/>
@endsection   

@section('content')
<section id="projects" class="pt-5 pb-5 project-section">
    <div class="projects-header pt-5 pb-5">
        <h1 class="section-title"><span class="highlight">EXP</span>LORE <span class="highlight">FI</span><span>SH</span></h1>
    </div>
    <div class="project-items row">
        <div class="project-item col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <h2 class="card-title text-center my-3">Tank Setup</h2>
                    <img src="/img/tanksetup.jpg" alt="Button 1">
                    <div class="card-body" style="height: 150px;"> <!-- Fixed height applied -->
                        <ul>
                            <li>Choose an appropriate tank size and shape for the type and number of fish.</li>
                            <li>Set up a filtration system to maintain water quality.</li>
                            <li>Use a heater and thermometer to keep the water temperature stable.</li>
                            <li>Add decorations and hiding spots to provide enrichment for the fish.</li>

                        </ul>
                    </div>
                </div>
            </a>
        </div>
        <div class="project-item col-lg-4 col-md-6 mb-4">
        <a href="{{ route('dogbreed') }}" class="card-link">
                <div class="card">
                    <h2 class="card-title text-center my-3">Lighting</h2>
                    <img src="/img/lighting.jpg" alt="Button 1">
                    <div class="card-body" style="height: 150px;"> <!-- Fixed height applied -->
                    <ul>
                        <li>Provide appropriate lighting for the fish and plants in the tank.</li>
                        <li>Maintain a consistent lighting schedule to mimic natural day-night cycles.</li>
                        <li>Avoid excessive light exposure, as it can promote algae growth and stress fish.</li>
                    </ul>                  
                    </div>
                </div>
            </a>
        </div>
        <div class="project-item col-lg-4 col-md-6 mb-4">
            <a href="dogroom" class="card-link">
                <div class="card">
                    <h2 class="card-title text-center my-3">Aquascaping</h2>
                    <img src="/img/aquascaping.jpg" alt="Button 1">
                    <div class="card-body" style="height: 150px;"> <!-- Fixed height applied -->
                    <ul>
                        <li>Use live plants to help maintain water quality and provide natural hiding spots.</li>
                        <li>Consider the aesthetic appeal of the tank layout, taking into account fish behavior and swimming patterns.</li>
                        <li>Regularly trim and maintain plants to prevent overcrowding and algae growth.</li>
                    </ul>          
                    </div>
                </div>
            </a>
        </div>
        <div class="project-item col-lg-4 col-md-6 mb-4">
            <a href="dogroom" class="card-link">
                <div class="card">
                    <h2 class="card-title text-center my-3">Feeding</h2>
                    <img src="/img/feedingfish.jpg" alt="Button 1">
                    <div class="card-body" style="height: 150px;"> <!-- Fixed height applied -->
                    <ul>
                        <li>Offer a varied diet suitable for the species of fish.</li>
                        <li>Feed small amounts multiple times a day, only what the fish can consume in a few minutes.</li>
                        <li>Provide adequate space and territories for each fish to reduce aggression.</li>
                    </ul>               
                    </div>
                </div>
            </a>
        </div>
        <div class="project-item col-lg-4 col-md-6 mb-4">
            <a href="dogroom" class="card-link">
                <div class="card">
                    <h2 class="card-title text-center my-3">Compatibility</h2>
                    <img src="/img/compatability.png" alt="Button 1">
                    <div class="card-body" style="height: 150px;"> <!-- Fixed height applied -->
                    <ul>
                        <li>Research fish species to ensure compatibility in terms of behavior, size, and water parameters.</li>
                        <li>Avoid mixing aggressive and peaceful species in the same tank.</li>
                    </ul>          
                    </div>
                </div>
            </a>
        </div>
        <div class="project-item col-lg-4 col-md-6 mb-4">
            <a href="dogroom" class="card-link">
                <div class="card">
                    <h2 class="card-title text-center my-3">Education</h2>
                    <img src="/img/education.jpg" alt="Button 1">
                    <div class="card-body" style="height: 150px;"> <!-- Fixed height applied -->
                    <ul>
                        <li>Continuously educate yourself about the specific needs of your fish species.</li>
                        <li>Stay informed about advancements in aquarium care and husbandry practices.</li>
                        <li>Join online forums or local fishkeeping clubs to connect with other enthusiasts and share knowledge.</li>
                    </ul>           
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>
@endsection
