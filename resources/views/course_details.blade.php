<style>
    .courseDetails{
        margin-left: 200px;
        margin-right: 200px;
    }
    .courseDetails .course-Img{
        height: 200px;
        width: 300px;
    }
    .courseDetails .course-Img img{
        height: 100%;
        width: 100%;
        object-fit: contain;
        }
        .courseDetails .courseDescription{
            margin-left: 400px;
            margin-top: -200px;

            
            }
            
  
    

            .courseDetails .courseDescription .btn{
                margin-left: 400px;
                margin-top: -20px;
                background: #ED0786;
                border: none;
            }
            .courseDetails .courseDescription label{
                text-decoration: line-through;
                font-size: 14px;
                margin: 20px;
            }
            .courseDetails .courseDescription span{
               color: #30031c
            }
            table{
                width: 1000px;
            }

            .star-widget input{
  display: none;
}
.star-widget label{
  font-size: 40px;
  color: #444;
  padding: 10px;
  float: right;
  transition: all 0.2s ease;
}
input:not(:checked) ~ label:hover,
input:not(:checked) ~ label:hover ~ label{
  color: #fd4;
}
input:checked ~ label{
  color: #fd4;
}
input#rate-5:checked ~ label{
  color: #fe7;
  text-shadow: 0 0 20px #952;
}
#rate-1:checked ~ form header:before{
  content: "I just hate it 😠";
}
#rate-2:checked ~ form header:before{
  content: "I don't like it 😒";
}
#rate-3:checked ~ form header:before{
  content: "It is awesome 😄";
}
#rate-4:checked ~ form header:before{
  content: "I just like it 😎";
}
#rate-5:checked ~ form header:before{
  content: "I just love it 😍";
}
         


</style>
@extends('master_view')
@section('title','course_details')

@section('content')
<div class="courseDetails">
<h2>Course Details</h2>
<div class="course-Img">
    <img src="images/4.jpg" alt="">
</div>
<div class="courseDescription">
    <h5 class="card-title">COURSE TITLE</h5>
                                
    <p>beatae doloribus minima dolores, commodi modi sed exercitationem soluta eos harum recusandae porro fuga corporis facere quod? Ipsa nesciunt omnis ipsum voluptatem earum aliquid vel ullam! Reiciendis dignissimos accusantium hic facilis. Optio laudantium doloribus harum vero molestiae sed eum ipsam illum.</p>
    Price:<label for="">$300</label><new>$30</new> <br>
    <new>Duration: 10 Hours </new> <br><br>
             
    <span><i class="fas fa-star" style="margin-right: 10px;"></i><i class="fas fa-star" style="margin-right: 10px;"></i><i class="fas fa-star" style="margin-right: 10px;"></i><i class="fas fa-star" style="margin-right: 10px;"></i><i class="fas fa-star" style="margin-right: 10px;"></i></span><br>
    
    <a href="#" class="btn btn-primary center">ENROLL NOW</a>
</div>

<table>
    <tr>
        <th>Lesson No</th>
        <th>Lesson Name</th>
    </tr>

    <tr>
        <td>1</td>
        <td>Introduction To Course</td>
    </tr>
    <tr>
        <td>2</td>
        <td>Instalation </td>
    </tr>
    <tr>
        <td>3</td>
        <td>First Class</td>
    </tr>
</table>
</div>


{{-- Feedback section --}}


<div class="feedback">
    <h2>FEEDBACK</h2>
    {{-- one --}}
   <div class="cards_align sliderr">
     <div class="container">
    <div class="card shadow  rounded " >
      <div class="card-body">
        <p class="card-text">Some quick example text to builard's content.</p>
       
      </div>
    </div>
    <div class="profile">
      <img src="images/profile.jpg" alt="">
    </div>
    <h5>ARYAN PARIYAR</h5>
  </div>
     <div class="container">
    <div class="card shadow  rounded " >
      <div class="card-body">
        <p class="card-text">Some quick example text to builard's content.</p>
       
      </div>
    </div>
    <div class="profile">
      <img src="images/profile.jpg" alt="">
    </div>
    <h5>ARYAN PARIYAR</h5>
  </div>
     <div class="container">
    <div class="card shadow  rounded " >
      <div class="card-body">
        <p class="card-text">Some quick example text to builard's content.</p>
       
      </div>
    </div>
    <div class="profile">
      <img src="images/profile.jpg" alt="">
    </div>
    <h5>ARYAN PARIYAR</h5>
  </div>
     <div class="container">
    <div class="card shadow  rounded " >
      <div class="card-body">
        <p class="card-text">Some quick example text to builard's content.</p>
       
      </div>
    </div>
    <div class="profile">
      <img src="images/profile.jpg" alt="">
    </div>
    <h5>ARYAN PARIYAR</h5>
  </div>
     <div class="container">
    <div class="card shadow  rounded " >
      <div class="card-body">
        <p class="card-text">Some quick example text to builard's content.</p>
       
      </div>
    </div>
    <div class="profile">
      <img src="images/profile.jpg" alt="">
    </div>
    <h5>ARYAN PARIYAR</h5>
  </div>
     <div class="container">
    <div class="card shadow  rounded " >
      <div class="card-body">
        <p class="card-text">Some quick example text to builard's content.</p>
       
      </div>
    </div>
    <div class="profile">
      <img src="images/profile.jpg" alt="">
    </div>
    <h5>ARYAN PARIYAR</h5>
  </div>
     <div class="container">
    <div class="card shadow  rounded " >
      <div class="card-body">
        <p class="card-text">Some quick example text to builard's content.</p>
       
      </div>
    </div>
    <div class="profile">
      <img src="images/profile.jpg" alt="">
    </div>
    <h5>ARYAN PARIYAR</h5>
  </div>
    
   </div>
  </div>

  {{-- feedback end here --}}

 {{-- Recomended Courses --}}
  {{-- Recomended Courses --}}

  <div class="popularCourse" style="z-index: 22;">
    <h2>RECOMENDED COURSES</h2>
    {{-- one --}}
   <div class="cards_align slider">
    <div class="card shadow  rounded " >
      <img src="images/2.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <label for="">$300</label><new>$30</new> <br>
       
        <span><i class="fas fa-star" style="margin-right: 10px;"></i><i class="fas fa-star" style="margin-right: 10px;"></i><i class="fas fa-star" style="margin-right: 10px;"></i><i class="fas fa-star" style="margin-right: 10px;"></i><i class="fas fa-star" style="margin-right: 10px;"></i></span><br>
        
        <a href="#" class="btn btn-primary center">ENROLL NOW</a>
      </div>
    </div>
    {{-- two --}}
    <div class="card shadow  rounded" >
      <img src="images/3.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <label for="">$300</label><new>$30</new> <br>
       
        <span><i class="fas fa-star" style="margin-right: 10px;"></i><i class="fas fa-star" style="margin-right: 10px;"></i><i class="fas fa-star" style="margin-right: 10px;"></i><i class="fas fa-star" style="margin-right: 10px;"></i><i class="fas fa-star" style="margin-right: 10px;"></i></span><br>
        
        <a href="#" class="btn btn-primary">ENROLL NOW</a>
      </div>
    </div>
    {{-- three --}}
    <div class="card shadow  rounded" >
      <img src="images/4.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <label for="">$300</label><new>$30</new> <br>
       
        <span><i class="fas fa-star" style="margin-right: 10px;"></i><i class="fas fa-star" style="margin-right: 10px;"></i><i class="fas fa-star" style="margin-right: 10px;"></i><i class="fas fa-star" style="margin-right: 10px;"></i><i class="fas fa-star" style="margin-right: 10px;"></i></span><br>
       
        <a href="#" class="btn btn-primary">ENROLL NOW</a>
      </div>
    </div>
    {{-- four --}}
    <div class="card shadow  rounded" >
      <img src="images/4.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <label for="">$300</label><new>$30</new> <br>
       
        <span><i class="fas fa-star" style="margin-right: 10px;"></i><i class="fas fa-star" style="margin-right: 10px;"></i><i class="fas fa-star" style="margin-right: 10px;"></i><i class="fas fa-star" style="margin-right: 10px;"></i><i class="fas fa-star" style="margin-right: 10px;"></i></span><br>
        
        <a href="#" class="btn btn-primary">ENROLL NOW</a>
      </div>
    </div>
    {{-- five --}}
    <div class="card shadow  rounded" >
      <img src="images/4.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <label for="">$300</label><new>$30</new> <br>
       
        <span><i class="fas fa-star" style="margin-right: 10px;"></i><i class="fas fa-star" style="margin-right: 10px;"></i><i class="fas fa-star" style="margin-right: 10px;"></i><i class="fas fa-star" style="margin-right: 10px;"></i><i class="fas fa-star" style="margin-right: 10px;"></i></span><br>
       
        <a href="#" class="btn btn-primary">ENROLL NOW</a>
      </div>
    </div>
    {{-- six --}}
    <div class="card shadow  rounded" >
      <img src="images/4.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <label for="">$300</label><new>$30</new> <br>
       
        <span><i class="fas fa-star" style="margin-right: 10px;"></i><i class="fas fa-star" style="margin-right: 10px;"></i><i class="fas fa-star" style="margin-right: 10px;"></i><i class="fas fa-star" style="margin-right: 10px;"></i><i class="fas fa-star" style="margin-right: 10px;"></i></span><br>
        
        <a href="#" class="btn btn-primary">ENROLL NOW</a>
      </div>
    </div>
   </div>
  </div>
  {{-- rating and feedback --}}

@endsection