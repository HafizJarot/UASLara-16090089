<?php

namespace App\Http\Controllers;

use App\Makanan;
use App\Sejarah;
use App\Wisata;
use Illuminate\Http\Request;
use App\Galeri;
class FrontEndController extends Controller
{
    public function userhome(){
        $sejarah=Sejarah::where('status','1')->get();
        $galeris = Galeri::orderBy('id','DESC')->where('status', '1')->paginate(6);
        $galeries = Galeri::orderBy('id','DESC')->where('status', '1')->paginate(6);
        $makanans=Makanan::orderBy('id','DESC')->where('status', '1')->paginate(6);
        $sejarahs=Sejarah::orderBy('id','DESC')->where('status', '1')->paginate(3);
        $wisatas=Wisata::orderBy('id','DESC')->where('status', '1')->paginate(6);
        $wisatai =Wisata::orderBy('id','DESC')->where('status', '1')->paginate(6);
        return view('pages-user.home',compact('sejarah','galeries','makanans', 'galeris','sejarahs','wisatas','wisatai'));
    }
}
