@extends('layouts.dashboard')
@section('add-payment-page')
  active
@endsection
@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">Add Payment</li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Add Payment</h1>
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

               Payment List
            </div>

            <div class="panel-body">
              <table class="table table-bordered">
                <thead>
                  <th>link1</th>
                  <th>link2</th>
                  <th>title1</th>
                  <th>title2</th>
                  <th>text1</th>
                  <th>text2</th>
                  <th>text3</th>
                  <th>Image1</th>
                  <th>Image2</th>
                  <th>Image3</th>
                  <th>Created At</th>
                  <th>Last Updated At</th>
                  <th>Action</th>
                </thead>
            @foreach ($payments as $payment)
              <tr>
                <td>{{ $payment->link1 }}</td>
                <td>{{ $payment->link2 }}</td>
                <td>{{ $payment->title1 }}</td>
                <td>{{ $payment->title2 }}</td>
                <td>{{ $payment->text1 }}</td>
                <td>{{ $payment->text2 }}</td>
                <td>{{ $payment->text3 }}</td>
                <td><img width="100" src="{{asset($payment->image1)}}" alt=""></td>
                <td><img width="100" src="{{asset($payment->image2)}}" alt=""></td>
                <td><img width="100" src="{{asset($payment->image3)}}" alt=""></td>
                <td>{{ $payment->created_at->format('d-m-Y H:i:s A') }}</td>
                <td>{{ $payment->updated_at ? $payment->updated_at:"Not Yet" }}</td>
                <td>
                  <a class="btn btn-danger" href="{{ url('delete/payment') }}/{{ $payment->id }}"> <span style="color:white"><i class="fa fa-trash" aria-hidden="true"></i></span> </a>
                  <a class="btn btn-info" href="{{ url('edit/payment') }}/{{ $payment->id }}"> <span style="color:white"><i class="fa fa-pencil" aria-hidden="true"></i></span> </a>
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

              Add Payment
            </div>

            <div class="panel-body">
              <form action="{{ url('/insert/payment') }}" method="post" enctype="multipart/form-data">
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
                  <label>title1</label>
                  <input type="text" class="form-control" name="title1" >
                </div>
                <div class="form-group">
                  <label>title2</label>
                  <input type="text" class="form-control" name="title2" >
                </div>
                <div class="form-group">
                  <label>Text1</label>
                  <input type="text" class="form-control" name="text1" >
                </div>
                <div class="form-group">
                  <label>Text2</label>
                  <input type="text" class="form-control" name="text2" >
                </div>
                <div class="form-group">
                  <label>Text3</label>
                  <input type="text" class="form-control" name="text3" >
                </div>
                <div class="form-group">
                  <label>Image1</label>
                  <input type="file" class="form-control" name="image1" >
                </div>
                <div class="form-group">
                  <label>Image2</label>
                  <input type="file" class="form-control" name="image2" >
                </div>
                <div class="form-group">
                  <label>Image3</label>
                  <input type="file" class="form-control" name="image3" >
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
