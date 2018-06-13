<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class BarangController extends Controller
{
    public function index()
    {
        $barangs = Barang::all();
        
    

        return view('/barang/indexbarang',['barangs' => $barangs ]);
    }

    public function show($id)
    
    {
        
        $coba=$_GET['id'];       
       // $users = Users::where('id_user', $id) -> get();
       $barangs = Barang::find($coba);

       

       //return response()->json(['data'=>$barangs]);
       return response()->json($barangs); 
    }

    public function store(Request $request)
    {
        
    
       
        $barangs = new Barang;

        $barangs->nama_barang = $request->namaBarang;
        $barangs->jenis_barang = $request->jenisBarang;
        $barangs->harga_barang = $request->hargaBarang;

        $barangs->save();
       

        return response()->json(['success'=>'Data is successfully added']);
    }
}
