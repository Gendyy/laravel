@extends('admin.partial.header')

<div class="container">
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h2 class="display-3">Offers Information</h2>

        <div class="col-xs-12">
          <h3 class="display-4">
          <a href="offers/create">Create a new Offer</a>
          </h3>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Status</th>
            <th>Rooms Number</th>
            <th>Agency Price</th>
            <th>User Price</th>
            <th>Photos</th>
            <th>Agency</th>
            <th>Category</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
          @foreach ($offers as $offer)

          <tr>
            <td>{{$offer->id}}</td>
            <td>{{$offer->name}}</td>
            <td>{{$offer->start_date->isoFormat('MMMM Do YYYY, h:mm a')}}</td>
            <td>{{$offer->end_date->isoFormat('MMMM Do YYYY, h:mm a')}}</td>
            <td class="form-group">
              <label for="name"></label>
              <input type="checkbox" data-id="{{ $offer->id }}" name="status" class="js-switch" {{ $offer->status == 1 ? 'checked' : '' }}>
            </td>
            <td>{{$offer->rooms_num}}</td>
            <td>{{$offer->agency_price}}</td>
            <td>{{$offer->user_price}}</td>
            <td>{{$offer->photo}}</td>
            
            <td>{{$offer->agency->name}}</td>
            @foreach ($offer->categories as $category)
            <td>{{$category->name}}</td>
            @endforeach

            <td><a href='/admin/offers/{{$offer->id}}/edit'>E</a></td>
            
          <td>
            <form action="/admin/offers/{{ $offer->id }}" method="POST">
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