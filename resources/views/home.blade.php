@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if (session('message'))
                <div class="alert alert-danger" role="alert">
                    {{ session('message')}}
                </div>
                @endif
                <div class="card-header">USER Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in As a USER!
                </div>
                <div class="col-md-12">
                    <a href="{{ route('change.password') }}">Change Password</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
