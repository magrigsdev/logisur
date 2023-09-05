<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    //
    
    public function shop(Request $request){
        session()->put('shop',true);
        //dd($request);
        $titre = $request['titre'];
        $desc = $request['desc'];
        $img = $request['img'];
        $price = $request['price'];
        

        return view('shop', compact(['titre', 'desc', 'img', 'price']));
    }
}
