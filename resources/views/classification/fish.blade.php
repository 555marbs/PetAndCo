@extends('layouts.app')

@extends('navbars.dashboard-navbar')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/fish.css') }}"/>
@endsection   

@section('content')
<section id="projects" class="pt-5 pb-5 project-section">
    <div class="projects-header pt-5 pb-5">
    <h1 class="section-title"><span class="highlight">EXP</span>LORE <span>FI</span><span class="highlight">SH</span></h1>
    </div>
    <div class="project-items row">
        <div class="project-item col-lg-4 col-md-6 mb-4">
        <a href="{{ route('fishpet') }}" class="card-link">
                <div class="card">
                    <h2 class="card-title text-center my-3"> FISH PET CARE</h2>
                    <img src="/img/fishpetcare.jpg" alt="Button 1">
                    <div class="card-body" style="height: 200px;">
                        <p class="card-text">Proper pet care for fish involves meticulous attention to detail to ensure their 
                            well-being in their aquatic environment. Begin by selecting an appropriately sized tank with suitable 
                            filtration and heating systems to maintain optimal water quality and temperature. Regularly test water 
                            parameters and perform routine maintenance, including partial water changes and filter cleaning, to keep 
                            the environment clean and healthy.</div>
                </div>
            </a>
        </div>
        <div class="project-item col-lg-4 col-md-6 mb-4">
        <a href="{{ route('fishkind') }}" class="card-link">
                <div class="card">
                    <h2 class="card-title text-center my-3">FISH BREEDS</h2>
                    <img src="/img/fishbreeds.jpg" alt="Button 1">
                    <div class="card-body" style="height: 200px;">
                        <p class="card-text">Certainly! When it comes to fish kept as pets, there's a rich variety of 
                            species available, each offering its own unique beauty and characteristics. Goldfish, ranging from the
                             common goldfish to fancier varieties like the fantail or oranda, captivate with their vibrant colors and
                              graceful movements. Betta fish, with their striking colors and flowing fins, are popular for their beauty 
                                and relatively low maintenance.
                              </p>                   
                    </div>
                </div>
            </a>
        </div>
        <div class="project-item col-lg-4 col-md-6 mb-4">
        <a href="{{ route('fishpage') }}" class="card-link">
                <div class="card">
                    <h2 class="card-title text-center my-3">FISH FOODS</h2>
                    <img src="/img/fishheating.jpg" alt="Button 1">
                    <div class="card-body" style="height: 200px;">
                    <p class="card-text"> Fish have diverse dietary preferences depending on their species and natural habitat. Some fish, like herbivores, 
                        primarily consume plant matter such as algae and aquatic vegetation. Examples include plecos and certain cichlids. Carnivorous fish, 
                        on the other hand, primarily feed on meat, including insects, small fish, and crustaceans.  </p>                
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>
@endsection
