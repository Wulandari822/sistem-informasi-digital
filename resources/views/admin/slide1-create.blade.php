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
                        <form action="" name="slide1Form" id="slide1Form" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="card mb-3">
                                    <input type="hidden" id="image_id" name="image_id" value="">
                                    <div class="card-body">
                                        <h2 class="h4 mb-3">Media</h2>
                                        <div id="img" class="dropzone dz-clickable">
                                            <div name="img" class="dz-message needsclick">
                                                <br><i>Masukan file dengan format <b>.jpeg/.png</b> dan maxsimal
                                                    1</i><br><br>
                                            </div>
                                        </div>
                                        <p></p>
                                    </div>
                                </div>

                                <div class="card-footer">
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

@section('cotumJs')
    <script>
        $('#slide1Form').submit(function(event) {
            event.preventDefault();
            var element = $(this);
            // $("button[type=submit]").prop('disabled', true);

            var formData = new FormData();
            var totalFiles = document.getElementById('img').dropzone.files.length;
            for (var i = 0; i < totalFiles; i++) {
                formData.append('images[]', document.getElementById('img').dropzone.files[i]);
            }

            $.ajax({
                url: '{{ route('admin.slide1-store') }}',
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    $("button[type=submit]").prop('disabled', false);

                    if (response['status'] == true) {
                        window.location.href = "{{ route('admin.slide1') }}";
                        $("#img").removeClass('is-invalid').siblings('p').removeClass(
                            'invalid-feedback').html('');
                    } else {
                        var errors = response['errors'];
                        if (errors['img']) {
                            $("#img").addClass('is-invalid')
                                .siblings('p')
                                .addClass('invalid-feedback').html(errors['img']);
                        } else {
                            $("#img").removeClass('is-invalid')
                                .siblings('p')
                                .removeClass('invalid-feedback').html('');
                        }
                    }
                },
                error: function(jqXHR, exception) {
                    console.log("Something went wrong");
                }
            })
        });

        Dropzone.autoDiscover = false;
        const dropzone = $("#img").dropzone({
            url: "{{ route('admin.upload-img') }}",
            maxFiles: 10,
            paramName: 'image',
            addRemoveLinks: true,
            acceptedFiles: "image/jpeg,image/png,image/gif",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(file, response) {
                $("#image_id").val(response.image_id);
            }
        });
    </script>
@endsection
