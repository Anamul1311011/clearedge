@extends('layouts.dashboard')
@section('add-moreproduct-page')
  active
@endsection
@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li><a href="{{ url('/add/moreproduct') }}">
        Add More Product
      </a></li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Edit More Product</h1>
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
                    <form action="{{ url('/update/moreproduct') }}" method="post" enctype="multipart/form-data">
                      @csrf

                <div class="form-group">
                  <label>More Product Heading</label>
                  <input type="text" class="form-control" placeholder="Enter More Product Heading" name="heading" value="{{ $mproduct->heading }}">
                </div>
                <input type="hidden" value="{{ $p_id }}" name="p_id"/>
                <div class="form-group">
                  <label>More Product Title</label>
                  <input type="text" class="form-control" placeholder="Enter More Product Title" name="title" value="{{ $mproduct->title }}">
                </div>

                <div class="form-group">
                  <label>More Product Details</label>
                  <input type="text" class="form-control" placeholder="Enter More Product Detail" name="detail" value="{{ $mproduct->detail }}">
                </div>
                <div class="form-group">
                  <label>More Product Image</label>
                  <input type="file" class="form-control" placeholder="Enter More Product Image" name="mproduct_image" value="{{ $mproduct->mproduct_image }}">
                </div>
                <button type="submit" class="btn btn-primary">Update More Products</button>
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
