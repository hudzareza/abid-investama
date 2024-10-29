<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Schedule;
use Illuminate\Support\Facades\DB;

class ScheduleController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        $schedule = DB::table('schedule')
            ->join('lokasi', 'schedule.id_lokasi', '=', 'lokasi.id')
            ->select('schedule.*', 'lokasi.nama as nama_lokasi')
            ->orderBy('id', 'desc')
            ->get();
        $schedule = $schedule->toArray();
        return view('admin.schedule.index', compact('schedule'));
    }

    public function add(): View
    {
        $location = DB::table('lokasi')->orderBy('id', 'desc')->get();
        $location = $location->toArray();

        return view('front.schedule.add', compact('location'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_lokasi' => 'required|string',
            'nik' => 'required|string',
            'nama' => 'required|string',
            'bagian' => 'required|string',
            'ploting' => 'required|string',
            'tanggal' => 'required|string',
            'bulan' => 'required|string',
            'tahun' => 'required|string',
            'keterangan' => 'required|string',
        ]);

        Schedule::create([
            'id_lokasi' => $request->id_lokasi,
            'nik' => $request->nik,
            'nama' => $request->nama,
            'bagian' => $request->bagian,
            'ploting' => $request->ploting,
            'tanggal' => $request->tanggal,
            'bulan' => $request->bulan,
            'tahun' => $request->tahun,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('schedule.add')->with('success', 'Update successfully.');
    }
}
