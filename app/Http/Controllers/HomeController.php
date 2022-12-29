<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use  App\Models\User;
use  App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index(){
        $title="Landing page";
        //$Packages=[(object)[
            //'package_code'=>'DUmmy Code',
            //'package_name'=>'DUmmy Name',
            //'package_desc'=>'DUmmy Desc'
        //],(object)[
            //'package_code'=>'DUmmy Code 2',
            //'package_name'=>'DUmmy Name 3',
            //'package_desc'=>'DUmmy Desc 4'
        //]];
        $products=Products::all();
        return view('frontpage.landingpage')->with('products', $products);
    }
    public function detail($id)
    {
      $data =Products::find($id);
      return view('frontpage.checkdetail',['products'=>$data]);
    }
    
    function search(Request $req)
    {
     $data= Products::
     where('name',$req->input('query'),'%')
     ->get();
     return view('frontpage.search',['products'=>$data]);
    }
    
    
    

}


