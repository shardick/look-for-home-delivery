<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommonController extends Controller
{
    //
    public function page(Request $request, $view)
    {
        return view("common." . $view);
    }
}
