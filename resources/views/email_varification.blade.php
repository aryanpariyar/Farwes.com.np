@extends('master_view')
@section('title','email_varification')
@section('content')
{{-- Email Varification statrt here --}}
<div class="login-div ">
    <h3>Email Varification</h3>
    <hr>
    <form class="px-4 py-3">
        <div class="form-group">
            <input type = "email" name="email_varification" required="" length="64"  id="email--1" class="form-control user-error" value="" aria-invalid="true">
        </div>
        <button type="submit" class="btn customm">Verify Email</button>
      </form>
</div>
  {{-- Email Varification end here --}}
@endsection