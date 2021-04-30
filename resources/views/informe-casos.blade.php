@extends('layouts.app')
@section('title', 'Informe')
@section('content')
    <div class="container-fluid">



        <div class="container mt-5">
            <label for="" class="p-2">Sistema Uriel/Informes de casos 
            </label>
            <div class="row p-2 text-center border shadow">
                <div class="row">
                    {{-- <div class="col-10"> --}}
                    <h1 class="text-blue "> <b>INFORMES DE CASOS
                    </b> </h1>
                    {{-- </div> --}}
                    {{-- <div class="col-2">
                        <button class="btn btn-warning text-white">Nueva sesión</button>
                    </div> --}}
                </div>


            </div>

            <form id="filter_cabildos_report" method="post" action="">
                @csrf
                <div class="row mt-5">
                    <div class="mb-3 col-3">
                        <label for="" class="form-label"><b>Tipo de trámite</b></label>
                        <input type="text" class="form-control" id=""
                            value="{{ isset($post['nombre_tema']) ? $post['nombre_tema'] : '' }}" name="nombre_tema">
                    </div>
                    <div class="mb-3 col-3">
                        <label for="" class="form-label"><b>Fecha de recibido</b></label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="mb-3 col-3">
                        <label for="" class="form-label"><b>Departamento</b></label>
                        <select class="form-control " name="mun_id">
                            <option selected disabled></option>

                            {{-- @foreach ($municipios as $i)
                        <option value="{{ $i->id }}"  {{(isset($post['mun_id'])?($post['mun_id']==$i->id?'selected':''):'')}} >{{ $i->nombre }}</option>
                    @endforeach --}}
                        </select>
                    </div>
                    <div class="mb-3 col-3">
                        <label for="" class="form-label"><b>Estado</b></label>
                        <select class="form-control " name="mun_id">
                            <option selected disabled></option>

                            {{-- @foreach ($municipios as $i)
                        <option value="{{ $i->id }}"  {{(isset($post['mun_id'])?($post['mun_id']==$i->id?'selected':''):'')}} >{{ $i->nombre }}</option>
                    @endforeach --}}
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class=" col-3 mt-2 ">
                        <button class="btn-general btn w-100">Buscar</button>
                    </div>
                </div>
            </form>
        </div>
       

        <div class="container mb-4">
            <div class="row justify-content-end">
                <a href="javascript:" class="btn  w-100px btn_excel btn-export"> <i class="fas fa-file-excel"></i></a>
                <a href="javascript:" class="btn  w-100px btn-export"><i class="fas fa-file-pdf"></i></a>
            </div>
        </div>

        <div class="container table-responsive mt-5">
            <table class="table table-bordered table_es">
                <thead>
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
                    {{-- @foreach ($cabildos as $i)
                <tr>
                    <td>{{ $i->nombre_tema }}</td>
                    <td>{{ $i->description }}</td>
                    <td>{{ $i->dep_id }}</td>
                    <td>{{ $i->mun_id }}</td>
                    <td>{{ $i->fecha_realizacion }}</td>
                </tr>
            @endforeach --}}
                </tbody>
            </table>
        </div>
    </div>

    <style>
        .w-100px {
            width: 70px;
            margin: 5px;
        }

        .btn-export {
            background: var(--azul_oscuro);
            color: var(--blanco);
        }

        .btn-export:hover {
            color: var(--blanco);
        }

    </style>
    <script>
        $(".btn_excel").click(function() {
            $('#filter_cabildos_report').attr('action', '/excel-cabildos')
            $('#filter_cabildos_report').submit();
        });
        $(".btn-general").click(function() {
            $('#filter_cabildos_report').attr('action', '/report-cabildos')
            $('#filter_cabildos_report').submit();
        });

    </script>
@endsection
