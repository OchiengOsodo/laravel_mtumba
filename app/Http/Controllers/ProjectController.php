<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    //

    function index(){
        $products = DB::table('products')->limit(4)->get();

        $men_products = DB::table('products')->where('type', 'men')->limit(4)->get();

        $women_products = DB::table('products')->where('type', 'women')->limit(4)->get();

        $accessories_products = DB::table('products')->where('type', 'accessories')->limit(4)->get();

        return view('index',['products'=>$products, 'men_products'=>$men_products, 'women_products'=>$women_products, 'accessories_products'=>$accessories_products]);

        
    }


    function products(){

        $products = DB::table('products')->get();
        return view ('products',['products'=>$products]);
    }
}
