@extends('admin.partial.header')

<div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h2 class="display-3">User Information</h2>
    
          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Edit</th>
              </tr>

    
              <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
              <td><a href='/admin/categories/{{ $category->id }}/edit'>E</a></td>
              </tr>

    
              
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
    </div>
    </div>