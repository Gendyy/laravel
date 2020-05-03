@extends('admin.partial.header')
{{--  --}}

@foreach ($users as $user)
@endforeach
<form action="/user/contact" method='POST'>
    @csrf
    <div class="box-body">

      <div class="form-group">
        <label for="firstname">First Name</label>
      <input type="text" class="form-control" name="firstname" placeholder="First Name" style="width:20%" @error('firstname') is-invalid @enderror required>
        @error('firstname')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>

      <div class="form-group">
        <label for="lastname">Last Name</label>
        <input type="text" class="form-control" name="lastname" placeholder="Last Name" style="width:20%" @error('lastname') is-invalid @enderror required>
        @error('lastname')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" value="{{$user->email}}" placeholder="Email" style="width:20%" @error('email') is-invalid @enderror required>
        @error('email')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>

      <div class="form-group">
        <label for="msg_type">Message Type</label>
      <select type="text" class="form-control" name="msg_type" style="width:20%">
        <option value="Complaint">Complaint</option>
        <option value="Inquire">Inquire</option>
        <option value="Order">Order</option>
        <option value="Other">Other</option>
      </select>
      </div>

      

    <div class="form-group">
        <label>Textarea</label>
        <textarea name="message" class="form-control" rows="5" placeholder="Enter ..." style="width:20%" @error('textarea') is-invalid @enderror required></textarea>
        @error('textarea')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
      <label for="captcha">Captcha</label>
        {!! NoCaptcha::renderJs() !!}
        {!! NoCaptcha::display() !!}
      <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
    </div>
    <!-- /.box-body -->

    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
