<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\sliders;
use App\Models\services;
use App\Models\Blocks;
use App\Models\advantages;
use App\Models\Product;
use App\Models\news;

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

    public function productions()
    {
    	$productions = Product::get();
    	//dd($productions);
    	return view('frontend.productions', compact('productions'));
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

    public function news()
    {

    	$news = news::get();
    	//$sidebarNews = news::getnews();
    	//dd($gNews);
    	return view('frontend.all-news', compact('news', 'sidebarNews'));
    }
}
