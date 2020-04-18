@extends('admin.partial.header')

<div class="container">
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h2 class="display-3">Users Information</h2>

        <div class="col-xs-12">
          <h3 class="display-4">
          <a href="users/create">Create a new user</a>
          </h3>
        </div>
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
            <th>Status</th>
            <th>Edit</th>
            <th>Read</th>
            <th>Delete</th>
          </tr>
          @foreach ($users as $user)

          <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->firstname . " " . $user->lastname}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->birth_date}}</td>
            <td>{{$user->gender}}</td>
            <td>
              <input type="checkbox" data-id="{{ $user->id }}" name="status" class="js-switch" {{ $user->status == 1 ? 'checked' : '' }}>
            </td>
            <td><a href='/admin/users/{{ $user->id }}/edit'>E</a></td>
            <td><a href='/admin/users/{{$user->id}}'>R</a></td>
          <td>
            <form action="/admin/users/{{ $user->id }}" method="POST">
              @method('DELETE') 
              @csrf 
              <input type="submit" value='D'> 
            </form>
          </td>            
          </tr>
          @endforeach
        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
</div>
</div>