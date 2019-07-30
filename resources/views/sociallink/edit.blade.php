@extends('layouts.dashboard')
@section('add-sociallink-page')
  active
@endsection
@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li><a href="{{ url('/add/sociallink') }}">
        Add Social Link
      </a></li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Edit Social Link</h1>
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

                    Edit Social Link
                  </div>

                  <div class="panel-body">
                    <form action="{{ url('/update/sociallink') }}" method="post">
                      @csrf

                <div class="form-group">
                  <label>t1</label>
                  <input type="text" class="form-control" name="link1" value="{{ $sociallink->link1 }}">
                </div>
                <div class="form-group">
                  <label>t2</label>
                  <input type="text" class="form-control" name="link2" value="{{ $sociallink->link2 }}">
                </div>
                <div class="form-group">
                  <label>t3</label>
                  <input type="text" class="form-control" name="link3" value="{{ $sociallink->link3 }}">
                </div>
                <div class="form-group">
                  <label>Link4</label>
                  <input type="text" class="form-control" name="link4" value="{{ $sociallink->link4 }}">
                </div>



                <button type="submit" class="btn btn-primary">Update Social Link</button>
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
