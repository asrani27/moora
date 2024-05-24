<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use Illuminate\Http\Request;

class LaporanController extends Controller
{

    public function index()
    {
        $data = Peserta::get();
        return view('superadmin.laporan.index', compact('data'));
    }
    public function hasil()
    {
        $data = Peserta::get();
        return view('superadmin.laporan.hasil', compact('data'));
    }
}
