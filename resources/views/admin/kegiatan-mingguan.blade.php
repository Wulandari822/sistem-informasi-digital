@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Kegiatan Mingguan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashbord') }}">Home</a></li>
                        <li class="breadcrumb-item active">Kegiatan Mingguan</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Bordered Table</h3>
                            <a href="{{ route('admin.kegiatan-mingguan-create') }}">
                                <button class="btn btn-sm btn-primary" style="float: right">Tambah Kegiatan</button>
                            </a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px" class="text-center">No</th>
                                        <th style="width: 10px" class="text-center">Minggu ke</th>
                                        <th class="text-center">Kegiatan</th>
                                        <th style="width: 30px" class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kegiatanM as $kegiatan)
                                        <tr>
                                            <td class="text-center">{{ $kegiatan->id }}</td>
                                            <td class="text-center">{{ $kegiatan->kegiatan_mingguan }}</td>
                                            <td>{{ $kegiatan->isi_kegiatan }}</td>
                                            <td style="display: flex; gap: 5px;" class="text-center">
                                                    <a
                                                        href="{{ route('admin.kegiatan-mingguan-show', ['id' => $kegiatan->id]) }}">
                                                        <button class="btn btn-sm btn-success"><i
                                                                class="bi bi-pencil-square"></i></button>
                                                    </a>
                                                    <form action="{{ route('admin.kegiatan-mingguan-delete',['id' => $kegiatan->id]) }}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-sm btn-danger"><i
                                                                class="bi bi-trash3"></i></button>
                                                    </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-right">
                                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.card -->
                </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
