<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Request_item;
use Illuminate\Support\Facades\DB;

class RequestitemController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        $data = DB::table('request_item')->orderBy('id', 'desc')->get();

        return view('admin.request.index', compact('data'));
    }

    public function add(): View
    {
        return view('admin.request.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_permintaan' => 'required|string',
            'keterangan' => 'required|string',
        ]);

        Request_item::create([
            'nama_permintaan' => $request->nama_permintaan,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('request.list')->with('success', 'Update successfully.');
    }

    public function edit($id): View
    {
        $decryptedId = decrypt($id);

        $data = Request_item::findOrFail($decryptedId);
        $data = $data->toArray();
        return view('admin.request.edit', compact('data'));
    }

    public function update(Request $request)
    {
        $id = $request->id;

        $data = Request_item::findOrFail($id);

        $data->nama_permintaan = $request->nama_permintaan;
        $data->keterangan = $request->keterangan;

        if ($data->update()) {
            $request->session()->regenerateToken();
            return redirect()->route('request.list')->withSuccess('Succesfully updated article');
        } else {
            return back()->withSuccess('Failed updated article');
        }
    }

    public function delete($id)
    {
        $decryptedId = decrypt($id);

        $data = Request_item::findOrFail($decryptedId);
        if ($data->delete()) {
            return redirect()->route('request.list')->withSuccess('Succesfully deleted');
        } else {
            return back()->withSuccess('Failed deleted Article');
        }
    }
}
