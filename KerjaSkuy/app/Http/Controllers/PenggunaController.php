<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PerusahaanModel;
use App\Models\PenggunaModel;
use Symfony\Component\VarDumper\Cloner\Data;
use Illuminate\Support\Facades\DB;

class PenggunaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $pengguna = PenggunaModel::all();

        return view('admin.pengguna', compact('pengguna'));
    }





    public function edit($id)
    {
        $dt = PenggunaModel::findorfail($id);
        return view('admin.edit-user', compact('dt'));
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
        $request->validate([
            'name' => 'required',
                'email' => 'required',
                
        ]);
        
        $ubah = PenggunaModel::findorfail($id);
        
        

        $dt = [
            'name' => $request['name'],
            
            'email' => $request['email'],
            
        ];

       
        $ubah->update($dt);
        return redirect('pengguna');
    }

    public function destroy($id)
    {
        $hapus = PenggunaModel::findorfail($id);

      

        //hapus data di database
        $hapus->delete();
        return back();
    }
}