<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UNIRIUS</title>
    <link rel="stylesheet" href="{{asset('assets/website/css/index.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  

  
<link rel="stylesheet" href="{{asset('assets/website/plugins/Ionicons/css/ionicons.min.css')}}">
  
  <link rel="stylesheet" href="{{asset('assets/website/plugins/animate-css/animate.css')}}">
  <link rel="stylesheet" href="{{asset('assets/website/plugins/magnific-popup/dist/magnific-popup.css')}}">
   <link rel="stylesheet" href="{{asset('assets/website/plugins/slick-carousel/slick/slick.css')}}">
  <link rel="stylesheet" href="{{asset('assets/website/plugins/slick-carousel/slick/slick-theme.css')}}">
  <link rel="stylesheet" href="{{asset('assets/website/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/website/css/contact.css')}}">
 
  </head>
  <body>

  <header>
    <div class="header">
        <img src="{{asset('assets/website/images/association_unirius_logo.jpg')}}" alt="Logo" class="main-logo">
        <div class="social-icons">
            <a href="https://www.facebook.com/AssociationUnityRI" target="_blank">
                <i class="fa-brands fa-facebook"></i>
            </a>
            <a href="https://www.instagram.com/unity_ri/" target="_blank">
                <i class="fa-brands fa-instagram"></i>
            </a>
            <a href="https://www.linkedin.com/company/association-unirius/" target="_blank">
                <i class="fa-brands fa-linkedin"></i>
            </a>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><h2>Uni<span>Rius</span></h2></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('home')}}">Acceuil</a>
              </li>
              <li class="nav-item dropdown" id="dropdown1">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownMenu1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Événements
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                  <li><a class="dropdown-item" href="{{ route('agenda') }}">Agenda</a></li>
                  <li><a class="dropdown-item" href="{{ route('diplomes') }}">Remise des diplomes</a></li>
                  <li><a class="dropdown-item" href="{{ route('conferences') }}">Conferences</a></li>
                  <li><a class="dropdown-item" href="{{ route('soirees') }}">Soirees etudiantes</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown" id="dropdown2">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownMenu2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Nous les CAWEB
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                  <li><a class="dropdown-item" href="{{ route('MhistoiresCAWEB') }}">Meilleures histoires CAWEB</a></li>
                  <li><a class="dropdown-item" href="{{ route('NosEAD') }}">Nos EAD</a></li>
                <li><a class="dropdown-item" href="{{ route('anciensCAWEB') }}">Histoires d'anciens CAWEB</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown" id="dropdown3">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownMenu3" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Découvrir l'association
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu3">
                  <li><a class="dropdown-item" href="{{ route('quisommesnous') }}">Qui sommes nous?</a></li>
                  <li><a class="dropdown-item" href="{{ route('membres') }}">Membres du Bureau</a></li>
                  <li><a class="dropdown-item" href="{{ route('projets') }}">Nos projets</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown" id="dropdown4">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownMenu4" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Galerie
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu4">
                  <li><a class="dropdown-item" href="{{ route('photos') }}">Photos</a></li>
                  <li><a class="dropdown-item" href="#">Vidéos</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown" id="dropdown5">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownMenu5" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Nos partenaires
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu5">
                  <li><a class="dropdown-item" href="{{ route('partenairesprivees') }}">Partenaires privés</a></li>
                  <li><a class="dropdown-item" href="{{ route('parternaireassociatifs') }}">Partenaires associatifs</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('contacter-nous.create')}}">Nous contacter</a>
              </li>
            </ul>
            <form class="d-flex" role="search" action="{{ route('search.posts') }}" method="get">
              <input class="form-control me-2 search-bar" type="search" name="query" placeholder="Rechercher" aria-label="Rechercher">
              <button class="btn btn-outline-success search-button" type="submit" id="search">Recherche</button>
            </form>
          </div>
        </div>
      </nav>

      <div id="scrollProgressContainer">
        <div id="scrollProgressBar"></div>
</div>

  </div>

</header><!--header close-->


@yield('content')

      
     <!--footer start-->
      <footer>
        <div class="footerContainer">
            <div class="socialIcons">
              <a href="https://www.facebook.com/AssociationUnityRI" target="_blank">
                <i class="fa-brands fa-facebook"></i>
            </a>
            <a href="https://www.instagram.com/unity_ri/" target="_blank">
                <i class="fa-brands fa-instagram"></i>
            </a>
            <a href="https://www.linkedin.com/company/association-unirius/" target="_blank">
                <i class="fa-brands fa-linkedin"></i>
            </a>
            </div>
            <div class="footerNav">
                <ul><li><a href="{{route('home')}}">Acceuil</a></li>
                    <li><a href="{{route('membres')}}">Membres</a></li>
                    <li><a href="{{route('projets')}}">Projets</a></li>
                    <li><a href="{{route('quisommesnous')}}">Qui sommes nous?</a></li>
                    <li><a href="{{route('contacter-nous.create')}}">Nous contacter</a></li>
              
                </ul>
            </div>
            
        </div>
        <div class="footerBottom">
            <p>Copyright &copy;2024; Designed by <span class="designer">Soheib</span></p>
        </div>
    </footer>


   <script src="https://code.jquery.com/jquery-git.min.js"></script>
 
    <script src="{{asset('assets/website/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
  
    <script src="{{asset('assets/website/plugins/slick-carousel/slick/slick.min.js')}}"></script>
 
    <script src="{{asset('assets/website/plugins/magnific-popup/dist/jquery.magnific-popup.min.js')}}"></script>
  
    <script src="{{asset('assets/website/plugins/mixitup/dist/mixitup.min.js')}}"></script>
   
    <script src="{{asset('assets/website/plugins/SyoTimer/build/jquery.syotimer.min.js')}}"></script>


   
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>


    
   
    <script src="plugins/google-map/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>    

    <script src="{{asset('assets/website/js/script.js')}}"></script>
    

    <script>
  window.onscroll = function() {
    var winScroll = document.documentElement.scrollTop || document.body.scrollTop;
    var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var scrolled = (winScroll / height) * 100;
    document.getElementById("scrollProgressBar").style.width = scrolled + "%";
  };
</script>



  </body>
</html>
