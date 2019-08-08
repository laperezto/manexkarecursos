@extends('layouts.app')

@section('body-class', 'login-page sidebar-collapse')
@section('nav-class', 'navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg')

@section('content')
<div class="page-header header-filter" style="background-image: url('{{ asset('img/bg7.jpg') }}'); background-size: cover; background-position: top center;">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 ml-auto mr-auto">
          <div class="card card-login">
            <form class="form" method="post" action="{{ route('login') }}">
            @csrf
              <div class="card-header card-header-primary text-center">
                <h4 class="card-title">Iniciar sesión</h4>
              </div>
              <p class="description text-center"><strong>Notificación Manexka<strong></p>
              <div class="card-body">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">person</i>
                    </span>
                  </div>
                  <input id="username" placeholder="Usuario" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock</i>
                    </span>
                  </div>
                  <input id="password" placeholder="Contraseña" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                </div>
                <div class="form-check ml-1">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        Recordar sesión
                        <span class="form-check-sign">
                            <span class="check"></span>
                        </span>
                    </label>
                </div>
              </div>
              
              <div class="footer text-center pb-3">
                <button type="submit" class="btn btn-primary btn-round">Ingresar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection
