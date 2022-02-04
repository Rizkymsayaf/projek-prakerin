<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use App\Http\Requests\StoreDonasiRequest;
use App\Http\Requests\UpdateDonasiRequest;
use Illuminate\Http\Request;
class DonasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donasi = Donasi::all();
        return view('dashboard.donasi.index', compact('donasi'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.donasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDonasiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'alamat' => 'required',
            'No_Rekening' => 'required',
            'bank' => 'required',
            'nominal' => 'required',
        ]);


      Donasi::create($validatedData);
      return redirect('dashboard/donasi')->with('success', 'New Post has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Donasi  $donasi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $donasi = Donasi::findOrFail($id);
        return view('dashboard.donasi.show', compact('donasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Donasi  $donasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Donasi $donasi)
    {
        return view('dashboard.donasi.edit', [
            'd' => $donasi,
            'donasis' => donasi::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDonasiRequest  $request
     * @param  \App\Models\Donasi  $donasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donasi $donasi)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'alamat' => 'required',
            'No_Rekening' => 'required',
            'bank' => 'required',
            'nominal' => 'required',
        ]);


        donasi::where('id', $donasi->id)
        -> update($validatedData);
      return redirect('dashboard/donasi')->with('success', 'New Post has been added');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Donasi  $donasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donasi $donasi)
    {
        donasi::destroy($donasi->id);
        return redirect('/dashboard/donasi')->with('success', 'Post has been deleted');
    }
}

