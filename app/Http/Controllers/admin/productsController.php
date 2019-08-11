<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use  App\Http\Controllers\baseController;
use App\products;
use App\lang;
use App\uses;
class productsController extends baseController
{
    //
    public function create(){

    return view('admin.products.create');

    }
    public function create_detail(){

 return view('admin.products.detail');
    }

    public function store(Request $request){
    //  1 2 5 6 9 10 13 14 17 18 21 22 25 26 29 30
        // 3 4  7 8 11 12 15 16 19 20 23 24 27 28 31 32
       $id= $request->input('id');
       $s =$request->all();

        for ($i =1 ;$i<32;$i+=3){

            $uses = new uses();
        $uses->name =$s["detail$i"];
           ++$i;

            $uses->value=  $s["detail$i"];
            $uses->product_id= $id;
            $uses->save();

        }
        for ($r =1 ;$r<=32;$r++){
            if ($s["detail$r"] ==null){
                continue;
            }
            $lang = new lang();
            $lang->name =$s["detail$r"];
            $lang->lang ="en";
            $r++;
            $lang->value=  $s["detail$r"];

            $lang->save();
                ++$r;
            if ($s["detail$r"] ==null){
                continue;
            }
                $lang1 = new lang();
            $lang1->name =$s["detail$r"];
            $lang1->lang ="ar";
            ++$r;

            $lang1->value=  $s["detail$r"];

            $lang1->save();

        }
        \Session::flash("msg","s: added successfully");
        return redirect()->route("products.add");
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
