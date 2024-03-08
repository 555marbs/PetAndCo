@extends('layouts.app')

@extends('navbars.dashboard-navbar')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/dogpetcare.css') }}"/>
@endsection   

@section('content')
<section id="projects" class="pt-5 pb-5 project-section">
    <div class="projects-header pt-5 pb-5">
        <h1 class="section-title"><span class="highlight">EXP</span>LORE <span class="highlight">CAT</span><span>S</span></h1>
    </div>
    <div class="project-items row">
        <div class="project-item col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <h2 class="card-title text-center my-3">Nutrition</h2>
                    <img src="/img/catnutrition.jpg" alt="Button 1">
                    <div class="card-body" style="height: 150px;">
                        <ul>
                            <li>Provide a balanced diet suitable for your cat's age, size, and health needs.</li>
                            <li>Offer high-quality commercial cat food or a veterinarian-approved homemade diet.</li>
                            <li>Ensure fresh water is available at all times.</li>
                        </ul>
                    </div>
                </div>
            </a>
        </div>
        <div class="project-item col-lg-4 col-md-6 mb-4">
        <a href="{{ route('dogbreed') }}" class="card-link">
                <div class="card">
                    <h2 class="card-title text-center my-3">Litter Box</h2>
                    <img src="/img/litterboxcat.jpg" alt="Button 1">
                    <div class="card-body" style="height: 150px;">
                    <ul>
                        <li>Scoop the litter box daily to maintain cleanliness.</li>
                        <li>Completely change the litter regularly to prevent odors and maintain hygiene.</li>
                        <li>Provide a suitable litter box size and type for your cat's preferences.</li>
                    </ul>                  
                    </div>
                </div>
            </a>
        </div>
        <div class="project-item col-lg-4 col-md-6 mb-4">
            <a href="dogroom" class="card-link">
                <div class="card">
                    <h2 class="card-title text-center my-3">Exercise</h2>
                    <img src="/img/catexcercise.jpg" alt="Button 1">
                    <div class="card-body" style="height: 150px;">
                    <ul>
                        <li>Offer opportunities for your cat to play and be physically active.</li>
                        <li>Provide interactive toys, scratching posts, and climbing structures.</li>
                        <li>Provide interactive toys, scratching posts, and climbing structures.</li>
                    </ul>          
                    </div>
                </div>
            </a>
        </div>
        <div class="project-item col-lg-4 col-md-6 mb-4">
            <a href="dogroom" class="card-link">
                <div class="card">
                    <h2 class="card-title text-center my-3">Regular Veterinary Care</h2>
                    <img src="/img/regularvetinarycat.jpg" alt="Button 1">
                    <div class="card-body" style="height: 150px;">
                    <ul>
                        <li>Schedule routine check-ups with a veterinarian to monitor your cat's health.</li>
                        <li>Ensure your cat receives vaccinations and parasite control as recommended by your vet.</li>
                        <li>Address any dental issues promptly to maintain your cat's oral health.</li>
                    </ul>               
                    </div>
                </div>
            </a>
        </div>
        <div class="project-item col-lg-4 col-md-6 mb-4">
            <a href="dogroom" class="card-link">
                <div class="card">
                    <h2 class="card-title text-center my-3">Affection and Attention</h2>
                    <img src="/img/affectionandattention.jpg" alt="Button 1">
                    <div class="card-body" style="height: 150px;">
                    <ul>
                        <li>Spend quality time with your cat, offering affection and companionship.</li>
                        <li>Respect your cat's boundaries and provide a comfortable space for them to relax.</li>
                        <li>Ensure your cat feels loved and secure in their environment.</li>

                    </ul>          
                    </div>
                </div>
            </a>
        </div>
        <div class="project-item col-lg-4 col-md-6 mb-4">
            <a href="dogroom" class="card-link">
                <div class="card">
                    <h2 class="card-title text-center my-3">Monitoring Behavior </h2>
                    <img src="/img/monitoringbehaviorcat.jpg" alt="Button 1">
                    <div class="card-body" style="height: 150px;">
                    <ul>
                        <li>Pay attention to changes in your cat's behavior, eating habits, and activity levels.</li>
                        <li>Address any concerns promptly to ensure your cat's overall well-being.</li>
    
                    </ul>           
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>
@endsection
