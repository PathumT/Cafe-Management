<?php

namespace App\Http\Controllers;
use DB;
use App\Models\delivery;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    public function delivery()
    {
        return view('delivery');
    }
}
