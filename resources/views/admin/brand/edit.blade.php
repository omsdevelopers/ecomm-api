@extends('admin.layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Brand</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Brand</a></li>
                        <li class="breadcrumb-item active">Add Brand</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <!-- /.row start -->
            <div class="row">
                {{-- Start - Content comes here --}}




                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Add New Smtp <small>Page</small></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="" method="post">
                            {{csrf_field()}}
                            

                                <div class="form-group">
                    <label for="exampleInputEmail1">MAIL_MAILER<span style="color:red">*</span></label>
                    <input type="text" name="MAIL_MAILER" class="form-control" id="exampleInputEmail1" placeholder="MAIL_MAILER" value="{{old('MAIL_MAILER', $getRecord->MAIL_MAILER)}}" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">MAIL_HOST<span style="color:red">*</span></label>
                    <input type="text" name="MAIL_HOST" class="form-control" id="exampleInputEmail1" placeholder="MAIL_HOST" value="{{old('MAIL_HOST', $getRecord->MAIL_HOST)}}" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">MAIL_PORT<span style="color:red">*</span></label>
                    <input type="text" name="MAIL_PORT" class="form-control" id="exampleInputEmail1" placeholder="MAIL_PORT" value="{{old('MAIL_PORT', $getRecord->MAIL_PORT)}}" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">MAIL_USERNAME<span style="color:red">*</span></label>
                    <input type="text" name="MAIL_USERNAME" class="form-control" id="exampleInputEmail1" placeholder="MAIL_USERNAME" value="{{old('MAIL_USERNAME', $getRecord->MAIL_USERNAME)}}" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">MAIL_PASSWORD (Must be single quote)<span style="color:red">*</span></label>
                    <input type="text" name="MAIL_PASSWORD" class="form-control" id="exampleInputEmail1" placeholder="MAIL_PASSWORD" value="{{old('MAIL_PASSWORD', $getRecord->MAIL_PASSWORD)}}" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">MAIL_ENCRYPTION<span style="color:red">*</span></label>
                    <input type="text" name="MAIL_ENCRYPTION" class="form-control" id="exampleInputEmail1" placeholder="MAIL_ENCRYPTION" value="{{old('MAIL_ENCRYPTION', $getRecord->MAIL_ENCRYPTION)}}" required>
                  </div>
                  <!-- <div class="form-group">
                    <label for="exampleInputEmail1">MAIL_FROM_ADDRESS<span style="color:red">*</span></label>
                    <input type="text" name="MAIL_FROM_ADDRESS" class="form-control" id="exampleInputEmail1" placeholder="MAIL_FROM_ADDRESS" value="{{old('MAIL_FROM_ADDRESS', $getRecord->MAIL_FROM_ADDRESS)}}" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">MAIL_FROM_NAME<span style="color:red">*</span></label>
                    <input type="text" name="MAIL_FROM_NAME" class="form-control" id="exampleInputEmail1" placeholder="MAIL_FROM_NAME" value="{{old('MAIL_FROM_NAME', $getRecord->MAIL_FROM_NAME)}}" required>
                  </div> -->

                                

                            </div>
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
    <!-- /.content -->
</div>
@endsection