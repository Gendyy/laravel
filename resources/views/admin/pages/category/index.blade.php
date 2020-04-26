@extends('admin.partial.header')

<div class="container">
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h2 class="display-3">Cateogries Information</h2>

        <div class="col-xs-12">
          <h3 class="display-4">
          <a href="categories/create">Create a new Category</a>
          </h3>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Edit</th>
            <th>Read</th>
            <th>Delete</th>
          </tr>
          @foreach ($categories as $category)

          <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
            <td><a href='/admin/categories/{{ $category->id }}/edit'>E</a></td>
            <td><a href='/admin/categories/{{$category->id}}'>R</a></td>
            
          <td>
            <form action="/admin/categories/{{ $category->id }}" method="POST">
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