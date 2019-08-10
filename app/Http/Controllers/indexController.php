<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends baseController
{
    public function index(){
    return view('index');
    }
    public function home(){
        echo "you are logging in";
        echo "<script>setTimeout(\"location.href = '/';\",1000);</script>";
    }
    public function product(){
        return view('product_details');
    }
}
