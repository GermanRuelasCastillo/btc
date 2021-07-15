<?php

namespace App\Http\Controllers;

use App\Jobs\SaveBtc;
use Illuminate\Http\Request;

class BtcController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $source = file_get_contents('https://min-api.cryptocompare.com/data/price?fsym=BTC&tsyms=USD,PEN,CLP&api_key=c057f471d538a86543a09c5f8914cacc1527bd509534b9d088dbfd3d6f0db82f');
        $btc = json_decode($source,true);
        // if($request->ajax()){
            dispatch(new SaveBtc($btc));
            return response()->json([
                'btc' => $btc
            ]);
        // }
        return view('welcome',compact('btc'));
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
