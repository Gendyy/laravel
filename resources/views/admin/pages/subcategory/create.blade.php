@extends('admin.partial.header')

<form action="/admin/subcategories" method='POST'>
    @csrf
    <div class="box-body">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" placeholder="Name" style="width:20%">
      </div>


      <div class="form-group">
        <label for="name">Category</label>
        <select name="category_id">
          @foreach(App\Models\Category::all() as $category)
                <option value="{{$category->id}}">{{$category-> name}}</option>
          @endforeach
  
        </select>
      </div>
    <!-- /.box-body -->

    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>