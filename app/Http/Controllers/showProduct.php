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
        ->leftjoin('main_category','sub_category.main_category_id','main_category.id')->where('main_category.name','=',$main);

  if ($item->isEmpty() ){
        return view('notfound');
    }
  return view('category',compact('item','main'));
}
}
