<?php

namespace App\Http\Controllers;

use App\basket;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


;

class basketController extends baseController
{
    public function index()
    {
        $item  =null;
        if (Auth::user() != null) {
        $id = \DB::table("users")->where("id", '=', \Auth::user()->id)->select(["id"])->first();

        $item = \DB::table('basket')
            ->leftjoin('users', "basket.user_id", "users.id")->leftjoin('product', "basket.product_id", "product.id")
            ->where("user_id", '=', $id->id)
            ->select(['product.image as image'
                    , 'product.name as name'
                    , 'product.price as price'
                    , 'basket.amount as amount',
                    'basket.id as id_basket']
            )->get();
    }
        return view("basket",compact('item'));
    }

    public function destroy($id){
try {
    $basket = basket::findOrFail($id);
}catch (ModelNotFoundException $exception){

}}



}
