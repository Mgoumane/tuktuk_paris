<?php

namespace App\Http\Controllers;
use App\Models\Options;

use Illuminate\Http\Request;

class reservation extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function formulaireReservation($id)
    {
        $uneOption = Options::find($id);
        return view('formulaireReservation')->with('uneOption',$uneOption);
    }
    public function test(Request $request)
    {
        
        return view('test');

    }
}
