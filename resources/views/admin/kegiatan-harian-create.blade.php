@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Tambah Kegiatan</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashbord') }}">Home</a></li>
                <li class="breadcrumb-item active">Tambah Kegiatan</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
  
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Form Kegiatan Harian</h3>
                </div>
                
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('admin.kegiatan-harian-store') }}" method="POST">
                  @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Hari</label>
                      <input type="Number" name="kegiatan_hariini" class="form-control" id="" placeholder="Input hanya number">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Isi Kegiatan</label>
                      <textarea rows="5" name="isi_kegiatan" class="form-control" id="" placeholder="Masukkan Isi Kegiatan"></textarea>
                    </div>
                  </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer">
                    <button type="submit" class="btn btn-danger" style="float: left">Kembali</button>
                    <button type="submit" class="btn btn-primary" style="float: right">Submit</button>
                  </div>
                </form>
              </div>
              <!-- /.card -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
@endsection