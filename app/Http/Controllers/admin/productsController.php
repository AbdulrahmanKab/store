<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use  App\Http\Controllers\baseController;
class productsController extends baseController
{
    //
    public function create(){

    return view('admin.products.create');

    }

    public function store(){

    }
}
