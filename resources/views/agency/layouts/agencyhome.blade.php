@extends('agency.pages.master')
@section('content')
    
  <section class="content">
    <div class="col-sx-12">
  {{-- <a href="{{url('/admin/change-pass')}}">Change Password</a> --}}
  </div>


  <div class="col-sx-12">
    {{-- <a href="{{url('/admin/users')}}">List Users</a> --}}
  </div>

  <div class="col-sx-12">
    <a href="{{url('/agency/offers')}}">List Offers</a>
  </div>

  @foreach ($agencies as $agency)
      
  @endforeach
  <p>{{$agency->name}}</p>
  <div class="col-sx-12">
    <a class="dropdown-item" href="{{ route('logout') }}"
       onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>

    <form id="logout-form" action="{{ route('agency.logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</div>


  </section>
@endsection
