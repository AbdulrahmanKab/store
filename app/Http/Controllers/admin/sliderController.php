<?php

namespace App\Http\Controllers\admin;
use Faker\Provider\File;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use  App\Http\Controllers\baseController;
use App\products;
use App\slider;
use Session;

class sliderController extends baseController
{
    public function index(Request $request){
        $slider = new slider();
        $slider = $slider->where('isdeleted','=',0);
        if ($request->input('search_name') !=null ){
            $slider = $slider->where('product_name','=',$request->input('search_name'));
        }
       if ($request->input('active') != null && $request->input('active') != "-1" ){
            $slider = $slider->where('status','=',$request->input('active'));
        }
       $slider = $slider->paginate(20)->appends(['search_name'=>$request->input('search_name'),'acitve'=>$request->input("active")]);
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
        $slider->main_title =$request->input('main');
        $slider->description =$request->input('description');
        $slider->save();
        \Session::flash('msg',"s: slider added successfully");
        return redirect()->route("slider.add");
    }
    public function rules($id =null){
        if ($id == null) {

            $array['name'] = 'required|unique:slider,product_name';
        }else{

            $array['name'] = "required|unique:slider,product_name,$id";
        }
        return $array;
    }
    public function messages($id =null){

        return['name.unique'=>'name already exist'];
    }
    public function edite($id){
        try {
            $slider = slider::findOrFail($id);
            return view('admin.slider.edite',compact("slider"));
        }catch (ModelNotFoundException $exception){
            Session::flash('msg',"e: slider not found");
            return redirect()->route("slider.index");
        }
        }
    public function update(Request $request,$id){
        try {

    $request->validate($this->rules($id),$this->messages());

    $slider = slider::findOrFail($id);
    if ($request->file('image') != null){
        if (\File::exists(public_path($slider->imgage))){
            \File::delete(public_path($slider->image));
        }
        $slider->image = parent::uploadImage($request->file('image'));
    }

    $slider->status = $request->input('status') == 1 ? 1 : 0;
    $slider->product_name = $request->input('name');
            $slider->main_title =$request->input('main');
            $slider->description =$request->input('description');
    $slider->update();
    \Session::flash('msg', "s: slider updated successfully");
    return redirect()->route("slider.index");
}   catch (ModelNotFoundException $exception){
    \Session::flash('msg','e: item not found');
    return redirect()->route('slider.add');
}
}
public function destroy($id,Request $request){
      if (!$request->ajax()){
          return 'Illegel';
      }
      try{
          $item = slider::findOrFail($id);
            $item->isdeleted =1;
            $item->update();
          return \response()->json(['status'=>200,'msg'=>'item deleted after refresh will not be listed']);
      }catch (ModelNotFoundException $exception){
        return \response()->json(['status'=>'404']);
      }
}
}
