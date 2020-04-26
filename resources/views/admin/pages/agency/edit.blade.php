@extends('admin.partial.header')

<form action="/admin/agencies/{{$agency->id}}" method='POST'>
    @csrf
    @method('PUT')  
    <div class="box-body">
      <div class="form-group">
        <label for="name">Name</label>
      <input type="text" class="form-control" name="name" value="{{$agency->name}}" placeholder="Name" style="width:20%">
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" value="{{$agency->email}}" placeholder="Email" style="width:20%">
      </div>

      <div class="form-group">
        <label for="phonenumber">Telephone</label>
        <input type="number" class="form-control" name="phonenumber" value="{{$agency->phonenumber}}" placeholder="Phone Number" style="width:20%">
      </div>

      <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" name="address" value="{{$agency->address}}" style="width:20%">
      </div>

      <div class="form-group">
        <label for="photo">Photo</label>
        <input type="text" class="form-control" name="photo" value="{{$agency->photo}}" style="width:20%">
      </div>

      <div class="form-group">
        <label for="country">Country</label>
        <input type="text" class="form-control" name="country" value="{{$agency->country}}" style="width:20%">
      </div>

    </div>
    <!-- /.box-body -->

    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>