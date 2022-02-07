<?php

namespace App\Http\Controllers;

use App\Models\Pengasuh;
use App\Http\Requests\StoreBarangRequest;
use App\Http\Requests\UpdateBarangRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PengasuhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pengasuh.index', [
            'pengasuhs' => Pengasuh::where('user_id', auth()->user()->id)->get()

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pengasuh.create', [
            'pengasuhs' => Pengasuh::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBarangRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'alamat' => 'required',
            'tanggal' => 'required',
            'image' => 'image|file|max:1024',
        ]);


      if($request->file('image')){
        $validatedData['image'] = $request->file('image')->store('pengasuh-images');
    }

        $validatedData['user_id'] = auth()->user()->id;

        Pengasuh::create($validatedData);
        return redirect('dashboard/pengasuh')->with('success', 'New Post has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengasuh  $pengasuh
     * @return \Illuminate\Http\Response
     */
    public function show(Pengasuh $pengasuh)
    {
        return view('dashboard.pengasuh.show', [
            'pengasuh' => $pengasuh
        ]);

        if($pengasuh->user->id !== auth()->user()->id) {
            abort(403);
       }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengasuh $pengasuh)
    {
        return view('dashboard.pengasuh.edit', [
            'p' => $pengasuh,
            'pengasuhs' => Pengasuh::all()
        ]);
    }



    public function update(Request $request, Pengasuh $pengasuh)
    {
        $rules = [
            'nama' => 'required|max:255',
            'alamat' => 'required',
            'tanggal' => 'required',
            'image' => 'image|file|max:1024',
        ];

        $validatedData =  $request->validate($rules);
        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('pengasuh-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Pengasuh::where('id', $pengasuh->id)
        -> update($validatedData);
        return redirect('/dashboard/pengasuh')->with('success', 'Post has been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengasuh $pengasuh)
    {
        if($pengasuh->image){
            Storage::delete($pengasuh->image);
        }
        Pengasuh::destroy($pengasuh->id);
        return redirect('/dashboard/pengasuh')->with('success', 'Post has been deleted');
    }
}
