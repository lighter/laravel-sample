@extends('layouts.base')

@section('content')
  <h1>Account List</h1>
  <div class="row">
    <div class="col-md-6 col-md-offset-3" style="text-align: left;">
      <a class="btn btn-primary" href="{{ URL::to('account/create') }}">Create Account</a>
      <hr>
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <td>ID</td>
            <td>Email</td>
            <td>Actions</td>
          </tr>
        </thead>
        <tbody>
        @foreach($accounts as $key => $value)
          <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $value->email }}</td>
            <td>
              <a href="{{ URL::to('account/' . $value->id) }}" class="btn btn-success">Show</a>
              <a href="" class="btn btn-info">Edit</a>
              <a href="" class="btn btn-danger">Delete</a>
            </td>
          </tr>
        @endforeach
        </tbody>
    </div>
  </div>
@stop
