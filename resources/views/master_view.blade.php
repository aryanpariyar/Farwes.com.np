<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    {{-- slick --}}
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link .href="https://stackpath.bootstrapcnd.com/bootstrap/4.4.1
  /css/bootstrap.min.css" .rel="stylesheet" .integrity="sha384-Vkoo8x4CGs03+
  Hhxv8T/Q5PaXtkKtu6ug5T0eNV6gBiFeWPGFN9Muh0f23Q9Ifjh" .crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" />
{{-- Bootstrap css --}}
     <link rel="stylesheet" href="css/bootstrap.min.css">
     {{-- Fontawesome csss --}}
     <link rel="stylesheet" href="css/all.min.css">
     {{-- custom css --}}
     <link rel="stylesheet" href="./css/style.css">
     <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
     
  
</head>
<body>
    @include('top_header')
    
    
    @yield('content')
    @include('footer')

   
   <!-- rating.js file -->
<script src="js/addons/rating.js"></script>

{{-- new one stuff --}}
  {{-- popular course section end --}}
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous"></script>
      
   
    <script src="js/app.js"></script>
    {{-- jquery and Bootstrap javascript --}}
    <script src="js/jquery.min.js"></script>
    <script src="js/propper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    {{-- Font awesome javascrtip --}}
    <script src="js/all.min.js"></script>

    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    
    <script>
      CKEDITOR.replace( 'summary-ckeditor' );
      </script>

<script>
  $(document).ready(function(){
      $(".mul-select").select2({
              placeholder: "select country", //placeholder
              tags: true,
              tokenSeparators: ['/',',',';'," "] 
          });
      });
</script>



</body>
</html>