<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Patty_cash;
use Illuminate\Support\Facades\DB;

class PattycashController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        $patty = DB::table('patty_cash')
            ->join('lokasi', 'patty_cash.id_lokasi', '=', 'lokasi.id')
            ->select('patty_cash.*', 'lokasi.nama as nama_lokasi')
            ->orderBy('id', 'desc')
            ->get();
        $patty = $patty->toArray();
        $pattySummary = DB::table('patty_cash')->sum('saldo');

        return view('admin.patty.index', compact('patty', 'pattySummary'));
    }

    public function add(): View
    {
        $location = DB::table('lokasi')->orderBy('id', 'desc')->get();
        $location = $location->toArray();

        return view('front.patty.add', compact('location'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_lokasi' => 'required|string',
            'supervisor' => 'required|string',
            'administrasi' => 'required|string',
            'nik' => 'required|string',
            'nama' => 'required|string',
            'bagian' => 'required|string',
            'tanggal' => 'required|string',
            'bulan' => 'required|string',
            'tahun' => 'required|string',
            'keterangan_pemakaian' => 'required|string',
            'debet' => 'required|string',
            'kredit' => 'required|string',
            'saldo' => 'required|string',
        ]);

        Patty_cash::create([
            'id_lokasi' => $request->id_lokasi,
            'supervisor' => $request->supervisor,
            'administrasi' => $request->administrasi,
            'nik' => $request->nik,
            'nama' => $request->nama,
            'bagian' => $request->bagian,
            'tanggal' => $request->tanggal,
            'bulan' => $request->bulan,
            'tahun' => $request->tahun,
            'keterangan_pemakaian' => $request->keterangan_pemakaian,
            'debet' => $request->debet,
            'kredit' => $request->kredit,
            'saldo' => $request->saldo,
        ]);

        return redirect()->route('patty.add')->with('success', 'Update successfully.');
    }
}
