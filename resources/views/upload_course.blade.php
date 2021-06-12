

@extends('master_view')
@section('title','upload_course')

@section('content')

{{-- login statrt here --}}
<div class="login-div ">
    <h3>Upload New Course!</h3>
    <hr>
    <form class="px-4 py-3" action="\upload_course" method="Post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input type="text" name="coursename" maxlength="64" id="id_fullname" class="textinput textInput form-control user-error" required="" placeholder="Course Name" data-purpose="fullname" minlength="2" aria-invalid="true">
        </div>
        <div class="form-group">
            <input type="text" name="courseslug" maxlength="64" id="id_fullname" class="textinput textInput form-control user-error" required="" placeholder="Course-slug" data-purpose="fullname" minlength="2" aria-invalid="true">
        </div>

        <div class="form-group">
            <input type="file" name="image" style="width: 100%;">
        </div>

        <div class="form-group">
            <input type="number" name="courseprice" maxlength="64" id="id_fullname" class="textinput textInput form-control user-error" required="" placeholder="Course Price" data-purpose="fullname" minlength="2" aria-invalid="true">
        </div>
        <div class="form-group">
            <input type="number" name="discountprice" maxlength="64" id="id_fullname" class="textinput textInput form-control user-error" required="" placeholder="Discount Price" data-purpose="fullname" minlength="2" aria-invalid="true">
        </div>
        <div class="form-group">
            <input type="number" name="categoryid" maxlength="64" id="id_fullname" class="textinput textInput form-control user-error" required placeholder="CategoryId" data-purpose="fullname" minlength="2" aria-invalid="true">
        </div>
        <div class="form-group" ">
            <select style="width: 100%; margin-left: 0px;" name="">
                <option value="Programming"> Programming</option>
                <option value="Editing">Editing</option>
                <option value="Business">Business</option>
                <option value="Digital_Marketing">Digital_Marketing</option>
                <option value="Arts">Arts</option>
                <option value="Coding">Coding</option>
                <option value="Music">Music</option>
            </select>
        </div> 
        <div class="form-group">
        <textarea class="form-control" id="summary-ckeditor" name="summary-ckeditor" placeholder="Course Description"></textarea>

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

