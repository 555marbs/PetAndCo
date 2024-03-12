@extends('layouts.app')
@extends('navbars.dashboard-navbar')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/dogpetcare.css') }}"/>
@endsection   

@section('content')
<section id="projects" class="pt-5 pb-5 project-section">
    <div class="projects-header pt-5 pb-5">
        <h1 class="section-title"><span class="highlight">FISH </span>FOODS</h1>
    </div>
    <div class="project-items row">
       
        <div class="project-item col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <h2 class="card-title text-center my-3">Flakes</h2>
                    <img src="/img/flakes.png" alt="Button 1">
                    <div class="card-body" style="height: 150px;"> 
                        <p class="card-text"> Fish flakes are a staple food for many aquarium fish. They come in various formulas
                            tailored to different species' dietary needs and may contain a mixture of protein, vitamins, and minerals.</p>
                    </div>
                </div>
            </a>
        </div>
   
        
     
        <div class="project-item col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <h2 class="card-title text-center my-3">Pellets</h2>
                    <img src="/img/pellets.jpg" alt="Button 1">
                    <div class="card-body" style="height: 150px;"> 
                        <p class="card-text">Pelleted fish food is another popular option for feeding aquarium fish. These pellets often sink slowly, 
                            allowing fish at different water levels to feed. Pellets come in various sizes and formulas, including sinking pellets 
                            for bottom-dwelling fish and floating pellets for surface feeders.</p>
                    </div>
                </div>
            </a>
        </div>
     
        
        <div class="project-item col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <h2 class="card-title text-center my-3">Freeze-Dried Foods</h2>
                    <img src="/img/driedfoods.png" alt="Button 1">
                    <div class="card-body" style="height: 150px;"> 
                        <p class="card-text"> Frozen or freeze-dried foods provide a nutritious treat for aquarium fish. Common options include bloodworms, 
                            brine shrimp, and daphnia. These foods offer a natural diet similar to what fish would consume in the wild and can enhance their 
                            diet with additional protein and nutrients.
                        </p>
                    </div>
                </div>
            </a>
        </div>
    
    </div>
</section>
@endsection
