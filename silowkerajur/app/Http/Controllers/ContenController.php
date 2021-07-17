<?php

namespace App\Http\Controllers;

use App\Models\Conten;
use Illuminate\Http\Request;

class ContenController extends Controller
{
    public function show()
    {
        $data = Conten::all();
        return view('user.content', ['contens' => $data]);
    }
}
