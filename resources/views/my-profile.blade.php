    
@extends('master_view')
@section('title','my-profile')

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
            <a href="/enroll-courses"><i class="fa fa-book" aria-hidden="true"></i><span>Enroll Course</span></a> <br>
        </li>
        <li>
            <a href="/my-Favourite"><i class="fa fa-book" aria-hidden="true"></i><span>Favourite Course</span></a> <br>
        </li>
        <li>
            <a href="/change_password"><i class="fa fa-key" aria-hidden="true"></i><span>Change Password</span></a><br>
        </li>
        <li>
            <a href="/logout"><i class="fa fa-power-off" aria-hidden="true"></i><span>Logout</span></a><br>        
        </li>

    </div>
    <div class="profile-section">
        <div class="title1">
          <label for="">Student ID</label><br><br>
          <label for="">Name</label><br><br>
          <label for="">Address</label><br><br>
          <label for="">Email</label><br><br>
          <label for="">Contact</label><br><br>
          <label for="">Bio</label><br><br>
        </div>
        <div class="title2">
          <label for="">:</label><br><br>
          <label for="">:</label><br><br>
          <label for="">:</label><br><br>
          <label for="">:</label><br><br>
          <label for="">:</label><br><br>
          <label for="">:</label><br><br>
        </div><br><br><br><br><br>
        <div class="title3">
          <label>123</label><br><br>
          <label>Aryan Pariyar</label><br><br>
          <label>MNR -4 Kanchanpur</label><br><br>
          <label>aryan389@gmail.com</label><br><br>
          <label>9848988898</label><br><br>
          <label>This is a boi section</label><br><br>
        </div>
    </div> <br><br><br>    
</div>


@endsection
