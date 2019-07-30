@extends('layouts.dashboard')
@section('add-service-page')
  active
@endsection
@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">Add Service</li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Add Service</h1>
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

               Service List
            </div>

            <div class="panel-body">
              <table class="table table-bordered">
                <thead>
                  <th>Title</th>
                  <th>link1</th>
                  <th>link2</th>
                  <th>link3</th>
                  <th>link4</th>
                  <th>link5</th>
                  <th>Image</th>
                  <th>Created At</th>
                  <th>Updated At</th>
                  <th>Action</th>
                </thead>
            @foreach ($services as $service)
              <tr>
                <td>{{ $service->title }}</td>
                <td>{{ $service->link1 }}</td>
                <td>{{ $service->link2 }}</td>
                <td>{{ $service->link3 }}</td>
                <td>{{ $service->link4 }}</td>
                <td>{{ $service->link5 }}</td>
                <td><img width="100" src="{{ asset($service->image) }}" alt=""></td>
                <td>{{ $service->created_at->format('d-m-Y H:i:s A') }}</td>
                <td>{{ $service->updated_at ? $service->updated_at:"Not Yet" }}</td>
                <td>
                  <a class="btn btn-danger" href="{{ url('delete/service') }}/{{ $service->id }}"> <span style="color:white"><i class="fa fa-trash" aria-hidden="true"></i></span> </a> |
                  <a class="btn btn-info" href="{{ url('edit/service') }}/{{ $service->id }}"> <span style="color:white"><i class="fa fa-pencil" aria-hidden="true"></i></span> </a>
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

              Add Service
            </div>

            <div class="panel-body">
              <form action="{{ url('/insert/service') }}" method="post" enctype="multipart/form-data">
                @csrf
          <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" placeholder="Enter title" name="title" value="{{ old('title') }}">
          </div>
          <div class="form-group">
            <label>link1</label>
            <input type="text" class="form-control" placeholder="Enter link1" name="link1" value="{{ old('link1') }}">
          </div>
          <div class="form-group">
            <label>link2</label>
            <input type="text" class="form-control" placeholder="Enter link2" name="link2" value="{{ old('link2') }}">
          </div>
          <div class="form-group">
            <label>link3</label>
            <input type="text" class="form-control" placeholder="Enter link3" name="link3" value="{{ old('link3') }}">
          </div>
          <div class="form-group">
            <label>link4</label>
            <input type="text" class="form-control" placeholder="Enter link4" name="link4" value="{{ old('link4') }}">
          </div>
          <div class="form-group">
            <label>link5</label>
            <input type="text" class="form-control" placeholder="Enter link5" name="link5" value="{{ old('link5') }}">
          </div>

          <div class="form-group">
            <label>Image</label>
            <input type="file" class="form-control" placeholder="Enter Service Image" name="image" value="{{ 'image' }}">
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
