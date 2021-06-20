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
                <form>
                    <div class="form-group my-3">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group my-3">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection




