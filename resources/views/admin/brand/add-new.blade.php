@extends('admin.layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add New Category</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">category</a></li>
                        <li class="breadcrumb-item active">Add Category</li>
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
                            <h3 class="card-title">Add New Brand <small>Page</small></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="" method="post">
                            {{csrf_field()}}
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name<span style="color:red">*</span></label>
                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                        placeholder="Enter name" value="{{old('name')}}" required>
                                </div>

                                <div class="form-group">
                                    <label for="status">Status<span style="color:red">*</span></label>
                                    <select name="status" class="form-control">
                                        <option value="0" {{(old('status'==0)?'selected':'')}}>Active</option>
                                        <option value="1" {{(old('status'==1)?'selected':'')}}>Inactive</option>
                                    </select>
                                </div>

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
