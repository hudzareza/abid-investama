<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Absensi;
use Illuminate\Support\Facades\DB;

class AbsensiController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        $absensi = DB::table('absensi')
            ->join('lokasi', 'absensi.id_lokasi', '=', 'lokasi.id')
            ->select('absensi.*', 'lokasi.nama as nama_lokasi')
            ->orderBy('id', 'desc')
            ->get();
        $absensi = $absensi->toArray();
        return view('admin.absensi.index', compact('absensi'));
    }

    public function add(): View
    {
        $location = DB::table('lokasi')->orderBy('id', 'desc')->get();
        $location = $location->toArray();

        return view('front.absensi.add', compact('location'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_lokasi' => 'required|string',
            'nik' => 'required|string',
            'nama' => 'required|string',
            'bagian' => 'required|string',
            'tanggal' => 'required|string',
            'bulan' => 'required|string',
            'tahun' => 'required|string',
            'keterangan' => 'required|string',
        ]);

        Absensi::create([
            'id_lokasi' => $request->id_lokasi,
            'nik' => $request->nik,
            'nama' => $request->nama,
            'bagian' => $request->bagian,
            'tanggal' => $request->tanggal,
            'bulan' => $request->bulan,
            'tahun' => $request->tahun,
            'sakit' => $request->sakit,
            'tidak_info' => $request->tidak_info,
            'izin_lain2' => $request->izin_lain2,
            'cuti' => $request->cuti,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('absensi.add')->with('success', 'Update successfully.');
    }
}
