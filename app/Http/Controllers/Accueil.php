<?php

namespace App\Http\Controllers;
use App\Models\Option;

use Illuminate\Http\Request;


class Accueil extends Controller
{

    public function accueil()
    {
        $options = Option::GET();
        return view('welcome')->with("options",$options);
    }

    public function about()
    {
        return view('about');
    }
}
