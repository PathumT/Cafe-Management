<?php

namespace App\Http\Controllers;

use Elibyy\TCPDF\Facades\TCPDF;
use App\Models\MenuItem;

class MenuItemPDFController extends Controller{

    public function create(){

        $menus=MenuItem::get();
        $html=view()->make("menuspdf.create", compact("menus"))->render();
        $filename="menupdf.pdf";
        $pdf=new TCPDF;
        $pdf::SetTitle('Hello World');
        $pdf::AddPage();
        $pdf::writeHTML($html, true, false, true, false, '');

        $pdf::Output(storage_path("app/public/".$filename), 'F');

        return response()->download(public_path("storage/".$filename));
        return view("menuspdf.create", compact("menus"));

    }


}
