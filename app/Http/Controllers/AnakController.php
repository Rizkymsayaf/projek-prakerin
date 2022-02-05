<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Http\Requests\StoreAnakRequest;
use App\Http\Requests\UpdateAnakRequest;
use Illuminate\Http\Request;

class AnakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anak = Anak::all();
        return view('dashboard.anak.index', compact('anak'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.anak.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAnakRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'umur' => 'required',
            'tanggal_lahir' => 'required',
        ]);

      Anak::create($validatedData);
      return redirect('dashboard/anak')->with('success', 'New Data has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Anak  $anak
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $anak = Anak::findOrFail($id);
        return view('dashboard.anak.show', compact('anak'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Anak  $anak
     * @return \Illuminate\Http\Response
     */
    public function edit(Anak $anak)
    {
        return view('dashboard.anak.edit', [
            'a' => $anak,
            'anaks' => Anak::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAnakRequest  $request
     * @param  \App\Models\Anak  $anak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Anak $anak)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'umur' => 'required',
            'tanggal_lahir' => 'required',
        ]);


        Anak::where('id', $anak->id)
        -> update($validatedData);
      return redirect('dashboard/anak')->with('success', 'New Data has been added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Anak  $anak
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anak $anak)
    {
        Anak::destroy($anak->id);
        return redirect('/dashboard/anak')->with('success', 'data has been deleted');
    }
}
