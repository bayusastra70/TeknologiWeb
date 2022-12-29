<?php

namespace App\Http\Controllers;

use App\Models\Comunity;
use Illuminate\Http\Request;
use App\Models\Packages;
//use Symfony\Contracts\Service\Attribute\Required;

class PackagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title="daftar Package";
        $packages=Packages::all();
        //dd($packages);
        return view('backpage.daftarpackage', compact('title','packages'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title="Create Package";
        $comunities=Comunity::all();
        //dd($packages);
        return view('backpage.inputpackage',compact('title','comunities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //untuk set kesalahan
        /*$messages = [
            'required'=> 'kolom :attribute harus lengkap',
            'numeric'=> 'kolom :attribute harus Angka',
            'file'=> 'Perhatikan format dan ukuran file'
        ];*/
        //untuk menyimpam data
        $validasi=$request->validate([
            'package_code'=>'required|numeric',
            'package_name'=>'required',
            'package_desc'=>'',
            'comunity_id'=>'required',
            'feature_img'=>'required|mimes:png,jpg|max:1024',
            'update_at'=>''
        ]);
        try {
            //DB::beginTransaction();
            $fileName = time().$request->file('feature_img')->getClientOriginalName();
            $path = $request->file('feature_img')->storeAs('photos',$fileName);
            $validasi['feature_img']=$path;
            $response = Packages::create($validasi);
            //DB::comit();
            return redirect('package');
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
        /*$package=Packages::create($request->all());*/
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
        try{
            $package=Packages::find($id);
            $package->delete();
            return redirect('package');
        } catch (\Throwable $e) {
            echo $e->getMessage();
        }
    }
}
