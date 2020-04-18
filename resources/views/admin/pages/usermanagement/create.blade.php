@extends('admin.partial.header')

<form action="/admin/users" method='POST'>
    @csrf
    <div class="box-body">
      <div class="form-group">
        <label for="firstname">First Name</label>
        <input type="text" class="form-control" name="firstname" placeholder="First Name" style="width:20%">
      </div>

      <div class="form-group">
        <label for="lastname">Last Name</label>
        <input type="text" class="form-control" name="lastname" placeholder="Last Name" style="width:20%">
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" placeholder="Email" style="width:20%">
      </div>

      <div class="form-group">
        <label for="phonenumber">Telephone</label>
        <input type="text" class="form-control" name="phonenumber" placeholder="Phone Number" style="width:20%">
      </div>

      <div class="form-group">
        <label for="gender">Gender</label>
      <select type="text" class="form-control" name="gender" style="width:20%">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
      </select>
      </div>

      <div class="form-group">
        <label for="birth_date">Birth Date</label>
        <input type="date" class="form-control" name="birth_date" style="width:20%">
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" style="width:20%">
    </div>
    </div>
    <!-- /.box-body -->

    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>