@extends('admin.partial.header')

  <form action="/user/users/{{$user->id}}" method='POST'>
    @csrf
    @method('PUT')  
    <div class="box-body">
      <div class="form-group">
        <label for="firstname">First Name</label>
      <input type="text" class="form-control" name="firstname" value="{{$user->firstname}}" placeholder="First Name" style="width:20%">
      </div>

      <div class="form-group">
        <label for="lastname">Last Name</label>
        <input type="text" class="form-control" name="lastname" value="{{$user->lastname}}" placeholder="Last Name" style="width:20%">
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" value="{{$user->email}}" placeholder="Email" style="width:20%">
      </div>

      <div class="form-group">
        <label for="phonenumber">Telephone</label>
        <input type="text" class="form-control" name="phonenumber" value="{{$user->phonenumber}}" placeholder="Phone Number" style="width:20%">
      </div>

      <div class="form-group">
        <label for="gender">Gender</label>
      <select type="text" class="form-control" name="gender" value="{{$user->gender}}" style="width:20%">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
      </select>
      </div>

      <div class="form-group">
        <label for="birth_date">Birth Date</label>
        <input type="date" class="form-control" name="birth_date" value="{{$user->birth_date}}" style="width:20%">
    </div>

    </div>
    <!-- /.box-body -->

    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>

