<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class uses extends Model
{
    public function product(){
        return $this->belongsTo('App\products','product_id','id');
    }
}
