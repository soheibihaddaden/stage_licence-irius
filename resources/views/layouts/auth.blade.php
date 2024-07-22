<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('assets/auth/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/auth/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/auth/vendors/css/vendor.bundle.base.css')}}">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- endinject -->
    <!-- Plugin css for this page -->
 <link rel="stylesheet" href="{{asset('assets/auth/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('assets/auth/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('assets/auth/images/favicon.png')}}" />

    @yield('styles')


  </head>
  <body>
   
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>

          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-email-outline"></i>
                <span class="count-symbol bg-warning" id="messageCount"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-end navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                <h6 class="p-3 mb-0">Messages</h6>

              
                @foreach($messages as $message)
               
              
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
               
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">{{$message->nom}} vous a envoyer un message</h6>
                    <p class="text-gray mb-0"> {{ $message->created_at->diffForHumans() }}</p>
                  </div>
                </a>

              @endforeach
  
                <div class="dropdown-divider"></div>
                <a href="{{ route('auth.messages') }}" class="text-decoration-none">{{$remainingMessagesCount}} nouveaux messages</a>
                </div>
            </li>
            




            <li class="nav-item nav-logout d-none d-lg-block">
             <form id="logout-form" method="post" action="{{route('logout')}}">
              @csrf
              <a id="logout-button" class="nav-link" href="#">
                <i class="mdi mdi-power"></i>
              </a>

             </form>  
            
            </li>
            

          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>



      
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="{{asset('assets/auth/images/faces/face1.jpg')}}" alt="profile" />
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">{{auth()->user()->name}}</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('auth.dashboard')}}">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Posts</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('posts.create')}}">Create post</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('posts.index')}}">Posts</a>
                  </li>
             
                </ul>
              </div>
            </li>


          </ul>
        </nav>


        @yield('content')



  
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('assets/auth/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('assets/auth/vendors/chart.js/chart.umd.js')}}"></script>
    <script src="{{asset('assets/auth/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('assets/auth/js/off-canvas.js')}}"></script>
    <script src="{{asset('assets/auth/js/misc.js')}}"></script>
    <script src="{{asset('assets/auth/js/settings.js')}}"></script>
    <script src="{{asset('assets/auth/js/todolist.js')}}"></script>
    <script src="{{asset('assets/auth/js/jquery.cookie.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('assets/auth/js/dashboard.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

     <!-- End custom js for this page -->

     @yield('scripts') 
     
     
     <script>
      $(document).ready(function(){
        $('#logout-button').click(function() {
            $('#logout-form').submit();

        });
      }
    );
        </script>



    
  <script>
  @if(Session::has('alert-success'));
  swal("Good job!", "{{Session::get('alert-success')}}", "success");  
  @endif

  @if(Session::has('alert-update'));
  swal("Good job!", "{{Session::get('alert-success')}}", "info");  
  @endif
  @if(Session::has('alert-danger'));
  swal("Good job!", "{{Session::get('alert-success')}}", "error");  
  @endif
  
</script>



<script>
$(document).ready(function() {
    let lastCount = {{ $remainingMessagesCount }}; // Stockez le nombre initial de nouveaux messages
    // Cachez l'indicateur lorsque vous cliquez sur le dropdown
    $('#messageDropdown').click(function() {
        $('#messageCount').hide();
    });

    // Fonction pour vérifier les nouveaux messages
    function fetchNewMessageCount() {
        $.ajax({
            url: '{{ route("messages.new.count") }}',
            type: 'GET',
            success: function(data) {
                if (data.remainingMessagesCount > lastCount) {
                    $('#messageCount').show(); // Montrez l'indicateur si le nombre de nouveaux messages a augmenté
                    $('#messageCount').text(data.remainingMessagesCount); // Mettez à jour le texte de l'indicateur
                    lastCount = data.remainingMessagesCount; // Mettez à jour le dernier comptage connu
                }
            }
        });
    }

    
    setInterval(fetchNewMessageCount, 30000); 
});
</script>




</body>
</html>
        