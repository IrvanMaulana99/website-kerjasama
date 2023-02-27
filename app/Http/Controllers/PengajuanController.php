<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PengajuanController extends Controller
{
    //
    public function showPengajuan()
    {
        $data = Pengajuan::all();
        return view('pengajuan');
    }

    public function store(Request $request)
    {
    //    dd($request->all());
        Pengajuan::create($request->all());
        return redirect()->route('pengajuan');
    }
    
}
