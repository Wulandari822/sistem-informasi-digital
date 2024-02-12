<?php

namespace App\Http\Controllers;

use App\Models\KegiatanHarian;
use Illuminate\Http\Request;

class KegiatanHarianController extends Controller
{
    public function index()
    {
        $kegiatanH = KegiatanHarian::all();
        return view('admin.kegiatan-harian', compact('kegiatanH'));
    }

    public function create()
    {
        return view('admin.kegiatan-harian-create');
    }

    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'kegiatan_hariini' => 'required',
            'isi_kegiatan' => 'required',
        ]);

        KegiatanHarian::create($request->all());
        return redirect()->route('admin.kegiatan-harian')->with('succes', 'Kegiatan harian Berhasil di Input');
    }

    public function show(Request $request, $id)
    {
        $kegiatan = KegiatanHarian::find($id);

        $data['kegiatan'] = $kegiatan;
        return view('admin.kegiatan-harian-show', $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kegiatan_hariini' => 'required',
            'isi_kegiatan' => 'required',
        ]);
        $KegiatanHarian = KegiatanHarian::find($id);

        if (!$KegiatanHarian) {
            return redirect()->route('admin.kegiatan-harian')->with('error', 'Kegiatan Harian tidak ditemukan');
        }

        $KegiatanHarian->update([
            'kegiatan_hariini' => $request->input('kegiatan_hariini'),
            'isi_kegiatan' => $request->input('isi_kegiatan'),
        ]);

        return redirect()->route('admin.kegiatan-harian')->with('success', 'Kegiatan Harian Berhasil di Update');
    }

    public function delete(Request $request, $id)
    {
        $data = KegiatanHarian::findOrFail($id);
        $delete = $data->delete();
        if ($delete) {
            return redirect()->route('admin.kegiatan-harian')->with('success', 'Kegiatan Harian Berhasil di Dihapus');
        }else{
            return redirect()->route('admin.kegiatan-harian')->with('failed', 'Kegiatan Harian failed');
        }
    }
}
