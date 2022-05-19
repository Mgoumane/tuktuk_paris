<?php

namespace App\Http\Controllers;
use App\Models\Options;

use Illuminate\Http\Request;

class detailOption extends Controller
{
    public function afficherOption($id)
    {
        $uneOption = Options::find($id);
        return view('detailOption')->with('uneOption',$uneOption);;
    }
}
