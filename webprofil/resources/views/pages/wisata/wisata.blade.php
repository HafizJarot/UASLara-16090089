@extends('admin.app')

@section('content')

    <div class="page-heading">
        <h1><i class='fa fa-table'></i> Data Wisata</h1>
    </div>
    <!-- Page Heading End-->                <!-- Your awesome content goes here -->
    <div class="row">

        <div class="col-md-12">
            <div class="widget">
                <div class="widget-header">
                        <a href="{{route('wisata.create')}}" class="btn btn-primary btn-sm pull-right"><i
                                    class="fa fa-plus"></i></a>
                    </h2>

                </div>
                <div class="widget-content">
                    <br>
                    <div class="table-responsive">
                        <table id="datatables-1" class="table table-striped table-bordered" cellspacing="0"
                               width="100%">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Tempat</th>
                                <th>Harga Tiket</th>
                                <th>Foto</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $no = 1 ?>
                            @foreach($wisata as $wisata)
                                <tr>
                                    <td>{{$no}}</td>
                                    <td>{{$wisata->nama}}</td>
                                    <td>{{$wisata->tempat}}</td>
                                    <td>{{$wisata->harga}}</td>
                                    <td><img src="{{asset('uploads/wisata/'.$wisata->foto)}}" width="50" height="50"></td>
                                    @if($wisata->status == '1')
                                        <td><span class="badge badge-success">Aktif</span></td>
                                    @else
                                        <td><span class="badge badge-danger">Tidak Aktif</span></td>
                                    @endif
                                    <td>
                                        <a href="{{route('wisata.edit', $wisata->id)}}" class="btn btn-primary btn-sm"><i
                                                    class="fa fa-edit"></i></a>
                                        <a href="{{route('wisata.destroy', $wisata->id)}}" onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini?')" class="btn btn-primary btn-sm"><i class="fa fa-remove"></i></a>
                                    </td>
                                </tr>
                                <?php $no++ ?>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection