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
      <li><a href="{{ url('/add/office') }}">
        Add Office
      </a></li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Edit Office</h1>
    </div>
  </div><!--/.row-->
  <div class="container">
      <div class="row justify-content-center">

          <div class="col-md-6">
              <div class="panel panel-success">
                  <div class="panel-heading">
                    @if (session('success'))
                      <div class="alert alert-success">
                        {{ session('success') }}
                      </div>
                    @endif

                    Edit Office
                  </div>

                  <div class="panel-body">
                    <form action="{{ url('/update/office') }}" method="post">
                      @csrf
                <div class="form-group">
                  <label>Heading</label>
                  <input type="hidden" name="office_id" value="{{ $office->id }}">
                  <input type="text" class="form-control" name="heading" value="{{ $office->heading }}">
                </div>
                <div class="form-group">
                  <label>t1</label>
                  <input type="text" class="form-control" name="title1" value="{{ $office->title1 }}">
                </div>
                <div class="form-group">
                  <label>t2</label>
                  <input type="text" class="form-control" name="title2" value="{{ $office->title2 }}">
                </div>
                <div class="form-group">
                  <label>t3</label>
                  <input type="text" class="form-control" name="title3" value="{{ $office->title3 }}">
                </div>
                <div class="form-group">
                  <label>t4</label>
                  <input type="text" class="form-control" name="title4" value="{{ $office->title4 }}">
                </div>
                <div class="form-group">
                  <label>t5</label>
                  <input type="text" class="form-control" name="title5" value="{{ $office->title5 }}">
                </div>
                <div class="form-group">
                  <label>t6</label>
                  <input type="text" class="form-control" name="title6" value="{{ $office->title6 }}">
                </div>
                <div class="form-group">
                  <label>t7</label>
                  <input type="text" class="form-control" name="title7" value="{{ $office->title7 }}">
                </div>
                <div class="form-group">
                  <label>t8</label>
                  <input type="text" class="form-control" name="title8" value="{{ $office->title8 }}">
                </div>
                <div class="form-group">
                  <label>t9</label>
                  <input type="text" class="form-control" name="title9" value="{{ $office->title9 }}">
                </div>
                <div class="form-group">
                  <label>t10</label>
                  <input type="text" class="form-control" name="title10" value="{{ $office->title10 }}">
                </div>
                <div class="form-group">
                  <label>t11</label>
                  <input type="text" class="form-control" name="title11" value="{{ $office->title11 }}">
                </div>
                <div class="form-group">
                  <label>t12</label>
                  <input type="text" class="form-control" name="title12" value="{{ $office->title12 }}">
                </div>
                <div class="form-group">
                  <label>t13</label>
                  <input type="text" class="form-control" name="title13" value="{{ $office->title13 }}">
                </div>
                <div class="form-group">
                  <label>t14</label>
                  <input type="text" class="form-control" name="title14" value="{{ $office->title14 }}">
                </div>
                <div class="form-group">
                  <label>t15</label>
                  <input type="text" class="form-control" name="title15" value="{{ $office->title15 }}">
                </div>
                <div class="form-group">
                  <label>t16</label>
                  <input type="text" class="form-control" name="title16" value="{{ $office->title16 }}">
                </div>
                <div class="form-group">
                  <label>t17</label>
                  <input type="text" class="form-control" name="title17" value="{{ $office->title17 }}">
                </div>

                <button type="submit" class="btn btn-primary">Update Office</button>
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
      </div>
  </div>
@endsection
