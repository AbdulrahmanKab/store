<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\slider;
use App\main_category;
class indexController extends baseController
{
    public function index(){


        $slider = new slider();
        $slider = $slider->where('status','=',1)->get();
    return view('index',compact('slider'));
    }
    public function home(){
        echo "you are logging in";
        echo "<script>setTimeout(\"location.href = '/';\",1000);</script>";
    }

}
