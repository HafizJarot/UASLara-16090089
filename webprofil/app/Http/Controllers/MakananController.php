<?php

namespace App\Http\Controllers;

use App\Makanan;
use Illuminate\Http\Request;

class MakananController extends Controller
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
        $makanan = Makanan::where('status', '1')->get();
        return view('pages.makanan.makanan', compact('makanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.makanan.create');
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
        $destinationPath = public_path('uploads/makanan');
        $foto->move($destinationPath, $filename);

        $makanan = new Makanan();
        $makanan->nama = $request->nama;
        $makanan->tempat = $request->tempat;
        $makanan->harga = $request->harga;
        $makanan->komposisi = $request->komposisi;
        $makanan->foto = $filename;
        $makanan->save();

        return redirect()->route('makanan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Makanan  $makanan
     * @return \Illuminate\Http\Response
     */
    public function show(Makanan $makanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Makanan  $makanan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $makanan = Makanan::find($id);
        return view('pages.makanan.edit', compact('makanan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Makanan  $makanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $makanan = Makanan::find($id);
        $makanan->nama = $request->nama;
        $makanan->tempat = $request->tempat;
        $makanan->harga = $request->harga;
        $makanan->komposisi = $request->komposisi;
        $foto = $request->file('foto');
        if ($foto == ''){
            $makanan->foto = $request->old_foto;
        }else{
            $filename = time().'.'.$foto->getClientOriginalExtension();
            $destinationPath = public_path('uploads/makanan');
            $foto->move($destinationPath, $filename);
            $makanan->foto = $filename;
        }
        //dd($request->all());
        $makanan->update();

        return redirect()->route('makanan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Makanan  $makanan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $makanan = Makanan::find($id);
        $makanan->update(['status' => '0']);
        return redirect()->route('makanan');
    }
}
