<?php

namespace App\Http\Controllers;
use DB;
use App\Models\shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shop()
    {
        return view('shop');
    }
}
