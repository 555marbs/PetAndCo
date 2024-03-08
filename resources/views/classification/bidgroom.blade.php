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
                    <img src="/img/1.png" alt="Button 1">
                    <div class="card-body" style="height: 150px;"> 
                    <ul>
                        <li>Clean the cage daily, removing droppings and leftover food.</li>
                        <li>Deep clean the cage weekly with bird-safe cleaners.</li>
                        <li>Maintain hygiene to prevent the buildup of bacteria and parasites.
</li>
                    </ul>                  
                    </div>
                </div>
            </a>
        </div>
        <div class="project-item col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <h2 class="card-title text-center my-3">Vetrinary Care</h2>
                    <img src="/img/1.png" alt="Button 1">
                    <div class="card-body" style="height: 150px;"> 
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
                <div class="card">
                    <h2 class="card-title text-center my-3">Training and Socialization</h2>
                    <img src="/img/1.png" alt="Button 1">
                    <div class="card-body" style="height: 150px;">
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
                <div class="card">
                    <h2 class="card-title text-center my-3">Provide a Safe Environment</h2>
                    <img src="/img/1.png" alt="Button 1">
                    <div class="card-body" style="height: 150px;"> 
                    <ul>
                        <li>Make sure your home and yard are safe for your dog, free of hazards like toxic plants, chemicals, or small objects they could swallow.</li>
                        <li>Provide a comfortable and cozy sleeping area for your dog, whether it's a crate, bed, or designated spot in the house.</li>
                    </ul>          
                    </div>
                </div>
            </a>
        </div>
        <div class="project-item col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <h2 class="card-title text-center my-3">Love and Attention</h2>
                    <img src="/img/1.png" alt="Button 1">
                    <div class="card-body" style="height: 150px;">
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
