@extends('admin.layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Category</h1>
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
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <!-- /.row start -->
       <div class="row">
        {{-- Start -  Content comes here --}}




        <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Add New Category <small>Page</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form   action="" method="post">
                {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name<span style="color:red">*</span></label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter name" value="{{old('name', $getRecord->name)}}" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Slug<span style="color:red">*</span></label>
                    <input type="text" name="slug" class="form-control" id="exampleInputEmail1" placeholder="Slug" value="{{old('slug', $getRecord->slug)}}" required>
                    <div style="color:red" >{{$errors->first('slug')}}</div>

                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Meta Title<span style="color:red">*</span></label>
                    <textarea type="text" name="meta_title" class="form-control" id="exampleInputEmail1" placeholder="Meta Title" required> {{old('meta_title', $getRecord->meta_title)}}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Meta Description<span style="color:red">*</span></label>
                    <textarea type="text" name="meta_description" class="form-control" id="exampleInputEmail1" placeholder="Meta Description" required> {{old('meta_description',  $getRecord->meta_description)}}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Meta Keywords<span style="color:red">*</span></label>
                    <input type="text" name="meta_keywords" class="form-control" id="exampleInputEmail1" placeholder="Meta Keywords" value="{{old('meta_keywords', $getRecord->meta_keywords)}}" required>
                  </div>


                  <div class="form-group">
                    <label for="status">Status<span style="color:red">*</span></label>
                   <select name="status" class="form-control">
                    <option value="0" {{(old('status', $getRecord->status) ==0)?'selected':''}}>Active</option>
                    <option value="1" {{(old('status', $getRecord->status) ==1)?'selected':''}}>Inactive</option>
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
    <!-- /.content -->
  </div>
  @endsection







