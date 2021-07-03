<?php
  use App\Http\Controllers\UsuariosController;
  $isAdmin = 0;
  if(Session::has('usuario')){
      $isAdmin = UsuariosController::isAdmin();
  }
?>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top bg-dark">
    <div class="container d-flex align-items-center">

      <!-- <h1 class="logo me-auto"><a href="index.html">NIA COMPETENCES</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.html" class="logo me-auto"><img src="img/logo.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="index.html">Inicio {{$isAdmin}}</a></li>
          <li><a href="about.html">Acerca de</a></li>
          <li><a href="courses.html">Cursos</a></li>
          <li><a href="trainers.html">Instructores</a></li>
          <li><a href="events.html">Noticias</a></li>
          <li class="dropdown"><a href="#"><span>Partner Bussines</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSdAMF29tkYzDrzn2BSHx637T8odbaQyE6xfHpPoJNOpsuZ3Ag/viewform">Inscríbase aquí</a></li>
            </ul>
          </li>
          <li><a href="contact.html">Contacto</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="contact.html" class="get-started-btn">Comience ahora </a>

    </div>
  </header><!-- End Header -->