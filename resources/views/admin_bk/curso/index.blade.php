@extends('adminlte::page')

@section('title', 'Cursos')

{{-- @section('plugins.Sweetalert2', true) --}}

@section('content_header')
    @include('admin.partials.content-header')
@stop

@section('content')
    @include('admin.curso.main')
    @include('admin.curso.form')
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
<script src="{{ asset('js/core/admin/curso.js')}}"  type="text/javascript"></script>
@stop
