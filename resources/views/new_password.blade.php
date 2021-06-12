@extends('master_view')
@section('title','new_password')

@section('content')

{{-- login statrt here --}}
<div class="login-div ">
    <h3>Create New Password</h3>
    <hr>
    <form class="px-4 py-3">
        <div class="form-group">
            <label for="exampleDropdownFormPassword1">Password</label>
            <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="New Password">
          </div>
          <div class="form-group">
            <label for="exampleDropdownFormPassword1">Confirm password</label>
            <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Confirm Password">
          </div>
      
        <button type="submit" class="btn customm">Reset Password</button>
      </form>

     
</div>
  
  {{-- login end here --}}

@endsection