@extends('layouts.app')

@section('body-class', 'landing-page sidebar-collapse')
@section('nav-class', 'navbar navbar-expand-lg bg-dark')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h3 class="title mt-0 mb-1">Bienvenido al Portal de Notificaciones</h3>
        </div>  
        <div class="col-12 text-center title">
            <h4>Buen día Sr/Sra: {{ Auth::user()->name }}</h4>
            <div>
                <p>Para continuar con el proceso debe dar click al siguiente boton y aceptar que fue notificado de manera electronica.</p>
            </div>
        </div>



        <div class="col-12 text-center pt-0">
            <form class="form" method="post" action="{{ '/report/'.Auth::user()->id.'/download' }}">
                @csrf
                <div class="footer text-center pb-3">
                    <button type="submit" class="btn btn-primary btn-round">IR A NOTIFICACIÓN</button>
                </div>
            </form>
       </div>
    </div>
  </div>
@endsection
