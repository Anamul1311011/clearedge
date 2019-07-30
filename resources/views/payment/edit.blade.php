@extends('layouts.dashboard')
@section('add-logo-page')
  active
@endsection
@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li><a href="{{ url('/add/logo') }}">
        Add Logo
      </a></li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Edit Logos</h1>
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

                    Edit Payments
                  </div>

                  <div class="panel-body">
                    <form action="{{ url('/update/payment') }}" method="post">
                      @csrf
                <div class="form-group">
                  <label>Link1</label>
                  <input type="hidden" name="payment_id" value="{{ $payment->id }}">
                  <input type="text" class="form-control" name="link1" value="{{ $payment->link1 }}">
                </div>
                <div class="form-group">
                  <label>Link2</label>
                  <input type="text" class="form-control" name="link2" value="{{ $payment->link2 }}">
                </div>
                <div class="form-group">
                  <label>Title1</label>
                  <input type="text" class="form-control" name="title1" value="{{ $payment->title1 }}">
                </div>
                <div class="form-group">
                  <label>Title2</label>
                  <input type="text" class="form-control" name="title2" value="{{ $payment->title2 }}">
                </div>
                <div class="form-group">
                  <label>Text1</label>
                  <input type="text" class="form-control" name="text1" value="{{ $payment->text1 }}">
                </div>
                <div class="form-group">
                  <label>Text2</label>
                  <input type="text" class="form-control" name="text2" value="{{ $payment->text2 }}">
                </div>
                <div class="form-group">
                  <label>Text3</label>
                  <input type="text" class="form-control" name="text3" value="{{ $payment->text3 }}">
                </div>
                <div class="form-group">
                  <label>Image1</label>
                  <input type="file" class="form-control" name="image1" value="{{ $payment->image1 }}">
                </div>
                <div class="form-group">
                  <label>Image2</label>
                  <input type="file" class="form-control" name="image2" value="{{ $payment->image2 }}">
                </div>
                <div class="form-group">
                  <label>Image3</label>
                  <input type="file" class="form-control" name="image3" value="{{ $payment->image3 }}">
                </div>
                <button type="submit" class="btn btn-primary">Update Payments</button>
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
