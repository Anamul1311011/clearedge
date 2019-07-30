@extends('layouts.dashboard')
@section('add-sociallink-page')
  active
@endsection
@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">Add Social Link</li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Add Social Link</h1>
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

              Social Link List
            </div>

            <div class="panel-body">
              <table class="table table-bordered">
                <thead>
                  <th>link1</th>
                  <th>link2</th>
                  <th>link3</th>
                  <th>link4</th>

                  <th>Created At</th>
                  <th>Last Updated At</th>
                  <th>Action</th>
                </thead>
            @foreach ($sociallinks as $sociallink)
              <tr>

                <td>{{ $sociallink->link1 }}</td>
                <td>{{ $sociallink->link2 }}</td>
                <td>{{ $sociallink->link3 }}</td>
                <td>{{ $sociallink->link4 }}</td>
                {{-- <td>{{ $sociallink->created_at->format('d-m-Y H:i:s A') }}</td> --}}
                <td>{{ $sociallink->updated_at ? $link->updated_at:"Not Yet" }}</td>
                <td>
                  <a class="btn btn-danger" href="{{ url('delete/sociallink') }}/{{ $sociallink->id }}"> <span style="color:white"><i class="fa fa-trash" aria-hidden="true"></i></i></span> </a>
                  <a class="btn btn-info" href="{{ url('edit/sociallink') }}/{{ $sociallink->id }}"> <span style="color:white"><i class="fa fa-pencil" aria-hidden="true"></i></span> </a>
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

              Add Social Link
            </div>

            <div class="panel-body">
              <form action="{{ url('/insert/sociallink') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label>Link1</label>
                  <input type="text" class="form-control" name="link1" >
                </div>
                <div class="form-group">
                  <label>Link2</label>
                  <input type="text" class="form-control" name="link2" >
                </div>
                <div class="form-group">
                  <label>Link3</label>
                  <input type="text" class="form-control" name="link3" >
                </div>
                <div class="form-group">
                  <label>Link4</label>
                  <input type="text" class="form-control" name="link4" >
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
