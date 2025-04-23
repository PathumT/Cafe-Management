<?php

namespace App\Http\Controllers;
use DB;
use App\Models\cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart(Request $request)
    {
        $cart= DB::table('carts')->get();
        return view('cart',compact('cart'));
    }

    public function market(Request $request)
    {
        $cart= DB::table('carts')->get();
        return view('market',compact('cart'));
    }

    public function member(Request $request)
    {
        return view('member');
    }

    public function update(Request $request, $id)
    {
        $item = Cart::find($request->item_id);
        $item->quantity = $request->quantity;
        $item->save();
        return redirect()->back()->with('success', 'Cart item updated successfully.');
    }

}
