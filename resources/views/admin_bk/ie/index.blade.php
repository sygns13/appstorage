@extends('adminlte::page')

@section('title', 'Datos de la IE')

{{-- @section('plugins.Sweetalert2', true) --}}

@section('content_header')
    @include('admin.partials.content-header')
@stop

@section('content')
    @include('admin.ie.main')
    {{-- @include('admin.ie.form') --}}
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
<script src="{{ asset('js/core/admin/ie.js')}}"  type="text/javascript"></script>
@stop
