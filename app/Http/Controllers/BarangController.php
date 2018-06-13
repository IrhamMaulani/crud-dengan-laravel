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
        
       // $coba=$_POST['id'];       
       // $users = Users::where('id_user', $id) -> get();
       $barangs = Barang::find($id);

       

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

    public function update(Request $request,$id)
    {  
       
        $barangs = Barang::find($id);

        $barangs->nama_barang = $request->namaBarang;
        $barangs->jenis_barang = $request->jenisBarang;
        $barangs->harga_barang = $request->hargaBarang;

        $barangs->save();
       

        return response()->json(['success'=>'Data is successfully edited']);
      
       
    }

    public function destroy($id)
    {  
       
        $barangs = Barang::find($id);

       

        $barangs->delete();
       

        return response()->json(['success'=>'Data is successfully deleted']);
      
       
    }

}
