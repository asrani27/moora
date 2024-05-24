<?php

namespace App\Http\Controllers;

use App\Models\Soal;
use App\Models\Jawaban;
use App\Models\Jurusan;
use App\Models\Peserta;
use App\Models\Kategori;
use Illuminate\Http\Request;

class MooraController extends Controller
{
    public function index()
    {
        $soal = Soal::count();
        $datasoal = Soal::get();

        $data = Peserta::get()->map(function ($item) use ($datasoal) {
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
        })->sortByDesc('benar');

        $matpel = Kategori::get();
        $jurusan  = Jurusan::get()->map(function ($item) use ($matpel) {
            return $item;
        });

        return view('superadmin.moora.index', compact('data', 'soal', 'matpel', 'jurusan'));
    }
}
