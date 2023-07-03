<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testeController extends Controller
{
    public function teste($p1, $p2)
    {
        //  echo "A soma de $p1 + $p2 =" . ($p1 + $p2);
        //return view('site.teste', ['x' => $p1]);
        return \view('site.teste', \compact('p1', 'p2'));
    }
};
