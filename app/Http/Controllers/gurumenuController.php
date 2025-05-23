<?php

namespace App\Http\Controllers;

use App\Models\gurumenu;
use App\Models\Telat;
use Illuminate\Http\Request;

class gurumenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $gurumenu = Telat::all();
        return view('gurumenu.index', compact('gurumenu'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('gurumenu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    Telat::create($request->all());
    return redirect()->route('gurumenu.index');
}


    /**
     * Display the specified resource.
     */
    public function show(guruMenu $guruMenu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $gurumenu = Telat::findOrFail($id);
        return view('gurumenu.edit', compact('gurumenu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $gurumenu = Telat::findOrFail($id);
        $gurumenu->update($request->all());
        return redirect()->route('gurumenu.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Telat::findOrFail($id)->delete();
        return redirect()->route('gurumenu.index');
    }
}
