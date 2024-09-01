<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormKaryawan;

class KaryawanController extends Controller
{
    public function index()
    {

        return view('karyawan.dashboard');
    }

    public function showstatus()
    {
        $data = FormKaryawan::all();
        // dd($data);
        return view('karyawan.status', compact('data'));
    }


    public function logout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    public function addlembur(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'posisi' => 'required|string|max:255',
            'hari' => 'required|string',
            'tanggal' => 'required|date',
            'jam_mulai' => 'required|date_format:H:i',
            'jam_selesai' => 'required|date_format:H:i',
            'durasi' => 'required|string',
            'pekerjaan' => 'required|string',
            'status' => 'nullable|string',


        ]);
        // dd($validatedData);
        FormKaryawan::create($validatedData);
        return redirect()->route('karyawan.status');
    }

    public function create()
    {
        return view('karyawan.addlembur');
    }
}
