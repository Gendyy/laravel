@extends('admin.partial.header')

<form action="/admin/categories/{{$category->id}}" method='POST'>
    @csrf
    @method('PUT')  
    <div class="box-body">
      <div class="form-group">
        <label for="name">Name</label>
      <input type="text" class="form-control" name="name" value="{{$category->name}}" placeholder="Name" style="width:20%">
      </div>
    </div>
    <!-- /.box-body -->

    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>