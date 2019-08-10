<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $table ='product';
    protected $fillable=['name','price','image','marka','sub_categoroy_id','description'];
    protected $dates = ['created_at','updated_at'];
    public function uses(){
        return $this->hasMany('App\uses','product_id','id');
    }
}
