<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;
use App\Http\Requests\StoreMenuItemRequest;
use App\Http\Requests\UpdateMenuItemRequest;
use App\Models\MenuItem;
use Illuminate\Support\Facades\Storage;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class MenuItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $menus = MenuItem::when(!empty($request->get("prod_name")),function($q)use($request){
            $q->where('p_name',"like","%".$request->get("prod_name")."%");
        })->get();
        return view("menus.index", compact("menus"));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("menus.create");
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMenuItemRequest $request)
    {
        //dd($request->all());
        $content = $request->file("p_image"); //Assigning the sent file to the variable
        $imagepath = Storage::disk('public')->put('uploads', $content); //Upload image

        $id = IdGenerator::generate(['table' => 'menu_items','field'=>'p_id', 'length' => 6, 'prefix' => "MI"]);

        $menu = new MenuItem();
        $menu->p_id=$id;
        $menu->p_name = $request->get("p_name");
        $menu->p_price = $request->get("p_price");
        $menu->p_image = $imagepath;
        $menu->save();

        return redirect()->route("menu.index");
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(MenuItem $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MenuItem $menu)
    {
        //$menu=MenuItem::find($id);
        return view("menus.edit", compact("menu"));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMenuItemRequest $request, MenuItem $menu)
    {
        //dd($request->all());
        if ($request->hasFile("p_image")) {
            $content = $request->file("p_image"); //Assigning the sent file to the variable
            $imagepath = Storage::disk('public')->put('uploads', $content); //Upload image
        }

        // $menu->p_id = $request->get("p_id");
        $menu->p_name = $request->get("p_name");
        $menu->p_price = $request->get("p_price");

        if ($request->hasFile("p_image")) {
            $menu->p_image = $imagepath;
        }

        $menu->save();

        return redirect()->route("menu.index");
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MenuItem $menu)
    {
        $menu->delete();
        return redirect()->route("menu.index");
        //
    }
}
