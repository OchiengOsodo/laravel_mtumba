<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    //

    function index(){
        $products = DB::table('products')->limit(4)->get();
        return view('index',['products'=>$products]);

        
    }


    function products(){

        $products = DB::table('products')->paginate(8);
        return view ('products',['products'=>$products]);
    }

    function men(){

        $products = DB::table('products')->where('type','men')->paginate(8);
        return view ('products',['products'=>$products]);
    }

    function women(){

        $products = DB::table('products')->where('type','women')->paginate(8);
        return view ('products',['products'=>$products]);
    }

    function accessories(){

        $products = DB::table('products')->where('type','accessories')->paginate(8);
        return view ('products',['products'=>$products]);
    }

   

   
}
