<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Slider;
use App\About;
use App\Value;
use App\Policy;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $values=Value::all();
      $sliders=Slider::all();
      $about=About::find(1);
      return view('welcome')->with('word',$about)->with('sliders',$sliders)->with('values',$values);
    }
    public function about()
    {
        $sliders=Slider::all();
        $about=About::find(1);
        return view('about');
    }
    public function services()
    {
        return view('services');
    }
    public function contact()
    {
        return view('contact');
    }
    public function valuingcreations()
    {
        return view('valuingcreations');
    }
    public function servicedetail($id)
    {
        return view('servicedetail');
    }
    public function saftycultures()
    {
        return view('saftycultures');
    }
    public function conductinters()
    {
        return view('conductinters');
    }
    public function policies()
    {
        $Policies=Policy::all();

        return view('policies')->with('policies',$Policies);
    }
}
