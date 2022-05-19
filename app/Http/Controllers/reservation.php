<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reservation extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function formulaireReservation()
    {
        return view('formulaireReservation');
    }
}
