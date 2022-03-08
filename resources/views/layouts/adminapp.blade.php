<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="{{ URL::asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('assets/vendor/boxicons/css/boxicons.min.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('assets/vendor/quill/quill.snow.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('assets/vendor/quill/quill.bubble.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('assets/vendor/remixicon/remixicon.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('assets/vendor/simple-datatables/style.css') }}" />


  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}" />
  <style type="text/css">
    .sidebar-nav .nav-link{
      background: #ffffff;
      color: #495057;
    }
    .sidebar-nav .nav-link i{
      color: #899bbd;
    }
    .footer {
      border-top: none;
    }
  </style>


  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="https://drive.google.com/uc?export=view&id=1-53ECQVm3N6OLvXwiqGpFNdTbFsnFcmx" alt="">
        <span class="d-none d-lg-block">Icat CDMX</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      @guest
          @if (Route::has('login'))

                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>

          @endif

          @if (Route::has('register'))
                  <a class="nav-link" href="{{ route('registro') }}">{{ __('Registrarme') }}</a>
          @endif
      @else
          <ul class="d-flex align-items-center">

            <li class="nav-item d-block d-lg-none">
              <a class="nav-link nav-icon search-bar-toggle " href="#">
                <i class="bi bi-search"></i>
              </a>
            </li><!-- End Search Icon-->

            <li class="nav-item dropdown">

              <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                <i class="bi bi-bell"></i>
                <span class="badge bg-primary badge-number">4</span>
              </a><!-- End Notification Icon -->

              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                <li class="dropdown-header">
                  You have 4 new notifications
                  <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>

                <li class="notification-item">
                  <i class="bi bi-exclamation-circle text-warning"></i>
                  <div>
                    <h4>Lorem Ipsum</h4>
                    <p>Quae dolorem earum veritatis oditseno</p>
                    <p>30 min. ago</p>
                  </div>
                </li>

                <li>
                  <hr class="dropdown-divider">
                </li>

                <li class="notification-item">
                  <i class="bi bi-x-circle text-danger"></i>
                  <div>
                    <h4>Atque rerum nesciunt</h4>
                    <p>Quae dolorem earum veritatis oditseno</p>
                    <p>1 hr. ago</p>
                  </div>
                </li>

                <li>
                  <hr class="dropdown-divider">
                </li>

                <li class="notification-item">
                  <i class="bi bi-check-circle text-success"></i>
                  <div>
                    <h4>Sit rerum fuga</h4>
                    <p>Quae dolorem earum veritatis oditseno</p>
                    <p>2 hrs. ago</p>
                  </div>
                </li>

                <li>
                  <hr class="dropdown-divider">
                </li>

                <li class="notification-item">
                  <i class="bi bi-info-circle text-primary"></i>
                  <div>
                    <h4>Dicta reprehenderit</h4>
                    <p>Quae dolorem earum veritatis oditseno</p>
                    <p>4 hrs. ago</p>
                  </div>
                </li>

                <li>
                  <hr class="dropdown-divider">
                </li>
                <li class="dropdown-footer">
                  <a href="#">Show all notifications</a>
                </li>

              </ul><!-- End Notification Dropdown Items -->

            </li><!-- End Notification Nav -->

            <li class="nav-item dropdown">

              <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                <i class="bi bi-chat-left-text"></i>
                <span class="badge bg-success badge-number">3</span>
              </a><!-- End Messages Icon -->

              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                <li class="dropdown-header">
                  You have 3 new messages
                  <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>

                <li class="message-item">
                  <a href="#">
                    <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                    <div>
                      <h4>Maria Hudson</h4>
                      <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                      <p>4 hrs. ago</p>
                    </div>
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>

                <li class="message-item">
                  <a href="#">
                    <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                    <div>
                      <h4>Anna Nelson</h4>
                      <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                      <p>6 hrs. ago</p>
                    </div>
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>

                <li class="message-item">
                  <a href="#">
                    <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                    <div>
                      <h4>David Muldon</h4>
                      <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                      <p>8 hrs. ago</p>
                    </div>
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>

                <li class="dropdown-footer">
                  <a href="#">Show all messages</a>
                </li>

              </ul><!-- End Messages Dropdown Items -->

            </li><!-- End Messages Nav -->

            <li class="nav-item dropdown pe-3">

              <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
              </a><!-- End Profile Iamge Icon -->

              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                <li class="dropdown-header">
                  <h6>{{ Auth::user()->name }}</h6>
                  <span></span>
                </li>
                <!--li>
                  <hr class="dropdown-divider">
                </li>

                <li>
                  <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                    <i class="bi bi-person"></i>
                    <span>My Profile</span>
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>

                <li>
                  <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                    <i class="bi bi-gear"></i>
                    <span>Account Settings</span>
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>

                <li>
                  <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                    <i class="bi bi-question-circle"></i>
                    <span>Need Help?</span>
                  </a>
                </li-->
                <li>
                  <hr class="dropdown-divider">
                </li>

                <li>
                  <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      <i class="bi bi-box-arrow-right"></i>
                      {{ __('Cerrar sesión') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
                </li>

              </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->
          </ul>
      @endguest

    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      @if(Auth::user()->id_rol == 1)
          <li class="nav-item">
            <a class="nav-link"  href="{{ url('admin/estandar/lista') }}">
              <i class="bi bi-grid"></i><span>Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{ url('admin/estandar/lista') }}">
              <i class="bx bx-award"></i><span>Estándares/Cursos</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{ url('admin/groups/lista') }}">
              <i class="bx bx-group"></i><span>Grupos</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{ url('admin/instructor/lista') }}">
              <i class="bx bx-user-voice"></i><span>Instructores</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{ url('usuarios') }}">
              <i class="bx bx-group"></i><span>Usuarios</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{ url('candidatos') }}">
              <i class="bx bx-speaker"></i><span>Candidatos</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{ url('certificaciones') }}">
              <i class="bx bx-select-multiple"></i><span>Certificaciones</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{ url('certificados') }}">
              <i class="bx bx-spreadsheet"></i><span>Certificados pendientes</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{ url('agenda') }}">
              <i class="bx bx-task"></i><span>Agenda</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{ url('documentos') }}">
              <i class="bx bxs-file-blank"></i><span>Documentos recibidos</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{ url('pagos') }}">
              <i class="bx bxs-credit-card"></i><span>Pagos recibidos</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{ url('citas/lista') }}">
              <i class="bx bx-time"></i><span>Citas</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{ url('usuario/perfil') }}/{{Auth::user()->name}}">
              <i class="bx bx-user"></i><span>Perfil</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{ url('usuario/preguntas') }}">
              <i class="bi bi-question-circle"></i><span>Preguntas frecuentes</span>
            </a>
          </li>
      @endif
      @if(Auth::user()->id_rol == 2)
          <li class="nav-item">
            <a class="nav-link"  href="{{ url('documentos') }}">
              <i class="bx bxs-file-blank"></i><span>Documentos recibidos</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{ url('agenda') }}">
              <i class="bx bx-task"></i><span>Agenda</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{ url('citas/lista') }}">
              <i class="bx bx-time"></i><span>Citas</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{ url('certificaciones') }}">
              <i class="bx bx-select-multiple"></i><span>Certificaciones</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{ url('certificados') }}">
              <i class="bx bx-spreadsheet"></i><span>Certificados pendientes</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{ url('usuario/preguntas') }}">
              <i class="bi bi-question-circle"></i><span>Preguntas frecuentes</span>
            </a>
          </li>
      @endif
      @if(Auth::user()->id_rol == 3)
          <li class="nav-item">
            <a class="nav-link"  href="{{ url('pagos') }}">
              <i class="bx bxs-credit-card"></i><span>Pagos recibidos</span>
            </a>
          </li>
      @endif
      @if(Auth::user()->id_rol == 10)
          <li class="nav-item">
            <a class="nav-link"  href="{{ url('usuario/perfil') }}/{{Auth::user()->name}}">
              <i class="bx bx-user"></i><span>Perfil</span>
            </a>
          </li>
          <!--li class="nav-item">
            <a class="nav-link"  href="{{ url('usuario/capacitaciones') }}/{{Auth::user()->name}}">
              <i class="bx bx-user"></i><span>Capacitaciones</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{ url('usuario/certificaciones') }}/{{Auth::user()->name}}">
              <i class="bx bx-user"></i><span>Certificaciones</span>
            </a>
          </li-->
          <li class="nav-item">
            <a class="nav-link"  href="{{ url('usuario/preguntas') }}">
              <i class="bi bi-question-circle"></i><span>Preguntas frecuentes</span>
            </a>
          </li>
      @endif
      <!-- End Dashboard Nav -->
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">

    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->

    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ URL::asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ URL::asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ URL::asset('assets/vendor/chart.js/chart.min.js') }}"></script>
  <script src="{{ URL::asset('assets/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ URL::asset('assets/vendor/quill/quill.min.js') }}"></script>
  <script src="{{ URL::asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ URL::asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ URL::asset('assets/vendor/php-email-form/validate.js') }}"></script>


  <!-- Template Main JS File -->
  <script src="{{ URL::asset('assets/js/main.js') }}"></script>

</body>

</html>
