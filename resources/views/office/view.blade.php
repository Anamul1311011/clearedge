@extends('layouts.dashboard')
@section('add-office-page')
  active
@endsection
@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">Add Office</li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Add Office</h1>
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

               Office List
            </div>

            <div class="panel-body">
              <table class="table table-bordered">
                <thead>
                  <th>heading</th>
                  <th>t1</th>
                  <th>t2</th>
                  <th>t3</th>
                  <th>t4</th>
                  <th>t5</th>
                  <th>t6</th>
                  <th>t7</th>
                  <th>t8</th>
                  <th>t9</th>
                  <th>t10</th>
                  <th>t11</th>
                  <th>t12</th>
                  <th>t13</th>
                  <th>t14</th>
                  <th>t15</th>
                  <th>t16</th>
                  <th>t17</th>
                  <th>Created At</th>
                  <th>Last Updated At</th>
                  <th>Action</th>
                </thead>
            @foreach ($offices as $office)
              <tr>
                <td>{{ $office->heading }}</td>
                <td>{{ $office->title1 }}</td>
                <td>{{ $office->title2 }}</td>
                <td>{{ $office->title3 }}</td>
                <td>{{ $office->title4 }}</td>
                <td>{{ $office->title5 }}</td>
                <td>{{ $office->title6 }}</td>
                <td>{{ $office->title7 }}</td>
                <td>{{ $office->title8 }}</td>
                <td>{{ $office->title9 }}</td>
                <td>{{ $office->title10 }}</td>
                <td>{{ $office->title11 }}</td>
                <td>{{ $office->title12 }}</td>
                <td>{{ $office->title13 }}</td>
                <td>{{ $office->title14 }}</td>
                <td>{{ $office->title15 }}</td>
                <td>{{ $office->title16 }}</td>
                <td>{{ $office->title17 }}</td>
                <td>{{ $office->created_at->format('d-m-Y H:i:s A') }}</td>
                <td>{{ $office->updated_at ? $office->updated_at:"Not Yet" }}</td>
                <td>
                  <a class="btn btn-danger" href="{{ url('delete/office') }}/{{ $office->id }}"> <span style="color:white"><i class="fa fa-trash" aria-hidden="true"></i></span> </a>
                  <a class="btn btn-info" href="{{ url('edit/office') }}/{{ $office->id }}"> <span style="color:white"><i class="fa fa-pencil" aria-hidden="true"></i></span> </a>
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

              Add Office
            </div>

            <div class="panel-body">
              <form action="{{ url('/insert/office') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label>heading</label>
                  <input type="text" class="form-control" name="heading" >
                </div>
                <div class="form-group">
                  <label>t1</label>
                  <input type="text" class="form-control" name="title1" >
                </div>
                <div class="form-group">
                  <label>t2</label>
                  <input type="text" class="form-control" name="title2" >
                </div>
                <div class="form-group">
                  <label>t3</label>
                  <input type="text" class="form-control" name="title3" >
                </div>
                <div class="form-group">
                  <label>t4</label>
                  <input type="text" class="form-control" name="title4" >
                </div>
                <div class="form-group">
                  <label>t5</label>
                  <input type="text" class="form-control" name="title5" >
                </div>
                <div class="form-group">
                  <label>t6</label>
                  <input type="text" class="form-control" name="title6" >
                </div>
                <div class="form-group">
                  <label>t7</label>
                  <input type="text" class="form-control" name="title7" >
                </div>
                <div class="form-group">
                  <label>t8</label>
                  <input type="text" class="form-control" name="title8" >
                </div>
                <div class="form-group">
                  <label>t9</label>
                  <input type="text" class="form-control" name="title9" >
                </div>
                <div class="form-group">
                  <label>t10</label>
                  <input type="text" class="form-control" name="title10" >
                </div>
                <div class="form-group">
                  <label>t11</label>
                  <input type="text" class="form-control" name="title11" >
                </div>
                <div class="form-group">
                  <label>t12</label>
                  <input type="text" class="form-control" name="title12" >
                </div>
                <div class="form-group">
                  <label>t13</label>
                  <input type="text" class="form-control" name="title13" >
                </div>
                <div class="form-group">
                  <label>t14</label>
                  <input type="text" class="form-control" name="title14" >
                </div>
                <div class="form-group">
                  <label>t15</label>
                  <input type="text" class="form-control" name="title15" >
                </div>
                <div class="form-group">
                  <label>t16</label>
                  <input type="text" class="form-control" name="title16" >
                </div>
                <div class="form-group">
                  <label>t17</label>
                  <input type="text" class="form-control" name="title17" >
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
