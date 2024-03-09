@extends('layouts.app')
@extends('navbars.dashboard-navbar')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/dogpetcare.css') }}"/>
@endsection   

@section('content')
<section id="projects" class="pt-5 pb-5 project-section">
    <div class="projects-header pt-5 pb-5">
        <h1 class="section-title"><span class="highlight">BIRD </span>GROOM</h1>
    </div>
    <div class="project-items row">
       
        <div class="project-item col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <h2 class="card-title text-center my-3">Preening</h2>
                    <img src="/img/preening.jpg" alt="Button 1">
                    <div class="card-body" style="height: 150px;"> 
                        <p class="card-text"> Birds regularly preen their feathers by using their beaks to clean, align, and smooth their feathers. 
                            They may also use their feet to scratch and clean hard-to-reach areas. Preening helps birds maintain their feathers' 
                            structure, waterproofing, and insulation properties.</p>
                    </div>
                </div>
            </a>
        </div>
   
        
     
        <div class="project-item col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <h2 class="card-title text-center my-3">Dusth Bathing</h2>
                    <img src="/img/dustbathing.jpg" alt="Button 1">
                    <div class="card-body" style="height: 150px;"> 
                        <p class="card-text"> Some birds, particularly those with powder-down feathers like cockatoos and African Grey Parrots, 
                            engage in dust bathing. They roll around in fine dust or loose substrate, such as sand or finely ground soil. Dust 
                            bathing helps birds remove excess oil and dirt from their feathers and skin.</p>
                    </div>
                </div>
            </a>
        </div>
     
        
        <div class="project-item col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <h2 class="card-title text-center my-3">Bird Bathing</h2>
                    <img src="/img/birdbathing.jpg" alt="Button 1">
                    <div class="card-body" style="height: 150px;"> 
                        <p class="card-text">Many birds enjoy bathing in water. They may splash around in shallow 
                            dishes or bird baths, flap their wings, and immerse themselves to clean their feathers 
                            thoroughly. Bathing helps birds remove debris, dust, and parasites from their plumage, 
                            keeping it clean and healthy.
                        </p>
                    </div>
                </div>
            </a>
        </div>
    
    </div>
</section>
@endsection
