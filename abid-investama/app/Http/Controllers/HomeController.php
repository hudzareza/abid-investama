<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Company_profile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        $data = DB::table('company_profile')->where('id', '=', '1')->get();
        $data = $data->toArray();

        $filename = $data[0]->filename;
        $about_us = $data[0]->about_us;
        $motto = $data[0]->motto;
        $parking_solution = $data[0]->parking_solution;
        $commitment = $data[0]->commitment;
        $experience = $data[0]->experience;
        $insurance = $data[0]->insurance;
        $technology = $data[0]->technology;
        $agreement = $data[0]->agreement;
        $definitive = $data[0]->definitive;
        $operating_system = $data[0]->operating_system;
        $feature_system = $data[0]->feature_system;
        return view('front.home.index', compact('filename', 'about_us', 'motto', 'parking_solution', 'commitment', 'experience', 'insurance', 'technology', 'agreement', 'definitive', 'operating_system', 'feature_system'));
    }

    public function logged(): View
    {
        $data = DB::table('company_profile')->where('id', '=', '1')->get();
        $data = $data->toArray();
        $filename = $data[0]->filename;
        $about_us = $data[0]->about_us;
        $motto = $data[0]->motto;
        $parking_solution = $data[0]->parking_solution;
        $commitment = $data[0]->commitment;
        $experience = $data[0]->experience;
        $insurance = $data[0]->insurance;
        $technology = $data[0]->technology;
        $agreement = $data[0]->agreement;
        $definitive = $data[0]->definitive;
        $operating_system = $data[0]->operating_system;
        $feature_system = $data[0]->feature_system;

        return view('dashboard', compact('filename', 'about_us', 'motto', 'parking_solution', 'commitment', 'experience', 'insurance', 'technology', 'agreement', 'definitive', 'operating_system', 'feature_system'));
    }

    public function dashboard(): View
    {
        $data = DB::table('company_profile')->where('id', '=', '1')->get();
        return view('admin.dashboard.index', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'about_us' => 'required|string',
            'motto' => 'required|string',
            'parking_solution' => 'required|string',
            'commitment' => 'required|string',
            'experience' => 'required|string',
            'insurance' => 'required|string',
            'technology' => 'required|string',
            'agreement' => 'required|string',
            'definitive' => 'required|string',
            'operating_system' => 'required|string',
            'feature_system' => 'required|string',
        ]);
        $data = [
            'about_us' => $request->about_us,
            'motto' => $request->motto,
            'parking_solution' => $request->parking_solution,
            'commitment' => $request->commitment,
            'experience' => $request->experience,
            'insurance' => $request->insurance,
            'technology' => $request->technology,
            'agreement' => $request->agreement,
            'definitive' => $request->definitive,
            'operating_system' => $request->operating_system,
            'feature_system' => $request->feature_system,
        ];
        // Handle image upload
        if ($request->hasFile('filename')) {
            $imagePath = $request->file('filename')->store('public/images/');
            $imageUrl = basename($imagePath); // Mendapatkan nama file gambar
        } else {
            $imageUrl = null; // Jika tidak ada gambar, set null
        }

        // Upsert data
        Company_profile::updateOrInsert(
            ['id' => $request->id], // Kriteria pencocokan
            array_merge($data, ['filename' => $imageUrl]) // Gabungkan data validasi dengan path gambar
        );

        return redirect()->route('dashboard')->with('success', 'Update successfully.');
    }
}
