<?php

namespace App\Http\Controllers;
use App\Models\Option;

use Illuminate\Http\Request;

class detailOption extends Controller
{
    public function afficherOption($id)
    {
        $uneOption = Option::find($id);
        return view('detailOption')->with('uneOption',$uneOption);
    }
}
