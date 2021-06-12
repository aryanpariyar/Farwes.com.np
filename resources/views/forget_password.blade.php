@extends('master_view')
@section('title','forget_password')

@section('content')

{{-- login statrt here --}}
<div class="login-div ">
    <h3>Forgot Password</h3>
    <hr>
    <form class="px-4 py-3">
        <div class="form-group">
            <input name="email" required="" maxlength="64" minlength="7" placeholder="Email" data-purpose="email" type="email" id="email--1" class="form-control user-error" value="" aria-invalid="true">
        </div>
      
      
        <button type="submit" class="btn customm">Send Varification</button>
      </form>

     
</div>
  
  {{-- login end here --}}

@endsection