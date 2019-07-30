@extends('layouts.dashboard')
@section('add-banner-page')
  active
@endsection
@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">Add Banner</li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Add Banner</h1>
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

               Banner List
            </div>

            <div class="panel-body">
              <table class="table table-bordered">
                <thead>
                  <th>Banner heading</th>
                  <th>Banner sub_heading</th>
                  <th>Banner details</th>
                  <th>Banner banner_image</th>
                  <th>Created At</th>
                  <th>Last Updated At</th>
                  <th>Action</th>
                </thead>
            @foreach ($banners as $banner)
              <tr>
                <td>{{ $banner->heading }}</td>
                <td>{{ $banner->sub_heading }}</td>
                <td>{{ $banner->details }}</td>
                <td><img width="100" src="{{asset($banner->banner_image)}}" alt=""></td>
                <td>{{ $banner->created_at->format('d-m-Y H:i:s A') }}</td>
                <td>{{ $banner->updated_at ? $banner->updated_at:"Not Yet" }}</td>
                <td>
                  <a class="btn btn-danger" href="{{ url('delete/banner') }}/{{ $banner->id }}"> <span style="color:white"><i class="fa fa-trash" aria-hidden="true"></i></span> </a> |
                  <a class="btn btn-info" href="{{ url('edit/banner') }}/{{ $banner->id }}"> <span style="color:white"><i class="fa fa-pencil" aria-hidden="true"></i></span> </a>
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

              Add Banners
            </div>

            <div class="panel-body">
              <form action="{{ url('/insert/banner') }}" method="post" enctype="multipart/form-data">
                @csrf
          <div class="form-group">
            <label>Banner Heading</label>
            <input type="text" class="form-control" placeholder="Enter banner heading" name="heading" value="{{ old('heading') }}">
          </div>
          <div class="form-group">
            <label>Banner sub_heading</label>
            <input type="text" class="form-control" placeholder="Enter Product Title" name="sub_heading" value="{{ old('sub_heading') }}">
          </div>
          <div class="form-group">
            <label>Banner Details</label>
            <input type="text" class="form-control" placeholder="Enter Product Id" name="details" value="{{ old('details') }}">
          </div>
          <div class="form-group">
            <label>Banner Image</label>
            <input type="file" class="form-control" placeholder="Enter banner Image" name="banner_image" >
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
