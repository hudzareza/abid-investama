<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Income_casual;
use App\Models\Income_member;
use Illuminate\Support\Facades\DB;

class IncomeController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        $casual = DB::table('income_casual')
            ->join('lokasi', 'income_casual.id_lokasi', '=', 'lokasi.id')
            ->select('income_casual.*', 'lokasi.nama as nama_lokasi')
            ->orderBy('id', 'desc')
            ->get();
        $member = DB::table('income_member')
            ->join('lokasi', 'income_member.id_lokasi', '=', 'lokasi.id')
            ->select('income_member.*', 'lokasi.nama as nama_lokasi')
            ->orderBy('id', 'desc')
            ->get();
        $casualSummary = DB::table('income_casual')->sum('income');
        $memberSummary = DB::table('income_member')->sum('income');
        $casual = $casual->toArray();
        $member = $member->toArray();

        return view('admin.income.index', compact('casual', 'member', 'casualSummary', 'memberSummary'));
    }

    public function add(): View
    {
        $location = DB::table('lokasi')->orderBy('id', 'desc')->get();
        $location = $location->toArray();

        return view('front.income.add', compact('location'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_lokasi' => 'required|string',
            'tanggal' => 'required|string',
            'bulan' => 'required|string',
            'tahun' => 'required|string',
            'jam_masuk' => 'required|string',
            'jam_keluar' => 'required|string',
            'sakkp' => 'required|string',
            'income' => 'required|string',
        ]);

        Income_casual::create([
            // 'nama' => $request->nama,
            // 'email' => $request->email,
            'id_lokasi' => $request->id_lokasi,
            'tanggal' => $request->tanggal,
            'bulan' => $request->bulan,
            'tahun' => $request->tahun,
            'in' => $request->jam_masuk,
            'out' => $request->jam_keluar,
            'sakkp' => $request->sakkp,
            'income' => $request->income,
        ]);

        return redirect()->route('income.add')->with('success', 'Update successfully.');
    }

    public function storemember(Request $request)
    {
        $request->validate([
            'id_lokasi' => 'required|string',
            'tanggal' => 'required|string',
            'bulan' => 'required|string',
            'tahun' => 'required|string',
            'emoney' => 'required|string',
            'flazz' => 'required|string',
            'bri' => 'required|string',
            'bni' => 'required|string',
            'qris' => 'required|string',
            'income' => 'required|string',
        ]);

        Income_member::create([
            // 'nama' => $request->nama,
            // 'email' => $request->email,
            'id_lokasi' => $request->id_lokasi,
            'tanggal' => $request->tanggal,
            'bulan' => $request->bulan,
            'tahun' => $request->tahun,
            'emoney' => $request->emoney,
            'flazz' => $request->flazz,
            'bri' => $request->bri,
            'bni' => $request->bni,
            'qris' => $request->qris,
            'income' => $request->income,
        ]);

        return redirect()->route('income.add')->with('success', 'Update successfully.');
    }
}
