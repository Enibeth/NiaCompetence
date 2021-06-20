@extends('master')
@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
          <h2><strong>Login</strong></h2>
        </div>
    </div><!-- End Breadcrumbs -->

    <div class="container mt-5 mb-5 custom-login">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-4 col-sm-offset-4">
                <form action="login" method="POST">
                    <div class="form-group my-3">
                        @csrf
                        <label for="exampleInputEmail1">Correo Electronico</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese Correo Electronico">
                    </div>
                    <div class="form-group my-3">
                        <label for="exampleInputPassword1">Contraseña</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Ingrese Contraseña">
                    </div>
                    <button type="submit" class="btn btn-primary">Ingresar</button>
                </form>
            </div>
        </div>
    </div>
@endsection




