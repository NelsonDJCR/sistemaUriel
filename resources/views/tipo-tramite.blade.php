@extends('layouts.app')
@section('title', 'Tipo trámite')
@section('content')
    
@endsection<div class="container mt-5">
    <label for="" class="p-2">Sistema Uriel/Parametrización/Tipo de trámite</label>
    <div class="row p-2 text-center border shadow">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-10 col-xl-9 p-2">
                <h1 class="text-blue "> <b>TIPO DE TRÁMITE</b> </h1>
            </div>
            <div class='col-12 col-md-12 col-lg-2 col-xl-3 p-2'>
                <button type="button"
                    class="btn btn-warning text-white mt-2 new_document modal_crear_tipoDocumento">Nuevo trámite</button>
            </div>
        </div>
    </div>
</div>

<!-- Final de título y crear documento -->


<!-- Inicio de formulario de búsqueda -->
<div class="container">
    <div class="row mt-5">
        <div class="col-3">
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" class="form-control" id="name" name="nombre_buscar">
            </div>
        </div>
        <div class="col-3">
            <br>
            <button class="btn btn-block search_parameterization filtrar w-100">Buscar</button>
        </div>
    </div>
</div>
<!-- Final de formulario de búsqueda -->


<!-- Inicio de tabla resposive -->
<div class="row mt-5">
    <div class="col-10"></div>
    <div class="col-2"></div>
</div>
<div class="container table-responsive mt-1">
    <table class="table table-bordered table_es" id="tablaDocumentos">
        <thead>
            <th>Opciones</th>
            <th>Nombre</th>
            <th>Estado</th>
            <th>Fecha registro</th>
        </thead>
        <tbody id="ttipoDocumento">
            {{-- @foreach ($tipoDocumento as $row)
                <tr>--}}
                    <td>
                        <button data-tipodocumento_id_edit="" type="button"
                            class="btn update_parameterization modal_editar_tipoDocumento">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button data-tipodocumento_id="" type="button"
                            class="btn delete_parameterization btn_modal_eliminar">
                            <i class="fas fa-trash"></i>
                        </button>
                    </td>
                  {{--  <td>{{ $row->nombre }}</td>
                    <td>{{ $row->created_at }}</td>
                </tr>
            @endforeach --}}
        </tbody>
    </table>
</div>