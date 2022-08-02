<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Transbank\Webpay\WebpayPlus;
use Transbank\Webpay\WebpayPlus\Transaction;
use App\Models\Compras;


class TransbankController extends Controller{
    

    public function __contruct(){
        WebpayPlus::configureForTesting();
    }


    function inicio(){
        return view("inicio");
    }



    public function iniciar_pago(Request $request){

        $nueva_compra = new Compras;
        $nueva_compra->session_id = "12312";
        $nueva_compra->total = 1500;
        $nueva_compra->save();

        return $this->start_web_pay($nueva_compra);

    }


    public function start_web_pay($nueva_compra){

        $transaccion = (new Transaction)->create(
            $nueva_compra->id,
            $nueva_compra->session_id,
            $nueva_compra->total,
            "http://127.0.0.1:8000/confirmar_pago",
            "http://127.0.0.1:8000/confirmar_pago2"
        );

        // return $transaccion->getUrl().'?token_ws='.$transaccion->getToken();
        // dd($transaccion);
        return $transaccion->getUrl().'?token_ws='.$transaccion->getToken();
    }

    public function confirmar_pago(Request $request){
        
            $confirmacion = (new Transaction)->commit($request->get('token_ws'));

            dd($confirmacion);
       

        
        // return $confirmacion;
    }

}
