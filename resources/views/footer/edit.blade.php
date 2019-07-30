@extends('layouts.dashboard')
@section('add-footer-page')
  active
@endsection
@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li><a href="{{ url('/add/footer') }}">
        Add Footer
      </a></li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Edit Footer</h1>
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

                    Edit Footer
                  </div>

                  <div class="panel-body">
                    <form action="{{ url('/update/footer') }}" method="post">
                      @csrf
                <div class="form-group">
                  <label>Text1</label>
                  <input type="hidden" name="footer_id" value="{{ $footer->id }}">
                  <input type="text" class="form-control" placeholder="Enter text1" name="text1" value="{{ $footer->text1 }}">
                </div>
                <div class="form-group">
                  <label>Text2</label>
                  <input type="text" class="form-control" placeholder="Enter text2" name="text2" value="{{ $footer->text2 }}">
                </div>
                <div class="form-group">
                  <label>Footer Image</label>
                  <input type="file" class="form-control" placeholder="Enter footer Image" name="footer_image" value="{{ $footer->footer_image }}">
                </div>
                <button type="submit" class="btn btn-primary">Update Footer</button>
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
