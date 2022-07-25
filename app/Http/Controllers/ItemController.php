<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $dt = DB::table('items')->get();

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
       
        $dt = DB::select('SELECT * from items');
        return view('viewitem',['datas' => $dt]);
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
                [
                    "id": "02",
                    "name": "'. $name .'",
                    "email": "'. $email .'",
                    "address": "'. $address .'",
                    "phone":"'. $phone .'"
                ]';

        $data = array('name'=>$name,"email"=>$email,"address"=>$address,"phone"=>$phone);

        $ifhave = DB::select('SELECT * from items Where name = :name',['name'=> $name]);

        //dd($ifhave);
        if($ifhave){
            //dd($ifhave);
        }else{
            DB::table('items')->insert($data);
        }

        //$dt = DB::table('items')->get();
        $dt = DB::select('SELECT * from items');
        return view('viewitem',['datas' => $dt]);
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