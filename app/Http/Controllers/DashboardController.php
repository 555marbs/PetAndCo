<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard() {
        return view('dashboard.dashboard');
    }

    public function landing() {
        return view("landing.landing");
    }
    public function dogpetcare(){
        return view("classification.dogpetcare"); //ditopapalitan and pati sa web.php
    }
    public function dogbreed(){
        return view("classification.dogbreed"); //classification name ng folder na pinaglagyan  tapos filename ex dogbreed
    }
    public function dogroom(){
        return view("classification.dogroom");
    }
    public function catpetcare(){
        return view("classification.catpetcare");
    } 
    public function catbreed(){
        return view("classification.catbreed");
    }
    public function catgroom(){
        return view("classification.catgroom");
    }
    public function birdpetcare(){
        return view("classification.birdpetcare");
    }
    public function birdbreed(){
        return view("classification.birdbreed");
    }
    public function birdgroom(){
        return view("classification.bidgroom");
    }
    public function fishpet(){
        return view("classification.fishpet");
    }
    public function fishkind(){
        return view("classification.fishkind");
    }
    public function fishpage(){
        return view("classification.fishpage");
    }
}
