<?php

namespace App\Http\Controllers;
use App\Models\Option;
use App\Models\PointPassage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class detailOption extends Controller
{
    public function afficherOption($id)
    {
         $uneOption = Option::find($id);

        //  dd(DB::table('pp_option')->where('option_id',1)->first());
        return view('detailOption')->with('uneOption',$uneOption);
    }
}
