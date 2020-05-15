@extends('admin.partial.header')

<div class="container">
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h2 class="display-3">SubCateogries Information</h2>


        
        <div class="col-xs-12">
          <h3 class="display-4">
          <a href="subcategories/create">Create a new Subcategory</a>
          </h3>
        </div>

      </div>
      <!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Catgeory</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
          @foreach ($subcategories as $subcategory)

          <tr>
            <td>{{$subcategory->id}}</td>
            <td>{{$subcategory->name}}</td>
          <td>{{$subcategory->category->name}}</td>
            <td><a href='/admin/subcategories/{{ $subcategory->id }}/edit'>E</a></td>
            
          <td>
            <form action="/admin/subcategories/{{ $subcategory->id }}" method="POST">
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