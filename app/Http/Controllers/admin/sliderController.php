<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use  App\Http\Controllers\baseController;
use App\products;
use App\slider;


class sliderController extends baseController
{
    public function index(){
        $slider = new slider();
        $slider = $slider->where('isdeleted','=',0)->get();
        return view('admin.slider.index',compact('slider'));
    }

    public function create(){
        return view('admin.slider.create');
    }
    public function store(Request $request){
        $request->validate($this->rules(),$this->messages());

        $slider = new slider();
        $slider->image =parent::uploadImage($request->file('image'));
        $slider->status =$request->input('status')== 1?1:0;
        $slider->product_name =$request->input('name');
        $slider->save();
        \Session::flash('msg',"s: slider added successfully");
        return redirect()->route("slider.add");
    }
    public function rules(){
        return['image'=>'required|mimes:png,jpg'];
    }
    public function messages(){
        return['image.mimes'=>'must be image png or jpg'];
    }
    public function edite($id){
        dd($id);
    }
    public function update(){

    }

}
