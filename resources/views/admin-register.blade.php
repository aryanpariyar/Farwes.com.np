<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin:Register</title>  
  <link rel="stylesheet" href="../css/admin-login.css">
</head>
<body>
  <h3>Admin Login Pannel  </h3>
  <div class="container">
    <div class="dropdown-menu">
      <form class="px-4 py-3" method="POST" action="/cms/admin-register">
        @csrf
        <div class="form-group">
          <label for="exampleDropdownFormName">Name</label>
          <input type="text" name="name" class="form-control" id="exampleDropdownFormName" placeholder="Your name">
        </div> <br> <br>
        <div class="form-group">
          <label for="exampleDropdownFormEmail1">Email address</label>
          <input type="email" name="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
        </div> <br> <br>
        <div class="form-group">
          <label for="exampleDropdownFormPassword1">Password</label>
          <input type="password" name="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
        </div><br><br>
       
        <button type="submit" class="btn btn-primary" style="width: 115%">Sign Up</button>
      </form>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#" style="letter-spacing: 2.5px;">Already have an account? Sign In</a>
      
    </div>
  </div>


</body>
</html>