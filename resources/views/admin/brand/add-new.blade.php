@extends('admin.layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add New SMTP setup</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#"></a></li>
                        <li class="breadcrumb-item active"></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="content">
        <div class="container-fluid">
            <!-- /.row start -->
            <div class="row">
                {{-- Start - Content comes here --}}
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Add New SMTP <small>Page</small></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="" method="post">
                            {{csrf_field()}}
                           

                            <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">MAIL_MAILER<span style="color:red">*</span></label>
                    <input type="text" name="MAIL_MAILER" class="form-control" id="exampleInputEmail1" placeholder="MAIL_MAILER" value="" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">MAIL_HOST<span style="color:red">*</span></label>
                    <input type="text" name="MAIL_HOST" class="form-control" id="exampleInputEmail1" placeholder="MAIL_HOST" value="" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">MAIL_PORT<span style="color:red">*</span></label>
                    <input type="text" name="MAIL_PORT" class="form-control" id="exampleInputEmail1" placeholder="MAIL_PORT" value="" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">MAIL_USERNAME<span style="color:red">*</span></label>
                    <input type="text" name="MAIL_USERNAME" class="form-control" id="exampleInputEmail1" placeholder="MAIL_USERNAME" value="" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">MAIL_PASSWORD<span style="color:red">*</span></label>
                    <input type="text" name="MAIL_PASSWORD" class="form-control" id="exampleInputEmail1" placeholder="MAIL_PASSWORD" value="" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">MAIL_ENCRYPTION<span style="color:red">*</span></label>
                    <input type="text" name="MAIL_ENCRYPTION" class="form-control" id="exampleInputEmail1" placeholder="MAIL_ENCRYPTION" value="" required>
                  </div>
                  <!-- <div class="form-group">
                    <label for="exampleInputEmail1">MAIL_FROM_ADDRESS<span style="color:red">*</span></label>
                    <input type="text" name="MAIL_FROM_ADDRESS" class="form-control" id="exampleInputEmail1" placeholder="MAIL_FROM_ADDRESS" value="" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">MAIL_FROM_NAME<span style="color:red">*</span></label>
                    <input type="text" name="MAIL_FROM_NAME" class="form-control" id="exampleInputEmail1" placeholder="MAIL_FROM_NAME" value="" required>
                  </div> -->

                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>





                {{-- End - Content comes here --}}
            </div>
            <!-- /.row end -->
        </div>
        <!-- /.container-fluid -->
    </div>

</div>

@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        function readURL(input) {
            console.log('idd')
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#image-preview').attr('src', e.target.result).css('display', 'block');
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#image").change(function () {
            console.log('ss')
            readURL(this);
        });
    });
</script>
@endpush
