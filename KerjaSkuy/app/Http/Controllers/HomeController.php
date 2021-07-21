<?php

namespace App\Http\Controllers;

use App\Models\Conten;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $conten = Conten::all();
        return view('user.content', compact('conten'));
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $users = User::where('name', 'like', "%" . $keyword . "%")->paginate(5);
        return view('user.content', compact('conten'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}