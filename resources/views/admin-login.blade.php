<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin:Login</title>  
  <link rel="stylesheet" href="../css/admin-login.css">
</head>
<body>
  <h3>Admin Login Pannel  </h3>
  <div class="container">
    <div class="dropdown-menu">
      <form class="px-4 py-3" method="POST" action="/cms/admin-login">
        @csrf
        <div class="form-group">
          <label for="exampleDropdownFormEmail1">Email address</label>
          <input type="email" name="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
        </div> <br> <br>
        <div class="form-group">
          <label for="exampleDropdownFormPassword1">Password</label>
          <input type="password" name="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
        </div><br><br>
        <div class="form-group">
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="dropdownCheck">
            <label class="form-check-label" for="dropdownCheck">
              Remember me
            </label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
      </form>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">New around here? Sign up</a>
      |
      <a class="dropdown-item" href="#">Forgot password?</a>
    </div>
  </div>


</body>
</html>