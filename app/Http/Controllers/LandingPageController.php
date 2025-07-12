<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Portfolio;
use App\Models\Category;
use App\Models\Testimoni;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('landing.index', [
            'services'     => Service::where('is_featured', true)->get(),
            'portfolios'   => Portfolio::with('category')->latest()->take(6)->get(),
            'testimonials' => Testimoni::latest()->take(3)->get(),
        ]);
    }

    public function portfolios()
    {
        return view('landing.portfolios', [
            'portfolios' => Portfolio::with('category')->paginate(9),
        ]);
    }

    public function portfolioDetail($slug)
    {
        $portfolio = Portfolio::where('slug', $slug)->with('category')->firstOrFail();
        return view('landing.portfolio-detail', compact('portfolio'));
    }

    public function services()
    {
        $categories = Category::where('is_main', true)->get();
    $services = Service::with('category')->latest()->get();

    return view('landing.services', compact('categories', 'services'));
    }

    public function serviceDetail($slug)
{
    $service = Service::where('slug', $slug)->with('category')->firstOrFail();
    return view('landing.service-detail', compact('service'));
}
}
