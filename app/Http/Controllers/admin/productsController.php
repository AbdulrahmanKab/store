<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use  App\Http\Controllers\baseController;
use App\products;
class productsController extends baseController
{
    //
    public function create(){

    return view('admin.products.create');

    }

    public function store(){


    }
    public  function detail(Request $request){
       // image name  price marka category description empty name_local

        $products = new products();
        $products->name = $request->input('name');
        $products->image = parent::uploadImage($request->file('image'),'images/');
        $products->price =$request->input('price');
        $products->marka =$request->input('marka');
        $products->sub_categoroy_id = $request->input('category');
        $products->description =$request->input('description');
        $products->isempty =$request->input('empty')==1?1:0;
        $products->save();

    }
}
