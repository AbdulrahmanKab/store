<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sub_category extends Model
{
    protected $table ="sub_category";
    public function main_category(){
        return $this->belongsTo('App\main_category','main_category_id','id');
    }
}
