<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PerusahaanModel;

class KerjaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        {
            $data = PerusahaanModel::all();
    
            return view('data_perusahaan.perusahaan', compact('data'));
        }
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
    public function store(Request $request)
    {
        $request->validate(
            [
                'nama_perusahaan' => 'required',
                'pekerjaan' => 'required',
                'gaji' => 'required',
                'alamat_perusahaan' => 'required',
                'syarat_ketentuan' => 'required',
                'kontak' => 'required',
                'foto_perusahaan' => 'required',
            ],
            [
                'required' => 'Data Harus Terisi',
            ]
        );

        $nm = $request->foto_perusahaan;
        $namaFile = time() . rand(100, 900) . "." . $nm->getClientOriginalName();

        $dtUpload = new PerusahaanModel;
        $dtUpload->nama_perusahaan = $request->nama_perusahaan;
        $dtUpload->pekerjaan = $request->pekerjaan;
        $dtUpload->gaji = $request->gaji;
        $dtUpload->alamat_perusahaan = $request->alamat_perusahaan;
        $dtUpload->syarat_ketentuan = $request->syarat_ketentuan;
        $dtUpload->kontak = $request->kontak;
        $dtUpload->foto_perusahaan = $namaFile;


        $nm->move(public_path() . '/foto_perusahaan', $namaFile);
        $dtUpload->save();

        return redirect('perusahaan');
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
        $dt = PerusahaanModel::findorfail($id);
        return view('data_perusahaan.edit', compact('dt'));
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
            'nama_perusahaan' => 'required',
                'pekerjaan' => 'required',
                'gaji' => 'required',
                'alamat_perusahaan' => 'required',
                'syarat_ketentuan' => 'required',
                'kontak' => 'required',
                'foto_perusahaan' => 'required',
        ]);
        
        $ubah = PerusahaanModel::findorfail($id);
        $awal = $ubah->foto_perusahaan;
        

        $dt = [
            'nama_perusahaan' => $request['nama_perusahaan'],
            'pekerjaan' => $request['pekerjaan'],
            'alamat_perusahaan' => $request['alamat_perusahaan'],
            'syarat_ketentuan' => $request['syarat_ketentuan'],
            'kontak' => $request['kontak'],
            'foto_perusahaan' => $awal,
            
        ];

        $request->foto_perusahaan->move(public_path().'/foto_perusahaan', $awal);
        $ubah->update($dt);
        return redirect('perusahaan');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = PerusahaanModel::findorfail($id);

        $file = public_path('/foto_perusahaan/').$hapus->foto_perusahaan;

        if (file_exists($file)){
            //maka hapus file di folder public/img
            @unlink($file);
        }

        //hapus data di database
        $hapus->delete();
        return back();
    }
}