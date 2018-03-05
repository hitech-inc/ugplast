<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\sliders;
use App\Models\services;
use App\Models\Blocks;
use App\Models\advantages;

class FrontendController extends Controller
{
    //get index page
    public function index()
    {
    	$pages = Page::where('url', '/')->get();
    	$pAbout = Page::where('url', '/about')->get();
    	$sliders = sliders::get();
    	$services = services::get()->take(4);
    	$blocks = Blocks::get();
    	$advantages = advantages::get();
    	//dd($pAbout);
    	return view('frontend.index', compact('pages', 'sliders', 'services', 'blocks', 'advantages', 'pAbout'));
    }

    public function about()
    {
    	$abouts = Page::where('url', '/about')->get();
    	return view('frontend.about', compact('abouts'));
    }

    public function ourservices()
    {
    	$services = Services::get();
    	//dd($services);
    	return view('frontend.ourservices', compact('services'));
    }

    public function contacts()
    {
    	return view('frontend.contacts');
    }
}
