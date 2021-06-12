@extends('master_view')
@section('title','login')

@section('content')

{{-- login statrt here --}}
<div class="login-div ">
    <h3>Login In to Your Farwes Account</h3>
    <hr>
    <form class="px-4 py-3" action="/login" method="POST"> 
      @csrf
        <div class="form-group">
          <label for="exampleDropdownFormEmail1">Email address</label>
          <input type="email" name = "email" class="form-control" required id="exampleDropdownFormEmail1" placeholder="email@example.com">
        </div>
        <div class="form-group">
          <label for="exampleDropdownFormPassword1">Password</label>
          <input type="password" name = "password"  class="form-control" required id="exampleDropdownFormPassword1" placeholder="Password">
        </div>
       
        <button type="submit" class="btn customm">Log In</button>
      </form>
           <a class="dropdown-item" href="/forget_password">or <span> Forgot password?</span></a>
            
           <a class="dropdown-item" href="/register">Don't have an account? <span> Sign up</span></a>
</div>
  
  {{-- login end here --}}

@endsection