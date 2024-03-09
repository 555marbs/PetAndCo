@extends('layouts.app')

@extends('navbars.dashboard-navbar')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/dogpetcare.css') }}"/>
@endsection   

@section('content')
<section id="projects" class="pt-5 pb-5 project-section">
    <div class="projects-header pt-5 pb-5">
        <h1 class="section-title"><span class="highlight">EXP</span>LORE <span class="highlight">DO</span><span>GS</span></h1>
    </div>
    <div class="project-items row">
        <div class="project-item col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <h2 class="card-title text-center my-3">Provide Proper Nutrition</h2>
                    <img src="/img/dognutrition.jpg" alt="Button 1">
                    <div class="card-body" style="height: 200px;">
                        <ul>
                            <li>Feed your dog a balanced diet suitable for their age, size, and activity level.</li>
                            <li>Provide fresh water at all times.</li>
                            <li>Avoid feeding them human food, especially those that are toxic to dogs like chocolate, onions, grapes, etc.</li>
                        </ul>
                    </div>
                </div>
            </a>
        </div>
        <div class="project-item col-lg-4 col-md-6 mb-4">
        <a href="{{ route('dogbreed') }}" class="card-link">
                <div class="card">
                    <h2 class="card-title text-center my-3">Regular Excercise</h2>
                    <img src="/img/dogexcercise.jpg" alt="Button 1">
                    <div class="card-body" style="height: 200px;">
                    <ul>
                        <li>Take your dog for daily walks or play sessions to keep them physically active and mentally stimulated.</li>
                        <li>Provide fresh water at all times.</li>
                        <li>Avoid feeding them human food, especially those that are toxic to dogs like chocolate, onions, grapes, etc.</li>
                    </ul>                  
                    </div>
                </div>
            </a>
        </div>
        <div class="project-item col-lg-4 col-md-6 mb-4">
            <a href="dogroom" class="card-link">
                <div class="card">
                    <h2 class="card-title text-center my-3">Vetrinary Care</h2>
                    <img src="/img/doglove.jpg" alt="Button 1">
                    <div class="card-body" style="height:  200px;">
                    <ul>
                        <li>Schedule regular check-ups with a veterinarian to monitor your dog's health and vaccinations.</li>
                        <li>Follow the vet's recommendations for preventive care such as vaccinations, flea and tick control, and heartworm prevention.</li>
                        <li>Address any health concerns promptly and seek veterinary attention when needed.</li>
                    </ul>          
                    </div>
                </div>
            </a>
        </div>
        <div class="project-item col-lg-4 col-md-6 mb-4">
            <a href="dogroom" class="card-link">
                <div class="card">
                    <h2 class="card-title text-center my-3">Training and Socialization</h2>
                    <img src="/img/dogtraining.jpg" alt="Button 1">
                    <div class="card-body" style="height:  200px;">
                    <ul>
                        <li>Teach basic obedience commands like sit, stay, come, and leash manners.</li>
                        <li>Socialize your dog with other dogs and people to prevent behavior problems like aggression or fearfulness.</li>
                        <li>Use positive reinforcement techniques such as treats and praise to encourage good behavior.</li>
                    </ul>               
                    </div>
                </div>
            </a>
        </div>
        <div class="project-item col-lg-4 col-md-6 mb-4">
            <a href="dogroom" class="card-link">
                <div class="card">
                    <h2 class="card-title text-center my-3">Provide a Safe Environment</h2>
                    <img src="/img/dogenvirment.jpg" alt="Button 1">
                    <div class="card-body" style="height:  200px;"> <!-- Fixed height applied -->
                    <ul>
                        <li>Make sure your home and yard are safe for your dog, free of hazards like toxic plants, chemicals, or small objects they could swallow.</li>
                        <li>Provide a comfortable and cozy sleeping area for your dog, whether it's a crate, bed, or designated spot in the house.</li>
                    </ul>          
                    </div>
                </div>
            </a>
        </div>
        <div class="project-item col-lg-4 col-md-6 mb-4">
            <a href="dogroom" class="card-link">
                <div class="card">
                    <h2 class="card-title text-center my-3">Love and Attention</h2>
                    <img src="/img/dogpet.jpg" alt="Button 1">
                    <div class="card-body" style="height:  200px;"> <!-- Fixed height applied -->
                    <ul>
                        <li>Spend quality time with your dog, offering affection, attention, and companionship.</li>
                        <li>Recognize and respond to your dog's needs, whether it's for play, exercise, or rest.</li>
                        <li>Be patient and understanding, especially during training or times of adjustment.</li>
                    </ul>           
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>
@endsection
