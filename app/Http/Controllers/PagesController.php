<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function aboutPage(){
        return view('pages.about');
    }

    public function teamPage(){
        return view('pages.team');
    }

    public function testimonialsPage(){
        return view('pages.testimonials');
    }

    public function servicesPage(){
        return view('pages.services');
    }

    public function portfolioPage(){
        return view('pages.portfolio');
    }

    public function pricingPage(){
        return view('pages.pricing');
    }

    public function blogPage(){
        return view('pages.blog');
    }

    public function contactPage(){
        return view('pages.contact');
    }
}
