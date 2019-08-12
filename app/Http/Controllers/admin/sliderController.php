<?php

namespace App\Http\Controllers\admin;
use Illuminate\Database\Eloquent\ModelNotFoundException;
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
    public function rules($id =null){
        if ($id == null) {
            $array = ['image' => 'required|mimes:png,jpg'];
            $array['name'] = 'required|unique:slider,product_name';
        }else{
            $array = ['image' => 'required|mimes:png,jpg'];
            $array['name'] = "required|unique:slider,product_name.$id";
        }
    }
    public function messages($id =null){

        return['image.mimes'=>'must be image png or jpg','name.unique'=>'name already exist'];
    }
    public function edite($id){
        try {
            $slider = slider::findOrFail($id);
            return view('admin.slider.edite',compact("slider"));
        }catch (ModelNotFoundException $exception){
            \Session::flash('msg',"e: slider not found");
            return redirect()->route("slider.index");
        }
        }
    public function update(){

        $slider =
        $slider = new slider();
        $slider->image =parent::uploadImage($request->file('image'));
        $slider->status =$request->input('status')== 1?1:0;
        $slider->product_name =$request->input('name');
        $slider->save();
        \Session::flash('msg',"s: slider added successfully");
        return redirect()->route("slider.add");
    }

}
