

@extends('master-dashboard')

@section('title','carouselData')
<link rel="stylesheet" href="../css/style.css">

@section('content')

{{-- login statrt here --}}
<div class="login-div carouselData">
    <h3>Upload Carousel Data!</h3>
    <hr>
    <form class="px-4 py-3" action="/cms/carouselData" method="Post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input type="text" name="title" maxlength="64" id="id_fullname" class="textinput textInput form-control user-error" required placeholder="Title" data-purpose="fullname" minlength="2" aria-invalid="true">
        </div>
       

        <div class="form-group">
        <textarea class="form-control" id="" name="description" placeholder=" Description"></textarea>

        </div>
        <div class="form-group">
            <input type="file" name="image" style="width: 100%;">
        </div>

        <div class="form-group">
            <input type="text" name="redirectUrl" maxlength="64" id="id_fullname" class="textinput textInput form-control user-error" required="" placeholder="Redirect URL" data-purpose="fullname" minlength="2" aria-invalid="true">
        </div>
        
        
        <div class="form-group">
        <label for="">isActive:</label>
        <input type="checkbox" name="isActive" value="1">

        </div>
       

       
      
        <button type="submit" class="btn customm" style="margin-left: 0px;">Upload</button>
      </form>
     
</div>
  
  {{-- login end here --}}

@endsection

