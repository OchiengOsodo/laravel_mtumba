<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    //

    function cart(){

        return view ('cart');
    }

    function add_to_cart(Request $request){
        
    }
}
