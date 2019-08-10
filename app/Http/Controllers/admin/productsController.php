<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use  App\Http\Controllers\baseController;
use App\products;
use App\lang;
class productsController extends baseController
{
    //
    public function create(){

    return view('admin.products.create');

    }
    public function create_detail(){

 return view('admin.products.detail');
    }

    public function store(){


    }
    public  function detail(Request $request){
       // image name  price marka category description empty
        $request->validate($this->rules(),$this->messages());
        $products = new products();
            $name= $request->input('name');
        $products->name= $name;
        $products->image = parent::uploadImage($request->file('image'),'images/');
        $products->price =$request->input('price');
        $products->marka =$request->input('marka');
        $products->sub_categoroy_id = $request->input('category');
        $products->description =$request->input('description');
        $products->isempty =$request->input('empty')==1?1:0;
        $products->save();
        $lang =new lang();
        $lang->name =$name;
        $lang->lang ='en';
        $lang->value =$name;
        $lang->save();
        $lang1 =new lang();
        $lang1->name =$name;
        $lang1->lang ='ar';
        $lang1->value =$request->input('name_local');
        $lang1->save();
        return redirect()->route("products.add_detail",['productName'=>$name]);

    }
    public function rules(){
        return['image'=>'required|mimes:png,jpg','price'=>'required|Numeric'];
    }
    public function messages(){
        return['image.mimes'=>'must be image png or jpg','price'=>'must be number'];
    }
}
