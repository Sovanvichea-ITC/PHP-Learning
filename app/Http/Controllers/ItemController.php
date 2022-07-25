<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $datas ;

    public function index()
    {
        //
        // $datas = response()->json([{'id'=>'1','name'=>'Dara Dara'},
        //           {'id'=>'2','name'=>'Dara Dara'},
        //           {'id'=>'3','name'=>'Dara Dara'},
        //          ]);

        $json = '
                [{
                    "id": "01",
                    "name": "Dara",
                    "email": "dara@gmail.com",
                    "address": "89 Chiaroscuro Rd, Portland, USA",
                    "phone":"012 345 678"
                },
                {
                    "id": "02",
                    "name": "Dara",
                    "email": "dara@gmail.com",
                    "address": "89 Chiaroscuro Rd, Portland, USA",
                    "phone":"012 345 678"
                }]';

        $json1 = '
                {
                    "id": "03",
                    "name": "Dara",
                    "email": "dara@gmail.com",
                    "address": "89 Chiaroscuro Rd, Portland, USA",
                    "phone":"012 345 678"
                }';

        $datas = json_decode($json, true);
        $datas1 = json_decode($json1, true);

        array_push($datas , $datas1);

       // dd($datas);


       //dd($datas);
       $d = 'Hello';

        return view('viewitem',['datas' => $datas],['d'=>$d]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $name = $request->input('name');
         $email = $request->input('email');
         $address = $request->input('address');
         $phone = $request->input('phone');

         $json ='
                [{
                    "id": "02",
                    "name": "'. $name .'",
                    "email": "'. $email .'",
                    "address": "'. $address .'",
                    "phone":"'. $phone .'"
                }]';

         //dd($name,$email,$address,$phone);
        //dd($json);

         //dd($request->input('name'));


        $datas1 = json_decode($json, true);
       // dd($datas);


        return view('viewitem',['datas' => $datas1]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}