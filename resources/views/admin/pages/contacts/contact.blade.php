@extends('admin.partial.header')

<div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h2 class="display-3">Contact Messages Information</h2>
    
          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
              <tr>

                <th>Name</th>
                <th>Email</th>
                <th>Status</th>
                <th>Detials</th>
              </tr>

    
              @foreach ($contacts as $contact)
              <tr>
                <td>{{$contact->firstname. " " . $contact->lastname}} </td>
                <td>{{$contact->email}}</td>
                <td>
                    @if($contact->status == 1)
                       {{"Readed"}}
                     @else
                        {{"Not Readed"}}
                     </td>
                     @endif
                </td>
              <td><a href='/admin/contacts/{{ $contact->id }}' class="change" data-id="{{$contact->id}}">Message Details</a></td>
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

    