<?php

namespace App\Http\Controllers;
use DB;
use App\Models\orderDetails;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function orderDetails()
    {
        return view('orderDetails');
    }

    public function contact()
    {
        return view('contact');
    }

}
