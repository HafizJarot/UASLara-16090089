@extends('admin.app')
@section('content')
    <div class="widget">

        <div class="widget-content padding">
            <div id="basic-form">
                <form role="form" method="post" enctype="multipart/form-data" action="{{route('sejarah.store')}}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Judul</label>
                        <input type="text" class="form-control {{$errors->has('judul')?'is-invalid':''}}" name="judul">
                        @if($errors->has('judul'))
                            <span class="invalid-feedback" role="alert">
                                <p>{{$errors->first('judul')}}</p>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="artikel">Artikel</label>
                        <input type="text" class="form-control {{$errors->has('artikel')?'is-invalid':''}}" name="artikel">
                        @if($errors->has('artikel'))
                            <span class="invalid-feedback" role="alert">
                                <p>{{$errors->first('artikel')}}</p>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Foto</label><br>
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

