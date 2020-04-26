@extends('admin.partial.header')

<div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h2 class="display-3">User Information</h2>
    
          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Telephone</th>
                <th>Address</th>
                <th>Photo</th>
                <th>Country</th>
                <th>Edit</th>
              </tr>

    
              <tr>
                <td>{{$agency->id}}</td>
                <td>{{$agency->name}}</td>
                <td>{{$agency->email}}</td>
                <td>{{$agency->phonenumber}}</td>
                <td>{{$agency->address}}</td>
                <img class="profile-user-img img-responsive img-circle" src="{{asset('/storage/images/'.Auth::gurad('agency')->image)}}" alt="avatar" alt="Agency profile picture">
                <td>{{$agency->Country}}</td>
              <td><a href='/admin/agencies/{{ $agency->id }}/edit'>E</a></td>
              </tr>

    
              
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
    </div>
    </div>