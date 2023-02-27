<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TkksdController extends Controller
{
    public function showTkksd()
    {
        return view('tkksd.tkksd');
    }
    public function showTkksdAward()
    {
        return view('tkksd.tkksd-award');
    }
    public function showKaledoiskop()
    {
        return view('tkksd.kaledoiskop');
    }
}
