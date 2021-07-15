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
        $btc = $this->btc();
        if($request->ajax()){
            dispatch(new SaveBtc($btc));
            return response()->json([
                'btc' => $btc
            ]);
        }
        return view('welcome',compact('btc'));
    }

    public function vue(Request $request)
    {
        $btc = $this->btc();
        if($request->ajax() || $request->wantsJson()){
            dispatch(new SaveBtc($btc));
            return response()->json([
                'btc' => $btc
            ]);
        }
        return view('welcomevue',compact('btc'));
    }

    public function react(Request $request)
    {
        //
    }

    private function btc(){
        $source = file_get_contents('https://min-api.cryptocompare.com/data/price?fsym=BTC&tsyms=USD,PEN,CLP&api_key=c057f471d538a86543a09c5f8914cacc1527bd509534b9d088dbfd3d6f0db82f');
        return json_decode($source,true);
    }
}
