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
      <li><a href="{{ url('/add/service') }}">
        Add Service
      </a></li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Edit Service</h1>
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

                    Edit More Products
                  </div>

                  <div class="panel-body">
                    <form action="{{ url('/update/service') }}" method="post" enctype="multipart/form-data">
                      @csrf

                <div class="form-group">
                  <label>title</label>
                  <input type="hidden" name="service_id" value="{{ $service->id }}">
                  <input type="text" class="form-control" placeholder="Enter service Title" name="title" value="{{ $service->title }}">
                </div>
                <div class="form-group">
                  <label>Link1</label>
                  <input type="text" class="form-control" placeholder="Enter service link1" name="link1" value="{{ $service->link1 }}">
                </div>
                <div class="form-group">
                  <label>Link2</label>
                  <input type="text" class="form-control" placeholder="Enter service link2" name="link2" value="{{ $service->link2 }}">
                </div>
                <div class="form-group">
                  <label>Link3</label>
                  <input type="text" class="form-control" placeholder="Enter service link3" name="link3" value="{{ $service->link3 }}">
                </div>
                <div class="form-group">
                  <label>Link4</label>
                  <input type="text" class="form-control" placeholder="Enter service link4" name="link4" value="{{ $service->link4 }}">
                </div>
                <div class="form-group">
                  <label>Link5</label>
                  <input type="text" class="form-control" placeholder="Enter service link5" name="link5" value="{{ $service->link5 }}">
                </div>


                <div class="form-group">
                  <label>Image</label>
                  <input type="file" class="form-control" placeholder="Enter Image" name="image" value="{{ $service->image }}">
                </div>
                <button type="submit" class="btn btn-primary">Update Services</button>
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
