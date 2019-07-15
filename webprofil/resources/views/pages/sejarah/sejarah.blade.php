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
        <h1><i class='fa fa-table'></i>Data Sejarah</h1>
    </div>
    <!-- Page Heading End-->                <!-- Your awesome content goes here -->
    <div class="row">

        <div class="col-md-12">
            <div class="widget">
                <div class="widget-header">

                        <a href="{{route('sejarah.create')}}" class="btn btn-info btn-sm pull-right"><i
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
                                    <th>Judul</th>
                                    <th>Artikel</th>
                                    <th>Gambar</th>
                                    <th width="15%">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $no = 1 ?>
                                @foreach($sejarah as $sejarah)
                                    <tr>
                                        <td>{{$no}}</td>
                                        <td>{{$sejarah->judul}}</td>
                                        <td>{{$sejarah->artikel}}</td>
                                        <td><img style="width: 50px; height: 50px;"
                                                 src="{{asset('uploads/sejarah/'. $sejarah->foto)}}"></td>
                                        <td>
                                            <a href="" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a>
                                            <a href="{{route('sejarah.edit', $sejarah->id)}}"
                                               class="btn btn-warning btn-sm"><i
                                                        class="fa fa-edit"></i></a>
                                            <a href="{{route('sejarah.destroy', $sejarah->id)}}" onclick="return confirm('Apakah Anda Yakn Menghapus Data Ini?')"
                                               class="btn btn-danger btn-sm"><i class="fa fa-remove"></i></a>
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