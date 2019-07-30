@extends('layouts.dashboard')
@section('add-link-page')
  active
@endsection
@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li><a href="{{ url('/add/link') }}">
        Add Link
      </a></li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Edit Link</h1>
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
                    <form action="{{ url('/update/link') }}" method="post">
                      @csrf

                <div class="form-group">
                  <label>t1</label>
                  <input type="text" class="form-control" name="title1" value="{{ $link->title1 }}">
                </div>
                <div class="form-group">
                  <label>t2</label>
                  <input type="text" class="form-control" name="title2" value="{{ $link->title2 }}">
                </div>
                <div class="form-group">
                  <label>t3</label>
                  <input type="text" class="form-control" name="title3" value="{{ $link->title3 }}">
                </div>
                <div class="form-group">
                  <label>t4</label>
                  <input type="text" class="form-control" name="title4" value="{{ $link->title4 }}">
                </div>
                <div class="form-group">
                  <label>t5</label>
                  <input type="text" class="form-control" name="title5" value="{{ $link->title5 }}">
                </div>


                <button type="submit" class="btn btn-primary">Update Link</button>
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
