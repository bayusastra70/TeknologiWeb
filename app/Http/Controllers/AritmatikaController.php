<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AritmatikaController extends Controller
{
    function index(){
        return view('looping');
    }
    
    
    function Aritmatika(Request $request){
        $operasi = $request->input('operasi');
        $bil_pertama = $request->input('bil_1');
        $bil_kedua = $request->input('bil_2');
        $result = 0;

        if($operasi == "tambah"){
            $result = $bil_pertama + $bil_kedua;
        }else if ($operasi == "kurang"){
            $result = $bil_pertama - $bil_kedua;
        }else if ($operasi == "kali"){
            $result = $bil_pertama * $bil_kedua;
        }else if ($operasi == "bagi"){
            $result = $bil_pertama / $bil_kedua;
        }else {
            $result = 0;
        }
        

        return redirect('/Aritmatika')->with('info','hasilnya adalah : ' .$result);


    }
}
