@extends('layouts.app')

@extends('navbars.dashboard-navbar')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/dog.css') }}"/>
@endsection   

@section('content')
<section id="projects" class="pt-5 pb-5 project-section">
    <div class="projects-header pt-5 pb-5">
        <h1 class="section-title"><span class="highlight">EXP</span>LORE <span class="highlight">DO</span><span>GS</span></h1>
    </div>
    <div class="project-items row">
        <div class="project-item col-lg-4 col-md-6 mb-4">
        <a href="{{ route('dogpetcare') }}" class="card-link">
                <div class="card">
                    <h2 class="card-title text-center my-3">PET CARE</h2>
                    <img src="/img/1.png" alt="Button 1">
                    <div class="card-body" style="height: 150px;">
                        <p class="card-text">Pet Care is essential for maintaining the health and well-being of your furry friend. From regular grooming to proper 
                            nutrition and exercise, it's important to provide your pet with the care they need to thrive. Whether it's scheduling vet appointments, 
                            keeping up with vaccinations, or simply spending quality time together.</div>
                </div>
            </a>
        </div>
        <div class="project-item col-lg-4 col-md-6 mb-4">
        <a href="{{ route('dogbreed') }}" class="card-link">
                <div class="card">
                    <h2 class="card-title text-center my-3">DOG BREEDS</h2>
                    <img src="/img/1.png" alt="Button 1">
                    <div class="card-body" style="height: 150px;">
                        <p class="card-text">Explore the fascinating world of dog breeds! From small and fluffy to large and majestic, there's a wide variety of breeds 
                            to learn about and admire. Whether you're interested in their history, temperament, or unique characteristics, discovering different dog breeds 
                            can be both educational and entertaining. Whether you're looking for a loyal companion, a family pet.</p>                   
                    </div>
                </div>
            </a>
        </div>
        <div class="project-item col-lg-4 col-md-6 mb-4">
            <a href="dogroom" class="card-link">
                <div class="card">
                    <h2 class="card-title text-center my-3">DOG GROOMING</h2>
                    <img src="/img/1.png" alt="Button 1">
                    <div class="card-body" style="height: 150px;">
                    <p class="card-text">Regular grooming is essential for keeping your dog healthy and happy. From brushing their coat to trimming their nails 
                        and cleaning their ears, grooming helps maintain your dog's physical well-being and enhances their overall appearance. It's also an excellent 
                        opportunity to bond with your pet and detect any health issues early on.</p>                
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>
@endsection
