@extends('layouts.app')
@section('title', 'Ver Caso')
@section('content')
<div class="container mt-5">
    <label for="" class="p-2">Sistema Uriel/Listado de casos/Visualizar caso</label>
    <div class="row p-2 text-center border shadow mb-2">
        <div class="row">
            <h1 class="text-blue "> <b>VISUALIZACIÓN DE CASO</b> </h1>
        </div>

    </div>

    
    <form enctype="multipart/form-data" id="form_session" method="POST">
        {{-- @include('modals.file') --}}
        @csrf
        <div class="row mt-5"><h4> <b>Detalles del caso</b> </h4></div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-2">
                <div class="row ">
                    <div class="mb-3 ">
                        <label for="" class="form-label"><b>Tipo de trámite</b></label>
                        <input type="text" class="form-control" id="" name="">
                    </div>

                </div>
                <div class="row">
                    <div class="mb-3 ">
                        <label for="" class="form-label"><b>Fecha de elección</b></label>
                        <input type="date" class="form-control" id="" name="">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 ">
                        <label for="" class="form-label"><b>Tipo de elección</b></label>
                        <select class="form-select" name="department">
                            <option selected disabled></option>
                            {{-- @foreach ($departament as $i)
                                <option value="{{ $i->id }}">{{ $i->nombre }}</option>
                            @endforeach --}}
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 ">
                        <label for="" class="form-label"><b>Prioridad</b></label>
                        <select class="form-select" name="municipality">
                            <option selected disabled></option>
                            {{-- @foreach ($municipios as $i)
                                <option value="{{ $i->id }}">{{ $i->nombre }}</option>
                            @endforeach --}}
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 ">
                        <label for="" class="form-label"><b>Fecha de recibido</b> </label>
                        <div class="input-group">
                            <span class="span">
                                <i class="fas fa-calendar-alt icon-date" aria-hidden="true"></i>
                            </span>
                            <input id="date" type="date" name="date" class="form-control" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 ">
                        <label for="" class="form-label"><b>Medio de recepción</b></label>
                        <input type="text" class="form-control" id="" name="">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 ">
                        <label for="" class="form-label"><b>Correo de notificación</b></label>
                        <input type="text" class="form-control" id="" name="">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 ">
                        <label for="" class="form-label"><b>Informante anónimo</b></label>
                        <select class="form-select" name="municipality">
                            <option selected disabled></option>
                            {{-- @foreach ($municipios as $i)
                                <option value="{{ $i->id }}">{{ $i->nombre }}</option>
                            @endforeach --}}
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 ">
                        <label for="" class="form-label"><b>Departamento</b></label>
                        <select class="form-select" name="municipality">
                            <option selected disabled></option>
                            {{-- @foreach ($municipios as $i)
                                <option value="{{ $i->id }}">{{ $i->nombre }}</option>
                            @endforeach --}}
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 ">
                        <label for="" class="form-label"><b>Municipio</b></label>
                        <select class="form-select" name="municipality">
                            <option selected disabled></option>
                            {{-- @foreach ($municipios as $i)
                                <option value="{{ $i->id }}">{{ $i->nombre }}</option>
                            @endforeach --}}
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-2">
                <div class="row">
                    <label for="" class="form-label"><b>Dirección</b></label>
                    <input type="text" class="form-control" id="" name="cne">
                </div>
                <div class="row mt-3">
                    <label for="" class="form-label"><b>Barrio</b></label>
                    <input type="text" class="form-control" id="" name="cne">
                </div>
                <div class="row mt-3">
                    <label for="" class="form-label"><b>Fecha inicio</b></label>
                    <input type="date" class="form-control" id="" name="cne">
                </div>
                <div class="row mt-3">
                    <label for="" class="form-label"><b>Fecha fin</b></label>
                    <input type="date" class="form-control" id="" name="cne">
                </div>
                <div class="row mt-3">
                    <label for="" class="form-label"><b>Puesto de votación</b></label>
                    <input type="text" class="form-control" id="" name="cne">
                </div>
                <div class="row mt-3">
                    <label for="" class="form-label"><b>Mesa de votación</b></label>
                    <input type="text" class="form-control" id="" name="cne">
                </div>
                <div class="row mt-3">
                    <label for="" class="form-label"><b>Asunto</b></label>
                    <input type="text" class="form-control" id="" name="cne">
                </div>
                <div class="row mb-3">
                        <label for="" class="form-label mt-3"><b>Hechos</b></label>
                        <textarea class="form-control" placeholder="" id="" name="description"
                            style="height: 210px"></textarea>
                </div>  
            </div>
            <div class="row mt-5 mb-3"><h4> <b>Datos del solicitante</b> </h4></div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-2">
                <div class="row">
                    <div class="mb-3 ">
                        <label for="" class="form-label"><b>Nombres y apellidos del solicitante</b></label>
                        <input type="text" class="form-control" id="" name="">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 ">
                        <label for="" class="form-label"><b>Tipo de identificación</b></label>
                        <select class="form-select" name="municipality">
                            <option selected disabled></option>
                            {{-- @foreach ($municipios as $i)
                                <option value="{{ $i->id }}">{{ $i->nombre }}</option>
                            @endforeach --}}
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 ">
                        <label for="" class="form-label"><b>Número de identificación</b></label>
                        <input type="text" class="form-control" id="" name="">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 ">
                        <label for="" class="form-label"><b>Departamento de recidencia</b></label>
                        <select class="form-select" name="municipality">
                            <option selected disabled></option>
                            {{-- @foreach ($municipios as $i)
                                <option value="{{ $i->id }}">{{ $i->nombre }}</option>
                            @endforeach --}}
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-2">
                <div class="row">
                    <div class="mb-3 ">
                        <label for="" class="form-label"><b>Municipio de recidencia</b></label>
                        <select class="form-select" name="municipality">
                            <option selected disabled></option>
                            {{-- @foreach ($municipios as $i)
                                <option value="{{ $i->id }}">{{ $i->nombre }}</option>
                            @endforeach --}}
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 ">
                        <label for="" class="form-label"><b>Dirección de recidencia</b></label>
                        <input type="text" class="form-control" id="" name="">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 ">
                        <label for="" class="form-label"><b>Teléfono de recidencia</b></label>
                        <input type="text" class="form-control" id="" name="">
                    </div>
                </div>
            </div>


            <div class="row mt-5 mb-3"><h4> <b>Gestión</b> </h4></div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-2 mb-5">
                <div class="row">
                    <div class="mb-3 ">
                        <label for="" class="form-label"><b>Estado</b></label>
                        <select class="form-select" name="municipality">
                            <option selected disabled></option>
                            {{-- @foreach ($municipios as $i)
                                <option value="{{ $i->id }}">{{ $i->nombre }}</option>
                            @endforeach --}}
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 ">
                        <label for="" class="form-label"><b>Asesor asignado</b></label>
                        <input type="text" class="form-control" id="" name="">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 ">
                        <label for="" class="form-label"><b>Fecha de asignación</b></label>
                        <input type="date" class="form-control" id="" name="">
                    </div>
                </div>

            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-2">
              
                <div class="row">
                    <div class="mb-3 ">
                        <label for="" class="form-label"><b>Fecha de respuesta</b></label>
                        <input type="date" class="form-control" id="" name="">
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 ">
                        <label for="" class="form-label"><b>Respuesta</b></label>
                        <textarea class="form-control" placeholder="" id="" name=""
                        style="height: 126px"></textarea>
                    </div>
                </div>

              
            </div>

        </div>
    </form>
</div>
<script src="{{ asset('js/sessions.js') }}"></script>
@endsection