
<ul class="nav topdiv"  >
    <li class="nav-item">
      <a class="nav-link ">9848989898</a>
    </li>
    <li class="nav-item">
      <a class="nav-link">farwes@edu.com</a>
    </li>
    <li class="nav-item">
      <a class="nav-link">MNR kanchanpur Bazaar</a>
    </li>
   
  </ul>

  {{-- navbar start here --}}

 <nav class="navbar navbar-expand-sm navbar-light "">
  <a class="navbar-brand  text-uppercase" href="/" style="font-family: 'Anton', sans-serif;color: #423F8D">Farwes.edu.np</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse teb" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto tabs">
      <li class="nav-item active" style="margin-left: 200px;">
        <a class="nav-link  text-uppercase customColor" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item .mr-3">
        <a class="nav-link  text-uppercase customColor " href="/courses">Course</a>
      </li>
      <li class="nav-item .ml-3">
        <a class="nav-link  text-uppercase customColor" href="/contact">Contact</a>
      </li>
    
     @if(Auth::check())
      <li class="nav-item .mr-3">
      <a class="nav-link  text-uppercase customColor" href="/my-profile" >My Profile</a>
    </li>
    <li class="nav-item">
      <a class="nav-link  text-uppercase customColor" href="/logout">Logout</a>
    </li>
    @else
    <li>
    <a class="nav-link  text-uppercase customColor" href="/login" >Login</a>
  </li>
  <li class="nav-item">
    <a class="nav-link  text-uppercase customColor" href="/register">Register</a>
  </li>
  @endif
  <li class="nav-item">
    <a class="nav-link  text-uppercase customColor" href="/categories">Categories</a>
  </li>
  
    
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class=" mr-lg-2  " type="search" aria-label="Search">
      <button class="btn  my-2 my-sm-0 " type="submit"><a href="/search_items">Search</a></button>
    </form>
  </div>
</nav>
{{-- navbar end here --}}
<style>
  form .btn a{
    color: rgb(255, 251, 251); 
    text-decoration: none;
  }
 
</style>