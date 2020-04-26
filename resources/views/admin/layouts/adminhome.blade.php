@extends('admin.pages.master')
@section('content')
    
  <section class="content">
    <div class="col-sx-12">
  <a href="{{url('/admin/change-pass')}}">Change Password</a>
  </div>


  <div class="col-sx-12">
    <a href="{{url('/admin/users')}}">List Users</a>
  </div>
  
  <div class="col-sx-12">
    <a href="{{url('/admin/categories')}}">List Categories</a>
  </div>

  <div class="col-sx-12">
    <a href="{{url('/admin/agencies')}}">List Agencies</a>
  </div>

  <div class="col-sx-12">
    <a href="{{url('/admin/offers')}}">List Offers</a>
  </div>

  <div class="col-sx-12">
    <a class="dropdown-item" href="{{ route('logout') }}"
       onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>

    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</div>
  </section>
@endsection
