<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function showLatarBelakang()
    {
        return view('profile.latarbelakang');
    }

    public function showDasarHukum()
    {
        return view('profile.dasar-hukum');
    }
    public function showPersonil()
    {
        return view('profile.personil');
    }
    public function showLayanan()
    {
        return view('profile.layanan');
    }
    public function showPk()
    {
        return view('profile.pk');
    }
    public function showIk()
    {
        return view('profile.ik');
    }
    public function showKontak()
    {
        return view('profile.kontak');
    }
}
