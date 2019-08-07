<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends baseController
{
    public function index(){
    return view('index');
    }
}
