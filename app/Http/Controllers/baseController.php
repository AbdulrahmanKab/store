<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class baseController extends Controller
{
    public function __construct()
    {
        $this->currentUser = \Auth::User();
        \View::share([ 'currentUser' => $this->currentUser ]);
    }
    public function uploadImage($image ,$dir ="/images"){
        $imageName = time().".".$image->getClientOriginalExtension();
        $direct=public_path($dir);
        $image->move($direct,$imageName);
        $imagePath = $dir."/".$imageName;
        return $imagePath;
    }
}
