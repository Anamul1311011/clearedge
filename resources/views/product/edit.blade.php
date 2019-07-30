@extends('layouts.dashboard')
@section('add-product-page')
  active
@endsection
@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li><a href="{{ url('/add/product') }}">
        Add Product
      </a></li>
      <li class="active">{{ $product->product_name }}</li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Edit Product</h1>
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

                    Edit Products
                  </div>

                  <div class="panel-body">
                    <form action="{{ url('/update/product') }}" method="post" enctype="multipart/form-data">
                      @csrf
                <div class="form-group">
                  <label>Product Name</label>
                  <input type="hidden" name="product_id" value="{{ $product->id }}">
                  <input type="text" class="form-control" placeholder="Enter Product Name" name="product_name" value="{{ $product->product_name }}">
                </div>
                <div class="form-group">
                  <label>Product Title</label>
                  <input type="text" class="form-control" placeholder="Enter Product Title" name="product_title" value="{{ $product->product_title }}">
                </div>
                <div class="form-group">
                  <label>Product Id</label>
                  <input type="text" class="form-control" placeholder="Enter Product Id" name="product_ID" value="{{ $product->product_ID }}">
                </div>
                <div class="form-group">
                  <label>Product Details</label>
                  <input type="text" class="form-control" placeholder="Enter Product Detail" name="product_detail" value="{{ $product->product_detail }}">
                </div>
                <div class="form-group">
                  <label>Product Image</label>
                  <input type="file" class="form-control" placeholder="Enter Product Image" name="product_image" value="{{ $product->product_image }}">
                </div>
                <button type="submit" class="btn btn-primary">Update Products</button>
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
