<?php

namespace App\Http\Controllers;

use App\Models\Telat;
use Illuminate\Http\Request;

class telatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $telat = Telat::all();
        return view('telat.index', ['telat'=>$telat]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama_siswa' => 'required|string|max:255',
            'alasan' => 'required|string|max:255',
            'waktu_terlambat' => 'required|datetime-local',
            
        ]);
    
        Telat::create([
            'nama_siswa' => $request->nama_siswa,
            'alasan' => $request->alasan,
            'waktu_terlambat' => $request->waktu_terlambat,
           
        ]);
    
        return back()->with('success', 'Data berhasil dikirim!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Telat $telat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Telat $telat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Telat $telat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Telat $telat)
    {
        //
    }

    public function kirim(Request $request)
{
    $request->validate([
        'nama_siswa' => 'required|string|max:255',
        'alasan' => 'required|string|max:255',
        'waktu_terlambat' => 'required|date',
    ]);

    Telat::create([
        'nama_siswa' => $request->nama_siswa,
        'alasan' => $request->alasan,
        'waktu_terlambat' => $request->waktu_terlambat,
    ]);

    return redirect()->route('muridmenu.index')->with('success', 'Data berhasil dikirim!');
}

}
