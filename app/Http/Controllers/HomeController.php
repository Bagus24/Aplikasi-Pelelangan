<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelelangan;

class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
        $pelelangan = Pelelangan::orderBy('updated_at', 'desc')->paginate(10);
        return view('home', compact('pelelangan'));
    }
}
