@extends('admin.partial.header')

<form action="/admin/offers" method='POST'>
    @csrf
    <div class="box-body">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" placeholder="Name" style="width:20%">
      </div>

      <div class="form-group">
        <label for="name">Start-Date</label>
        <input type="date" class="form-control" name="start_date" style="width:20%">
      </div>

      <div class="form-group">
        <label for="name">End-Date</label>
        <input type="date" class="form-control" name="end_date" style="width:20%">
      </div>
    


      <div class="form-group">
        <label for="name">Rooms-Number</label>
        <input type="text" class="form-control" name="rooms_num" placeholder="Name" style="width:20%">
      </div>

      <div class="form-group">
        <label for="name">Agency Price</label>
        <input type="text" class="form-control" name="agency_price" placeholder="Name" style="width:20%">
      </div>

      <div class="form-group">
        <label for="name">User Price</label>
        <input type="text" class="form-control" name="user_price" placeholder="Name" style="width:20%">
      </div>

      @foreach($offers as $offer)
      @endforeach

      <div class="form-group">
        <label for="name">Category</label>
        <select name="agency_id">
          @foreach(App\Models\Agency::all() as $agency)
                <option value="{{$agency->id}}">{{$agency-> name}}</option>
          @endforeach
  
        </select>
      </div>


    <div class="form-group">
      <label for="name">Category</label>
      <select multiple name="category_id[]">
        @foreach(App\Models\Category::all() as $category)
              <option value="{{$category->id}}">{{$category-> name}}</option>
        @endforeach

      </select>
    </div>

    <div class="form-group">
      <label for="name">From</label>
      <input type="text" class="form-control" name="from" placeholder="Name" style="width:20%">
    </div>

    <div class="form-group">
      <label for="name">To</label>
      <input type="text" class="form-control" name="to" placeholder="Name" style="width:20%">
    </div>

    <div class="form-group">
      <label for="name">Dep-Time</label>
      <input type="time" class="form-control" name="dep_time" placeholder="Name" style="width:20%">
    </div>

    <div class="form-group">
      <label for="name">Arr -Time</label>
      <input type="time" class="form-control" name="arr_time" placeholder="Name" style="width:20%">
    </div>

    
    <div class="form-group">
      <label for="name">Trip Number</label>
      <input type="text" class="form-control" name="trip_num" placeholder="Name" style="width:20%">
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

    <input type="submit" class="btn btn-primary">
    </div>
  </form>