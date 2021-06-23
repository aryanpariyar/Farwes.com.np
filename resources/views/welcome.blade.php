@extends('master_view')
@section('title','welcome')

@section('content')

{{-- carousel start here --}}
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
  </ol>
  {{-- <div class="carousel-inner">

    >
    </div>
    <div class="carousel-item">
      <img src="images/3.jpg" class="d-block w-100" style="filter: brightness(.5);">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/5.jpg" class="d-block w-100" style="filter: brightness(.5);">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/4.jpg" class="d-block w-100" style="filter: brightness(.5);">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/1.jpg" class="d-block w-100" style="filter: brightness(.5);">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div> --}}
  <div class="carousel-inner">
    @foreach ($useKey as $key )
    <div class="carousel-item  @if($loop->index == 0 ) active @endif ">
      <img src="{{ $key['image'] }}" class="d-block w-100" alt="..." style="filter: brightness(.5);">
      <div class="carousel-caption d-none d-md-block">
        <h5>{{ $key['title'] }}</h5>
        <p>{{ $key['description'] }}</p>
      </div>
    </div>
    @endforeach
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
{{-- carousel end here --}}



 {{-- popular course section --}}

 <div class="popularCourse">
  <h2>POPULAR COURSES</h2>
  {{-- one --}}
 <div class="cards_align slider">
  @foreach ($courseKey as $main )
  <div class="col mb-3">
      <div class="card shadow  rounded " >
          <img src="{{ $main['image'] }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{ $main['courseName'] }}</h5>
            <p class="card-text">{!! $main['description'] !!}</p>
            <label for="">${{ $main['totalPrice'] }}</label><new>${{ $main['discountPrice'] }}</new> <br>
            <span><i class="fas fa-star" style="margin-right: 10px;"></i><i class="fas fa-star" style="margin-right: 10px;"></i><i class="fas fa-star" style="margin-right: 10px;"></i><i class="fas fa-star" style="margin-right: 10px;"></i><i class="fas fa-star" style="margin-right: 10px;"></i></span><br>
            <a href="#" class="btn btn-primary center">ENROLL NOW</a>
           </div>
         </div>
        </div>     
        @endforeach

 </div>
</div>
 {{-- Recent Added course section --}}

 <div class="popularCourse">
  <h2>RECENT ADDED COURSES</h2>
  {{-- one --}}
 <div class="cards_align slider">
  @foreach ($courseKey as $main )
  <div class="col mb-3">
      <div class="card shadow  rounded " >
          <img src="{{ $main['image'] }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{ $main['courseName'] }}</h5>
            <p class="card-text">{!! $main['description'] !!}</p>
            <label for="">${{ $main['totalPrice'] }}</label><new>${{ $main['discountPrice'] }}</new> <br>
            <span><i class="fas fa-star" style="margin-right: 10px;"></i><i class="fas fa-star" style="margin-right: 10px;"></i><i class="fas fa-star" style="margin-right: 10px;"></i><i class="fas fa-star" style="margin-right: 10px;"></i><i class="fas fa-star" style="margin-right: 10px;"></i></span><br>
            <a href="#" class="btn btn-primary center">ENROLL NOW</a>
           </div>
         </div>
        </div>     
        @endforeach
  
 </div>
</div>
{{-- Product For You section --}}


 <div class="popularCourse">
  <h2>PRODUCT FOR YOU</h2>
  {{-- one --}}
 <div class="cards_align slider">
  <div class="card shadow  rounded " >
    <img src="images/2.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <label for="">$300</label><new>$30</new> <br>
      <span><i class="fas fa-star" style="margin-right: 10px;"></i><i class="fas fa-star" style="margin-right: 10px;"></i><i class="fas fa-star" style="margin-right: 10px;"></i><i class="fas fa-star" style="margin-right: 10px;"></i><i class="fas fa-star" style="margin-right: 10px;"></i></span><br>
      
      <a href="#" class="btn btn-primary center">BUY NOW</a>
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
      
      <a href="#" class="btn btn-primary">BUY NOW</a>
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
     
      <a href="#" class="btn btn-primary">BUY NOW</a>
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
      
      <a href="#" class="btn btn-primary">BUY NOW</a>
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
      <a href="#" class="btn btn-primary">BUY NOW</a>
     
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
      <a href="#" class="btn btn-primary">BUY NOW</a>
      
    </div>
  </div>
 </div>
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
{{-- connect with us --}}
<div class="connect">
  <h2>CONNECT WITH US</h2>
<form class="px-4 py-3">
  <div class="form-group">
    <label for="exampleDropdownFormEmail1">NAME</label>
    <input type="text" class="form-control" id="exampleDropdownFormEmail1" >
  </div>
  <div class="form-group">
    <label for="exampleDropdownFormPassword1">EMAIL</label>
    <input type="email" class="form-control" id="exampleDropdownFormPassword1">
  </div>
  
  <button type="submit" class="btn customm">CONNECT</button>
</form>
</div>
<div class="social-icons">
  <div class="facebook">
   <a href=""> <img src="images/facebook.png" alt="">
</a>  </div>
  <div class="instagram">
   <a href=""> <img src="images/instagram.png" alt=""></a>
  </div>
  <div class="youtube">
   <a href=""> <img src="images/youtube.png" alt="">
 </a> </div>
  <div class="twitter">
   <a href=""> <img src="images/twitter.png" alt="">
 </a> </div>

</div>


@endsection





