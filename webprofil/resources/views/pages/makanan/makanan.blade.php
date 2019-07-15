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
        <h1><i class='fa fa-table'></i> Data Makanan</h1>

    </div>
    <!-- Page Heading End-->                <!-- Your awesome content goes here -->
    <div class="row">

        <div class="col-md-12">
            <div class="widget">
                <div class="widget-header">

                        <a href="{{route('makanan.create')}}" class="btn btn-primary btn-sm pull-right"><i class="fa fa-plus"></i></a>
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
                                    <th>Harga</th>
                                    <th>Tempat</th>
                                    <th>Komposisi</th>
                                    <th>Foto</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $no = 1 ?>
                                @foreach($makanan as $makanan)
                                <tr>
                                    <td>{{$no}}</td>
                                    <td>{{$makanan->nama}}</td>
                                    <td>{{$makanan->harga}}</td>
                                    <td>{{$makanan->tempat}}</td>
                                    <td>{{$makanan->komposisi}}</td>
                                    <td><img src="{{asset('uploads/makanan/'.$makanan->foto)}}" width="50" height="50"></td>
                                    @if($makanan->status == '1')
                                        <td><span class="badge badge-success">Aktif</span></td>
                                    @else
                                        <td><span class="badge badge-danger">Tidak Aktif</span></td>
                                    @endif
                                    <td>
                                        <a href="{{route('makanan.edit', $makanan->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                        <a href="{{route('makanan.destroy', $makanan->id)}}" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')" class="btn btn-primary btn-sm"><i class="fa fa-remove"></i></a>
                                    </td>
                                </tr>
                                    <?php $no++ ?>
                                    @endforeach
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection