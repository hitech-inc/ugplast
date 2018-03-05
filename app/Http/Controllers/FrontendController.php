<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Sliders;
use App\Models\Services;
use App\Models\Blocks;
use App\Models\Advantages;

class FrontendController extends Controller
{
    //get index page
    public function index()
    {
    	$pages = Page::where('url', '/')->get();
    	$pAbout = Page::where('url', '/about')->get();
    	$sliders = Sliders::get();
    	$services = Services::get()->take(4);
    	$blocks = Blocks::get();
    	$advantages = Advantages::get();
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
