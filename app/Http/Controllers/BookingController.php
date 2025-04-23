<?php

namespace App\Http\Controllers;
use DB;
use App\Models\booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function table_reservation()
    {
        return view('table_reservation');
    }

    public function table_selection()
    {
        return view('table_selection');
    }

    public function table_selection_check(){
        return view('table-selection-check');
    }

    public function bocking_mg(){
        return view('bocking_mg');
    }
}
