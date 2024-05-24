<?php

namespace App\Http\Controllers;

use App\Models\Soal;
use App\Models\Jawaban;
use App\Models\Peserta;
use App\Models\Kategori;
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
        $soal = Soal::count();
        $datasoal = Soal::get();
        $data = Peserta::where('id', request()->get('id_peserta'))->get()->map(function ($item) {
            $jawaban = Jawaban::where('peserta_id', $item->id)->get();
            $item->dijawab = $jawaban->count();
            $item->benar = Jawaban::where('peserta_id', $item->id)
                ->get()->map(function ($item2) {
                    if ($item2->jawaban == $item2->soal->kunci) {
                        $item2->benar = 'Y';
                    } else {
                        $item2->benar = 'T';
                    }
                    return $item2;
                })->where('benar', 'Y')->count();

            return $item;
        })->sortByDesc('benar')->first();

        $matpel = Kategori::get();

        return view('superadmin.laporan.hasil', compact('data', 'matpel'));
    }
}
