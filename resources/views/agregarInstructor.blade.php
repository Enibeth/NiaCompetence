@extends('master')
@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
         <h2>Agregar Instructores</h2>
      </div>
    </div><!-- End Breadcrumbs -->

    
    <div class="container mt-5 mb-5 custom-login">
      <div class="row d-flex justify-content-center">
          <div class="col-sm-4 col-sm-offset-4">
              <form action="/agregar_Instructor" method="POST">
                  <div class="form-group my-3">
                      @csrf
                      <label for="agregaInstructorCorreo">Selecciona el correo del Usuario</label>
                      <input type="email" name="agregaInstructorCorreo" class="form-control" id="agregaInstructorCorreo" aria-describedby="emailHelp" placeholder="Ingrese Correo Electronico">
                  </div>
                  <div class="form-group my-3">
                      <label for="tituloInstructor">Titulo</label>
                      <input type="text" name="tituloInstructor" class="form-control" id="tituloInstructor" placeholder="Ingrese el Titulo">
                  </div>
                  <div class="form-group my-3">
                    <label for="descripcionInstructor">Descripcion</label>
                    <textarea class="form-control" id="descripcionInstructor" rows="3"></textarea>
                  </div>
                  <div class="form-group my-3">
                    <label for="urlLinkedin">Linkedin</label>
                    <input type="text" name="urlLinkedin" class="form-control" id="urlLinkedin" placeholder="Ingrese el url linkedin">
                  </div>
                  <div class="form-group my-3">
                    <label for="urlFacebook">Facebook</label>
                    <input type="text" name="urlFacebook" class="form-control" id="urlFacebook" placeholder="Ingrese url facebook">
                  </div>
                  <div class="form-group my-3">
                    <label for="urlTwitter">Twitter</label>
                    <input type="text" name="urlTwitter" class="form-control" id="urlTwitter" placeholder="Ingrese url Twitter">
                  </div>
                  <div class="form-group">
                    <label for="instructorFoto">Instructor Foto</label>
                    <input type="file" class="form-control-file" id="instructorFoto">
                  </div>
                  <button type="submit" class="btn btn-primary">Agregar Instructor</button>
              </form>
          </div>
      </div>
    </div>

@endsection