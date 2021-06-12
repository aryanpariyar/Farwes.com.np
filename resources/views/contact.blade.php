
    
@extends('master_view')
@section('title','contact')

@section('content')

{{-- Contact Us statrt here --}}
<div class="login-div ">
    <h3>Contact Us <h3>
    <hr>
    <form class="px-4 py-3">
        <div class="form-group">
            <input type="text" name="fullname" maxlength="64" id="id_fullname" class="textinput textInput form-control user-error" required="" placeholder="Full Name" data-purpose="fullname" minlength="2" aria-invalid="true">
        </div>
        <div class="form-group">
            <input name="email" required="" maxlength="64" minlength="7" placeholder="Email" data-purpose="email" type="email" id="email--1" class="form-control user-error" value="" aria-invalid="true">
        </div>
        <div class="form-group">
            <input name="text" minlength="6" maxlength="64"  placeholder="subject"  type="password" id="password" class="form-control user-success" value="" aria-autocomplete="list">
         </div>

         <div class="form-group">
            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Your Message here ..." rows="3"></textarea>
          </div>
        
            
        <button type="submit" class="btn customm" style="width: 100%; margin-left: 0px;">Send Message</button>
      </form>
    
</div>
  
  {{-- Contact US end here --}}

@endsection