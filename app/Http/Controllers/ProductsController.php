<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller{

    public function index()
    {
        //varible
        $title = "Welcom to my Larvel 8 course";
        $description = "Create by Dary";

        // array
        $data = ['productOne' => 'iphone',
                 'productTwo' => 'Samsung'
                ];

//Compact method
        //1.
        // return view('products.index',
        // compact('title','description'));

        //2.
        // return view('products.index')->with('title',$title);

        //3.
        // return view('products.index')->with('data',$data);

        //4.
        // return view('products.index',['data' => $data,
        //                               'title' => $title,
        //                               'description' => $description
        //                             ]);

        return view('products.index',['data1' => $data['productTwo'],
                                      'data' => $data,
                                      'title' => $title,
                                      'description' => $description
                                     ]);
    }

    public function about(){
        return view('products.about');
    }
}