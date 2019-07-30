@extends('layouts.dashboard')
@section('add-city-page')
  active
@endsection
@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li><a href="{{ url('/add/city') }}">
        Add City
      </a></li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Edit City</h1>
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

                    Edit City
                  </div>

                  <div class="panel-body">
                    <form action="{{ url('/update/city') }}" method="post">
                      @csrf
                <div class="form-group">
                  <label>Title</label>
                  <input type="hidden" name="city_id" value="{{ $city->id }}">
                  <input type="text" class="form-control" name="title" value="{{ $city->title }}">
                </div>
                <div class="form-group">
                  <label>Link</label>
                  <input type="text" class="form-control" name="link" value="{{ $city->link }}">
                </div>

                <button type="submit" class="btn btn-primary">Update City</button>
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
