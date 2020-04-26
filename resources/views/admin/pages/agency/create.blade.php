@extends('admin.partial.header')

<form action="/admin/agencies" method='POST'>
    @csrf
    <div class="box-body">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" placeholder="Name" style="width:20%">
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
        <label for="address">Address</label>
        <input type="text" class="form-control" name="address" style="width:20%">
      </div>



      <div class="form-group">
        <label for="country">Country</label>
        <input type="text" class="form-control" name="country" style="width:20%">
      </div>


    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" style="width:20%">
    </div>
    </div>
    <!-- /.box-body -->

    <div class="box-footer">
      <form action="{{ route('upload.photo') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="photo">Upload Image</label>
          <input type="file" name="photo">
          <input type="submit" class="btn btn-primary"></input>
        <div>
        </div>
        </div>
      </form>
      {{-- <input type="submit" value="Upload"> --}}
    </div>
  </form>