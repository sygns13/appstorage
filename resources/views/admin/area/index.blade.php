@extends('adminlte::page')

@section('title', 'Gestión de Áreas')

    {{-- @section('plugins.Sweetalert2', true) --}}

@section('content_header')
    @include('admin.partials.content-header')
@stop

@section('content')
    @include('admin.area.main')
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
    <style type="text/css">   
    .titles-table{
        text-align: center;font-size: 16px;
    }
    .rows-table{
        font-size: 15px; padding: 5px;
        font-weight: 500;
    }
    </style>
@stop

@section('js')
<script src="{{ asset('js/core/admin/area.js')}}"  type="text/javascript"></script>
@stop
