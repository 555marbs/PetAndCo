@extends('layouts.app')

@extends('navbars.dashboard-navbar')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/cat.css') }}"/>
@endsection   

@section('content')
<section id="projects" class="pt-5 pb-5 project-section">
    <div class="projects-header pt-5 pb-5">
        <h1 class="section-title"><span class="highlight">EXP</span>LORE <span class="highlight">CAT</span><span>S</span></h1>
    </div>
    <div class="project-items row">
        <div class="project-item col-lg-4 col-md-6 mb-4">
        <a href="{{ route('catpetcare') }}" class="card-link">
                <div class="card">
                    <h2 class="card-title text-center my-3">PET CARE</h2>
                    <img src="/img/catpetcare.png " alt="Button 1">
                    <div class="card-body" style="height: 280px;">
                        <p class="card-text">Proper pet care for cats encompasses several key aspects to ensure their well-being and happiness. 
                            Firstly, nutrition is crucial; feeding your cat a balanced diet formulated for their life stage and health needs is 
                            essential for their overall health. Additionally, maintaining a clean and comfortable living environment, including a 
                            litter box that is regularly cleaned.</div>
                </div>
            </a>
        </div>
        <div class="project-item col-lg-4 col-md-6 mb-4">
        <a href="{{ route('catbreed') }}" class="card-link">
                <div class="card">
                    <h2 class="card-title text-center my-3">CAT BREEDS</h2>
                    <img src="/img/catbreeds.png " alt="Button 1">
                    <div class="card-body" style="height: 280px;">
                        <p class="card-text">it's important to understand that each breed has its own unique characteristics, temperaments, and 
                            requirements. For example, some breeds, like the Maine Coon, are known for their friendly and sociable nature, while others, 
                            he Siamese, are more vocal and demanding of attention. Long-haired breeds such as the Persian require regular grooming. </p>                   
                    </div>
                </div>
            </a>
        </div>
        <div class="project-item col-lg-4 col-md-6 mb-4">
        <a href="{{ route('catgroom') }}" class="card-link">
                <div class="card">
                    <h2 class="card-title text-center my-3">CAT GROOMING</h2>
                    <img src="/img/catgrooming.png " alt="Button 1">
                    <div class="card-body" style="height: 280px;">
                    <p class="card-text">Cat grooming is an essential aspect of their care routine, contributing to their overall health and well-being. 
                        Regular grooming helps prevent matting, removes loose fur, reduces shedding, and promotes healthy skin and coat. The grooming needs 
                        of a cat can vary depending on factors such as breed, coat length, and individual characteristics.

</p>                
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>
@endsection
