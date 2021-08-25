@extends('master')
@section('content')


    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container">
          <h2>Instructores</h2>
        </div>
      </div><!-- End Breadcrumbs -->

      <section id="trainers" class="trainers">
        <div class="container" data-aos="fade-up">
            @If (Session::has('usuario') and Session::get('usuario')['tipo']== 1)
                <button class="btn btn-primary"><a href="CrudViews/agregarInstructor">Agregar Instructor</a></button>
            @endif
            <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">

                @foreach ($instructores as $item)
                <div class="col-lg-4 col-md-6 d-flex justify-content-center">
                    <div class="member">
                        <img src="/img/trainers/{{$item->id}}.jpg" class="img-fluid" alt="">
                        <div class="member-content">
                            <h4>{{$item->titulo.". ".$item->nombre." ".$item->apellido    }}</h4>
                            <p> {{$item->descripcion}}</p>
                            <div class="social">

                                @If ( !empty( $item->url_linkedin))
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                @endif

                                @If ( !empty($item->url_facebook))
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                @endif

                                @If ( !empty($item->url_twiter))
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach 

            </div>

        </div>
      </section>
@endsection