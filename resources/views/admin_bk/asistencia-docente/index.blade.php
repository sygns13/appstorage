@extends('adminlte::page')

@section('title', 'Asistencia de Docentes')

{{-- @section('plugins.Sweetalert2', true) --}}

@section('content_header')
    @include('admin.partials.content-header')
@stop

@section('content')
    @include('admin.asistencia-docente.main')
    @include('admin.asistencia-docente.form')
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
    <style type="text/css">   
    .titles-table{
        text-align: center;font-size: 13px;
    }
    .rows-table{
        font-size: 13px; padding: 5px;
    }
    </style>
@stop

@section('js')
<script type="text/javascript">
var fechaHoy = '{{$hoy}}';

@if($cicloActivo)
    var ciclo_escolar_id = '{{$cicloActivo->id}}';
@else
    var ciclo_escolar_id = 0;
@endif
</script>
<script src="{{ asset('js/core/admin/asistencia-docente.js')}}"  type="text/javascript"></script>
@stop
