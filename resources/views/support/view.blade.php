@extends('layouts.dashboard')
@section('add-support-page')
  active
@endsection
@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">Add Support</li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Add Support</h1>
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

               Support List
            </div>

            <div class="panel-body">
              <table class="table table-bordered">
                <thead>
                  <th>Heading</th>
                  <th>Details</th>
                  <th>Image</th>
                  <th>Created At</th>
                  <th>Updated At</th>
                  <th>Action</th>
                </thead>
            @foreach ($supports as $support)
              <tr>
                <td>{{ $support->heading }}</td>
                <td>{{ $support->details }}</td>
                <td><img width="100" src="{{ asset($support->image) }}" alt=""></td>
                <td>{{ $support->created_at->format('d-m-Y H:i:s A') }}</td>
                <td>{{ $support->updated_at ? $support->updated_at:"Not Yet" }}</td>
                <td>
                  <a class="btn btn-danger" href="{{ url('delete/support') }}/{{ $support->id }}"> <span style="color:white"><i class="fa fa-trash" aria-hidden="true"></i></span> </a> |
                  <a class="btn btn-info" href="{{ url('edit/support') }}/{{ $support->id }}"> <span style="color:white"><i class="fa fa-pencil" aria-hidden="true"></i></span> </a>
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

              Add Support
            </div>

            <div class="panel-body">
              <form action="{{ url('/insert/support') }}" method="post" enctype="multipart/form-data">
                @csrf
          <div class="form-group">
            <label>Heading</label>
            <input type="text" class="form-control" placeholder="Enter heading" name="heading" value="{{ old('heading') }}">
          </div>
          <div class="form-group">
            <label>Details</label>
            <input type="text" class="form-control" placeholder="Enter detail" name="details" value="{{ old('details') }}">
          </div>

          <div class="form-group">
            <label>Image</label>
            <input type="file" class="form-control" placeholder="Enter Support Image" name="image" value="{{ 'image' }}">
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
