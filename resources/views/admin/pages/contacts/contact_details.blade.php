@extends('admin.partial.header')

<div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h2 class="display-3">Message Details</h2>
    
          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
              <tr>
                <th>Messsage</th>
              </tr>
    
              <tr>
                <td>{{$contact->message}}</td>
              </tr>
            </table>  
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
    </div>
    </div>