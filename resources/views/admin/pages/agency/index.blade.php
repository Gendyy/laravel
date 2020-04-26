@extends('admin.partial.header')

<div class="container">
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h2 class="display-3">Agencies Information</h2>

        <div class="col-xs-12">
          <h3 class="display-4">
          <a href="agencies/create">Create a new Agency</a>
          </h3>
        </div>
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
            <th>Read</th>
            <th>Delete</th>
          </tr>
          @foreach ($agencies as $agency)

          <tr>
            <td>{{$agency->id}}</td>
            <td>{{$agency->name}}</td>
            <td>{{$agency->email}}</td>
            <td>{{$agency->phonenumber}}</td>
            <td>{{$agency->address}}</td>
            <td>{{$agency->Photo}}</td>
            <td>{{$agency->Country}}</td>


            <td><a href='/admin/agencies/{{ $agency->id }}/edit'>E</a></td>
            <td><a href='/admin/agencies/{{$agency->id}}'>R</a></td>
          <td>
            <form action="/admin/agencies/{{ $agency->id }}" method="POST">
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