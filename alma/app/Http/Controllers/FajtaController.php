<?php

namespace App\Http\Controllers;

use App\Models\Fajta;
use Illuminate\Http\Request;

class FajtaController extends Controller
{
    public function index(){
        $fajtas = Fajta::all();
        return view('fajtas',compact('fajtas'));
    }

}
