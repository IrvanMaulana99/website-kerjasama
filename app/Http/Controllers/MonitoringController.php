<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonitoringController extends Controller
{
    public function showRekapitulasi()
    {
        return view('monitoring.rekapitulasi');
    }
    public function showLayananpublik()
    {
        return view('monitoring.layananpublik');
    }
}
