<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PerusahaanModel;
use Illuminate\Database\QueryException;
use Symfony\Component\VarDumper\Cloner\Data;
use Illuminate\Support\Facades\DB;

class   PerusahaanController extends Controller
{

    public function index()
    {
        $data = PerusahaanModel::all();

        return view('data_perusahaan.perusahaan', compact('data'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data_perusahaan.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $Request)
    {

        $this->validate($Request,[
            'name_perusahaan' => 'required',
            'pekerjaan' => 'required',
            'gaji' => 'required',
            'alamat_perusahaan' => 'required',
            'syarat_ketentuan' => 'required',
            'kontak' => 'required',
            'foto_perusahaan' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
          ]);
      
          $Perusahaan = PerusahaanModel::create([
            'name_perusahaan' => $Request->name_perusahaan,
            'pekerjaan' => $Request->pekerjaan,
            'gaji' => $Request->gaji,
            'alamat_perusahaan' => $Request->alamat_perusahaan,
            'syarat_ketentuan' => $Request->syarat_ketentuan,
            'kontak' => $Request->kontak,
            'foto_perusahaan' => $Request->foto_perusahaan,
          ]);
      
          if($Request->hasFile('foto_perusahaan')){
            foreach ($Request->file('foto_perusahaan') as $file) {
              $image_name = 'foto_perusahaan/'.time().$file->getClientOriginalName();
              $file->move('foto_perusahaan/', $image_name);
            }
          }

        // $dtUpload = new PerusahaanModel;
        // $dtUpload->nama_perusahaan = $request->nama_perusahaan;
        // $dtUpload->pekerjaan = $request->pekerjaan;
        // $dtUpload->gaji = $request->gaji;
        // $dtUpload->alamat_perusahaan = $request->alamat_perusahaan;
        // $dtUpload->syarat_ketentuan = $request->syarat_ketentuan;
        // $dtUpload->kontak = $request->kontak;
        // $dtUpload->foto_perusahaan = $namaFile;

        // $dtUpload->create();

        return redirect('admin.perusahaan')->withSuccess('Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = PerusahaanModel::findorfail($id);
        return view('data_perusahaan.edit', compact('data'));
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}
