<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sliders;

class MainController extends Controller
{
    //
    public function __construct(Sliders $modelSlider)
	{
		
		$sliders = $modelSlider->getSliders();
		$this->data = [];
		dd($sliders);
	}
}
