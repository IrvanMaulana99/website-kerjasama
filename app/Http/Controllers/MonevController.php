<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonevController extends Controller
{
    public function showKsdd()
    {
        return view('monev.ksdd');
    }
    public function showKsdpk()
    {
        return view('monev.ksdpk');
    }
    public function showSinergitas()
    {
        return view('monev.sinergitas');
    }
    public function showKsdpl()
    {
        return view('monev.ksdpl');
    }
    public function showKsdll()
    {
        return view('monev.ksdll');
    }
    public function showPengajuan()
    {
        return view('monev.pengajuan');
    }
}