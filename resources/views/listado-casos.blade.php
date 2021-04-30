@extends('layouts.app')
@section('title', 'Listado')
@section('content')
<div class="container mt-5">
    <label for="" class="p-2">Sistema Uriel/Listado de casos</label>
    <div class="row p-2 text-center border shadow">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12 col-xl-12 p-2">
                <h1 class="text-blue "> <b>LISTADO DE CASOS</b> </h1>
            </div>
            {{-- <div class='col-12 col-md-12 col-lg-2 col-xl-2 p-2'>

                <a href="{{ url('/new-sesion') }}" class="btn btn-warning text-white w-100 mt-2 ">Nueva sesión</a
                    href="{{ url('/list-cabildos') }}">
            </div> --}}
        </div>
    </div>
    <form id="filter_list">
        @csrf
        <div class="row mt-5">
            <div class="mb-3 col-3">
                <label for="" class="form-label"><b>Tipo de trámite</b></label>
                <input type="text" class="form-control" id="" value="{{(isset($post['nombre_tema'])?$post['nombre_tema']:'')}}" name="nombre_tema">
            </div>
            <div class="mb-3 col-3">
                <label for="" class="form-label"><b>Fecha</b></label>
                <input type="date" class="form-control" id="" value="{{(isset($post['fecha_realizacion'])?$post['fecha_realizacion']:'')}}" name="fecha_realizacion">
            </div>
            <div class="mb-3 col-3">
                <label for="" class="form-label"><b>Departamento</b></label>
                <select class="form-control " name="dep_id">
                    <option selected disabled></option>
                    {{-- @foreach ($departments as $i)
                        <option value="{{ $i->id }}" {{(isset($post['dep_id'])?($post['dep_id']==$i->id?'selected':''):'')}}>{{ $i->nombre }}</option>
                    @endforeach --}}
                </select>
            </div>
            <div class="mb-3 col-3">
                <label for="" class="form-label"><b>Estado</b></label>
                <select class="form-control " name="dep_id">
                    <option selected disabled></option>
                    {{-- @foreach ($departments as $i)
                        <option value="{{ $i->id }}" {{(isset($post['dep_id'])?($post['dep_id']==$i->id?'selected':''):'')}}>{{ $i->nombre }}</option>
                    @endforeach --}}
                </select>
            </div>
            
        </div>
            <div class="row mt-2 col-3">
                <button class="btn-general btn w-80 btn_search">Buscar</button>
            </div>
        </div>
    </form>
</div>
<div class="container table-responsive mt-5">
    <table class="table table-bordered table_es">
        <thead>
            <th>Opciones</th>
            <th>Tipo de trámite</th>
            <th>Prioridad</th>
            <th>Fecha recibido</th>
            <th>Departamento</th>
            <th>Municipio</th>
            <th>Solicitante</th>
            <th>Estado</th>
            <th>Usuario asignado</th>
        </thead>
        <tbody>
            {{-- @foreach ($cabildos as $i) --}}
                <tr>
                    <td class="aling_btn_options" style="width: 150px">
                        <a  type="button" class="btn icon-settings" >
                            <i class="fas fa-cog"></i>
                        </a>
                        <button data-id="" type="button"
                            class="btn icon-eye download_btn">
                            <i class="fas fa-eye"></i>
                        </button>
                        <button data-id="" type="button"
                        class="btn download_parameterization download_btn">
                            <i class="fas fa-download"></i>
                        </button>
                    </td>
                    <td>x</td>
                    <td>x</td>
                    <td>x</td>
                    <td>x</td>
                    <td>x</td>
                    <td>x</td>
                    <td>x</td>
                    <td>x</td>
                    {{-- <td>{{ $i->nombre_tema }}</td>
                    <td>{{ $i->description }}</td>
                    <td>{{ $i->dep_id }}</td>
                    <td>{{ $i->mun_id }}</td>
                    <td>{{ $i->fecha_realizacion }}</td> --}}
                </tr>
            {{-- @endforeach --}}
        </tbody>
    </table>
</div>
@include('modals.gestion-caso')
    
<script>
    $(".icon-settings").click(function() {
        $("#gestion-caso").modal('show')
    });



    $(".btn_search").click(function() {
        $("#filter_list").attr('action','/list-cabildos')
        $("#filter_list").submit()
    });

    $(".download_btn").click(function() {
        var id = $(this).data('id')
        $.post('/view-documents', {
            _token: "{{ csrf_token() }}",
            id: id
        }).done(function(e) {
            console.log(e);
            $("#box_files *").remove()
            $("#modal_download").modal('show')
            $.each(e['data'], function(key, val) {
                $("#box_files")
                    .append(
                        `<div class="row">
                            <div class="col-11">
                                <input type="text" value="${val.nombre}" disabled class="form-control mb-3" />
                            </div>
                            <div class="aling_btn_options col-1">
                                <a href="${val.nombre}" download="x.pdf" type="button" class="btn download_parameterization">
                                    <i class="fas fa-download"></i>
                                </a>
                            </div>
                        </div>`)
            })
        });
    });
    $(".delete_btn").click(function() {
        var record = $(this)
        var id = $(this).data('id')

        Swal.fire({
            icon: 'question',
            title: '¿Eliminar registro?',
            text: "Esta acción no se puede revertir",
            showCancelButton: true,
            confirmButtonText: `Eliminar`,
        }).then((result) => {
            if (result.isConfirmed) {
                $.post('/delete-session', {
                    _token: "{{ csrf_token() }}",
                    id: id
                }).done(function(e) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Perfecto',
                        text: 'El documento ha sido eliminado',
                    });
                    var table = $("#table_sessions").DataTable();
                    table.row(record.parent().parent()).remove().draw();
                });
            }
        })
    });

</script>
@endsection