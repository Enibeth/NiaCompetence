@extends('master')
@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container">
          <h2><strong>Cursos</strong></h2>
        </div>
    </div>
    <!-- End Breadcrumbs -->
    
    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
        <div class="container c" data-aos="fade-up">
            <br />
            <div class="section-title">
                <h2>Categorias</h2>
                <p>Categoria de Cursos</p>
            </div>

            <div class="row" data-aos="zoom-in" data-aos-delay="100">
                <div class="row d-flex justify-content-evenly" data-aos="zoom-in" data-aos-delay="100">

                    @foreach ($categorias as $item)
                        <div class="col-lg-3 col-md-4 mt-4 mt-md-0 align-items-center"> 
                                <div class="icon-box">
                                    <i class="{{$item['icono']}}" style="color: {{$item['color']}}"></i>
                                    <h3><a href="">{{$item['nombre']}}</a></h3>
                                </div>
                        </div>
                     @endforeach 
                     
                </div>
            </div>
        </section><!-- End Features Section -->

@endsection




