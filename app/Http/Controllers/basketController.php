<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class basketController extends baseController
{
    public function index(){

        $id = \DB::table("users")->where("id",'=',\Auth::user()->id)->select(["id"])->first();

     $item = \DB::table('basket')
         ->leftjoin('users',"basket.user_id","users.id")->leftjoin('product',"basket.product_id","product.id")
         ->where("user_id",'=',$id->id)
         ->select(['product.image as image'
                 ,'product.name as name'
                 ,'product.price as price'
                 ,'basket.amount as amount',
                 'basket.id as id ']
         )->get();

        return view("basket",compact('item'));
    }
}
