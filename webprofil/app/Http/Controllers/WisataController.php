<?php

namespace App\Http\Controllers;

use App\Wisata;
use Illuminate\Http\Request;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $wisata = Wisata::where('status', '1')->get();
        return view('pages.wisata.wisata', compact('wisata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.wisata.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $foto = $request->file('foto');
        $filename = time().'.'.$foto->getClientOriginalExtension();
        $destinationPath = public_path('uploads/wisata');
        $foto->move($destinationPath, $filename);

        $wisata = new Wisata();
        $wisata->nama = $request->nama;
        $wisata->lokasi = $request->lokasi;
        $wisata->harga = $request->harga;
        $wisata->foto = $filename;
        $wisata->save();

        return redirect()->route('wisata');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function show(Wisata $wisata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $wisata = Wisata::find($id);
        return view('pages.wisata.edit', compact('wisata'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        $wisata = Wisata::find($id);
        $wisata->nama = $request->nama;
        $wisata->lokasi = $request->lokasi;
        $wisata->harga = $request->harga;
        $foto = $request->file('foto');
        if ($foto == ''){
            $wisata->foto = $request->old_foto;
        }else{
            $filename = time().'.'.$foto->getClientOriginalExtension();
            $destinationPath = public_path('uploads/wisata');
            $foto->move($destinationPath, $filename);
            $wisata->foto = $filename;
        }
        $wisata->update();

        return redirect()->route('wisata');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wisata = Wisata::find($id);
        $wisata->update(['status' => '0']);
        return redirect()->route('wisata');
    }
}
