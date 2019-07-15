<?php

namespace App\Http\Controllers;

use App\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
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
        $galeri = Galeri::where('status', '1')->get();
        return view('pages.galeri.galeri', compact('galeri'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.galeri.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required',
            'tempat' => 'required',
            'harga' => 'required',
            'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $foto = $request->file('foto');
        $filename = time().'.'.$foto->getClientOriginalExtension();
        $destinationPath = public_path('uploads/galeri');
        $foto->move($destinationPath, $filename);

        $galeri = new Galeri();
        $galeri->nama = $request->nama;
        $galeri->tempat = $request->tempat;
        $galeri->harga = $request->harga;
        $galeri->foto = $filename;
        $galeri->save();

        return redirect()->route('galeri')->with('create', 'Berhasil Menambahkan Data Galeri');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function show(Galeri $galeri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $galeri = Galeri::find($id);
        return view('pages.galeri.edit', compact('galeri'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nama' => 'required',
            'tempat' => 'required',
            'harga' => 'required',
            'foto' => 'file|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $galeri = Galeri::find($id);
        $galeri->nama = $request->nama;
        $galeri->tempat = $request->tempat;
        $galeri->harga = $request->harga;
        $foto = $request->file('foto');
        if ($foto == ''){
            $galeri->old_foto;
        }else{
            $filename = time().'.'.$foto->getClientOriginalExtension();
            $destinationPath = public_path('uploads/galeri');
            $foto->move($destinationPath, $filename);
            $galeri->foto = $filename;
        }
        $galeri->update();

        return redirect()->route('galeri')->with('update', 'Berhasil Mengupdate Data Galeri');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galeri = Galeri::find($id);
        $galeri->update(['status' => '0']);
        return redirect()->route('galeri')->with('delete', 'Berhasil Menghapus Data Galeri');
    }
}
