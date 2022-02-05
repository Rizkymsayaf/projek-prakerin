<?php

namespace App\Http\Controllers;

use App\Models\Pengasuh;
use App\Http\Requests\StoreBarangRequest;
use App\Http\Requests\UpdateBarangRequest;
use Illuminate\Http\Request;

class DashboardPengasuhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $pengasuh = Pengasuh::all();
        return view('dashboard.pengasuh.index', compact('pengasuh'));

        // return view('dashboard.pengasuh.index', [
        //     'pengasuhs' => Pengasuh::where('user_id', auth()->user()->id)->get()

        // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pengasuh.create', [
            'pengasuh' => Pengasuh::all()
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
            'status' => 'required',
            'tanggal' => 'required',
        ]);

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
            'status' => 'required',
            'tanggal' => 'required'
        ];

        $validatedData =  $request->validate($rules);

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
        Pengasuh::destroy($pengasuh->id);
        return redirect('/dashboard/pengasuh')->with('success', 'Post has been deleted');
    }
}
