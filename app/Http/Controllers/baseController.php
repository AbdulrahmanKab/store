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
}
