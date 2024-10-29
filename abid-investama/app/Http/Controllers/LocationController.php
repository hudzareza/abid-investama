<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Location;
use Illuminate\Support\Facades\DB;

class LocationController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        $data = DB::table('lokasi')->orderBy('id', 'desc')->get();

        return view('admin.location.index', compact('data'));
    }

    public function add(): View
    {
        return view('admin.location.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'alamat' => 'required|string',
            'no_telphone' => 'required|string',
        ]);

        Location::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_telphone' => $request->no_telphone,
        ]);

        return redirect()->route('location.list')->with('success', 'Update successfully.');
    }

    public function edit($id): View
    {
        $decryptedId = decrypt($id);

        $data = Location::findOrFail($decryptedId);
        $data = $data->toArray();
        return view('admin.location.edit', compact('data'));
    }

    public function update(Request $request)
    {
        $id = $request->id;

        $data = Location::findOrFail($id);

        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->no_telphone = $request->no_telphone;

        if ($data->update()) {
            $request->session()->regenerateToken();
            return redirect()->route('location.list')->withSuccess('Succesfully updated article');
        } else {
            return back()->withSuccess('Failed updated article');
        }
    }

    public function delete($id)
    {
        $decryptedId = decrypt($id);

        $data = Location::findOrFail($decryptedId);
        if ($data->delete()) {
            return redirect()->route('location.list')->withSuccess('Succesfully deleted');
        } else {
            return back()->withSuccess('Failed deleted Article');
        }
    }
}
