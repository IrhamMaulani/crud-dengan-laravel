<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;


class UserController extends Controller
{

    public function index()
    {
        $users = Users::paginate(5);
        $title = "halo";

        return view('user.user',['users' => $users , 'title' => $title]);
    }

    public function show($id)
    {
        
       
       // $users = Users::where('id_user', $id) -> get();
       $users = Users::find($id);

       

        return view('user.detailuser',['user' => $users ]);
    }

    public function create()
    {       

        return view('user.createuser');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'namauser' => 'required',
            'nomorteleponuser' => 'required',
            'jeniskelamin' => 'required'
        ]);
    
       
        $users = new Users;

        $users->nama_user = $request->namauser;
        $users->nomor_telepon_user = $request->nomorteleponuser;
        $users->jenis_kelamin = $request->jeniskelamin;

        $users->save();
       

        return redirect('user')->with('message', 'Data telah di Insert');
    }





    public function edit($id)
    {
        
       
        $users = Users::find($id);
      

       

        return view('user.edituser',['user' => $users ]);
    }

    public function update(Request $request , $id)
    {
        
       
      
        $users = Users::find($id);

        $users->nama_user = $request->namauser;
        $users->nomor_telepon_user = $request->nomorteleponuser;
        $users->jenis_kelamin = $request->jeniskelamin;

        $users->save();
      

       

        return redirect('user')->with('message', 'Data telah di Update');
    }

    public function destroy($id)
    {
        
       
      
        $users = Users::find($id);

       

        $users->delete();
      

       

        return redirect('user')->with('message', 'Data telah di Hapus');
    }

   


    

}
