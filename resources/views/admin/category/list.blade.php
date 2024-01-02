@extends('admin.layouts.app')


@section('content')



<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-0">
        <div class="col-sm-6">
          <h1 class="m-0">Add Category</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Category </li>



            <a href="{{url('admin/category/add')}}" class="btn btn-block btn-primary">
              Add Category
            </a>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="text-center mt-1 mb-2">


        </div>
        {{-- Start -  Content comes here --}}
        <div class="col-12">
          @include('admin.layouts.message')
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Name</th>

                    <th>Slug</th>
                    <th>Meta Title</th>
                    <th>Meta Description</th>
                    <th>image</th>
                    <th>Meta Keyword</th>
                    <th>Created By</th>
                    <th>Status</th>
                    <th>Created At</th>
                    <th>Action</th>

                  </tr>
                </thead>
                <tbody>
                  @foreach ($getRecord as $value)

                  <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->name}}</td>
                    <td>{{$value->slug}}</td>
                    <td>{{$value->meta_title}}</td>
                    <td>{{$value->meta_description}}</td>
                    <td><img src="{{ asset('storage/app/public/images/' . $value->image) }}" alt="Image"width="70" height="60">

                    </td>
                    <td> {{$value->meta_keyword}}</td>
                    <td>{{$value->created_by_name}} </td>
                    <td>{{($value->status==0)? 'Active':'Inactive'}}</td>
                    {{-- <td>{{date('d/M/Y H:i:s', strtotime($value->created_at))}} & {{date('d/M/Y', strtotime($value->created_at))}}</td> --}}
                    <td>{{ date('d/M/Y H:i:s', strtotime($value->created_at)) }} </td>

                    <td>
                      <a href="{{url('admin/category/edit/'.$value->id)}}" class="btn  "><i class="fas fa-edit"></i>
                      </a>
                      <a onclick="return confirm('Are you sure you want to delete?')" href="{{url('admin/category/delete/'.$value->id)}}" class="btn "><i class="fas fa-trash"></i></a>

                    </td>
                  </tr>
                  @endforeach


                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
        </div>









        {{-- End - Content comes here --}}
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
@endsection

@section('style')




@endsection