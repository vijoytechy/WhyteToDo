<html>
  <head>
    <title>Todo App Demo</title>
   <!-- Bootstrap CSS -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
   <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>

  <body>
  <nav class="navbar navbar-expand-lg  nc-light">
      <a class="navbar-brand  nc-light" href="/">TODO APP </a>
      <a class="navbar-toggler type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >
    <img  class="navbar-toggler-icon" src="{{asset('images/hom.png') }}" alt="Logo" >
  </a>
    
    <div class="container-fluid">
   

      <div class="collapse navbar-collapse  nc-light" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <a class="nav-link nc-light" href="/">All Tasks</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nc-light" href="/tasks/create">New Task</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container">
      @yield('content')

      
    </div>
    <footer class="footer navbar-fixed-bottom nc-light">
      <div class="container">
        <span class="nc-light">© Copyright 2021, All Rights Reserved <a href="https://github.com/vijoytechy">Vijoy T Abraham</a> </span>
      </div>
    </footer>
    </div>
    

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"></script>
    <script src="{{ asset('js/app.js')}}"></script>
  </body>
</html>