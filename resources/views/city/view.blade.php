@extends('layouts.dashboard')
@section('add-city-page')
  active
@endsection
@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">Add City</li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Add City</h1>
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

               City List
            </div>

            <div class="panel-body">
              <table class="table table-bordered">
                <thead>
                  <th>title</th>
                  <th>link</th>
                  <th>Created At</th>
                  <th>Last Updated At</th>
                  <th>Action</th>
                </thead>
            @foreach ($cities as $city)
              <tr>
                <td>{{ $city->title }}</td>
                <td>{{ $city->link }}</td>
                <td>{{ $city->created_at->format('d-m-Y H:i:s A') }}</td>
                <td>{{ $city->updated_at ? $city->updated_at:"Not Yet" }}</td>
                <td>
                  <a class="btn btn-danger" href="{{ url('delete/city') }}/{{ $city->id }}"> <span style="color:white"><i class="fa fa-trash" aria-hidden="true"></i></i></span> </a>
                  <a class="btn btn-info" href="{{ url('edit/city') }}/{{ $city->id }}"> <span style="color:white"><i class="fa fa-pencil" aria-hidden="true"></i></span> </a>
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

              Add City
            </div>

            <div class="panel-body">
              <form action="{{ url('/insert/city') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label>title</label>
                  <input type="text" class="form-control" name="title" >
                </div>
                <div class="form-group">
                  <label>link</label>
                  <input type="text" class="form-control" name="link" >
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
