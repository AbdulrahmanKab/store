<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class productsController extends baseController
{
    //
    public function create(){

    return view('admin.products.create');
    }
}
