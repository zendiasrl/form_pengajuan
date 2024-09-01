<?php

namespace App\Http\Controllers;

// use App\Models\FormKaryawan;
use App\Models\FormManajer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class manajerController extends Controller
{
    public function index()
    {
        $datakar = DB::table('form_karyawans')->get();
        return view('manajer.dashboard', compact('datakar'));
    }
    public function logout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
    public function updateStatus(Request $request, $id)
    {
        // Validate the request input
        $request->validate([
            'status' => 'required|in:proses,disetujui,tidak disetujui',
        ]);

        // Update status di database
        DB::table('form_karyawans')
            ->where('id', $id)
            ->update(['status' => $request->input('status')]);

        // Redirect ke dashboard
        return redirect()->route('dashboard.manajer')->with('success', 'Status updated successfully');
    }
}
