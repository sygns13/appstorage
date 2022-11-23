@extends('adminlte::page')

@section('title', 'Asignación de Cursos')

{{-- @section('plugins.Sweetalert2', true) --}}

@section('content_header')
    @include('admin.partials.content-header')
@stop

@section('content')
    @include('admin.asignacion-curso.main')
    @include('admin.asignacion-curso.form')
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
<script src="{{ asset('js/core/admin/asignacion-curso.js')}}"  type="text/javascript"></script>
@stop
