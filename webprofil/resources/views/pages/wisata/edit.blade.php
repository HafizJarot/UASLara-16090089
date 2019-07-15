<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 23/4/2019
 * Time: 5:41 PM
 */

?>

@extends('admin.app')
@section('content')
    <div class="widget">

        <div class="widget-content padding">
            <div id="basic-form">
                <form role="form" action="{{route('wisata.update', $wisata->id)}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{method_field('PATCH')}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="nama" value="{{$wisata->nama}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Lokasi</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="lokasi" value="{{$wisata->lokasi}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Harga Tiket</label>
                        <input type="number" class="form-control" id="exampleInputPassword1" name="harga" value="{{$wisata->harga}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Foto</label><br>
                        <input type="hidden" name="old_foto" value="{{$wisata->foto}}">
                        <input type="file" class="btn btn-default" title="Select file" name="foto">
                    </div>
                    <button type="submit" class="btn btn-default">Save</button>
                </form>
            </div>
        </div>
    </div>

@stop
