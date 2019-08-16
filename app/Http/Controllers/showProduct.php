<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\main_category;
class showProduct extends baseController
{
public function main($main){

  $item = \DB::table('main_category')->leftjoin('sub_category','main_category.id','sub_category.main_category_id');
    $item = $item->where('main_category.name','=',$main)->select(['main_category.name as main_name','sub_category.name as sub_name'])->get();

    $product = \DB::table('product')
        ->leftjoin('sub_category','product.sub_categoroy_id','sub_category.id')
        ->leftjoin('main_category','sub_category.main_category_id','main_category.id')->where('main_category.name','=',$main)->select(['product.id as id','product.name as name','image','price','description'])
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
        ->leftjoin('main_category','sub_category.main_category_id','main_category.id')->where('sub_category.name','=',$sub)->select(['product.id as id','product.name as name','image','price','description'])
        ->paginate(15);

    return view('sub_category',compact('item','sub','main','product'));
}
public function product($main,$sub,$product){
    $item_product = \DB::table('product')->where('isdeleted','=',0)
        ->where('product.name','=',$product)
    ->select(['name','description','marka','price','image']);
    $item_product = $item_product->first();
    $uses = \DB::table('uses')->leftjoin("product","product.id","uses.product_id")
        ->where('product.name','=',$product)->
        where('uses.isdeleted','=',0)->get();

    return view('product_details',compact('item_product','uses','main','sub','product'));
}
}
