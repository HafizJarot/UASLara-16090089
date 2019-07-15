<?php

namespace App\Http\Controllers;

use App\Sejarah;
use Illuminate\Http\Request;

class SejarahController extends Controller
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
        /**/
        $sejarah = Sejarah::where('status', '1')->get();
        return view('pages.sejarah.sejarah', compact('sejarah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.sejarah.create');
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
            'judul' => 'required',
            'artikel' => 'required',
            'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $foto = $request->file('foto');
        $filename = time().'.'.$foto->getClientOriginalExtension();
        $destinationPath = public_path('uploads/Sejarah');
        $foto->move($destinationPath, $filename);

        $sejarah = new Sejarah();
        $sejarah->judul = $request->judul;
        $sejarah->artikel = $request->artikel;
        $sejarah->foto = $filename;
        $sejarah->save();

        return redirect()->route('sejarah')->with('create', 'Berhasil Menambahkan Data Sejarah');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sejarah  $sejarah
     * @return \Illuminate\Http\Response
     */
    public function show(Sejarah $sejarah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sejarah  $sejarah
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sejarah = Sejarah::find($id);
        return view('pages.sejarah.edit', compact('sejarah'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sejarah  $sejarah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'judul' => 'required',
            'artikel' => 'required',
            'foto' => 'file|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $sejarah = Sejarah::find($id);
        $sejarah->judul = $request->judul;
        $sejarah->artikel = $request->artikel;
        $foto = $request->file('foto');
        if ($foto == ''){
            $sejarah->foto = $request->old_foto;
        }else{
            $filename = time().'.'.$foto->getClientOriginalExtension();
            $destinationPath = public_path('uploads/sejarah');
            $foto->move($destinationPath, $filename);
            $sejarah->foto = $filename;
        }
        $sejarah->update();
        return redirect()->route('sejarah')->with('update', 'Berhasil Mengupdate Data Sejarah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sejarah  $sejarah
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sejarah = Sejarah::find($id);
        $sejarah->update(['status' => '0']);
        return redirect()->route('sejarah')->with('delete', 'Berhasil Menghapus Data Sejarah');

    }
}
