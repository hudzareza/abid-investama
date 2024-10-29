<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Member_data;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        $member = DB::table('member_data')
            ->join('lokasi', 'member_data.id_lokasi', '=', 'lokasi.id')
            ->select('member_data.*', 'lokasi.nama as nama_lokasi')
            ->orderBy('id', 'desc')
            ->get();
        $member = $member->toArray();

        return view('admin.member.index', compact('member'));
    }

    public function add(): View
    {
        $location = DB::table('lokasi')->orderBy('id', 'desc')->get();
        $location = $location->toArray();

        return view('front.member.add', compact('location'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_lokasi' => 'required|string',
            'nama' => 'required|string',
            'jenis_kendaraan' => 'required|string',
            'no_pol' => 'required|string',
            'no_kwt' => 'required|string',
            'mulai' => 'required|string',
            'akhir' => 'required|string',
            'harga' => 'required|string',
            'keterangan' => 'required|string',
        ]);

        Member_data::create([
            'id_lokasi' => $request->id_lokasi,
            'nama' => $request->nama,
            'jenis_kendaraan' => $request->jenis_kendaraan,
            'no_pol' => $request->no_pol,
            'no_kwt' => $request->no_kwt,
            'mulai' => $request->mulai,
            'akhir' => $request->akhir,
            'harga' => $request->harga,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('member.add')->with('success', 'Update successfully.');
    }
}
