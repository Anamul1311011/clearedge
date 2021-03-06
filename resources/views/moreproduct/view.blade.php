@extends('layouts.dashboard')
@section('add-moreproduct-page')
  active
@endsection
@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">Add More Product</li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Add More Product</h1>
    </div>
  </div><!--/.row-->
  <div class="panel panel-container">
    <div class="row">
      <div class="col-md-8">
        <div class="panel panel-success">
            <div class="panel-heading">
              @if(session('successdelete'))
                                <div class="alert alert-info">
                                    {{ session('successdelete') }}
                                </div>
                                @endif

               More Product List
            </div>

            <div class="panel-body">
              <table class="table table-bordered">
                <thead>
                  <th>Heading</th>
                  <th>Title</th>
                  <th>Detail</th>
                  <th>Image</th>
                  <th>Created At</th>
                  <th>Last Updated At</th>
                  <th>Action</th>
                </thead>
            @foreach ($mproducts as $mproduct)
              <tr>
                <td>{{ $mproduct->heading }}</td>
                <td>{{ $mproduct->title }}</td>
                <td>{{ $mproduct->detail }}</td>
                <td><img width="100" src="{{ asset($mproduct->mproduct_image) }}" alt=""></td>
                <td>{{ $mproduct->created_at->format('d-m-Y H:i:s A') }}</td>
                <td>{{ $mproduct->updated_at ? $mproduct->updated_at:"Not Yet" }}</td>
                <td>
                  <a class="btn btn-danger" href="{{ url('delete/moreproduct') }}/{{ $mproduct->id }}"> <span style="color:white"><i class="fa fa-trash" aria-hidden="true"></i></span> </a> |
                  <a class="btn btn-info" href="{{ url('edit/moreproduct') }}/{{ $mproduct->id }}"> <span style="color:white"><i class="fa fa-pencil" aria-hidden="true"></i></span> </a>
                </td>
              </tr>
            @endforeach
              </table>

              </div>
          </div>
      </div>
      <div class="col-md-4">
        <div class="panel panel-info">
            <div class="panel-heading">
              @if (session('success'))
                <div class="alert alert-success">
                  {{ session('success') }}
                </div>
              @endif

              Add More Products
            </div>

            <div class="panel-body">
              <form action="{{ url('/insert/moreproduct') }}" method="post" enctype="multipart/form-data">
                @csrf
          <div class="form-group">
            <label>Heading</label>
            <input type="text" class="form-control" placeholder="Enter More Product Heading" name="heading" value="{{ old('heading') }}">
          </div>
          <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" placeholder="Enter More Product Title" name="title" value="{{ old('title') }}">
          </div>
          <div class="form-group">
            <label>Details</label>
            <input type="text" class="form-control" placeholder="Enter More Product Detail" name="detail" value="{{ old('detail') }}">
          </div>
          <div class="form-group">
            <label>Image</label>
            <input type="file" class="form-control" placeholder="Enter More Product Image" name="mproduct_image" value="{{ 'mproduct_image' }}">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <br>
    @if ($errors->all())
      <div class="alert alert-danger">
        @foreach ($errors->all() as $value)
          <li>{{ $value }}</li>
        @endforeach
      </div>
    @endif
            </div>
        </div>
      </div>
    </div><!--/.row-->
  </div>

@endsection
