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
      <li><a href="{{ url('/add/support') }}">
        Add Support
      </a></li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Edit Support</h1>
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

                    Edit Support
                  </div>

                  <div class="panel-body">
                    <form action="{{ url('/update/support') }}" method="post" enctype="multipart/form-data">
                      @csrf

                <div class="form-group">
                  <label>Heading</label>
                  <input type="hidden" name="support_id" value="{{ $support->id }}">
                  <input type="text" class="form-control" placeholder="Enter heading" name="heading" value="{{ $support->heading }}">
                </div>
                <div class="form-group">
                  <label>Details</label>
                  <input type="text" class="form-control" placeholder="Enter service link1" name="details" value="{{ $support->details }}">
                </div>


                <div class="form-group">
                  <label>Image</label>
                  <input type="file" class="form-control" placeholder="Enter Image" name="image" value="{{ $support->image }}">
                </div>

                <button type="submit" class="btn btn-primary">Update Supports</button>
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
