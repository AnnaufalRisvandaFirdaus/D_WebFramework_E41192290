<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * 
     */
    public function index()
    {
        return view('admin.admin');
    }


    // public function postlogin (Request $request){
    //     dd($request->all());
    // }
}