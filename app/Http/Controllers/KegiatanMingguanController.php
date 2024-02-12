<?php

namespace App\Http\Controllers;

use App\Models\KegiatanHarian;
use App\Models\KegiatanMingguan;
use Illuminate\Http\Request;

class KegiatanMingguanController extends Controller
{
    public function index()
    {
        $kegiatanM = KegiatanMingguan::all();
        return view('admin.kegiatan-mingguan', compact('kegiatanM'));
    }

    public function create()
    {
        return view('admin.kegiatan-mingguan-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kegiatan_mingguan' => 'required',
            'isi_kegiatan' => 'required',
        ]);

        KegiatanMingguan::create($request->all());
        return redirect()->route('admin.kegiatan-mingguan')->with('create', 'Kegiatan Mingguan Berhasil di Input');
    }

    public function show(Request $request, $id)
    {
        $kegiatan = KegiatanMingguan::find($id);

        $data['kegiatan'] = $kegiatan;
        return view('admin.kegiatan-mingguan-show', $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kegiatan_mingguan' => 'required',
            'isi_kegiatan' => 'required',
        ]);
        $kegiatanMingguan = KegiatanMingguan::find($id);

        if (!$kegiatanMingguan) {
            return redirect()->route('admin.kegiatan-mingguan')->with('error', 'Kegiatan Mingguan tidak ditemukan');
        }

        $kegiatanMingguan->update([
            'kegiatan_mingguan' => $request->input('kegiatan_mingguan'),
            'isi_kegiatan' => $request->input('isi_kegiatan'),
        ]);

        return redirect()->route('admin.kegiatan-mingguan')->with('update', 'Kegiatan Mingguan Berhasil di Update');
    }

    public function delete(Request $request, $id)
    {
        $data = KegiatanMingguan::findOrFail($id);
        $delete = $data->delete();
        if ($delete) {
            return redirect()->route('admin.kegiatan-mingguan')->with('success', 'Kegiatan Mingguan Berhasil di Dihapus');
        }else{
            return redirect()->route('admin.kegiatan-mingguan')->with('failed', 'Kegiatan Mingguan failed');
        }
    }
}
