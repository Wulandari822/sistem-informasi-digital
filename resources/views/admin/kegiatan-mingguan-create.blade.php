@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>General Form</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">General Form</li>
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
                  <h3 class="card-title">Quick Example</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Minggu Ke</label>
                      <input type="Number" name="kegiatan_mingguan" class="form-control" id="" placeholder="Input hanya nomber">
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