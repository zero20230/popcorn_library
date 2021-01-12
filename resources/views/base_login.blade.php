<!DOCTYPE html>
<html lang="en">  
<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}"> 
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="{{asset('css/bootstrap.css')}}"></script>
  <link type="text/css" rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"  media="screen,projection"/>
  <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" href="{{asset('https://use.fontawesome.com/releases/v5.8.2/css/all.css')}}">
  <link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap')}}">
  <link href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/css/mdb.min.css')}}" rel="stylesheet">
  
<title>Popcorn Library  @yield('title',' ')</title>
</head>
          <style>
                  body {
                    background-image: url('{{asset('img/background/background_4.jpg')}}');
                    background-repeat: no-repeat;
                    background-attachment: fixed;  
                    background-size: cover;
                  }
          </style>
<body>
  <div class="jumbotron blue-gradient" style="margin-bottom: 0px;"> 
   <h1 class="texto-amarillo display-4 texto_titulo"> 
     <img src="{{asset('img/popcorn.png')}}" width="120" height="120"  alt="">Popcorn Library

    </h1>

  </div>

    <nav class="navbar navbar-expand-md  navbar-dark  peach-gradient lighten-1 "> 
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggler-icon">+</span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="/">  <i class="fas fa-home"></i>Home</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="/calificacion"><i class="fas fa-star-half-alt"></i>Ver calificacion </a>
                            <li class="nav-item">
                                <a class="nav-link" href="/opinion_usuarios"><i class="fas fa-bullhorn"></i>Opinion de los usuarios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/critica"><i class="fas fa-glasses"></i>Critica del staff</a>
                            </li>
               
                        </ul>
                        <ul class="navbar-nav ml-auto nav-flex-icons">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('logout')}}"><i class="fas fa-sign-in-alt"></i>Logout</a>
                            </li>
                            
                    </div>
    </nav>
@yield('content')


<footer class="page-footer font-small blue-gradient ">
  <div class="container">
    <div class="row">
      <div class="col-md-12 py-5">
        <div class="mb-5 flex-center">
          <a class="fb-ic">
            <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <a class="tw-ic">
            <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <a class="gplus-ic">
            <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
         <a class="li-ic">
            <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <a class="ins-ic">
            <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <a class="pin-ic">
            <i class="fab fa-pinterest fa-lg white-text fa-2x"> </i>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-copyright text-center py-3">© i-store software:
    <a href="https://mdbootstrap.com/"> i-store.com</a>
  </div>
</footer>

  <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.j" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/js/mdb.min.js"></script>
</body>
</html>