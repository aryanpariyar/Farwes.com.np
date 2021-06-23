<link rel="stylesheet" href="css/course.css">
@extends("master_view")
@section("title","courses")
@section("content")

<div class="course-container">
    
  <div class="row row-cols-1 row-cols-md-4">
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
@endsection