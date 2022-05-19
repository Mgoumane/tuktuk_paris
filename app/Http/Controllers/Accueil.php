<?php

namespace App\Http\Controllers;
use App\Models\Options;

use Illuminate\Http\Request;
use PhpOption\Option;

class Accueil extends Controller
{
    public function accueil()
    {
        $options = Options::GET();
        return view('welcome')->with("options",$options);
    }

    public function about()
    {
        return view('about');
    }
}
