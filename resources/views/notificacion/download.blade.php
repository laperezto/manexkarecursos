@extends('layouts.app')

@section('body-class', 'landing-page sidebar-collapse')
@section('nav-class', 'navbar navbar-expand-lg bg-dark')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h3 class="title mt-0 mb-0">Notificación Electrónica</h3>
            @foreach ($idusuario as $notificacion)
        @if ($notificacion->notificado == 1)
            <div class="col-12 text-center pt-5">
                @foreach ($idusuario as $usuario)
                <form class="form" method="post" action="{{ url('/report/'.$usuario->id.'/terms') }}">
                @endforeach
                    @csrf
                        <div class="form-check ml-1">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="notificado" id="notificado" value="0" required>
                                Acepto que he sido notificado de manera electronica.
                                <span class="form-check-sign">
                                    <span class="check"></span>
                                </span>
                            </label>
                            <div class="footer text-center pt-3">
                                <button type="submit" class="btn btn-primary btn-round">ENVIAR</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        @elseif ($notificacion->notificado == 0)

            @if ($notificacion->entrega == 'Laboral')
                <div class="col-12 text-center pt-5">
                    <a class="btn btn-primary btn-round" href="{{ asset('cuadroslaborales/RESOLUCION007-19.pdf') }}" download="{{ ('RESOLUCION007-19.pdf') }}">
                        DESCARGAR RESOLUCION
                    </a>
                </div>
                <div class="col-12 text-center pt-5">
                    <a class="btn btn-primary btn-round" href="{{ asset('cuadroslaborales/'.$notificacion->archivo) }}" download="{{ $notificacion->archivo }}">
                        DESCARGAR ANEXO 1 pdf
                    </a>
                </div>
                <div class="col-12 text-center pt-5">
                    <a class="btn btn-primary btn-round" href="{{ asset('cuadroslaborales/CODIGOS-DE-GLOSAS-MANEXKA-EPSI-EN-LIQUIDACION-2019.pdf') }}" download="{{ ('CODIGOS-DE-GLOSAS-MANEXKA-EPSI-EN-LIQUIDACION-2019.pdf') }}">
                        DESCARGAR ANEXO 2 CUADRO DE GLOSAS
                    </a>
                </div>
            @elseif ($notificacion->entrega == 'Extemporanea')
                <div class="col-12 text-center pt-5">
                    <a class="btn btn-primary btn-round" href="{{ asset('cuadroslaborales/resolucion-extemporaneas.pdf') }}" download="{{ ('RESOLUCION-EXTEMPORANEAS.pdf') }}">
                        DESCARGAR RESOLUCION EXTEMPORANEA
                    </a>
                </div>
                @if ($notificacion->soportes == 1)
                    <div class="col-12 text-center pt-5">
                        <a class="btn btn-primary btn-round" href="{{ asset('cuadroslaborales/'.$notificacion->archivo) }}" download="{{ $notificacion->archivo }}">
                            DESCARGAR ANEXO 1 pdf
                        </a>
                    </div>
                    <div class="col-12 text-center pt-5">
                        <a class="btn btn-primary btn-round" href="{{ asset('cuadroslaborales/CODIGOS-DE-GLOSAS-MANEXKA-EPSI-EN-LIQUIDACION-2019.pdf') }}" download="{{ ('CODIGOS-DE-GLOSAS-MANEXKA-EPSI-EN-LIQUIDACION-2019.pdf') }}">
                            DESCARGAR ANEXO 2 CUADRO DE GLOSAS
                        </a>
                    </div>
                @elseif ($notificacion->soportes == 2)
                    <div class="col-12 text-center pt-5">
                        <a class="btn btn-primary btn-round" href="{{ asset('cuadroslaborales/'.$notificacion->archivo) }}" download="{{ $notificacion->archivo }}">
                            DESCARGAR ANEXO 1 pdf
                        </a>
                    </div>
                    <div class="col-12 text-center pt-5">
                        <a class="btn btn-primary btn-round" href="{{ asset('cuadroslaborales/'.$notificacion->excel) }}" download="{{ $notificacion->excel }}">
                            DESCARGAR ANEXO 1 excel
                        </a>
                    </div>
                    <div class="col-12 text-center pt-5">
                        <a class="btn btn-primary btn-round" href="{{ asset('cuadroslaborales/CODIGOS-DE-GLOSAS-MANEXKA-EPSI-EN-LIQUIDACION-2019.pdf') }}" download="{{ ('CODIGOS-DE-GLOSAS-MANEXKA-EPSI-EN-LIQUIDACION-2019.pdf') }}">
                            DESCARGAR ANEXO 2 CUADRO DE GLOSAS
                        </a>
                    </div>
                @endif
            @elseif ($notificacion->entrega == 'Oportuna')
                <div class="col-12 text-center pt-5">
                    <a class="btn btn-primary btn-round" href="{{ asset('cuadroslaborales/resolucion-oportunas.pdf') }}" download="{{ ('RESOLUCION007-OPORTUNAS.pdf') }}">
                        DESCARGAR RESOLUCION OPORTUNA
                    </a>
                </div>
                @if ($notificacion->soportes == 1)
                    <div class="col-12 text-center pt-5">
                        <a class="btn btn-primary btn-round" href="{{ asset('cuadroslaborales/'.$notificacion->archivo) }}" download="{{ $notificacion->archivo }}">
                            DESCARGAR ANEXO 1 pdf
                        </a>
                    </div>
                    <div class="col-12 text-center pt-5">
                        <a class="btn btn-primary btn-round" href="{{ asset('cuadroslaborales/CODIGOS-DE-GLOSAS-MANEXKA-EPSI-EN-LIQUIDACION-2019.pdf') }}" download="{{ ('CODIGOS-DE-GLOSAS-MANEXKA-EPSI-EN-LIQUIDACION-2019.pdf') }}">
                            DESCARGAR ANEXO 2 CUADRO DE GLOSAS
                        </a>
                    </div>
                @elseif ($notificacion->soportes == 2)
                    <div class="col-12 text-center pt-5">
                        <a class="btn btn-primary btn-round" href="{{ asset('cuadroslaborales/'.$notificacion->archivo) }}" download="{{ $notificacion->archivo }}">
                            DESCARGAR ANEXO 1 pdf
                        </a>
                    </div>
                    <div class="col-12 text-center pt-5">
                        <a class="btn btn-primary btn-round" href="{{ asset('cuadroslaborales/'.$notificacion->excel) }}" download="{{ $notificacion->excel }}">
                            DESCARGAR ANEXO 1 excel
                        </a>
                    </div>
                    <div class="col-12 text-center pt-5">
                        <a class="btn btn-primary btn-round" href="{{ asset('cuadroslaborales/CODIGOS-DE-GLOSAS-MANEXKA-EPSI-EN-LIQUIDACION-2019.pdf') }}" download="{{ ('CODIGOS-DE-GLOSAS-MANEXKA-EPSI-EN-LIQUIDACION-2019.pdf') }}">
                            DESCARGAR ANEXO 2 CUADRO DE GLOSAS
                        </a>
                    </div>
                @endif
            @endif
        @else
            <div class="col-12 text-center pt-1">
                <p>NO CALIFICADO</p>
            </div>
        @endif
        @endforeach
            
        </div>
        
    </div>
  </div>
@endsection
