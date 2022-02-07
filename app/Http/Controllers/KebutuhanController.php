<?php

namespace App\Http\Controllers;

use App\Models\Kebutuhan;
use App\Http\Requests\StoreKebutuhanRequest;
use App\Http\Requests\UpdateKebutuhanRequest;
use Illuminate\Http\Request;

class KebutuhanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kebutuhan = Kebutuhan::all();
        return view('dashboard.kebutuhan.index', compact('kebutuhan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.kebutuhan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKebutuhanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_barang' => 'required|max:255',
            'harga_barang' => 'required',
            'jumlah_barang' => 'required',
        ]);


      Kebutuhan::create($validatedData);
      return redirect('dashboard/kebutuhan')->with('success', 'New Post has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kebutuhan  $kebutuhan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kebutuhan = Kebutuhan::findOrFail($id);
        return view('dashboard.kebutuhan.show', compact('kebutuhan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kebutuhan  $kebutuhan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kebutuhan $kebutuhan)
    {
        return view('dashboard.donasi.edit', [
            'k' => $kebutuhan,
            'donasis' => Kebutuhan::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKebutuhanRequest  $request
     * @param  \App\Models\Kebutuhan  $kebutuhan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kebutuhan $kebutuhan)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'harga_barang' => 'required',
            'jumlah_barang' => 'required',
        ]);


        Kebutuhan::where('id', $kebutuhan->id)
        -> update($validatedData);
      return redirect('dashboard/kebutuhan')->with('success', 'New Post has been added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kebutuhan  $kebutuhan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kebutuhan $kebutuhan)
    {
        Kebutuhan::destroy($kebutuhan->id);
        return redirect('/dashboard/kebutuhan')->with('success', 'Post has been deleted');
    }
}
