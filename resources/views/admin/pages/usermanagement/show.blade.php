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
                <th>User</th>
                <th>Email</th>
                <th>Birth-Date</th>
                <th>Gender</th>
                <th>Edit</th>
              </tr>

    
              <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->firstname . " " . $user->lastname}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->birth_date}}</td>
                <td>{{$user->gender}}</td>
              <td><a href='/admin/users/{{ $user->id }}/edit'>E</a></td>
              </tr>

    
              
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
    </div>
    </div>