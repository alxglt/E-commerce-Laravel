<?php

namespace App\Http\Controllers;

use App\Models\item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    //

    function add(Request $req)
    {
        $rules = [
            'pathimage' => 'required|string|min:2',
            'item_title' => 'required|string|max:255',
            'desc' => 'required|string|min:2',
            'price' => 'required|integer',
            'cat' => 'required|string',
            'qty' => 'required|integer'

        ];

        $validator = Validator::make($req->all(),$rules);
        if ($validator->fails()) {
            return redirect('admin')
                ->withErrors($validator)
                ->withInput();
        }
        else {
            $data = $req->input();
            $item = new item();
            $item -> picture_path = $data['pathimage'];
            $item -> name = $data['item_title'];
            $item -> description = $data['desc'];
            $item -> price = $data['price'];
            $item -> categorie = $data['cat'];
            $item ->quantity = $data['qty'];
            $item -> enabled  = '1';
            $item->save();
            return redirect('admin')
                ->with('message', 'Your item have been added :) !');
        }




    }

    public function see() {
        return view('admin');
    }

}
