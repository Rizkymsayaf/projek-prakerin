<?php

namespace App\Http\Controllers;

use App\Models\Anak_Asuh;
use App\Http\Requests\StoreAnak_AsuhRequest;
use App\Http\Requests\UpdateAnak_AsuhRequest;
use Illuminate\Http\Request;

class AnakAsuhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $anak_Asuh = Anak_Asuh::all();
        return view('dashboard.anak_asuh.index', compact('anak_Asuh'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.anak_asuh.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAnak_AsuhRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'umur' => 'required',
            'tanggal_lahir' => 'required',
        ]);


      Anak_Asuh::create($validatedData);
      return redirect('dashboard/anak_asuh')->with('success', 'New Post has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Anak_Asuh  $anak_Asuh
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $anak = Anak_Asuh::findOrFail($id);
        return view('dashboard.anak_asuh.show', compact('anak'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Anak_Asuh  $anak_Asuh
     * @return \Illuminate\Http\Response
     */
    public function edit(Anak_Asuh $anak_Asuh)
    {
        return view('dashboard.anak_asuh.edit', [
            'anak' => $anak_Asuh,
            'Anak_Asuhs' => Anak_Asuh::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAnak_AsuhRequest  $request
     * @param  \App\Models\Anak_Asuh  $anak_Asuh
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Anak_Asuh $anak_Asuh)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'umur' => 'required',
            'tanggal_lahir' => 'required',
        ]);


        Anak_Asuh::where('id', $anak_Asuh->id)
        -> update($validatedData);
      return redirect('dashboard/anak_asuh')->with('success', 'New Data has been added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Anak_Asuh  $anak_Asuh
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anak_Asuh $anak_Asuh)
    {
        Anak_Asuh::destroy($anak_Asuh->id);
        return redirect('/dashboard/anak_asuh')->with('success', 'Data has been deleted');
    }
}
