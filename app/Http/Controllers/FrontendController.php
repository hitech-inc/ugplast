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
use App\Models\Category;
use App\Mail\SendMail;
use Mail;

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

    public function productions(Request $request, $id = "")
    {
      if(!$id)
      {
        $productions = Product::get();
        $categorys = Category::where('parent_id', null)->get();

        foreach($categorys as $category)
        {
          //Получаю все подкатегории
          $category->children = $category->getChildren();
        }
        //dd($category);
        return view('frontend.productions', compact('productions', 'categorys', 'subCategorys'));
      } 
      else
      {
        $category = Category::where('Slug', $id)->first(); //По Slug получаю id, т.е. запись по которой кликнули, т.е. получаем категорию по ее id.
        $products = Product::where('category_id', '=', $category->id)->get();
        //dd($category->toArray());
        return view('frontend.category', compact('products', 'category'));
      }
    }

    public function ourservices()
    {
    	$services = Services::get();
    	//dd($services);
    	return view('frontend.ourservices', compact('services'));
    }

    public function certs()
    {
        return view('frontend.certs');
    }

    public function contacts()
    {
    	return view('frontend.contacts');
    }

    public function news(Request $request, $id = "")
    {
        if ( !$id )
        {
          $news = news::get();
          $category = Category::where('Slug', $id)->first();
          //$sidebarNews = news::getnews();
          //dd($news);
          return view('frontend.all-news', compact('news', 'sidebarNews')); 
        }
        else
        {
          $mynew = news::where('Slug', $id)->first();
          //dd($mynew->toArray());
          return view('frontend.new', compact('mynew'));
        }
    	
    }

    public function management()
    {
        return view('frontend.management');
    }

    public function gallery()
    {
        return view('frontend.gallery');
    }

    public function sendmail(Request $request)
    {

        $this->validate($request, [
            'name' => 'required | max:255',
            'phone' => 'required | numeric',
            'email' => 'required | email'
        ]);

        $data = [
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email
        ];
        //dd($data);
        $success = '<div style="margin: 0 auto;">
                      <h2 style="text-align: center; color: #000; padding: 25px;">Спасибо, Ваша заявка принята!</h2>
                    </div>';

        //dd($data);
        Mail::to('yugplastuko@mail.ru')->send(new SendMail($data));

        return redirect('/contacts')->with('status', $success);
    }
}
