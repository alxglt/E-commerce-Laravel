<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    //



    function show()
    {

        $item = DB::select('select * from item');

        return view('catalogue',['item'=>$item]);
    }

    function item_page(item $item)
    {
        $item = DB::select("select * from item where id=$item->id");
        return view('produit',['item'=>$item]);

    }


    function add_to_cart(item $item)
    {

        \Cart::session(auth()->id())->add(array(
            'id' => $item->id,
            'name' => $item->name,
            'price' => $item->price,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $item

        ));
        return redirect('/cart');
    }

    function modify(Request $request, Item $id_qty)

    {

        $qty = DB::select("update item set quantity = $request->number where id = $id_qty->id ");
         return back();

    }



}
