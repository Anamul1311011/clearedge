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
      <li class="active">Add Product</li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Add Product</h1>
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

               Product List
            </div>

            <div class="panel-body">
              <table class="table table-bordered">
                <thead>
                  <th>Product Name</th>
                  <th>Product Title</th>
                  <th>Product ID</th>
                  <th>Product Detail</th>
                  <th>Product Image</th>
                  <th>Created At</th>
                  <th>Last Updated At</th>
                  <th>Action</th>
                </thead>
            @foreach ($products as $product)
              <tr>
                <td>{{ $product->product_name }}</td>
                <td>{{ $product->product_title }}</td>
                <td>{{ $product->product_ID }}</td>
                <td>{{ $product->product_detail }}</td>
                <td><img width="100" src="{{ asset($product->product_image) }}" alt=""></td>
                <td>{{ $product->created_at->format('d-m-Y H:i:s A') }}</td>
                <td>{{ $product->updated_at ? $product->updated_at:"Not Yet" }}</td>
                <td>
                  <a class="btn btn-danger" href="{{ url('delete/product') }}/{{ $product->id }}"> <span style="color:white"><i class="fa fa-trash" aria-hidden="true"></i></span> </a> |
                  <a class="btn btn-info" href="{{ url('edit/product') }}/{{ $product->id }}"> <span style="color:white"><i class="fa fa-pencil" aria-hidden="true"></i></span> </a>
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

              Add Products
            </div>

            <div class="panel-body">
              <form action="{{ url('/insert/product') }}" method="post" enctype="multipart/form-data">
                @csrf
          <div class="form-group">
            <label>Product Name</label>
            <input type="text" class="form-control" placeholder="Enter Product Name" name="product_name" value="{{ old('product_name') }}">
          </div>
          <div class="form-group">
            <label>Product Title</label>
            <input type="text" class="form-control" placeholder="Enter Product Title" name="product_title" value="{{ old('product_title') }}">
          </div>
          <div class="form-group">
            <label>Product Id</label>
            <input type="text" class="form-control" placeholder="Enter Product Id" name="product_ID" value="{{ old('product_ID') }}">
          </div>
          <div class="form-group">
            <label>Product Details</label>
            <input type="text" class="form-control" placeholder="Enter Product Detail" name="product_detail" value="{{ old('product_detail') }}">
          </div>
          <div class="form-group">
            <label>Product Image</label>
            <input type="file" class="form-control" placeholder="Enter Product Image" name="product_image" >
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
