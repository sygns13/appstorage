@extends('adminlte::page')

@section('title', 'Horarios')

{{-- @section('plugins.Sweetalert2', true) --}}

@section('content_header')
    @include('admin.partials.content-header')
@stop

@section('content')
    @include('admin.horario.main')
    {{-- @include('admin.horario.form') --}}
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
<script src="{{ asset('js/core/admin/horario.js')}}"  type="text/javascript"></script>
@stop
