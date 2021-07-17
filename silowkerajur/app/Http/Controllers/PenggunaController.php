<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PerusahaanModel;
use App\Models\PenggunaModel;
use Symfony\Component\VarDumper\Cloner\Data;
use Illuminate\Support\Facades\DB;

class PenggunaController extends Controller
{

    public function index()
    {
        $pengguna = PenggunaModel::all();

        return view('admin.pengguna', compact('pengguna'));
    }
}
