@extends('admin.app')

@section('content')


    @if($message = Session::get('create'))
        <div class="alert alert-info alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <strong>{{$message}}</strong>
        </div>
    @endif

    @if($message = Session::get('update'))
        <div class="alert alert-info alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <strong>{{$message}}</strong>
        </div>
    @endif

    @if($message = Session::get('delete'))
        <div class="alert alert-info alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <strong>{{$message}}</strong>
        </div>
    @endif

    <div class="page-heading">
        <h1><i class='fa fa-table'></i> Data Galeri</h1>

    </div>
    <!-- Page Heading End-->                <!-- Your awesome content goes here -->
    <div class="row">

        <div class="col-md-12">
            <div class="widget">
                <div class="widget-header">

                        <a href="{{route('galeri.create')}}" class="btn btn-primary btn-sm pull-right"><i
                                    class="fa fa-plus"></i></a>
                    </h2>

                </div>
                <div class="widget-content">
                    <br>
                    <div class="table-responsive">
                        <form class='form-horizontal' role='form'>

                            <table id="datatables-1" class="table table-striped table-bordered" cellspacing="0"
                                   width="100%">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Tempat</th>
                                    <th>Harga Tiket</th>
                                    <th>Foto</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $no = 1 ?>
                                @foreach($galeri as $galeri)
                                    <tr>
                                        <td>{{$no}}</td>
                                        <td>{{$galeri->nama}}</td>
                                        <td>{{$galeri->tempat}}</td>
                                        <td>{{$galeri->harga}}</td>
                                        <td><img src="{{asset('uploads/galeri/'. $galeri->foto)}}" width="60" height="60"></td>
                                        <td>
                                            <a href="{{route('galeri.edit', $galeri->id)}}" class="btn btn-primary btn-sm"><i
                                                        class="fa fa-edit"></i></a>
                                            <a href="{{route('galeri.destroy', $galeri->id)}}" onclick="return confirm('Apakah Anda Yakin Ingin enghapus Data Ini?')" class="btn btn-primary btn-sm"><i class="fa fa-remove"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                <?php $no++ ?>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection