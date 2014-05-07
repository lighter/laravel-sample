@extends('layouts.base')
@section('content')
<h1>This is show sample</h1>
<p>
  Login_status:
  {{ $login_status }}
</p>
<a class="btn btn-primary" href="{{ URL::to('account') }}">Account</a>
@stop
