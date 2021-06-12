    
@extends('master_view')
@section('title','edit-profile')

@section('content')

<div class="my-profile">
    <div class="image">
        <img src="images/profile.jpg" alt="">
    </div>
    <div class="tabs">
        <li> 
            <a href="/edit-profile"><i class="fa fa-user" aria-hidden="true"></i><span>Edit Profile</span></a> <br>
        </li>
        <li>
            <a href="/my-courses"><i class="fa fa-book" aria-hidden="true"></i><span>My Course</span></a> <br>
        </li>
        <li>
            <a href="#"><i class="fa fa-book" aria-hidden="true"></i><span>Enroll Course</span></a> <br>
        </li>
        <li>
            <a href="#"><i class="fa fa-book" aria-hidden="true"></i><span>Favourite Course</span></a> <br>
        </li>
        <li>
            <a href="#"><i class="fa fa-key" aria-hidden="true"></i><span>Change Password</span></a><br>
        </li>
        <li>
            <a href="#"><i class="fa fa-power-off" aria-hidden="true"></i><span>Logout</span></a><br>        
        </li>

    </div> <br><br><br>
    <div class="profile-section edit-section">
        <form class="px-4 py-3" action="/edit-profile" method="POST"> 
            @csrf
              
              <div class="form-group">
                <label for="">Name</label>
                <input type="text" name = "name" class="form-control" required id="exampleDropdownFormEmail1" value="Aryan Pariyar">
              </div>
              
              <div class="form-group">
                <label for="">Address</label>
                <input type="text" name = "address" class="form-control" required id="exampleDropdownFormEmail1" value="MNR -4 Kanchanpur">
              </div>
              
              <div class="form-group">
                <label for="">Contact</label>
                <input type="number" name = "contact" class="form-control" required id="exampleDropdownFormEmail1" value="9848988989">
              </div>
                <div class="form-group">
                    <label for="">Upload Image</label><br>
                <input type="file" name="image" >
            </div>
             
              <button type="submit" class="btn customm" style="width: 50%; padding: 10px; margin-left: 0px; font-weight: bold;">UPDATE</button>
    </div>
</div>


@endsection
