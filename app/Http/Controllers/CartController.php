<?php

namespace App\Http\Controllers;
use App\Models\cart;
use App\Models\item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    // To see the panier view
    public function see() {
        return view('panier');
    }

    // Show the cart
    function show() {
        $cart = \Cart::session(auth()->id())->getcontent();
        return view('panier',compact('cart'));
    }

    // Delete an item from the cart
    function delete($item_id) {
        \Cart::session(auth()->id())->remove($item_id);
        return back();
    }

    // Modify the quantity of an item
    function modify($rowid) {
        \Cart::session(auth()->id())->update($rowid,[
            'quantity' => array(
                'relative' => false,
                'value' => request('quantity'))
        ]);
        return back();
    }

    // Add the cart into the database, ( test function )
    function add($letest) {
        dd(letest);
        $items = \Cart::session(auth()->id())->getContent();
        foreach($items as $row) {
            DB::table('cart')->insert(
                array(
                    'user_id'   =>   auth()->id(),
                    'item_id' => $row->id,
                    'total_price' => \Cart::session(auth()->id())->get($row['id'])->getPriceSum(),
                    'quantity' => $row->quantity,
                    'created_at' => now(),
                )
            );
        }
        return back();
    }
}