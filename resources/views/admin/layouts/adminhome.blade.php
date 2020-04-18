@extends('admin.pages.master')
@section('content')
    
  <section class="content">
    <div class="col-sx-12">
  <a href="{{url('/admin/change-pass')}}">Change Password</a>
  </div>


  <div class="col-sx-12">
    <a href="{{url('/admin/users')}}">List Users</a>
  </div>
  
  </section>
@endsection
