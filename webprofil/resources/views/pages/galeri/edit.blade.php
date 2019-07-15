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
                <form role="form" method="post" enctype="multipart/form-data" action="{{route('galeri.update', $galeri->id)}}">
                    {{csrf_field()}}
                    {{method_field('PATCH')}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" class="form-control {{$errors->has('nama')?'is-invalid':''}}" name="nama" value="{{$galeri->nama}}">
                        @if($errors->has('nama'))
                            <span class="invalid-feedback" role="alert">
                                <p>{{$errors->first('nama')}}</p>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="artikel">Tempat</label>
                        <input type="text" class="form-control {{$errors->has('tempat')?'is-invalid':''}}" name="tempat" value="{{$galeri->tempat}}">
                        @if($errors->has('tempat'))
                            <span class="invalid-feedback" role="alert">
                                <p>{{$errors->first('tempat')}}</p>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="artikel">Harga</label>
                        <input type="number" class="form-control {{$errors->has('harga')?'is-invalid':''}}" name="harga" value="{{$galeri->harga}}">
                        @if($errors->has('harga'))
                            <span class="invalid-feedback" role="alert">
                                <p>{{$errors->first('harga')}}</p>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Foto</label><br>
                        <input type="hidden" value="{{$galeri->foto}}" name="old_foto">
                        <input type="file" class="btn btn-default {{$errors->has('foto')?'is-invalid':''}}" title="Select file" name="foto">
                        @if($errors->has('foto'))
                            <span class="invalid-feedback" role="alert">
                                <p>{{$errors->first('foto')}}</p>
                            </span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-default">Save</button>
                </form>
            </div>
        </div>
    </div>

@stop

