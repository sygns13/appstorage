@extends('adminlte::page')

@section('title', 'Registro de Matrículas')

@section('plugins.Stepper', true)

@section('content_header')
    @include('admin.partials.content-header')
@stop

@section('content')
    @include('admin.matricula.main')
    @include('admin.matricula.form-alumno')
    @include('admin.matricula.form-gestion-alumno')
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
<script>
    // BS-Stepper Init
    /* document.addEventListener('DOMContentLoaded', function () {
  var stepper = new Stepper(document.querySelector('.bs-stepper'))
}) */
</script>
<script src="{{ asset('js/core/admin/matricula.js')}}"  type="text/javascript"></script>

@stop
