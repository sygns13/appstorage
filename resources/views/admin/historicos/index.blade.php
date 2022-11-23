@extends('adminlte::page')

@section('title', 'Documentos Históricos')

    {{-- @section('plugins.Sweetalert2', true) --}}

@section('content_header')
    @include('admin.partials.content-header')
@stop

@section('content')
    @include('admin.historicos.main')
    @include('admin.historicos.modal')
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
    <style type="text/css">   
    #modaltamanio{
        width: 70% !important;
    }
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
<script type="text/javascript">
    var id_area = '{{$id_area}}';
    </script>
<script src="{{ asset('js/core/admin/historicos.js')}}"  type="text/javascript"></script>
@stop
