<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\slider;
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
    public function product(){
        return view('product_details');
    }
}
