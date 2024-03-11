@extends('layouts.app')
@extends('navbars.dashboard-navbar')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/dogpetcare.css') }}"/>
@endsection   

@section('content')
<section id="projects" class="pt-5 pb-5 project-section">
    <div class="projects-header pt-5 pb-5">
        <h1 class="section-title"><span class="highlight">CAT </span>GROOM</h1>
    </div>
    <div class="project-items row">
       
        <div class="project-item col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <h2 class="card-title text-center my-3">Dental hygiene</h2>
                    <img src="/img/dentalhygienecat.jpg" alt="Button 1">
                    <div class="card-body" style="height: 150px;"> 
                        <p class="card-text">Dental care is essential for your cat's overall health. Brush your cat's teeth regularly with 
                            a pet-specific toothbrush and toothpaste to prevent plaque buildup and periodontal disease. You can also provide
                            dental treats or toys designed to promote oral hygiene.</p>
                    </div>
                </div>
            </a>
        </div>
   
        
     
        <div class="project-item col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <h2 class="card-title text-center my-3">Flea and tick prevention</h2>
                    <img src="/img/fleatrick.jpg" alt="Button 1">
                    <div class="card-body" style="height: 150px;"> 
                        <p class="card-text"> Use veterinarian-recommended flea and tick prevention products to protect your cat from parasites. 
                            Regularly check your cat's fur for signs of fleas or ticks, especially after outdoor activities.</p>
                    </div>
                </div>
            </a>
        </div>
     
        
        <div class="project-item col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <h2 class="card-title text-center my-3">Eye care</h2>
                    <img src="/img/eyecarecat.jpg" alt="Button 1">
                    <div class="card-body" style="height: 150px;"> 
                        <p class="card-text">Keep your cat's eyes clean by gently wiping away any discharge with a soft, damp cloth. If you notice 
                            excessive tearing, redness, or other signs of irritation, consult your veterinarian.</p>
                    </div>
                </div>
            </a>
        </div>
    
    </div>
</section>
@endsection
