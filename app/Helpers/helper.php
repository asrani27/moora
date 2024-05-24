<?php

use App\Models\Soal;
use App\Models\Jawaban;

function kuadrat($angka)
{
    $hasil = $angka ** 2; // Mengkuadratkan angka
    return $hasil; // Mengembalikan hasil
}

function nilaiMatPel($id_kategori, $id_peserta)
{
    $id_soal = Soal::where('kategori_id', $id_kategori)->pluck('id');
    $jawaban = Jawaban::where('peserta_id', $id_peserta)->whereIn('soal_id', $id_soal)->get()->map(function ($item) {
        $kunci = Soal::find($item->soal_id)->kunci;
        if ($kunci == $item->jawaban) {
            $item->benar = 'Y';
        } else {
            $item->benar = 'T';
        }
        return $item;
    });
    $jumlah_soal = $id_soal->count();
    $nilai = $jawaban->where('benar', 'Y')->count();
    return $nilai;
}

function kecocokan($nilai, $bobot)
{
    return number_format($nilai / $bobot, 2);
}
