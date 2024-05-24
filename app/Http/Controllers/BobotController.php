<?php

namespace App\Http\Controllers;

use App\Models\Bobot;
use App\Models\Jurusan;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BobotController extends Controller
{

    public function index()
    {
        $data = Jurusan::paginate(10);
        return view('superadmin.bobot.index', compact('data'));
    }

    public function nilai($id_jurusan)
    {
        $data = Jurusan::find($id_jurusan);
        $nilai = $data->bobot;
        $kategori = Kategori::get();
        return view('superadmin.bobot.edit', compact('data', 'kategori', 'nilai'));
    }

    public function storeNilai(Request $req, $id)
    {
        $id_jurusan = $id;

        foreach ($req->kategori_id as $key => $item) {
            $check = Bobot::where('jurusan_id', $id_jurusan)->where('kategori_id', $item)->first();

            if ($check == null) {
                $n = new Bobot;
                $n->jurusan_id = $id_jurusan;
                $n->kategori_id = $item;
                $n->nilai = $req->nilai[$key];
                $n->save();
                toastr()->success('berhasil di update');
            } else {
                $check->update([
                    'nilai' => $req->nilai[$key],
                ]);
                toastr()->success('berhasil di update');
            }
        }
        return redirect('/superadmin/bobot');
    }
}
