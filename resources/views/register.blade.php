@extends('master_view')
@section('title','register')

@section('content')

{{-- login statrt here --}}
<div class="login-div ">
    <h3>Register and Start Learning!</h3>
    <hr>
    <form class="px-4 py-3" action="/register" method="post">
      @csrf
        <div class="form-group">
            <input type="text" name="name" maxlength="64"  required  id="id_fullname" class="textinput textInput form-control user-error" required="" placeholder="Full Name" data-purpose="fullname" minlength="2" aria-invalid="true">
        </div>
        <div class="form-group">
            <input name="email" required="" maxlength="64" minlength="7" required  placeholder="Email" data-purpose="email" type="email" id="email--1" class="form-control user-error" value="" aria-invalid="true">
        </div>
        <div class="form-group">
            <input name="password" minlength="6" maxlength="64" required  placeholder="Password" data-purpose="password" type="password" id="password" class="form-control user-success" value="" aria-autocomplete="list">
         </div>
            <label for="">Role</label>
            <select id="" name="role" value="">
                <option value="Student" class="active" active>Student</option>
                <option value="Teacher">Teacher</option>
            </select>

        <div class="form-group">
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="dropdownCheck">
            <label class="form-check-label" for="dropdownCheck">
                Yes! I want to get the most out of Farwes by receiving emails with exclusive deals, personal recommendations and learning tips!
            </label>
          </div>
        </div>
        <button type="submit" class="btn customm">Register</button>
      </form>
      {{-- <div class="dropdown-divider"></div> --}}
      <a class="dropdown-item anchorcus" href="/privacy_policy">By signing up, you agree to our  <span> Terms of Use</span> and <span>Privacy Policy.</span></a>
      <a class="dropdown-item" href="/login">Already have an account? <span> Log In</span></a>
</div>
  
  {{-- login end here --}}

@endsection