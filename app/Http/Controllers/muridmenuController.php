<?php

namespace App\Http\Controllers;

use App\Models\muridMenu;
use App\Models\Telat;
use Illuminate\Http\Request;

class muridmenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $muridmenu = Telat::all();
    return view('muridmenu.index', compact('muridmenu'));
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
    }

    /**
     * Display the specified resource.
     */
    public function show(muridMenu $muridMenu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(muridMenu $muridMenu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, muridMenu $muridMenu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(muridMenu $muridMenu)
    {
        //
    }
}
