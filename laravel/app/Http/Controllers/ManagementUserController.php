<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementUserController extends Controller
{
    publiC function index()
    {
        //return "Halo nama saya Annaufal Risvanda Firdaus E41192290 TIF Golongan D 2019.";
        $nama = "Annaufal Risvanda Firdaus";
        $nim = "E41192290";
        $pelajaran = ["Workshop Web Framework","Workshop Aplikasi Mobile"];

        return view('home', compact('nama','nim','pelajaran'));
    }
    //disini controller Management User
}


?>