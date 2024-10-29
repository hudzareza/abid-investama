<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Monthly_budget;
use Illuminate\Support\Facades\DB;

class MonthlybudgetController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        $monthly = DB::table('monthly_budget')
            ->join('lokasi', 'monthly_budget.id_lokasi', '=', 'lokasi.id')
            ->join('request_item', 'monthly_budget.id_permintaan', '=', 'request_item.id')
            ->select('monthly_budget.*', 'lokasi.nama as nama_lokasi', 'request_item.nama_permintaan as permintaan')
            ->orderBy('id', 'desc')
            ->get();
        $monthly = $monthly->toArray();
        return view('admin.monthly.index', compact('monthly'));
    }

    public function add(): View
    {
        $location = DB::table('lokasi')->orderBy('id', 'desc')->get();
        $request = DB::table('request_item')->orderBy('id', 'desc')->get();
        $location = $location->toArray();
        $request = $request->toArray();

        return view('front.monthly.add', compact('location', 'request'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_lokasi' => 'required|string',
            'id_permintaan' => 'required|string',
            'nik' => 'required|string',
            'nama' => 'required|string',
            'bagian' => 'required|string',
            'tanggal' => 'required|string',
            'bulan' => 'required|string',
            'tahun' => 'required|string',
            'stock' => 'required|string',
            'fpb' => 'required|string',
            'keterangan' => 'required|string',
        ]);

        Monthly_budget::create([
            'id_lokasi' => $request->id_lokasi,
            'id_permintaan' => $request->id_permintaan,
            'nik' => $request->nik,
            'nama' => $request->nama,
            'bagian' => $request->bagian,
            'tanggal' => $request->tanggal,
            'bulan' => $request->bulan,
            'tahun' => $request->tahun,
            'stock' => $request->stock,
            'fpb' => $request->fpb,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('monthly.add')->with('success', 'Update successfully.');
    }
}
