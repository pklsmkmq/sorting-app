<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nilai;

class NilaiController extends Controller
{
    public function saveNilai(Request $request)
    {
        foreach ($request->nilai as $key) {
            $data = Nilai::create([
                'nilai' => $key
            ]);
        }

        if ($data) {
            return redirect()->route('index')->with('success',"Data Berhasil Tersimpan");
        }else{
            return redirect()->route('index')->with('error',"Data Gagal Tersimpan");
        }
    }

    public function sortNilai()
    {
        $data = Nilai::get();
        $dataSort = Nilai::orderBy('nilai', 'asc')->get();
        $data1 = "";
        $data2 = "";

        if (count($data) != 0) {
            foreach ($data as $key) {
                $data1 = $data1 . $key->nilai . ",";
            }
            foreach ($dataSort as $key2) {
                $data2 = $data2 . $key2->nilai . ",";
            }
            $data1 = substr($data1, 0, -1);
            $data2 = substr($data2, 0, -1);
        }else{
            $data1 = "";
            $data2 = "";
        }

        return view('sorting', ["data" => $data1, "dataSort" => $data2]);
    }

    public function searchNilai()
    {
        return view('search');
    }

    public function cariNilai(Request $request)
    {
        $data = Nilai::where('nilai', $request->cari)->first();
        if ($data) {
            return true;
        } else {
            return false;
        }
    }

    public function selesai()
    {
        $data = Nilai::truncate();
        return redirect()->route('index')->with('success',"Alhamdulillah Sorting & Searching Sudah Berhasil");
    }
}
