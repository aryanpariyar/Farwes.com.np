@extends('master_view')
@section('title','varification')

@section('content')

{{-- login statrt here --}}
<div class="login-div ">
    <h3>Enter Verification Code</h3>
    <hr>
    <form class="px-4 py-3">
        <div class="form-group">
            <input name="varification_code" required="" length="64"  type="number" id="email--1" class="form-control user-error" value="" aria-invalid="true">
        </div>
      
      
        <button type="submit" class="btn customm">Verify</button>

      </form>
      <a class="dropdown-item" href="#">  <span> Resend Verification Code</span></a>

     
</div>
  
  {{-- login end here --}}

@endsection