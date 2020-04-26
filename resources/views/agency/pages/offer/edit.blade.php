@extends('agency.partial.header')

<form action="/agency/offers/{{$offer->id}}" method='POST'>
    @csrf
    @method('PUT')  
    <div class="box-body">
      <div class="form-group">
        <label for="name">Name</label>
      <input type="text" class="form-control" name="name" value="{{$offer->name}}" placeholder="Name" style="width:20%">
      </div>
    </div>

    <div class="box-body">
      <div class="form-group">
        <label for="name">Start-Date</label>
      <input type="date" class="form-control" name="start_date" value="{{$offer->start_date}}" placeholder="Name" style="width:20%">
      </div>
    </div>

    <div class="box-body">
      <div class="form-group">
        <label for="name">End-Date</label>
      <input type="date" class="form-control" name="end_date" value="{{$offer->end_date}}" placeholder="Name" style="width:20%">
      </div>
    </div>

    <div class="box-body">
      <div class="form-group">
        <label for="name">Rooms-Number</label>
      <input type="text" class="form-control" name="rooms_num" value="{{$offer->rooms_num}}" placeholder="Name" style="width:20%">
      </div>
    </div>

    <div class="box-body">
      <div class="form-group">
        <label for="name">Agency Price</label>
      <input type="text" class="form-control" name="agency_price" value="{{$offer->agency_price}}" placeholder="Name" style="width:20%">
      </div>
    </div>

    <div class="box-body">
      <div class="form-group">
        <label for="name">User Price</label>
      <input type="text" class="form-control" name="user_price" value="{{$offer->user_price}}" placeholder="Name" style="width:20%">
      </div>
    </div>

    {{-- <div class="form-group">
      <label for="name">Agency</label>
      <select name="agency_id">
        @foreach($offers as $offer)
        <option value="{{$offer->agency->id}}">{{$offer-> agency -> name}}</option>
        @endforeach
      </select>
    </div> --}}

    <div class="form-group">
      <label for="name">Category</label>
      <select multiple name="category_id[]">
        @foreach(App\Models\Category::all() as $category)
                <option value="{{$category->id}}">{{$category-> name}}</option>
          @endforeach
      </select>
    </div>

    @foreach ($offer->details as $detail)
        
    @endforeach
    <div class="box-body">
      <div class="form-group">
        <label for="name">From</label>
      <input type="text" class="form-control" name="from" value="{{$detail->from}}" placeholder="From" style="width:20%">
      </div>
    </div>

    <div class="box-body">
      <div class="form-group">
        <label for="name">To</label>
      <input type="text" class="form-control" name="to" value="{{$detail->to}}" placeholder="To" style="width:20%">
      </div>
    </div>

    <div class="box-body">
      <div class="form-group">
        <label for="name">Dep-Time</label>
      <input type="text" class="form-control" name="dep_time" value="{{$detail->dep_time}}" placeholder="Dep-Time" style="width:20%">
      </div>
    </div>

    <div class="box-body">
      <div class="form-group">
        <label for="name">Arr-Time</label>
      <input type="text" class="form-control" name="arr_time" value="{{$detail->arr_time}}" placeholder="Arr-Time" style="width:20%">
      </div>
    </div>

    <div class="box-body">
      <div class="form-group">
        <label for="name">Trip-Number</label>
      <input type="text" class="form-control" name="trip_num" value="{{$detail->trip_num}}" placeholder="Trip Number" style="width:20%">
      </div>
    </div>

    <div class="col-md-6">
      <label for="name">Transportation</label>
      <select id="transportation" type="text" name="transportation" placeholder="Transportation">
          <option value="Bus">Bus</option>
          <option value="Train">Train</option>
      </select>
    </div>

    <div class="form-group">
      <label for="photo">Photo</label>
      <input type="file" name="photo">
      <br>

    </div>
    <!-- /.box-body -->

    <input type="submit" class="btn btn-primary">

  </form>