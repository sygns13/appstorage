@extends('adminlte::page')

@section('title', 'Secciones')

{{-- @section('plugins.Sweetalert2', true) --}}

@section('content_header')
    @include('admin.partials.content-header')
@stop

@section('content')
    @include('admin.seccion.main')
    @include('admin.seccion.form')
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
<script src="{{ asset('js/core/admin/seccion.js')}}"  type="text/javascript"></script>
@stop
