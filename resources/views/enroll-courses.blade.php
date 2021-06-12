<style>
    /*  my courses css */

    .my-profile .my-course {
        /* background-color: red; */
        width: 80vw;
        margin-left: 300px;
        margin-top: -550px;
        margin-right: 20px;
    }

    .my-profile .my-course .courseDetails .course-Img {
        /* background-color: green; */
        height: 100px;
        width: 150px;

    }

    .my-profile .my-course .courseDetails .course-Img img {
        height: 100%;
        width: 100%;
        object-fit: cover;

    }

    .my-profile .my-course .courseDescription {
        /* background-color: red; */
        width: 65%;
        height: 100px;
        margin-left: 310px;
        margin-top: -130px;

    }

    .my-profile .my-course .courseDescription span {
        /* background-color: red; */
        margin-right: 300px;
        font-size: 15px;

    }

    .my-profile .my-course .courseDescription spann {

        margin-left: 500px;


    }

    .my-profile .my-course .courseDescription spann label {

        font-size: 25px;
        font-weight: bold;


    }


    .my-profile .my-course .courseDescription p,
    new {

        font-size: 13px;

    }

    .space {
        /* background-color: red; */
        width: 65%;
        height: 100px;


    }
</style>

@extends('master_view')
@section('title','enroll-courses')

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

    </div> <br><br><br>
    <div class="my-course ">

        <div class="courseDetails">
            <h3>Course Details</h3>
            <div class="course-Img">
                <img src="images/1.jpg" alt="">
            </div>
            <div class="courseDescription">
                <h5 class="card-title">COURSE TITLE</h5>
                <p> voluptatem earum aliquid vel ullam! Reiciendis dignissimos accusantium hic facilis. Optio laudantium doloribus harum vero molestiae sed eum ipsam illum.</p>
                <spann><label for=""><i class="fas fa-play"></i></label></spann><br>

            </div>
        </div>
        <!-- another one -->
        <br><br><br>
        <div class="courseDetails">
            <div class="course-Img">
                <img src="images/2.jpg" alt="">
            </div>
            <div class="courseDescription">
                <h5 class="card-title">COURSE TITLE</h5>
                <p> voluptatem earum aliquid vel ullam! Reiciendis dignissimos accusantium hic facilis. Optio laudantium doloribus harum vero molestiae sed eum ipsam illum.</p>
                <spann><label for=""><i class="fas fa-play"></i></label></spann><br>

            </div>
        </div>
        <!-- end another one -->
        <!-- another two -->
        <br><br><br>
        <div class="courseDetails">
            <div class="course-Img">
                <img src="images/3.jpg" alt="">
            </div>
            <div class="courseDescription">
                <h5 class="card-title">COURSE TITLE</h5>
                <p> voluptatem earum aliquid vel ullam! Reiciendis dignissimos accusantium hic facilis. Optio laudantium doloribus harum vero molestiae sed eum ipsam illum.</p>
                <spann><label for=""><i class="fas fa-play"></i></label></spann><br>

            </div>
        </div>
        <!-- end another two -->
        <!-- another three -->
        <br><br><br>
        <div class="courseDetails">
            <div class="course-Img">
                <img src="images/4.jpg" alt="">
            </div>
            <div class="courseDescription">
                <h5 class="card-title">COURSE TITLE</h5>
                <p> voluptatem earum aliquid vel ullam! Reiciendis dignissimos accusantium hic facilis. Optio laudantium doloribus harum vero molestiae sed eum ipsam illum.</p>
                <spann><label for=""><i class="fas fa-play"></i></label></spann><br>

            </div>
        </div>
        <!-- end another three -->
        <!-- another four -->
        <br><br><br>
        <div class="courseDetails">
            <div class="course-Img">
                <img src="images/5.jpg" alt="">
            </div>
            <div class="courseDescription">
                <h5 class="card-title">COURSE TITLE</h5>
                <p> voluptatem earum aliquid vel ullam! Reiciendis dignissimos accusantium hic facilis. Optio laudantium doloribus harum vero molestiae sed eum ipsam illum.</p>
                <spann><label for=""><i class="fas fa-play"></i></label></spann><br>

            </div>
        </div>
        <!-- end another four -->
    </div>
    <div class="space"></div>


    @endsection