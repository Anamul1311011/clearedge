@extends('layouts.dashboard')
@section('add-whyus-page')
  active
@endsection
@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li><a href="{{ url('/add/whyus') }}">
        Add Whyus
      </a></li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Edit Whyus</h1>
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

                    Edit Whyus
                  </div>

                  <div class="panel-body">
                    <form action="{{ url('/update/whyus') }}" method="post">
                      @csrf
                <div class="form-group">
                  <label>Heading</label>
                  <input type="hidden" name="whyus_id" value="{{ $whyus->id }}">
                  <input type="text" class="form-control" placeholder="Enter Heading" name="heading" value="{{ $whyus->heading }}">
                </div>
                <div class="form-group">
                  <label>P1</label>
                  <input type="text" class="form-control" placeholder="Enter p1" name="p1" value="{{ $whyus->p1 }}">
                </div>
                <div class="form-group">
                  <label>P2</label>
                  <input type="text" class="form-control" placeholder="Enter p2" name="p2" value="{{ $whyus->p2 }}">
                </div>
                <div class="form-group">
                  <label>p3</label>
                  <input type="text" class="form-control" placeholder="Enter p3" name="p3" value="{{ $whyus->p3 }}">
                </div>
                <button type="submit" class="btn btn-primary">Update logos</button>
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
