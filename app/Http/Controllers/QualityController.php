<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QualityController extends Controller
{
    public function index($year, $name) {


        return view('quality.index',[
            'year' => (int)$year,
            'name' => preg_replace('/[^a-zA-Z0-9äöüÄÖÜß\ ]/','', $name)
        ]);

    }
}
