@extends('auth.layouts.app')

@section('content')

    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth">
                <div class="row flex-grow">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-center p-5">

                            <div class="brand-logo">
                                <img src="{{asset('images/logo.jpeg')}}">
                            </div>

                            <h4>Hola!</h4>
                            <h6 class="font-weight-light">Tus proyectos te están esperando.</h6>

                            @include('partials.alerts')

                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group">
                                    <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Contraseña" name="password" required>
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">
                                        Ingresar
                                    </button>
                                </div>

                                <div class="mt-3">
                                    <a class="btn btn-link btn-sm" href="{{ url('/register') }}">Crear cuenta</a>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>

@endsection
