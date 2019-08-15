<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class main_category extends Model
{
    protected $table ="main_category";

    public function subCategory(){
        return $this->hasMany('App\sub_category','main_category_id','id');
    }
}
