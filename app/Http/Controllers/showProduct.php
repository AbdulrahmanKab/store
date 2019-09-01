<?php

namespace App\Http\Controllers;
use App\sub_category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\main_category;
use App\basket;
class showProduct extends baseController
{
    public function addBasket($product,$amount,$id){

        $item = new basket();
        $item->product_id=$product;
        $item->user_id= $id;
        $item->amount = $amount;
        $item->confirmed = 0;
       $item->created_at= Carbon::now('Asia/Gaza');
        $item->save();
        $count = \DB::table('basket')->where('confirmed','=',0)->where('user_id','=',$id)->count();
        return \response()->json(['count'=>$count,'status'=>200]);
        }

public function main($main){


  $item = \DB::table('main_category')->leftjoin('sub_category','main_category.id','sub_category.main_category_id');
    $item = $item->where('main_category.name','=',$main)->select(['main_category.name as main_name','sub_category.name as sub_name'])->get();

    $product = \DB::table('product')
        ->leftjoin('sub_category','product.sub_categoroy_id','sub_category.id')
        ->leftjoin('main_category','sub_category.main_category_id','main_category.id')->where('main_category.name','=',$main)->select(['product.id as id','product.name as name','image','price','description','sub_category.name as sub_name','main_category.name as main_name'])
        ->paginate(15);

  if ($item->isEmpty() ){
        return view('notfound');
    }
  return view('category',compact('item','main','product'));
}

public function sub($main,$sub){

    $item = \DB::table('main_category')->leftjoin('sub_category','main_category.id','sub_category.main_category_id');
    $item = $item->where('main_category.name','=',$main)->select(['main_category.name as main_name','sub_category.name as sub_name'])->get();

    $product = \DB::table('product')
        ->leftjoin('sub_category','product.sub_categoroy_id','sub_category.id')
        ->leftjoin('main_category','sub_category.main_category_id','main_category.id')->where('sub_category.name','=',$sub)
        ->select(['product.id as id','product.name as name','image','price','description','sub_category.name as sub_name','main_category.name as main_name'])
        ->paginate(15);

    return view('sub_category',compact('item','sub','main','product'));
}
public function product($main,$sub,$product){
    $main = \DB::table('main_category')->where('name','=',$main)->get();

    if($main->isEmpty()){
        return view('notfound');
    }
    $subCategory = \DB::table('sub_category')->where('name','=',$sub)->get();
    if($subCategory->isEmpty()){
        return view('notfound');
    }
    $item_product = \DB::table('product')->where('isdeleted','=',0)
        ->where('product.name','=',$product)
    ->select(['name','description','marka','price','image','id']);
    $item_product = $item_product->first();
    $uses = \DB::table('uses')->leftjoin("product","product.id","uses.product_id")
        ->where('product.name','=',$product)
        ->where('uses.isdeleted','=',0)->select(['uses.name as name','uses.value as value'])->get();

    return view('product_details',compact('item_product','uses','main','sub','product'));
}

}
