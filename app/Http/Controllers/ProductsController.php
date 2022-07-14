<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller{

    public function index()
    {
        $title = "Welcom to my Larvel 8 course";
        $description = "Create by Dary";

        $data = ['productOne' => 'iphone',
                 'productTwo' => 'Samsung'
                ];



        //Compact method

        // return view('products.index',
        // compact('title','description'));

        // return view('products.index')->with('title',$title);

    //     return view('products.index')->with('data',$data);

    return view('products.index',['data' => $data,
                                  'title' => $title,
                                  'description' => $description
                                ]);

    }

    public function about(){
        return view('products.about');
    }
}