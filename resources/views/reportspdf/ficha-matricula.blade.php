<!DOCTYPE html>
<html>
<head>
    <title>FICHA ÚNICA DE MATRICULA</title>
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}
<style>
    @page { 
        margin-left: 0.8cm; 
        margin-top: 0.3cm;
        margin-bottom: 0.3cm;
    }
    /* body { padding: .5in; border: 2in solid orange; } */
    .table{
        border-spacing: 0!important;
    }
    .celdaFondoGrisBold1{
        text-align:center; 
        font-size: 11px; 
        border: 1px solid black; 
        background-color: #dddddd;
        font-weight: bold;
        padding: 0px!important;
    }
    .celdaFondoGrisBold2{
        text-align:center; 
        font-size: 11px; 
        border: 1px solid black; 
        background-color: #dddddd;
        padding: 0px!important;
        font-weight: normal;
    }
    .celdaFondoGrisBold3{
        text-align:left; 
        font-size: 10px; 
        border: 1px solid black; 
        background-color: #dddddd;
        padding: 0px!important;
        font-weight: normal;
    }
    .celdaFondoGrisBold3c{
        text-align:center; 
        font-size: 10px; 
        border: 1px solid black; 
        background-color: #dddddd;
        padding: 0px!important;
        font-weight: normal;
    }

    .celdaFondoGrisBold4{
        text-align:center; 
        font-size: 9px; 
        border: 1px solid black; 
        background-color: #dddddd;
        padding: 0px!important;
        font-weight: normal;
    }
    .celdaFondoGrisBold5{
        text-align:left; 
        font-size: 8px; 
        border: 1px solid black; 
        background-color: #dddddd;
        padding: 0px!important;
        font-weight: normal;
        
    }
    .celdaFondoGrisBold4L{
        text-align:left; 
        font-size: 9px; 
        border: 1px solid black; 
        background-color: #dddddd;
        padding: 0px!important;
        font-weight: normal;
    }

    .celdaNormal{
        text-align:center; 
        font-size: 11px; 
        border: 1px solid black; 
        width: 0.5cm!important;
        height: 14px;
        padding: 0px!important;
    }

    .celdaNormalBig{
        text-align:center; 
        font-size: 11px; 
        border: 1px solid black; 
        padding: 0px!important;
    }
    .celdaNormalBig2{
        text-align:center; 
        font-size: 10px; 
        border: 1px solid black; 
        padding: 0px!important;
    }
    .celdaNormal3{
        text-align:left; 
        font-size: 10px; 
        border: 1px solid black; 
        padding: 0px!important;
    }
    .celdaNormal4{
        text-align:left; 
        font-size: 9px; 
        border: 1px solid black; 
        padding: 0px!important;
    }
    .celdaNormal5{
        text-align:left; 
        font-size: 8px; 
        border: 1px solid black; 
        padding: 0px!important;
        /* height: 10.4px */
    }
    .celdaNormal6{
        text-align:left; 
        font-size: 7px; 
        border: 1px solid black; 
        padding: 0px!important;
        /* height: 9px; */
    }

    .vertical{
        /* writing-mode: vertical-lr; */
        /* height:cm; */
        padding: 0px!important;
    }
    .verti{
        /* width:cm; */
        /* float: left;
        transform: rotate(90deg); */
        /* transform-origin: left top 0; */
    }
    .titles{
        font-size: 11px; 
        text-align:left; 
        font-weight: bold;
    }
    .notitles{
        font-size: 10px; 
        text-align:left; 
    }
</style>


</head>
<body>

    {{-- Pagina 1 --}}
    <div class="box" style="width: 27.5cm;">
        <table class="table" style="margin-bottom: 0px; width:100%">
            <tr>
              <th style="vertical-align: top;">
                <div class="widget-user-image" style="padding: 0px!important;">
                    <table>
                        <tr>
                            <td><center>
                                <img class="img-circle" src="{{ asset('images/escudo_nac.png') }}" alt="User Avatar" width="70px">
                                </center>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-size: 10px;">
                                Ministerio de Educación
                            </td>
                        </tr>
                    </table>
                </div>
              </th>
              <th style="text-align: center;">
                <p style="font-size: 30px; font-weight:bolder; margin-bottom: 2px;">FICHA ÚNICA DE MATRÍCULA</p>
              </th>
              <th rowspan="2"  style="width: 7cm;">
                   <table style="width: 100%;" class="table">
                    <tr>
                        <td colspan="14" class="celdaFondoGrisBold1">N° de DNI o Código del Estudiante</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="celdaFondoGrisBold2">D.N.I.</td>
                        <td colspan="2" class="celdaNormalBig"></td>
                        <td class="celdaFondoGrisBold2">C.E</td>
                        <td colspan="2" class="celdaNormalBig"></td>
                        <td colspan="2" class="celdaFondoGrisBold2">Otro</td>
                        <td class="celdaNormal" class="celdaNormalBig">X</td>
                        <td colspan="4" class="celdaFondoGrisBold2">Especificar</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="celdaFondoGrisBold2"></td>
                        <td class="celdaNormal"></td>
                        <td class="celdaNormal"></td>
                        <td class="celdaNormal"></td>
                        <td class="celdaNormal"></td>
                        <td class="celdaNormal"></td>
                        <td class="celdaNormal"></td>
                        <td class="celdaNormal"></td>
                        <td class="celdaNormal"></td>
                        <td colspan="4" class="celdaNormal"></td>
                    </tr>
                    <tr>
                        <td colspan="10" class="celdaFondoGrisBold1">Código del Estudiante</td>
                        <td colspan="4" class="celdaFondoGrisBold1"></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="celdaFondoGrisBold2 vertical"><div class="verti">Año de ingreso</div></td>
                        <td colspan="7" class="celdaFondoGrisBold2 vertical"><div class="verti">Código modular de la Institución Educativa donde ingresó</div></td>
                        <td colspan="4" class="celdaFondoGrisBold2 vertical"><div class="verti">N° de Matrícula generado por la Institución Educativa</div></td>
                        <td class="celdaFondoGrisBold2 vertical"><div class="verti">Flag</div></td>
                    </tr>
                    <tr>
                        
                        <td class="celdaNormal">
                            @if($alumno !== null && $alumno->anio_ingreso !== null)
                                {{substr(strval($alumno->anio_ingreso),2,1)}}
                            @endif
                            </td>
                        <td class="celdaNormal">
                            @if($alumno !== null && $alumno->anio_ingreso !== null)
                                {{substr(strval($alumno->anio_ingreso),3,1)}}
                            @endif
                        </td>
                        <td class="celdaNormal">
                            @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                {{substr(strval($institucionEductiva->codigo_modular),0,1)}}
                            @endif
                        </td>
                        <td class="celdaNormal">
                            @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                {{substr(strval($institucionEductiva->codigo_modular),1,1)}}
                            @endif
                        </td>
                        <td class="celdaNormal">
                            @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                {{substr(strval($institucionEductiva->codigo_modular),2,1)}}
                            @endif
                        </td>
                        <td class="celdaNormal">
                            @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                {{substr(strval($institucionEductiva->codigo_modular),3,1)}}
                            @endif
                        </td>
                        <td class="celdaNormal">
                            @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                {{substr(strval($institucionEductiva->codigo_modular),4,1)}}
                            @endif
                        </td>
                        <td class="celdaNormal">
                            @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                {{substr(strval($institucionEductiva->codigo_modular),5,1)}}
                            @endif
                        </td>
                        <td class="celdaNormal">
                            @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                {{substr(strval($institucionEductiva->codigo_modular),6,1)}}
                            @endif
                        </td>
                        <td class="celdaNormal">
                            @if($alumno !== null && $alumno->numero_matricula !== null)
                                {{substr(str_pad($alumno->numero_matricula, 4, "0", STR_PAD_LEFT),0,1)}}
                            @endif
                        </td>
                        <td class="celdaNormal">
                            @if($alumno !== null && $alumno->numero_matricula !== null)
                                {{substr(str_pad($alumno->numero_matricula, 4, "0", STR_PAD_LEFT),1,1)}}
                            @endif
                        </td>
                        <td class="celdaNormal">
                            @if($alumno !== null && $alumno->numero_matricula !== null)
                                {{substr(str_pad($alumno->numero_matricula, 4, "0", STR_PAD_LEFT),2,1)}}
                            @endif
                        </td>
                        <td class="celdaNormal">
                            @if($alumno !== null && $alumno->numero_matricula !== null)
                                {{substr(str_pad($alumno->numero_matricula, 4, "0", STR_PAD_LEFT),3,1)}}
                            @endif
                        </td>
                        <td class="celdaNormal">
                            @if($alumno !== null && $alumno->flag !== null)
                                {{substr(strval($alumno->flag),0,1)}}
                            @endif
                        </td>
                    </tr>
                    <tr >
                        <td colspan="14" style="font-size: 9px; font-weight:normal; text-align:left;">
                            (El código del Estudiante se anotará solo en caso de que el estudiante no
                            tenga DNI. Este número será el único que utilizará durante su
                            permanencia en el Sistema Educativo)
                        </td>
                    </tr>
                </table>

              </th>
            </tr>
            <tr>
                <th colspan="2">
                    <table class="table" style="width: 100%;">
                        <tr>
                            <td class="titles">1. Datos Generales del Estudiante</td>
                        </tr>
                        <tr>
                            <td class="titles">1.1 Datos Personales</td>
                        </tr>
                        <tr>
                            <td>
                                <table class="table" style="width: 95%;">
                                    <tr>
                                        <td class="celdaFondoGrisBold1" style="width: 20%;">Apellido Paterno</td>
                                        <td class="celdaFondoGrisBold1" style="width: 20%;">Apellido Materno</td>
                                        <td class="celdaFondoGrisBold1" style="width: 25%;">Nombres</td>
                                        <td colspan="4" class="celdaFondoGrisBold1" style="width: 10%;">Sexo</td>
                                        <td class="celdaFondoGrisBold1" style="width: 15%;">Estado Civil(1)</td>
                                        <td colspan="4" class="celdaFondoGrisBold1" style="font-size: 10px; width: 10%;">Nacimiento Registrado</td>
                                    </tr>
                                    <tr>
                                        <td class="celdaNormalBig">
                                            <div style="height:12px; overflow:hidden;">
                                                @if($alumno !== null && $alumno->apellido_paterno !== null)
                                                    {{strtoupper(strval($alumno->apellido_paterno))}}
                                                @endif
                                            </div>
                                        </td>
                                        <td class="celdaNormalBig">
                                            <div style="height:12px; overflow:hidden;">
                                                @if($alumno !== null && $alumno->apellido_materno !== null)
                                                    {{strtoupper(strval($alumno->apellido_materno))}}
                                                @endif
                                            </div>
                                        </td>
                                        <td class="celdaNormalBig">
                                            <div style="height:12px; overflow:hidden;">
                                                @if($alumno !== null && $alumno->nombres !== null)
                                                    {{strtoupper(strval($alumno->nombres))}}
                                                @endif
                                            </div>
                                        </td>
                                        <td class="celdaFondoGrisBold2">H</td>
                                        <td class="celdaNormalBig" style="min-width:0.3cm!important;">
                                            <div style="height:12px; overflow:hidden;">
                                                @if($alumno !== null && $alumno->genero === "M")
                                                    X
                                                @endif
                                            </div>
                                        </td>
                                        <td class="celdaFondoGrisBold2">F</td>
                                        <td class="celdaNormalBig" style="min-width:0.3cm!important;">
                                            <div style="height:12px; overflow:hidden;">
                                                @if($alumno !== null && $alumno->genero === "F")
                                                    X
                                                @endif
                                            </div>
                                        </td>
                                        <td class="celdaNormalBig">SOLTERO</td>
                                        <td class="celdaFondoGrisBold2">Si</td>
                                        <td class="celdaNormalBig" style="min-width:0.3cm!important;">
                                            <div style="height:12px; overflow:hidden;">
                                                @if($alumno !== null && $alumno->nacimiento_registrado == "1")
                                                    X
                                                @endif
                                            </div>
                                        </td>
                                        <td class="celdaFondoGrisBold2">No</td>
                                        <td class="celdaNormalBig" style="min-width:0.3cm!important;">
                                            <div style="height:12px; overflow:hidden;">
                                                @if($alumno !== null && $alumno->nacimiento_registrado == "0")
                                                    X
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                    
                </th>
            </tr>
          </table>


          <table class="table" style="margin-bottom: 0px; width:100%">
            <tr>
                <td style="width: 60%;">
                    <table class="table" style="margin-bottom: 0px; width:100%">
                        <tr>
                            <td class="celdaNormalBig2">
                                <table class="table" style="margin-bottom: 0px; width:100%">
                                    <tr>
                                        <td rowspan="2" class="celdaFondoGrisBold3" style="width: 20%">Fecha de Nacimiento</td>
                                        <td class="celdaFondoGrisBold3" style="width: 6%">Dia</td>
                                        <td class="celdaFondoGrisBold3" style="width: 6%">Mes</td>
                                        <td class="celdaFondoGrisBold3" style="width: 8%">Año</td>
                                        <td rowspan="2" class="celdaFondoGrisBold3" style="width: 20%">Lengua Materna</td>
                                        <td rowspan="2" colspan="12" class="celdaNormalBig2" style="width: 40%">
                                            <div style="height:24px; overflow:hidden;">
                                                @if($alumno !== null && $alumno->lengua_materna !== null)
                                                    {{strtoupper(strval($alumno->lengua_materna))}}
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="celdaNormalBig2">
                                            <div style="height:11px; overflow:hidden;">
                                                @if($alumno !== null && $alumno->fecha_nacimiento !== null)
                                                    {{substr(strval($alumno->fecha_nacimiento),8,2)}}
                                                @endif
                                            </div>
                                        </td>
                                        <td class="celdaNormalBig2">
                                            <div style="height:11px; overflow:hidden;">
                                                @if($alumno !== null && $alumno->fecha_nacimiento !== null)
                                                    {{substr(strval($alumno->fecha_nacimiento),5,2)}}
                                                @endif
                                            </div>
                                        </td>
                                        <td class="celdaNormalBig2">
                                            <div style="height:11px; overflow:hidden;">
                                                @if($alumno !== null && $alumno->fecha_nacimiento !== null)
                                                    {{substr(strval($alumno->fecha_nacimiento),0,4)}}
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="celdaFondoGrisBold3">Lugar de Nacimiento</td>
                                        <td colspan="3" class="celdaFondoGrisBold3">
                                            <div style="height:11px; overflow:hidden;">

                                            </div>
                                        </td>
                                        <td class="celdaFondoGrisBold3">Segunda Lengua</td>
                                        <td colspan="12" class="celdaNormalBig2">
                                            <div style="height:11px; overflow:hidden;">
                                                @if($alumno !== null && $alumno->segunda_lengua !== null)
                                                    {{strtoupper(strval($alumno->segunda_lengua))}}
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="celdaFondoGrisBold3">País</td>
                                        <td colspan="3" class="celdaNormalBig2">
                                            <div style="height:11px; overflow:hidden;">
                                                @if($alumno !== null && $alumno->pais !== null)
                                                    {{strtoupper(strval($alumno->pais))}}
                                                @endif
                                            </div>
                                        </td>
                                        <td class="celdaFondoGrisBold3">Religión</td>
                                        <td colspan="12" class="celdaNormalBig2">
                                            <div style="height:11px; overflow:hidden;">
                                                @if($alumno !== null && $alumno->religion !== null)
                                                    {{strtoupper(strval($alumno->religion))}}
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="celdaFondoGrisBold3">Departamento</td>
                                        <td colspan="3" class="celdaNormalBig2">
                                            <div style="height:11px; overflow:hidden;">
                                                @if($alumno !== null && $alumno->departamento !== null)
                                                    {{strtoupper(strval($alumno->departamento))}}
                                                @endif
                                            </div>
                                        </td>
                                        <td class="celdaFondoGrisBold3">Número de hermanos</td>
                                        <td colspan="3" class="celdaNormalBig2">
                                            <div style="height:11px; overflow:hidden;">
                                                @if($alumno !== null && $alumno->num_hermanos !== null)
                                                    {{strval($alumno->num_hermanos)}}
                                                @endif
                                            </div>
                                        </td>
                                        <td colspan="4" class="celdaFondoGrisBold3">Lugar que Ocupa</td>
                                        <td colspan="5" class="celdaNormalBig2">
                                            <div style="height:11px; overflow:hidden;">
                                                @if($alumno !== null && $alumno->lugar_hermano !== null)
                                                    {{strval($alumno->lugar_hermano)}}
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="celdaFondoGrisBold3">Provincia</td>
                                        <td colspan="3" class="celdaNormalBig2">
                                            <div style="height:11px; overflow:hidden;">
                                                @if($alumno !== null && $alumno->provincia !== null)
                                                    {{strtoupper(strval($alumno->provincia))}}
                                                @endif
                                            </div>
                                        </td>
                                        <td class="celdaFondoGrisBold3">Tipo de Discapacidad(3)</td>
                                        <td class="celdaFondoGrisBold3">DI</td>
                                        <td class="celdaNormalBig2" style="min-width:0.3cm!important;">
                                            <div style="height:11px; overflow:hidden;">
                                                @if($alumno !== null && $alumno->DI !== null && intval($alumno->DI) === 1)
                                                    X
                                                @endif
                                            </div>
                                        </td>
                                        <td class="celdaFondoGrisBold3">DA</td>
                                        <td class="celdaNormalBig2" style="min-width:0.3cm!important;">
                                            <div style="height:11px; overflow:hidden;">
                                                @if($alumno !== null && $alumno->DA !== null && intval($alumno->DA) === 1)
                                                    X
                                                @endif
                                            </div>
                                        </td>
                                        <td class="celdaFondoGrisBold3">DV</td>
                                        <td class="celdaNormalBig2" style="min-width:0.3cm!important;">
                                            <div style="height:11px; overflow:hidden;">
                                                @if($alumno !== null && $alumno->DV !== null && intval($alumno->DV) === 1)
                                                    X
                                                @endif
                                            </div>
                                        </td>
                                        <td class="celdaFondoGrisBold3">DM</td>
                                        <td class="celdaNormalBig2" style="min-width:0.3cm!important;">
                                            <div style="height:11px; overflow:hidden;">
                                                @if($alumno !== null && $alumno->DM !== null && intval($alumno->DM) === 1)
                                                    X
                                                @endif
                                            </div>
                                        </td>
                                        <td class="celdaFondoGrisBold3">SC</td>
                                        <td class="celdaNormalBig2" style="min-width:0.3cm!important;">
                                            <div style="height:11px; overflow:hidden;">
                                                @if($alumno !== null && $alumno->SC !== null && intval($alumno->SC) === 1)
                                                    X
                                                @endif
                                            </div>
                                        </td>
                                        <td class="celdaFondoGrisBold3">OT</td>
                                        <td class="celdaNormalBig2" style="min-width:0.3cm!important;">
                                            <div style="height:11px; overflow:hidden;">
                                                @if($alumno !== null && $alumno->OT !== null && intval($alumno->OT) === 1)
                                                    X
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="celdaFondoGrisBold3">Distrito</td>
                                        <td colspan="3" class="celdaNormalBig2">
                                            <div style="height:11px; overflow:hidden;">
                                                @if($alumno !== null && $alumno->distrito !== null)
                                                    {{strtoupper(strval($alumno->distrito))}}
                                                @endif
                                            </div>
                                        </td>
                                        <td class="celdaFondoGrisBold3">Certif. de discapacidad * </td>
                                        <td colspan="4" class="celdaFondoGrisBold3">Tiene:</td>
                                        <td colspan="2" class="celdaNormalBig2">
                                            <div style="height:11px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td colspan="4" class="celdaFondoGrisBold3">No tiene:</td>
                                        <td colspan="2" class="celdaNormalBig2">
                                            <div style="height:11px; overflow:hidden;">
                                            </div>
                                        </td>
                                    </tr>

                                </table>
                            </td>
                        </tr>
                    </table>
                </td>


                <td style="width: 40%">
                    <table class="table" style="margin-bottom: 0px; width:100%">
                        <tr>
                            <td class="titles">1.1.1 Desarrollo del Estudiante</td>
                            <td class="notitles" style="font-size: 10px;">(Obligatorio para nivel inicial)</td>
                        </tr>
                        <tr>
                            <td style="width: 40%"> 
                                <table class="table" style="margin-bottom: 0px; width:99%">
                                    <tr>
                                        <td colspan="3" class="notitles" style="font-size: 10px;"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="celdaFondoGrisBold3" style="text-align: center;">Nacimiento</td>
                                    </tr>
                                    <tr>
                                        <td class="celdaFondoGrisBold3" style="text-align: center;" style="width: 34%;">Normal</td>
                                        <td class="celdaNormal3" style="width: 9%;">
                                            @if($alumno !== null && $alumno->nacimiento !== null && intval($alumno->nacimiento) === 0)
                                                X
                                            @endif
                                        </td>
                                        <td class="celdaFondoGrisBold3" style="text-align: center;" style="width: 48%;">Cesárea</td>
                                        <td class="celdaNormal3" style="width: 9%;">
                                            @if($alumno !== null && $alumno->nacimiento !== null && intval($alumno->nacimiento) === 1)
                                                X
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="celdaFondoGrisBold3" style="text-align: center;">Con complicaciones</td>
                                        <td class="celdaNormal3">
                                            @if($alumno !== null && $alumno->nacimiento !== null && intval($alumno->nacimiento) === 2)
                                                X
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="celdaFondoGrisBold3" style="text-align: center;">Observaciones</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="celdaNormal3" style="height: 1.7cm;">
                                            <div style="height:64.25px; overflow:hidden;">
                                                @if($alumno !== null && $alumno->obs_nacimiento !== null)
                                                    {{strtoupper(strval($alumno->obs_nacimiento))}}
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td style="width: 60%"> 
                                <table class="table" style="margin-bottom: 0px; width:100%">
                                    <tr>
                                        <td class="celdaFondoGrisBold3" style="text-align: center; width: 25%;">Aspecto</td>
                                        <td class="celdaFondoGrisBold3" style="text-align: center; width: 50%;">Actividad</td>
                                        <td class="celdaFondoGrisBold3" style="text-align: center; width: 25%;">Edad</td>
                                    </tr>
                                    <tr>
                                        <td class="celdaNormal3" rowspan="6">Psicomotriz</td>
                                        <td class="celdaNormal3">Levantó la cabeza</td>
                                        <td class="celdaNormal3">
                                            <div style="height:11px; overflow:hidden;">
                                                @if($alumno !== null && $alumno->levanto_cabeza !== null)
                                                    {{strval($alumno->levanto_cabeza)}} meses
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="celdaNormal3">Se sentó</td>
                                        <td class="celdaNormal3">
                                            <div style="height:11px; overflow:hidden;">
                                                @if($alumno !== null && $alumno->se_sento !== null)
                                                    {{strval($alumno->se_sento)}} meses
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="celdaNormal3">Gateó</td>
                                        <td class="celdaNormal3">
                                            <div style="height:11px; overflow:hidden;">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="celdaNormal3">Se paró</td>
                                        <td class="celdaNormal3">
                                            <div style="height:11px; overflow:hidden;">
                                                @if($alumno !== null && $alumno->se_paro !== null)
                                                    {{strval($alumno->se_paro)}} meses
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="celdaNormal3">Caminó</td>
                                        <td class="celdaNormal3">
                                            <div style="height:11px; overflow:hidden;">
                                                @if($alumno !== null && $alumno->se_camino !== null)
                                                    {{strval($alumno->se_camino)}} meses
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="celdaNormal3">Controló su esfínteres</td>
                                        <td class="celdaNormal3">
                                            <div style="height:11px; overflow:hidden;">
                                                @if($alumno !== null && $alumno->se_control_esfinter !== null)
                                                    {{strval($alumno->se_control_esfinter)}} meses
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="celdaNormal3" rowspan="2">Lenguaje</td>
                                        <td class="celdaNormal3">Habló las primeras palabras</td>
                                        <td class="celdaNormal3">
                                            <div style="height:11px; overflow:hidden;">
                                                @if($alumno !== null && $alumno->se_primeras_palabras !== null)
                                                    {{strval($alumno->se_primeras_palabras)}} meses
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="celdaNormal3">Habló con fluidez</td>
                                        <td class="celdaNormal3">
                                            <div style="height:11px; overflow:hidden;">
                                                @if($alumno !== null && $alumno->se_hablo_fluido !== null)
                                                    {{strval($alumno->se_hablo_fluido)}} meses
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
          </table>



          <table class="table" style="margin-bottom: 0px; width:100%; margin-top:0cm;">
            <tr>
                <td class="titles" style="width: 62%">1.1.2 Controles de Salud del Estudiante</td>
                <td class="titles" style="width: 38%">1.1.3 Estado de salud del Estudiante.</td>
            </tr>
            <tr>
                <td>
                    <table class="table" style="margin-bottom: 0px; width:99%;">
                        <tr>
                            <td colspan="6" class="celdaFondoGrisBold3c">Control de Peso - Talla</td>
                            <td colspan="5" class="celdaFondoGrisBold3c">Otros controles</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="celdaFondoGrisBold3c">Fecha</td>
                            <td rowspan="2" class="celdaFondoGrisBold3c">Peso</td>
                            <td rowspan="2" class="celdaFondoGrisBold3c">Talla</td>
                            <td rowspan="2" class="celdaFondoGrisBold3c">Observaciones</td>
                            <td colspan="3" class="celdaFondoGrisBold3c">Fecha</td>
                            <td rowspan="2" class="celdaFondoGrisBold3c">Tipo de Control</td>
                            <td rowspan="2" class="celdaFondoGrisBold3c">Resultado</td>
                        </tr>
                        <tr>
                            <td class="celdaFondoGrisBold3c">Día</td>
                            <td class="celdaFondoGrisBold3c">Mes</td>
                            <td class="celdaFondoGrisBold3c">Año</td>
                            <td class="celdaFondoGrisBold3c">Día</td>
                            <td class="celdaFondoGrisBold3c">Mes</td>
                            <td class="celdaFondoGrisBold3c">Año</td>
                        </tr>
                        <tr>
                            <td class="celdaNormal3" style="width: 7%;">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->controlesPesoTalla !== null && count($alumno->controlesPesoTalla) > 0)
                                        {{substr(strval($alumno->controlesPesoTalla[0]->fecha),8,2)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width: 7%;">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->controlesPesoTalla !== null && count($alumno->controlesPesoTalla) > 0)
                                        {{substr(strval($alumno->controlesPesoTalla[0]->fecha),5,2)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width: 7%;">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->controlesPesoTalla !== null && count($alumno->controlesPesoTalla) > 0)
                                        {{substr(strval($alumno->controlesPesoTalla[0]->fecha),0,4)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width: 7%;">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->controlesPesoTalla !== null && count($alumno->controlesPesoTalla) > 0)
                                        {{number_format($alumno->controlesPesoTalla[0]->peso, 2, '.')}} Kg
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width: 7%;">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->controlesPesoTalla !== null && count($alumno->controlesPesoTalla) > 0)
                                        {{number_format($alumno->controlesPesoTalla[0]->talla, 2, '.')}} Kg
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width: 24%;">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->controlesPesoTalla !== null && count($alumno->controlesPesoTalla) > 0)
                                        {{strval($alumno->controlesPesoTalla[0]->resultado)}} m
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width: 7%;">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->controlesOtros !== null && count($alumno->controlesOtros) > 0)
                                        {{substr(strval($alumno->controlesOtros[0]->fecha),8,2)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width: 7%;">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->controlesOtros !== null && count($alumno->controlesOtros) > 0)
                                        {{substr(strval($alumno->controlesOtros[0]->fecha),5,2)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width: 7%;">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->controlesOtros !== null && count($alumno->controlesOtros) > 0)
                                        {{substr(strval($alumno->controlesOtros[0]->fecha),0,4)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width: 10%;">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->controlesOtros !== null && count($alumno->controlesOtros) > 0)
                                        {{strval($alumno->controlesOtros[0]->tipo)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width: 10%;">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->controlesOtros !== null && count($alumno->controlesOtros) > 0)
                                        {{strval($alumno->controlesOtros[0]->resultado)}}
                                    @endif
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="celdaNormal3" style="width: 7%;">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->controlesPesoTalla !== null && count($alumno->controlesPesoTalla) > 1)
                                        {{substr(strval($alumno->controlesPesoTalla[1]->fecha),8,2)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width: 7%;">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->controlesPesoTalla !== null && count($alumno->controlesPesoTalla) > 1)
                                        {{substr(strval($alumno->controlesPesoTalla[1]->fecha),5,2)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width: 7%;">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->controlesPesoTalla !== null && count($alumno->controlesPesoTalla) > 1)
                                        {{substr(strval($alumno->controlesPesoTalla[1]->fecha),0,4)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width: 7%;">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->controlesPesoTalla !== null && count($alumno->controlesPesoTalla) > 1)
                                        {{number_format($alumno->controlesPesoTalla[1]->peso, 2, '.')}} Kg
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width: 7%;">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->controlesPesoTalla !== null && count($alumno->controlesPesoTalla) > 1)
                                        {{number_format($alumno->controlesPesoTalla[1]->talla, 2, '.')}} Kg
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width: 24%;">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->controlesPesoTalla !== null && count($alumno->controlesPesoTalla) > 1)
                                        {{strval($alumno->controlesPesoTalla[1]->resultado)}} m
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width: 7%;">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->controlesOtros !== null && count($alumno->controlesOtros) > 1)
                                        {{substr(strval($alumno->controlesOtros[1]->fecha),8,2)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width: 7%;">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->controlesOtros !== null && count($alumno->controlesOtros) > 1)
                                        {{substr(strval($alumno->controlesOtros[1]->fecha),5,2)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width: 7%;">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->controlesOtros !== null && count($alumno->controlesOtros) > 1)
                                        {{substr(strval($alumno->controlesOtros[1]->fecha),0,4)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width: 10%;">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->controlesOtros !== null && count($alumno->controlesOtros) > 1)
                                        {{strval($alumno->controlesOtros[1]->tipo)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width: 10%;">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->controlesOtros !== null && count($alumno->controlesOtros) > 1)
                                        {{strval($alumno->controlesOtros[1]->resultado)}}
                                    @endif
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="celdaNormal3" style="width: 7%;">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->controlesPesoTalla !== null && count($alumno->controlesPesoTalla) > 2)
                                        {{substr(strval($alumno->controlesPesoTalla[2]->fecha),8,2)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width: 7%;">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->controlesPesoTalla !== null && count($alumno->controlesPesoTalla) > 2)
                                        {{substr(strval($alumno->controlesPesoTalla[2]->fecha),5,2)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width: 7%;">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->controlesPesoTalla !== null && count($alumno->controlesPesoTalla) > 2)
                                        {{substr(strval($alumno->controlesPesoTalla[2]->fecha),0,4)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width: 7%;">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->controlesPesoTalla !== null && count($alumno->controlesPesoTalla) > 2)
                                        {{number_format($alumno->controlesPesoTalla[2]->peso, 2, '.')}} Kg
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width: 7%;">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->controlesPesoTalla !== null && count($alumno->controlesPesoTalla) > 2)
                                        {{number_format($alumno->controlesPesoTalla[2]->talla, 2, '.')}} Kg
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width: 24%;">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->controlesPesoTalla !== null && count($alumno->controlesPesoTalla) > 2)
                                        {{strval($alumno->controlesPesoTalla[2]->resultado)}} m
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width: 7%;">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->controlesOtros !== null && count($alumno->controlesOtros) > 2)
                                        {{substr(strval($alumno->controlesOtros[2]->fecha),8,2)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width: 7%;">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->controlesOtros !== null && count($alumno->controlesOtros) > 2)
                                        {{substr(strval($alumno->controlesOtros[2]->fecha),5,2)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width: 7%;">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->controlesOtros !== null && count($alumno->controlesOtros) > 2)
                                        {{substr(strval($alumno->controlesOtros[2]->fecha),0,4)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width: 10%;">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->controlesOtros !== null && count($alumno->controlesOtros) > 2)
                                        {{strval($alumno->controlesOtros[2]->tipo)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width: 10%;">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->controlesOtros !== null && count($alumno->controlesOtros) > 2)
                                        {{strval($alumno->controlesOtros[2]->resultado)}}
                                    @endif
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="celdaNormal3" style="width: 7%;">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->controlesPesoTalla !== null && count($alumno->controlesPesoTalla) > 3)
                                        {{substr(strval($alumno->controlesPesoTalla[3]->fecha),8,2)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width: 7%;">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->controlesPesoTalla !== null && count($alumno->controlesPesoTalla) > 3)
                                        {{substr(strval($alumno->controlesPesoTalla[3]->fecha),5,2)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width: 7%;">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->controlesPesoTalla !== null && count($alumno->controlesPesoTalla) > 3)
                                        {{substr(strval($alumno->controlesPesoTalla[3]->fecha),0,4)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width: 7%;">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->controlesPesoTalla !== null && count($alumno->controlesPesoTalla) > 3)
                                        {{number_format($alumno->controlesPesoTalla[3]->peso, 2, '.')}} Kg
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width: 7%;">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->controlesPesoTalla !== null && count($alumno->controlesPesoTalla) > 3)
                                        {{number_format($alumno->controlesPesoTalla[3]->talla, 2, '.')}} Kg
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width: 24%;">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->controlesPesoTalla !== null && count($alumno->controlesPesoTalla) > 3)
                                        {{strval($alumno->controlesPesoTalla[3]->resultado)}} m
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width: 7%;">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->controlesOtros !== null && count($alumno->controlesOtros) > 3)
                                        {{substr(strval($alumno->controlesOtros[3]->fecha),8,2)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width: 7%;">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->controlesOtros !== null && count($alumno->controlesOtros) > 3)
                                        {{substr(strval($alumno->controlesOtros[3]->fecha),5,2)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width: 7%;">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->controlesOtros !== null && count($alumno->controlesOtros) > 3)
                                        {{substr(strval($alumno->controlesOtros[3]->fecha),0,4)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width: 10%;">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->controlesOtros !== null && count($alumno->controlesOtros) > 3)
                                        {{strval($alumno->controlesOtros[3]->tipo)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width: 10%;">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->controlesOtros !== null && count($alumno->controlesOtros) > 3)
                                        {{strval($alumno->controlesOtros[3]->resultado)}}
                                    @endif
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="celdaNormal3" style="width: 7%;">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->controlesPesoTalla !== null && count($alumno->controlesPesoTalla) > 4)
                                        {{substr(strval($alumno->controlesPesoTalla[4]->fecha),8,2)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width: 7%;">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->controlesPesoTalla !== null && count($alumno->controlesPesoTalla) > 4)
                                        {{substr(strval($alumno->controlesPesoTalla[4]->fecha),5,2)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width: 7%;">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->controlesPesoTalla !== null && count($alumno->controlesPesoTalla) > 4)
                                        {{substr(strval($alumno->controlesPesoTalla[4]->fecha),0,4)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width: 7%;">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->controlesPesoTalla !== null && count($alumno->controlesPesoTalla) > 4)
                                        {{number_format($alumno->controlesPesoTalla[4]->peso, 2, '.')}} Kg
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width: 7%;">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->controlesPesoTalla !== null && count($alumno->controlesPesoTalla) > 4)
                                        {{number_format($alumno->controlesPesoTalla[4]->talla, 2, '.')}} Kg
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width: 24%;">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->controlesPesoTalla !== null && count($alumno->controlesPesoTalla) > 4)
                                        {{strval($alumno->controlesPesoTalla[4]->resultado)}} m
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width: 7%;">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->controlesOtros !== null && count($alumno->controlesOtros) > 4)
                                        {{substr(strval($alumno->controlesOtros[4]->fecha),8,2)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width: 7%;">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->controlesOtros !== null && count($alumno->controlesOtros) > 4)
                                        {{substr(strval($alumno->controlesOtros[4]->fecha),5,2)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width: 7%;">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->controlesOtros !== null && count($alumno->controlesOtros) > 4)
                                        {{substr(strval($alumno->controlesOtros[4]->fecha),0,4)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width: 10%;">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->controlesOtros !== null && count($alumno->controlesOtros) > 4)
                                        {{strval($alumno->controlesOtros[4]->tipo)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width: 10%;">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->controlesOtros !== null && count($alumno->controlesOtros) > 4)
                                        {{strval($alumno->controlesOtros[4]->resultado)}}
                                    @endif
                                </div>
                            </td>
                        </tr>
                        
                    </table>
                </td>
                <td>
                    <table class="table" style="margin-bottom: 0px; width:100%;">
                        <tr>
                            <td colspan="2" class="celdaFondoGrisBold3c">Enfermedades sufridas</td>
                            <td colspan="2" class="celdaFondoGrisBold3c">Vacunas</td>
                            <td colspan="2" class="celdaFondoGrisBold3c">Alergias</td>
                        </tr>
                        <tr>
                            <td class="celdaFondoGrisBold3c">Edad aprox.</td>
                            <td class="celdaFondoGrisBold3c">Enfermedad</td>
                            <td class="celdaFondoGrisBold3c">Edad aprox.</td>
                            <td class="celdaFondoGrisBold3c">Vacuna</td>
                            <td rowspan="2" colspan="2" class="celdaNormal3">
                                <div style="height:26px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->registroSaludAlergias !== null && count($alumno->registroSaludAlergias) > 0)
                                        {{strval($alumno->registroSaludAlergias[0]->enfermedad)}}
                                    @endif
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="celdaNormal3">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->registroSaludEnfermedads !== null && count($alumno->registroSaludEnfermedads) > 0)
                                        {{strval($alumno->registroSaludEnfermedads[0]->edad_aprox)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->registroSaludEnfermedads !== null && count($alumno->registroSaludEnfermedads) > 0)
                                        {{strval($alumno->registroSaludEnfermedads[0]->enfermedad)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->registroSaludVacunas !== null && count($alumno->registroSaludVacunas) > 0)
                                        {{strval($alumno->registroSaludVacunas[0]->edad_aprox)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->registroSaludVacunas !== null && count($alumno->registroSaludVacunas) > 0)
                                        {{strval($alumno->registroSaludVacunas[0]->vacuna)}}
                                    @endif
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="celdaNormal3">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->registroSaludEnfermedads !== null && count($alumno->registroSaludEnfermedads) > 1)
                                        {{strval($alumno->registroSaludEnfermedads[1]->edad_aprox)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->registroSaludEnfermedads !== null && count($alumno->registroSaludEnfermedads) > 1)
                                        {{strval($alumno->registroSaludEnfermedads[1]->enfermedad)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->registroSaludVacunas !== null && count($alumno->registroSaludVacunas) > 1)
                                        {{strval($alumno->registroSaludVacunas[1]->edad_aprox)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->registroSaludVacunas !== null && count($alumno->registroSaludVacunas) > 1)
                                        {{strval($alumno->registroSaludVacunas[1]->vacuna)}}
                                    @endif
                                </div>
                            </td>
                            <td colspan="2" class="celdaNormal3">Experiencias Traumáticas</td>
                        </tr>
                        <tr>
                            <td class="celdaNormal3">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->registroSaludEnfermedads !== null && count($alumno->registroSaludEnfermedads) > 2)
                                        {{strval($alumno->registroSaludEnfermedads[2]->edad_aprox)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->registroSaludEnfermedads !== null && count($alumno->registroSaludEnfermedads) > 2)
                                        {{strval($alumno->registroSaludEnfermedads[2]->enfermedad)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->registroSaludVacunas !== null && count($alumno->registroSaludVacunas) > 2)
                                        {{strval($alumno->registroSaludVacunas[2]->edad_aprox)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->registroSaludVacunas !== null && count($alumno->registroSaludVacunas) > 2)
                                        {{strval($alumno->registroSaludVacunas[2]->vacuna)}}
                                    @endif
                                </div>
                            </td>
                            <td rowspan="2" colspan="2" class="celdaNormal3">
                                <div style="height:26px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->registroSaludExperienciasT !== null && count($alumno->registroSaludExperienciasT) > 0)
                                        {{strval($alumno->registroSaludExperienciasT[0]->enfermedad)}}
                                    @endif
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="celdaNormal3">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->registroSaludEnfermedads !== null && count($alumno->registroSaludEnfermedads) > 3)
                                        {{strval($alumno->registroSaludEnfermedads[3]->edad_aprox)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->registroSaludEnfermedads !== null && count($alumno->registroSaludEnfermedads) > 3)
                                        {{strval($alumno->registroSaludEnfermedads[3]->enfermedad)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->registroSaludVacunas !== null && count($alumno->registroSaludVacunas) > 3)
                                        {{strval($alumno->registroSaludVacunas[3]->edad_aprox)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->registroSaludVacunas !== null && count($alumno->registroSaludVacunas) > 3)
                                        {{strval($alumno->registroSaludVacunas[3]->vacuna)}}
                                    @endif
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="celdaNormal3">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->registroSaludEnfermedads !== null && count($alumno->registroSaludEnfermedads) > 4)
                                        {{strval($alumno->registroSaludEnfermedads[4]->edad_aprox)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->registroSaludEnfermedads !== null && count($alumno->registroSaludEnfermedads) > 4)
                                        {{strval($alumno->registroSaludEnfermedads[4]->enfermedad)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->registroSaludVacunas !== null && count($alumno->registroSaludVacunas) > 4)
                                        {{strval($alumno->registroSaludVacunas[4]->edad_aprox)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->registroSaludVacunas !== null && count($alumno->registroSaludVacunas) > 4)
                                        {{strval($alumno->registroSaludVacunas[4]->vacuna)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:20%;">Tipo de sangre</td>
                            <td class="celdaNormal3" style="width:20%;">
                                <div style="height:9px; overflow:hidden;">
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
          </table>











          <table class="table" style="margin-bottom: 0px; width:100%; margin-top:0cm;">
            <tr>
                <td class="titles" style="width: 64%">1.2 Datos del domicilio del Estudiante</td>
                <td class="titles" style="width: 36%">1.3 Datos de los padres</td>
            </tr>
            <tr>
                <td style="vertical-align: text-top;">
                    <table class="table" style="margin-bottom: 0px; width:99%;">
                        <tr>
                            <td class="celdaFondoGrisBold3c" style="width: 7%;">Año</td>
                            <td class="celdaFondoGrisBold3c" style="width: 22%;">Dirección</td>
                            <td class="celdaFondoGrisBold3c" style="width: 19%;">Lugar</td>
                            <td class="celdaFondoGrisBold3c" style="width: 14%;">Departamento</td>
                            <td class="celdaFondoGrisBold3c" style="width: 14%;">Provincia</td>
                            <td class="celdaFondoGrisBold3c" style="width: 14%;">Distrito</td>
                            <td class="celdaFondoGrisBold3c" style="width: 10%;">Teléfono</td>
                        </tr>
                        <tr>
                            <td class="celdaNormal3">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 0)
                                        {{strval($alumno->situacionLaborales[0]->anio)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 0)
                                        {{strval($alumno->situacionLaborales[0]->direccion)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 0)
                                        {{strval($alumno->situacionLaborales[0]->lugar)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 0)
                                        {{strval($alumno->situacionLaborales[0]->departamento)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 0)
                                        {{strval($alumno->situacionLaborales[0]->provincia)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 0)
                                        {{strval($alumno->situacionLaborales[0]->distrito)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 0)
                                        {{strval($alumno->situacionLaborales[0]->telefono)}}
                                    @endif
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 1)
                                        {{strval($alumno->situacionLaborales[1]->anio)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 1)
                                        {{strval($alumno->situacionLaborales[1]->direccion)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 1)
                                        {{strval($alumno->situacionLaborales[1]->lugar)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 1)
                                        {{strval($alumno->situacionLaborales[1]->departamento)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 1)
                                        {{strval($alumno->situacionLaborales[1]->provincia)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 1)
                                        {{strval($alumno->situacionLaborales[1]->distrito)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 1)
                                        {{strval($alumno->situacionLaborales[1]->telefono)}}
                                    @endif
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 2)
                                        {{strval($alumno->situacionLaborales[2]->anio)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 2)
                                        {{strval($alumno->situacionLaborales[2]->direccion)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 2)
                                        {{strval($alumno->situacionLaborales[2]->lugar)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 2)
                                        {{strval($alumno->situacionLaborales[2]->departamento)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 2)
                                        {{strval($alumno->situacionLaborales[2]->provincia)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 2)
                                        {{strval($alumno->situacionLaborales[2]->distrito)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 2)
                                        {{strval($alumno->situacionLaborales[2]->telefono)}}
                                    @endif
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 3)
                                        {{strval($alumno->situacionLaborales[3]->anio)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 3)
                                        {{strval($alumno->situacionLaborales[3]->direccion)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 3)
                                        {{strval($alumno->situacionLaborales[3]->lugar)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 3)
                                        {{strval($alumno->situacionLaborales[3]->departamento)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 3)
                                        {{strval($alumno->situacionLaborales[3]->provincia)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 3)
                                        {{strval($alumno->situacionLaborales[3]->distrito)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 3)
                                        {{strval($alumno->situacionLaborales[3]->telefono)}}
                                    @endif
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 4)
                                        {{strval($alumno->situacionLaborales[4]->anio)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 4)
                                        {{strval($alumno->situacionLaborales[4]->direccion)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 4)
                                        {{strval($alumno->situacionLaborales[4]->lugar)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 4)
                                        {{strval($alumno->situacionLaborales[4]->departamento)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 4)
                                        {{strval($alumno->situacionLaborales[4]->provincia)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 4)
                                        {{strval($alumno->situacionLaborales[4]->distrito)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 4)
                                        {{strval($alumno->situacionLaborales[4]->telefono)}}
                                    @endif
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 5)
                                        {{strval($alumno->situacionLaborales[5]->anio)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 5)
                                        {{strval($alumno->situacionLaborales[5]->direccion)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 5)
                                        {{strval($alumno->situacionLaborales[5]->lugar)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 5)
                                        {{strval($alumno->situacionLaborales[5]->departamento)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 5)
                                        {{strval($alumno->situacionLaborales[5]->provincia)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 5)
                                        {{strval($alumno->situacionLaborales[5]->distrito)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 5)
                                        {{strval($alumno->situacionLaborales[5]->telefono)}}
                                    @endif
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 6)
                                        {{strval($alumno->situacionLaborales[6]->anio)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 6)
                                        {{strval($alumno->situacionLaborales[6]->direccion)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 6)
                                        {{strval($alumno->situacionLaborales[6]->lugar)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 6)
                                        {{strval($alumno->situacionLaborales[6]->departamento)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 6)
                                        {{strval($alumno->situacionLaborales[6]->provincia)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 6)
                                        {{strval($alumno->situacionLaborales[6]->distrito)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 6)
                                        {{strval($alumno->situacionLaborales[6]->telefono)}}
                                    @endif
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 7)
                                        {{strval($alumno->situacionLaborales[7]->anio)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 7)
                                        {{strval($alumno->situacionLaborales[7]->direccion)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 7)
                                        {{strval($alumno->situacionLaborales[7]->lugar)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 7)
                                        {{strval($alumno->situacionLaborales[7]->departamento)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 7)
                                        {{strval($alumno->situacionLaborales[7]->provincia)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 7)
                                        {{strval($alumno->situacionLaborales[7]->distrito)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 7)
                                        {{strval($alumno->situacionLaborales[7]->telefono)}}
                                    @endif
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 8)
                                        {{strval($alumno->situacionLaborales[8]->anio)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 8)
                                        {{strval($alumno->situacionLaborales[8]->direccion)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 8)
                                        {{strval($alumno->situacionLaborales[8]->lugar)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 8)
                                        {{strval($alumno->situacionLaborales[8]->departamento)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 8)
                                        {{strval($alumno->situacionLaborales[8]->provincia)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 8)
                                        {{strval($alumno->situacionLaborales[8]->distrito)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 8)
                                        {{strval($alumno->situacionLaborales[8]->telefono)}}
                                    @endif
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 9)
                                        {{strval($alumno->situacionLaborales[9]->anio)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 9)
                                        {{strval($alumno->situacionLaborales[9]->direccion)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 9)
                                        {{strval($alumno->situacionLaborales[9]->lugar)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 9)
                                        {{strval($alumno->situacionLaborales[9]->departamento)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 9)
                                        {{strval($alumno->situacionLaborales[9]->provincia)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 9)
                                        {{strval($alumno->situacionLaborales[9]->distrito)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" >
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 9)
                                        {{strval($alumno->situacionLaborales[9]->telefono)}}
                                    @endif
                                </div>
                            </td>
                        </tr>
                       
                       
                       
                       
                       
                       
                       
                       
                       
                      
                    </table>
                </td>
                <td style="vertical-align: text-top;">
                    <table class="table" style="margin-bottom: 0px; width:100%;">
                        <tr>
                            <td class="celdaFondoGrisBold4">Datos</td>
                            <td colspan="4" class="celdaFondoGrisBold4">Padre</td>
                            <td colspan="4" class="celdaFondoGrisBold4">Madre</td>
                            
                        </tr>
                        <tr>
                            <td class="celdaFondoGrisBold4L">Apellido Paterno</td>
                            <td colspan="4" class="celdaNormal4">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->apoderados !== null && count($alumno->apoderados) > 1)
                                        {{strval($alumno->apoderados[1]->apellido_paterno)}}
                                    @endif
                                </div>
                            </td>
                            <td colspan="4" class="celdaNormal4">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->apoderados !== null && count($alumno->apoderados) > 0)
                                        {{strval($alumno->apoderados[0]->apellido_paterno)}}
                                    @endif   
                                </div> 
                            </td>                           
                        </tr>
                        <tr>
                            <td class="celdaFondoGrisBold4L">Apellido Materno</td>
                            <td colspan="4" class="celdaNormal4">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->apoderados !== null && count($alumno->apoderados) > 1)
                                        {{strval($alumno->apoderados[1]->apellido_materno)}}
                                    @endif
                                </div> 
                            </td>
                            <td colspan="4" class="celdaNormal4">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->apoderados !== null && count($alumno->apoderados) > 0)
                                        {{strval($alumno->apoderados[0]->apellido_materno)}}
                                    @endif    
                                </div>   
                            </td>                           
                        </tr>
                        <tr>
                            <td class="celdaFondoGrisBold4L">Nombres</td>
                            <td colspan="4" class="celdaNormal4">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->apoderados !== null && count($alumno->apoderados) > 1)
                                        {{strval($alumno->apoderados[1]->nombres)}}
                                    @endif
                                </div>   
                            </td>
                            <td colspan="4" class="celdaNormal4">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->apoderados !== null && count($alumno->apoderados) > 0)
                                        {{strval($alumno->apoderados[0]->nombres)}}
                                    @endif   
                                </div>  
                            </td>                           
                        </tr>
                        <tr>
                            <td class="celdaFondoGrisBold4L" style="width: 32%">Vive</td>
                            <td class="celdaFondoGrisBold4L" style="width: 8.5%">Si</td>
                            <td class="celdaNormal4" style="width: 8.5%">
                                @if($alumno !== null && $alumno->apoderados !== null && count($alumno->apoderados) > 1 && intval($alumno->apoderados[1]->vive) == 1)
                                    X
                                @endif
                            </td>
                            <td class="celdaFondoGrisBold4L" style="width: 8.5%">No</td>
                            <td class="celdaNormal4" style="width: 8.5%">
                                @if($alumno !== null && $alumno->apoderados !== null && count($alumno->apoderados) > 1 && intval($alumno->apoderados[1]->vive) == 0)
                                X
                            @endif
                            </td>
                            <td class="celdaFondoGrisBold4L" style="width: 8.5%">Si</td>
                            <td class="celdaNormal4" style="width: 8.5%">
                                @if($alumno !== null && $alumno->apoderados !== null && count($alumno->apoderados) > 0 && intval($alumno->apoderados[0]->vive) == 1)
                                    X
                                @endif
                            </td>
                            <td class="celdaFondoGrisBold4L" style="width: 8.5%">No</td>
                            <td class="celdaNormal4" style="width: 8.5%">
                                @if($alumno !== null && $alumno->apoderados !== null && count($alumno->apoderados) > 0 && intval($alumno->apoderados[0]->vive) == 0)
                                    X
                                @endif
                            </td>                         
                        </tr>
                        <tr>
                            <td rowspan="2" class="celdaFondoGrisBold4L">Fecha de Nacimiento</td>
                            <td class="celdaFondoGrisBold4L">Día</td>
                            <td class="celdaFondoGrisBold4L">Mes</td>
                            <td colspan="2" class="celdaFondoGrisBold4L">Año</td>
                            <td class="celdaFondoGrisBold4L">Día</td>
                            <td class="celdaFondoGrisBold4L">Mes</td>
                            <td colspan="2" class="celdaFondoGrisBold4L">Año</td>
                        </tr>
                        <tr>
                            <td class="celdaNormal4">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && count($alumno->apoderados) > 1 && $alumno->apoderados[1]->fecha_nacimiento !== null)
                                        {{substr(strval($alumno->apoderados[1]->fecha_nacimiento),8,2)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal4">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && count($alumno->apoderados) > 1 && $alumno->apoderados[1]->fecha_nacimiento !== null)
                                        {{substr(strval($alumno->apoderados[1]->fecha_nacimiento),5,2)}}
                                    @endif
                                </div>
                            </td>
                            <td colspan="2" class="celdaNormal4">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && count($alumno->apoderados) > 1 && $alumno->apoderados[1]->fecha_nacimiento !== null)
                                        {{substr(strval($alumno->apoderados[1]->fecha_nacimiento),0,4)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal4">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && count($alumno->apoderados) > 0 && $alumno->apoderados[0]->fecha_nacimiento !== null)
                                        {{substr(strval($alumno->apoderados[0]->fecha_nacimiento),8,2)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal4">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && count($alumno->apoderados) > 0 && $alumno->apoderados[0]->fecha_nacimiento !== null)
                                        {{substr(strval($alumno->apoderados[0]->fecha_nacimiento),5,2)}}
                                    @endif
                                </div>
                            </td>
                            <td colspan="2" class="celdaNormal4">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && count($alumno->apoderados) > 0 && $alumno->apoderados[0]->fecha_nacimiento !== null)
                                        {{substr(strval($alumno->apoderados[0]->fecha_nacimiento),0,4)}}
                                    @endif
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="celdaFondoGrisBold4L">Grado de Instruccion</td>
                            <td colspan="4" class="celdaNormal4">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->apoderados !== null && count($alumno->apoderados) > 1)
                                        {{strval($alumno->apoderados[1]->grado_instruccion)}}
                                    @endif
                                </div>
                            </td>
                            <td colspan="4" class="celdaNormal4">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->apoderados !== null && count($alumno->apoderados) > 0)
                                        {{strval($alumno->apoderados[0]->grado_instruccion)}}
                                    @endif    
                                </div>
                            </td>                           
                        </tr>
                        <tr>
                            <td class="celdaFondoGrisBold4L">Ocupación</td>
                            <td colspan="4" class="celdaNormal4">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->apoderados !== null && count($alumno->apoderados) > 1)
                                        {{strval($alumno->apoderados[1]->ocupacion)}}
                                    @endif
                                </div>
                            </td>
                            <td colspan="4" class="celdaNormal4">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->apoderados !== null && count($alumno->apoderados) > 0)
                                        {{strval($alumno->apoderados[0]->ocupacion)}}
                                    @endif    
                                </div> 
                            </td>                           
                        </tr>
                        <tr>
                            <td class="celdaFondoGrisBold4L">Vive con el Estudiante</td>
                            <td class="celdaFondoGrisBold4L">Si</td>
                            <td class="celdaNormal4">
                                @if($alumno !== null && $alumno->apoderados !== null && count($alumno->apoderados) > 1 && intval($alumno->apoderados[1]->vive_con_estudiante) == 1)
                                    X
                                @endif
                            </td>
                            <td class="celdaFondoGrisBold4L">No</td>
                            <td class="celdaNormal4">
                                @if($alumno !== null && $alumno->apoderados !== null && count($alumno->apoderados) > 1 && intval($alumno->apoderados[1]->vive_con_estudiante) == 0)
                                    X
                                @endif
                            </td>
                            <td class="celdaFondoGrisBold4L">Si</td>
                            <td class="celdaNormal4">
                                @if($alumno !== null && $alumno->apoderados !== null && count($alumno->apoderados) > 0 && intval($alumno->apoderados[0]->vive_con_estudiante) == 1)
                                    X
                                @endif
                            </td>
                            <td class="celdaFondoGrisBold4L">No</td>
                            <td class="celdaNormal4">
                                @if($alumno !== null && $alumno->apoderados !== null && count($alumno->apoderados) > 0 && intval($alumno->apoderados[0]->vive_con_estudiante) == 0)
                                    X
                                @endif    
                            </td>                         
                        </tr>
                        <tr>
                            <td class="celdaFondoGrisBold4L">Religión</td>
                            <td colspan="4" class="celdaNormal4">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->apoderados !== null && count($alumno->apoderados) > 1)
                                        {{strval($alumno->apoderados[1]->religion)}}
                                    @endif
                                </div> 
                            </td>
                            <td colspan="4" class="celdaNormal4">
                                <div style="height:10px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->apoderados !== null && count($alumno->apoderados) > 0)
                                        {{strval($alumno->apoderados[0]->religion)}}
                                    @endif  
                                </div>    
                            </td>                           
                        </tr>

                    </table>
                </td>
            </tr>
          </table>


















          



          <table class="table" style="margin-bottom: 0px; width:100%; margin-top:0cm;">
            <tr>
                <td class="titles" style="width: 50%">1.4 Datos de la situación laboral de los estudiantes que trabajan</td>
                <td class="titles" style="width: 50%"></td>
            </tr>
            <tr>
                <td>
                    <table class="table" style="margin-bottom: 0px; width:99%;">
                        <tr>
                            <td rowspan="2" class="celdaFondoGrisBold3c">Año</td>
                            <td rowspan="2" class="celdaFondoGrisBold3c">Edad</td>
                            <td colspan="7" class="celdaFondoGrisBold3c">Descripción de la actividad laboral (4)</td>
                            <td rowspan="2" class="celdaFondoGrisBold3c">Horas Semanales de trabajo</td>
                        </tr>
                        <tr>
                            <td class="celdaFondoGrisBold3c">OB</td>
                            <td class="celdaFondoGrisBold3c">EM</td>
                            <td class="celdaFondoGrisBold3c">TI</td>
                            <td class="celdaFondoGrisBold3c">E/O</td>
                            <td class="celdaFondoGrisBold3c">TF</td>
                            <td class="celdaFondoGrisBold3c">TH</td>
                            <td class="celdaFondoGrisBold3c">Especificar</td>
                        </tr>
                        <tr>
                            <td class="celdaNormal3" style="width:7%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 0)
                                        {{strval($alumno->situacionLaborales[0]->anio)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:7%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 0)
                                        {{strval($alumno->situacionLaborales[0]->edad)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 0 && strval($alumno->situacionLaborales[0]->tipo) == "OB")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 0 && strval($alumno->situacionLaborales[0]->tipo) == "EM")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 0 && strval($alumno->situacionLaborales[0]->tipo) == "TI")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 0 && strval($alumno->situacionLaborales[0]->tipo) == "EO")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 0 && strval($alumno->situacionLaborales[0]->tipo) == "TF")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 0 && strval($alumno->situacionLaborales[0]->tipo) == "TH")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:36%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 0)
                                        {{strval($alumno->situacionLaborales[0]->trabajo)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:20%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 0)
                                        {{strval($alumno->situacionLaborales[0]->horas_semanales)}}
                                    @endif 
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="celdaNormal3" style="width:7%; ">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 1)
                                        {{strval($alumno->situacionLaborales[1]->anio)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:7%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 1)
                                        {{strval($alumno->situacionLaborales[1]->edad)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 1 && strval($alumno->situacionLaborales[1]->tipo) == "OB")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 1 && strval($alumno->situacionLaborales[1]->tipo) == "EM")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 1 && strval($alumno->situacionLaborales[1]->tipo) == "TI")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 1 && strval($alumno->situacionLaborales[1]->tipo) == "EO")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 1 && strval($alumno->situacionLaborales[1]->tipo) == "TF")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 1 && strval($alumno->situacionLaborales[1]->tipo) == "TH")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:36%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 1)
                                        {{strval($alumno->situacionLaborales[1]->trabajo)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:20%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 1)
                                        {{strval($alumno->situacionLaborales[1]->horas_semanales)}}
                                    @endif 
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="celdaNormal3" style="width:7%; ">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 2)
                                        {{strval($alumno->situacionLaborales[2]->anio)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:7%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 2)
                                        {{strval($alumno->situacionLaborales[2]->edad)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 2 && strval($alumno->situacionLaborales[2]->tipo) == "OB")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 2 && strval($alumno->situacionLaborales[2]->tipo) == "EM")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 2 && strval($alumno->situacionLaborales[2]->tipo) == "TI")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 2 && strval($alumno->situacionLaborales[2]->tipo) == "EO")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 2 && strval($alumno->situacionLaborales[2]->tipo) == "TF")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 2 && strval($alumno->situacionLaborales[2]->tipo) == "TH")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:36%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 2)
                                        {{strval($alumno->situacionLaborales[2]->trabajo)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:20%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 2)
                                        {{strval($alumno->situacionLaborales[2]->horas_semanales)}}
                                    @endif 
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="celdaNormal3" style="width:7%; ">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 3)
                                        {{strval($alumno->situacionLaborales[3]->anio)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:7%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 3)
                                        {{strval($alumno->situacionLaborales[3]->edad)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 3 && strval($alumno->situacionLaborales[3]->tipo) == "OB")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 3 && strval($alumno->situacionLaborales[3]->tipo) == "EM")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 3 && strval($alumno->situacionLaborales[3]->tipo) == "TI")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 3 && strval($alumno->situacionLaborales[3]->tipo) == "EO")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 3 && strval($alumno->situacionLaborales[3]->tipo) == "TF")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 3 && strval($alumno->situacionLaborales[3]->tipo) == "TH")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:36%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 3)
                                        {{strval($alumno->situacionLaborales[3]->trabajo)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:20%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 3)
                                        {{strval($alumno->situacionLaborales[3]->horas_semanales)}}
                                    @endif 
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="celdaNormal3" style="width:7%; ">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 4)
                                        {{strval($alumno->situacionLaborales[4]->anio)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:7%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 4)
                                        {{strval($alumno->situacionLaborales[4]->edad)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 4 && strval($alumno->situacionLaborales[4]->tipo) == "OB")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 4 && strval($alumno->situacionLaborales[4]->tipo) == "EM")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 4 && strval($alumno->situacionLaborales[4]->tipo) == "TI")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 4 && strval($alumno->situacionLaborales[4]->tipo) == "EO")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 4 && strval($alumno->situacionLaborales[4]->tipo) == "TF")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 4 && strval($alumno->situacionLaborales[4]->tipo) == "TH")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:36%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 4)
                                        {{strval($alumno->situacionLaborales[4]->trabajo)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:20%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 4)
                                        {{strval($alumno->situacionLaborales[4]->horas_semanales)}}
                                    @endif 
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="celdaNormal3" style="width:7%; ">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 5)
                                        {{strval($alumno->situacionLaborales[5]->anio)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:7%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 5)
                                        {{strval($alumno->situacionLaborales[5]->edad)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 5 && strval($alumno->situacionLaborales[5]->tipo) == "OB")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 5 && strval($alumno->situacionLaborales[5]->tipo) == "EM")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 5 && strval($alumno->situacionLaborales[5]->tipo) == "TI")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 5 && strval($alumno->situacionLaborales[5]->tipo) == "EO")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 5 && strval($alumno->situacionLaborales[5]->tipo) == "TF")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 5 && strval($alumno->situacionLaborales[5]->tipo) == "TH")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:36%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 5)
                                        {{strval($alumno->situacionLaborales[5]->trabajo)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:20%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 5)
                                        {{strval($alumno->situacionLaborales[5]->horas_semanales)}}
                                    @endif 
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="celdaNormal3" style="width:7%; ">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 6)
                                        {{strval($alumno->situacionLaborales[6]->anio)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:7%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 6)
                                        {{strval($alumno->situacionLaborales[6]->edad)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 6 && strval($alumno->situacionLaborales[6]->tipo) == "OB")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 6 && strval($alumno->situacionLaborales[6]->tipo) == "EM")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 6 && strval($alumno->situacionLaborales[6]->tipo) == "TI")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 6 && strval($alumno->situacionLaborales[6]->tipo) == "EO")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 6 && strval($alumno->situacionLaborales[6]->tipo) == "TF")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 6 && strval($alumno->situacionLaborales[6]->tipo) == "TH")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:36%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 6)
                                        {{strval($alumno->situacionLaborales[6]->trabajo)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:20%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 6)
                                        {{strval($alumno->situacionLaborales[6]->horas_semanales)}}
                                    @endif 
                                </div>
                            </td>
                        </tr>
                        
                        
                        
                        
                        
                        
                      
                      
                    </table>
                </td>
                <td>
                    <table class="table" style="margin-bottom: 0px; width:100%;">
                        <tr>
                            <td rowspan="2" class="celdaFondoGrisBold3c">Año</td>
                            <td rowspan="2" class="celdaFondoGrisBold3c">Edad</td>
                            <td colspan="7" class="celdaFondoGrisBold3c">Descripción de la actividad laboral (4)</td>
                            <td rowspan="2" class="celdaFondoGrisBold3c">Horas Semanales de trabajo</td>
                        </tr>
                        <tr>
                            <td class="celdaFondoGrisBold3c">OB</td>
                            <td class="celdaFondoGrisBold3c">EM</td>
                            <td class="celdaFondoGrisBold3c">TI</td>
                            <td class="celdaFondoGrisBold3c">E/O</td>
                            <td class="celdaFondoGrisBold3c">TF</td>
                            <td class="celdaFondoGrisBold3c">TH</td>
                            <td class="celdaFondoGrisBold3c">Especificar</td>
                        </tr>
                        <tr>
                            <td class="celdaNormal3" style="width:7%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 7)
                                        {{strval($alumno->situacionLaborales[7]->anio)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:7%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 7)
                                        {{strval($alumno->situacionLaborales[7]->edad)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 7 && strval($alumno->situacionLaborales[7]->tipo) == "OB")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 7 && strval($alumno->situacionLaborales[7]->tipo) == "EM")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 7 && strval($alumno->situacionLaborales[7]->tipo) == "TI")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 7 && strval($alumno->situacionLaborales[7]->tipo) == "EO")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 7 && strval($alumno->situacionLaborales[7]->tipo) == "TF")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 7 && strval($alumno->situacionLaborales[7]->tipo) == "TH")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:36%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 7)
                                        {{strval($alumno->situacionLaborales[7]->trabajo)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:20%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 7)
                                        {{strval($alumno->situacionLaborales[7]->horas_semanales)}}
                                    @endif 
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="celdaNormal3" style="width:7%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 8)
                                        {{strval($alumno->situacionLaborales[8]->anio)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:7%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 8)
                                        {{strval($alumno->situacionLaborales[8]->edad)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 8 && strval($alumno->situacionLaborales[8]->tipo) == "OB")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 8 && strval($alumno->situacionLaborales[8]->tipo) == "EM")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 8 && strval($alumno->situacionLaborales[8]->tipo) == "TI")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 8 && strval($alumno->situacionLaborales[8]->tipo) == "EO")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 8 && strval($alumno->situacionLaborales[8]->tipo) == "TF")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 8 && strval($alumno->situacionLaborales[8]->tipo) == "TH")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:36%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 8)
                                        {{strval($alumno->situacionLaborales[8]->trabajo)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:20%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 8)
                                        {{strval($alumno->situacionLaborales[8]->horas_semanales)}}
                                    @endif 
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="celdaNormal3" style="width:7%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 9)
                                        {{strval($alumno->situacionLaborales[9]->anio)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:7%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 9)
                                        {{strval($alumno->situacionLaborales[9]->edad)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 9 && strval($alumno->situacionLaborales[9]->tipo) == "OB")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 9 && strval($alumno->situacionLaborales[9]->tipo) == "EM")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 9 && strval($alumno->situacionLaborales[9]->tipo) == "TI")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 9 && strval($alumno->situacionLaborales[9]->tipo) == "EO")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 9 && strval($alumno->situacionLaborales[9]->tipo) == "TF")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 9 && strval($alumno->situacionLaborales[9]->tipo) == "TH")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:36%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 9)
                                        {{strval($alumno->situacionLaborales[9]->trabajo)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:20%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 9)
                                        {{strval($alumno->situacionLaborales[9]->horas_semanales)}}
                                    @endif 
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="celdaNormal3" style="width:7%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 10)
                                        {{strval($alumno->situacionLaborales[10]->anio)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:7%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 10)
                                        {{strval($alumno->situacionLaborales[10]->edad)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 10 && strval($alumno->situacionLaborales[10]->tipo) == "OB")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 10 && strval($alumno->situacionLaborales[10]->tipo) == "EM")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 10 && strval($alumno->situacionLaborales[10]->tipo) == "TI")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 10 && strval($alumno->situacionLaborales[10]->tipo) == "EO")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 10 && strval($alumno->situacionLaborales[10]->tipo) == "TF")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 10 && strval($alumno->situacionLaborales[10]->tipo) == "TH")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:36%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 10)
                                        {{strval($alumno->situacionLaborales[10]->trabajo)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:20%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 10)
                                        {{strval($alumno->situacionLaborales[10]->horas_semanales)}}
                                    @endif 
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="celdaNormal3" style="width:7%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 11)
                                        {{strval($alumno->situacionLaborales[11]->anio)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:7%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 11)
                                        {{strval($alumno->situacionLaborales[11]->edad)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 11 && strval($alumno->situacionLaborales[11]->tipo) == "OB")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 11 && strval($alumno->situacionLaborales[11]->tipo) == "EM")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 11 && strval($alumno->situacionLaborales[11]->tipo) == "TI")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 11 && strval($alumno->situacionLaborales[11]->tipo) == "EO")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 11 && strval($alumno->situacionLaborales[11]->tipo) == "TF")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 11 && strval($alumno->situacionLaborales[11]->tipo) == "TH")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:36%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 11)
                                        {{strval($alumno->situacionLaborales[11]->trabajo)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:20%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 11)
                                        {{strval($alumno->situacionLaborales[11]->horas_semanales)}}
                                    @endif 
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="celdaNormal3" style="width:7%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 12)
                                        {{strval($alumno->situacionLaborales[12]->anio)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:7%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 12)
                                        {{strval($alumno->situacionLaborales[12]->edad)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 12 && strval($alumno->situacionLaborales[12]->tipo) == "OB")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 12 && strval($alumno->situacionLaborales[12]->tipo) == "EM")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 12 && strval($alumno->situacionLaborales[12]->tipo) == "TI")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 12 && strval($alumno->situacionLaborales[12]->tipo) == "EO")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 12 && strval($alumno->situacionLaborales[12]->tipo) == "TF")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 12 && strval($alumno->situacionLaborales[12]->tipo) == "TH")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:36%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 12)
                                        {{strval($alumno->situacionLaborales[12]->trabajo)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:20%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 12)
                                        {{strval($alumno->situacionLaborales[12]->horas_semanales)}}
                                    @endif 
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="celdaNormal3" style="width:7%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 13)
                                        {{strval($alumno->situacionLaborales[13]->anio)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:7%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 13)
                                        {{strval($alumno->situacionLaborales[13]->edad)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 13 && strval($alumno->situacionLaborales[13]->tipo) == "OB")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 13 && strval($alumno->situacionLaborales[13]->tipo) == "EM")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 13 && strval($alumno->situacionLaborales[13]->tipo) == "TI")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 13 && strval($alumno->situacionLaborales[13]->tipo) == "EO")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 13 && strval($alumno->situacionLaborales[13]->tipo) == "TF")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:5%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 13 && strval($alumno->situacionLaborales[13]->tipo) == "TH")
                                        X
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:36%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 13)
                                        {{strval($alumno->situacionLaborales[13]->trabajo)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal3" style="width:20%;">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->situacionLaborales !== null && count($alumno->situacionLaborales) > 13)
                                        {{strval($alumno->situacionLaborales[13]->horas_semanales)}}
                                    @endif 
                                </div>
                            </td>
                        </tr>
                      
                      
                    </table>
                </td>
            </tr>
          </table>

          <table class="table" style="margin-bottom: 0px; width:100%; margin-top:0.1cm;">
            <tr>
                <td style="width: 50%; font-size:8px; font-weight:normal;">
                    <b>(1)</b> S: Soltero, C: Casado, V: Viudo, D: Divorciado, Cv: Conviviente <br>
                    <b>(2)</b> (Si) si cuenta con partida de nacimiento; (No) no ha sido inscrito en el registro civil. <br>
                    <b>(4)</b> (OB)Obrero, (EM)Empleado, (TI)Trabaj.Independiente, (E/O)Empleador, (TF) Trabaj. Fam. No Remunerado, (TH)Trabaj. Del Hogar
                </td>
                <td style="width: 50%; font-size:8px; font-weight:normal;">
                    <b>(3)</b> Tipo de Discapacidad: (DI) Discapacidad Intelectual, (DA) Discapacidad Auditiva, (DV) Discapacidad Visual, (DM) Discapacidad
                    Motora, (SC)Sordoceguera (OT) Otra <br>
                    <b>*</b> Certificado de Discapacidad emitido por la autoridad competente. Dato válido sólo para fines estadísticos, no obligatorio para matrícula. <br>
                </td>
            </tr>
          </table>

    </div>












    <div style="page-break-after:always;"></div>


    {{-- Pagina 2 --}}

    <div class="box" style="width: 27.5cm;">

        <table class="table" style="margin-bottom: 0px; width:100%; margin-top:0cm;">
            <tr>
                <td colspan="2" class="titles">2. Datos de la Escolaridad del Estudiante</td>
            </tr>
            <tr>
                <td class="titles" style="width: 14%">2.1 Matrícula</td>
                <td class="titles" style="width: 84%"></td>
            </tr>
            <tr>
                <td style="vertical-align: top;">
                    <table class="table" style="margin-bottom: 0px; width:99%;">
                        <tr>
                            <td class="celdaFondoGrisBold2">Datos - Años</td>
                        </tr>
                        <tr>
                            <td class="celdaFondoGrisBold4L">Nombre de la Institución Educativa</td>
                        </tr>
                        <tr>
                            <td class="celdaFondoGrisBold4L">Código Modular</td>
                        </tr>
                        <tr>
                            <td class="celdaFondoGrisBold4L">Departamento</td>
                        </tr>
                        <tr>
                            <td class="celdaFondoGrisBold4L">Provincia</td>
                        </tr>
                        <tr>
                            <td class="celdaFondoGrisBold4L">Distrito</td>
                        </tr>
                        <tr>
                            <td class="celdaFondoGrisBold4L" style="font-size:8px;">Instancia de Gestión Educativa Descentralizada</td>
                        </tr>
                        <tr>
                            <td class="celdaFondoGrisBold4L">Nivel</td>
                        </tr>
                        <tr>
                            <td class="celdaFondoGrisBold4L">Modalidad (1)</td>
                        </tr>
                        <tr>
                            <td class="celdaFondoGrisBold4L">Programa (Sólo EBA) (2)</td>
                        </tr>
                        <tr>
                            <td class="celdaFondoGrisBold4L">Ciclo (Sólo EBA) (3)</td>
                        </tr>
                        <tr>
                            <td class="celdaFondoGrisBold4L">Forma (4)</td>
                        </tr>
                        <tr>
                            <td class="celdaFondoGrisBold4L">Grado</td>
                        </tr>
                        <tr>
                            <td class="celdaFondoGrisBold4L">Sección</td>
                        </tr>
                        <tr>
                            <td class="celdaFondoGrisBold4L">Turno (5)</td>
                        </tr>
                        <tr>
                            <td class="celdaFondoGrisBold4L">Situación final (6)</td>
                        </tr>
                        <tr>
                            <td class="celdaFondoGrisBold4L">Año Lectivo</td>
                        </tr>
                        <tr>
                            <td class="celdaFondoGrisBold4L">Recuperación Pedagógica</td>
                        </tr>
                       
                    </table>
                </td>

                <td style="vertical-align: top;">
                    <table class="table" style="margin-bottom: 0px; width:100%;">
                        <tr>
                            <td class="celdaFondoGrisBold2" style="width: 6.6666666%">
                                @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 0)
                                    {{strval($alumno->matriculas[0]->ciclo->year)}}
                                @else
                                    20___
                                @endif 
                            </td>
                            <td class="celdaFondoGrisBold2" style="width: 6.6666666%">
                                @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 1)
                                    {{strval($alumno->matriculas[1]->ciclo->year)}}
                                @else
                                    20___
                                @endif 
                            </td>
                            <td class="celdaFondoGrisBold2" style="width: 6.6666666%">
                                @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 2)
                                    {{strval($alumno->matriculas[2]->ciclo->year)}}
                                @else
                                    20___
                                @endif 
                            </td>
                            <td class="celdaFondoGrisBold2" style="width: 6.6666666%">
                                @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 3)
                                    {{strval($alumno->matriculas[3]->ciclo->year)}}
                                @else
                                    20___
                                @endif 
                            </td>
                            <td class="celdaFondoGrisBold2" style="width: 6.6666666%">
                                @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 4)
                                    {{strval($alumno->matriculas[4]->ciclo->year)}}
                                @else
                                    20___
                                @endif 
                            </td>
                            <td class="celdaFondoGrisBold2" style="width: 6.6666666%">
                                @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 5)
                                    {{strval($alumno->matriculas[5]->ciclo->year)}}
                                @else
                                    20___
                                @endif 
                            </td>
                            <td class="celdaFondoGrisBold2" style="width: 6.6666666%">
                                @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 6)
                                    {{strval($alumno->matriculas[6]->ciclo->year)}}
                                @else
                                    20___
                                @endif 
                            </td>
                            <td class="celdaFondoGrisBold2" style="width: 6.6666666%">
                                @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 7)
                                    {{strval($alumno->matriculas[7]->ciclo->year)}}
                                @else
                                    20___
                                @endif 
                            </td>
                            <td class="celdaFondoGrisBold2" style="width: 6.6666666%">
                                @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 8)
                                    {{strval($alumno->matriculas[8]->ciclo->year)}}
                                @else
                                    20___
                                @endif 
                            </td>
                            <td class="celdaFondoGrisBold2" style="width: 6.6666666%">
                                @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 9)
                                    {{strval($alumno->matriculas[9]->ciclo->year)}}
                                @else
                                    20___
                                @endif 
                            </td>
                            <td class="celdaFondoGrisBold2" style="width: 6.6666666%">
                                @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 10)
                                    {{strval($alumno->matriculas[10]->ciclo->year)}}
                                @else
                                    20___
                                @endif 
                            </td>
                            <td class="celdaFondoGrisBold2" style="width: 6.6666666%">
                                @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 11)
                                    {{strval($alumno->matriculas[11]->ciclo->year)}}
                                @else
                                    20___
                                @endif 
                            </td>
                            <td class="celdaFondoGrisBold2" style="width: 6.6666666%">
                                @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 12)
                                    {{strval($alumno->matriculas[12]->ciclo->year)}}
                                @else
                                    20___
                                @endif 
                            </td>
                            <td class="celdaFondoGrisBold2" style="width: 6.6666666%">
                                @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 13)
                                    {{strval($alumno->matriculas[13]->ciclo->year)}}
                                @else
                                    20___
                                @endif 
                            </td>
                            <td class="celdaFondoGrisBold2" style="width: 6.6666666%">
                                @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 14)
                                    {{strval($alumno->matriculas[14]->ciclo->year)}}
                                @else
                                    20___
                                @endif 
                            </td>
                        </tr>
                        <tr>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 0)
                                        {{strval($institucionEductiva->nombre)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 1)
                                        {{strval($institucionEductiva->nombre)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 2)
                                        {{strval($institucionEductiva->nombre)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 3)
                                        {{strval($institucionEductiva->nombre)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 4)
                                        {{strval($institucionEductiva->nombre)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 5)
                                        {{strval($institucionEductiva->nombre)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 6)
                                        {{strval($institucionEductiva->nombre)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 7)
                                        {{strval($institucionEductiva->nombre)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 8)
                                        {{strval($institucionEductiva->nombre)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 9)
                                        {{strval($institucionEductiva->nombre)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 10)
                                        {{strval($institucionEductiva->nombre)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 11)
                                        {{strval($institucionEductiva->nombre)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 10)
                                        {{strval($institucionEductiva->nombre)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 13)
                                        {{strval($institucionEductiva->nombre)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 14)
                                        {{strval($institucionEductiva->nombre)}}
                                    @endif 
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 0)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),0,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 0)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),1,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 0)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),2,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 0)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),3,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 0)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),4,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 0)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),5,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 0)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),6,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 1)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),0,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 1)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),1,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 1)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),2,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 1)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),3,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 1)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),4,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 1)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),5,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 1)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),6,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 2)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),0,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 2)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),1,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 2)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),2,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 2)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),3,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 2)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),4,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 2)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),5,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 2)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),6,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 3)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),0,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 3)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),1,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 3)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),2,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 3)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),3,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 3)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),4,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 3)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),5,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 3)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),6,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 4)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),0,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 4)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),1,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 4)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),2,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 4)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),3,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 4)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),4,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 4)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),5,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 4)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),6,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 5)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),0,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 5)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),1,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 5)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),2,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 5)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),3,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 5)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),4,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 5)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),5,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 5)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),6,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 6)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),0,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 6)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),1,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 6)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),2,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 6)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),3,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 6)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),4,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 6)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),5,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 6)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),6,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 7)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),0,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 7)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),1,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 7)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),2,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 7)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),3,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 7)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),4,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 7)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),5,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 7)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),6,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 8)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),0,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 8)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),1,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 8)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),2,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 8)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),3,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 8)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),4,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 8)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),5,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 8)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),6,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 9)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),0,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 9)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),1,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 9)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),2,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 9)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),3,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 9)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),4,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 9)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),5,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 9)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),6,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 10)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),0,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 10)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),1,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 10)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),2,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 10)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),3,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 10)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),4,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 10)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),5,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 10)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),6,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 11)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),0,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 11)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),1,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 11)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),2,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 11)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),3,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 11)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),4,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 11)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),5,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 11)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),6,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 12)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),0,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 12)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),1,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 12)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),2,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 12)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),3,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 12)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),4,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 12)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),5,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 12)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),6,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 13)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),0,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 13)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),1,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 13)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),2,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 13)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),3,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 13)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),4,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 13)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),5,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 13)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),6,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 14)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),0,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 14)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),1,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 14)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),2,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 14)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),3,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 14)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),4,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 14)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),5,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5" style="min-width: 14.28571%;">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 14)
                                                @if($institucionEductiva !== null && $institucionEductiva->codigo_modular !== null)
                                                    {{substr(strval($institucionEductiva->codigo_modular),6,1)}}
                                                @endif
                                            @endif 
                                        </div>
                                    </td>
                                </tr>
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td class="celdaNormal5">
                                <div style="height:11.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 0)
                                        @if($institucionEductiva !== null && $institucionEductiva->departamento !== null)
                                            {{strval($institucionEductiva->departamento)}}
                                        @endif
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 1)
                                        @if($institucionEductiva !== null && $institucionEductiva->departamento !== null)
                                            {{strval($institucionEductiva->departamento)}}
                                        @endif
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 2)
                                        @if($institucionEductiva !== null && $institucionEductiva->departamento !== null)
                                            {{strval($institucionEductiva->departamento)}}
                                        @endif
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 3)
                                        @if($institucionEductiva !== null && $institucionEductiva->departamento !== null)
                                            {{strval($institucionEductiva->departamento)}}
                                        @endif
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 4)
                                        @if($institucionEductiva !== null && $institucionEductiva->departamento !== null)
                                            {{strval($institucionEductiva->departamento)}}
                                        @endif
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 5)
                                        @if($institucionEductiva !== null && $institucionEductiva->departamento !== null)
                                            {{strval($institucionEductiva->departamento)}}
                                        @endif
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 6)
                                        @if($institucionEductiva !== null && $institucionEductiva->departamento !== null)
                                            {{strval($institucionEductiva->departamento)}}
                                        @endif
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 7)
                                        @if($institucionEductiva !== null && $institucionEductiva->departamento !== null)
                                            {{strval($institucionEductiva->departamento)}}
                                        @endif
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 8)
                                        @if($institucionEductiva !== null && $institucionEductiva->departamento !== null)
                                            {{strval($institucionEductiva->departamento)}}
                                        @endif
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 9)
                                        @if($institucionEductiva !== null && $institucionEductiva->departamento !== null)
                                            {{strval($institucionEductiva->departamento)}}
                                        @endif
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 10)
                                        @if($institucionEductiva !== null && $institucionEductiva->departamento !== null)
                                            {{strval($institucionEductiva->departamento)}}
                                        @endif
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 11)
                                        @if($institucionEductiva !== null && $institucionEductiva->departamento !== null)
                                            {{strval($institucionEductiva->departamento)}}
                                        @endif
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 12)
                                        @if($institucionEductiva !== null && $institucionEductiva->departamento !== null)
                                            {{strval($institucionEductiva->departamento)}}
                                        @endif
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 13)
                                        @if($institucionEductiva !== null && $institucionEductiva->departamento !== null)
                                            {{strval($institucionEductiva->departamento)}}
                                        @endif
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 14)
                                        @if($institucionEductiva !== null && $institucionEductiva->departamento !== null)
                                            {{strval($institucionEductiva->departamento)}}
                                        @endif
                                    @endif 
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="celdaNormal5">
                                <div style="height:11.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 0)
                                        @if($institucionEductiva !== null && $institucionEductiva->provincia !== null)
                                            {{strval($institucionEductiva->provincia)}}
                                        @endif
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 1)
                                        @if($institucionEductiva !== null && $institucionEductiva->provincia !== null)
                                            {{strval($institucionEductiva->provincia)}}
                                        @endif
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 2)
                                        @if($institucionEductiva !== null && $institucionEductiva->provincia !== null)
                                            {{strval($institucionEductiva->provincia)}}
                                        @endif
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 3)
                                        @if($institucionEductiva !== null && $institucionEductiva->provincia !== null)
                                            {{strval($institucionEductiva->provincia)}}
                                        @endif
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 4)
                                        @if($institucionEductiva !== null && $institucionEductiva->provincia !== null)
                                            {{strval($institucionEductiva->provincia)}}
                                        @endif
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 5)
                                        @if($institucionEductiva !== null && $institucionEductiva->provincia !== null)
                                            {{strval($institucionEductiva->provincia)}}
                                        @endif
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 6)
                                        @if($institucionEductiva !== null && $institucionEductiva->provincia !== null)
                                            {{strval($institucionEductiva->provincia)}}
                                        @endif
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 7)
                                        @if($institucionEductiva !== null && $institucionEductiva->provincia !== null)
                                            {{strval($institucionEductiva->provincia)}}
                                        @endif
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 8)
                                        @if($institucionEductiva !== null && $institucionEductiva->provincia !== null)
                                            {{strval($institucionEductiva->provincia)}}
                                        @endif
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 9)
                                        @if($institucionEductiva !== null && $institucionEductiva->provincia !== null)
                                            {{strval($institucionEductiva->provincia)}}
                                        @endif
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 10)
                                        @if($institucionEductiva !== null && $institucionEductiva->provincia !== null)
                                            {{strval($institucionEductiva->provincia)}}
                                        @endif
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 11)
                                        @if($institucionEductiva !== null && $institucionEductiva->provincia !== null)
                                            {{strval($institucionEductiva->provincia)}}
                                        @endif
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 12)
                                        @if($institucionEductiva !== null && $institucionEductiva->provincia !== null)
                                            {{strval($institucionEductiva->provincia)}}
                                        @endif
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 13)
                                        @if($institucionEductiva !== null && $institucionEductiva->provincia !== null)
                                            {{strval($institucionEductiva->provincia)}}
                                        @endif
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 14)
                                        @if($institucionEductiva !== null && $institucionEductiva->provincia !== null)
                                            {{strval($institucionEductiva->provincia)}}
                                        @endif
                                    @endif 
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="celdaNormal5">
                                <div style="height:11.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 0)
                                        @if($institucionEductiva !== null && $institucionEductiva->distrito !== null)
                                            {{strval($institucionEductiva->distrito)}}
                                        @endif
                                    @endif    
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 1)
                                        @if($institucionEductiva !== null && $institucionEductiva->distrito !== null)
                                            {{strval($institucionEductiva->distrito)}}
                                        @endif
                                    @endif  
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 2)
                                        @if($institucionEductiva !== null && $institucionEductiva->distrito !== null)
                                            {{strval($institucionEductiva->distrito)}}
                                        @endif
                                    @endif  
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 3)
                                        @if($institucionEductiva !== null && $institucionEductiva->distrito !== null)
                                            {{strval($institucionEductiva->distrito)}}
                                        @endif
                                    @endif  
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 4)
                                        @if($institucionEductiva !== null && $institucionEductiva->distrito !== null)
                                            {{strval($institucionEductiva->distrito)}}
                                        @endif
                                    @endif  
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 5)
                                        @if($institucionEductiva !== null && $institucionEductiva->distrito !== null)
                                            {{strval($institucionEductiva->distrito)}}
                                        @endif
                                    @endif  
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 6)
                                        @if($institucionEductiva !== null && $institucionEductiva->distrito !== null)
                                            {{strval($institucionEductiva->distrito)}}
                                        @endif
                                    @endif  
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 7)
                                        @if($institucionEductiva !== null && $institucionEductiva->distrito !== null)
                                            {{strval($institucionEductiva->distrito)}}
                                        @endif
                                    @endif  
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 8)
                                        @if($institucionEductiva !== null && $institucionEductiva->distrito !== null)
                                            {{strval($institucionEductiva->distrito)}}
                                        @endif
                                    @endif  
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 9)
                                        @if($institucionEductiva !== null && $institucionEductiva->distrito !== null)
                                            {{strval($institucionEductiva->distrito)}}
                                        @endif
                                    @endif  
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 10)
                                        @if($institucionEductiva !== null && $institucionEductiva->distrito !== null)
                                            {{strval($institucionEductiva->distrito)}}
                                        @endif
                                    @endif  
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 11)
                                        @if($institucionEductiva !== null && $institucionEductiva->distrito !== null)
                                            {{strval($institucionEductiva->distrito)}}
                                        @endif
                                    @endif  
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 12)
                                        @if($institucionEductiva !== null && $institucionEductiva->distrito !== null)
                                            {{strval($institucionEductiva->distrito)}}
                                        @endif
                                    @endif  
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 13)
                                        @if($institucionEductiva !== null && $institucionEductiva->distrito !== null)
                                            {{strval($institucionEductiva->distrito)}}
                                        @endif
                                    @endif  
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 14)
                                        @if($institucionEductiva !== null && $institucionEductiva->distrito !== null)
                                            {{strval($institucionEductiva->distrito)}}
                                        @endif
                                    @endif  
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="celdaNormal5">
                                <div style="height:18.29px; overflow:hidden; font-size: 8px;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 0)
                                        @if($institucionEductiva !== null && $institucionEductiva->nombre_ugel !== null)
                                            {{strval($institucionEductiva->nombre_ugel)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:18.29px; overflow:hidden; font-size: 8px;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 1)
                                        @if($institucionEductiva !== null && $institucionEductiva->nombre_ugel !== null)
                                            {{strval($institucionEductiva->nombre_ugel)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:18.29px; overflow:hidden; font-size: 8px;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 2)
                                        @if($institucionEductiva !== null && $institucionEductiva->nombre_ugel !== null)
                                            {{strval($institucionEductiva->nombre_ugel)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:18.29px; overflow:hidden; font-size: 8px;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 3)
                                        @if($institucionEductiva !== null && $institucionEductiva->nombre_ugel !== null)
                                            {{strval($institucionEductiva->nombre_ugel)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:18.29px; overflow:hidden; font-size: 8px;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 4)
                                        @if($institucionEductiva !== null && $institucionEductiva->nombre_ugel !== null)
                                            {{strval($institucionEductiva->nombre_ugel)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:18.29px; overflow:hidden; font-size: 8px;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 5)
                                        @if($institucionEductiva !== null && $institucionEductiva->nombre_ugel !== null)
                                            {{strval($institucionEductiva->nombre_ugel)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:18.29px; overflow:hidden; font-size: 8px;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 6)
                                        @if($institucionEductiva !== null && $institucionEductiva->nombre_ugel !== null)
                                            {{strval($institucionEductiva->nombre_ugel)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:18.29px; overflow:hidden; font-size: 8px;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 7)
                                        @if($institucionEductiva !== null && $institucionEductiva->nombre_ugel !== null)
                                            {{strval($institucionEductiva->nombre_ugel)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:18.29px; overflow:hidden; font-size: 8px;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 8)
                                        @if($institucionEductiva !== null && $institucionEductiva->nombre_ugel !== null)
                                            {{strval($institucionEductiva->nombre_ugel)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:18.29px; overflow:hidden; font-size: 8px;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 9)
                                        @if($institucionEductiva !== null && $institucionEductiva->nombre_ugel !== null)
                                            {{strval($institucionEductiva->nombre_ugel)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:18.29px; overflow:hidden; font-size: 8px;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 10)
                                        @if($institucionEductiva !== null && $institucionEductiva->nombre_ugel !== null)
                                            {{strval($institucionEductiva->nombre_ugel)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:18.29px; overflow:hidden; font-size: 8px;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 11)
                                        @if($institucionEductiva !== null && $institucionEductiva->nombre_ugel !== null)
                                            {{strval($institucionEductiva->nombre_ugel)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:18.29px; overflow:hidden; font-size: 8px;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 12)
                                        @if($institucionEductiva !== null && $institucionEductiva->nombre_ugel !== null)
                                            {{strval($institucionEductiva->nombre_ugel)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:18.29px; overflow:hidden; font-size: 8px;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 13)
                                        @if($institucionEductiva !== null && $institucionEductiva->nombre_ugel !== null)
                                            {{strval($institucionEductiva->nombre_ugel)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:18.29px; overflow:hidden; font-size: 8px;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 14)
                                        @if($institucionEductiva !== null && $institucionEductiva->nombre_ugel !== null)
                                            {{strval($institucionEductiva->nombre_ugel)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 0 && $alumno->matriculas[0]->cicloNivel !== null) 
                                        {{strval($alumno->matriculas[0]->cicloNivel->nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 1 && $alumno->matriculas[1]->cicloNivel !== null) 
                                        {{strval($alumno->matriculas[1]->cicloNivel->nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 2 && $alumno->matriculas[2]->cicloNivel !== null) 
                                        {{strval($alumno->matriculas[2]->cicloNivel->nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 3 && $alumno->matriculas[3]->cicloNivel !== null) 
                                        {{strval($alumno->matriculas[3]->cicloNivel->nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 4 && $alumno->matriculas[4]->cicloNivel !== null) 
                                        {{strval($alumno->matriculas[4]->cicloNivel->nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 5 && $alumno->matriculas[5]->cicloNivel !== null) 
                                        {{strval($alumno->matriculas[5]->cicloNivel->nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 6 && $alumno->matriculas[6]->cicloNivel !== null) 
                                        {{strval($alumno->matriculas[6]->cicloNivel->nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 7 && $alumno->matriculas[7]->cicloNivel !== null) 
                                        {{strval($alumno->matriculas[7]->cicloNivel->nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 8 && $alumno->matriculas[8]->cicloNivel !== null) 
                                        {{strval($alumno->matriculas[8]->cicloNivel->nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 9 && $alumno->matriculas[9]->cicloNivel !== null) 
                                        {{strval($alumno->matriculas[9]->cicloNivel->nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 10 && $alumno->matriculas[10]->cicloNivel !== null) 
                                        {{strval($alumno->matriculas[10]->cicloNivel->nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 11 && $alumno->matriculas[11]->cicloNivel !== null) 
                                        {{strval($alumno->matriculas[11]->cicloNivel->nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 12 && $alumno->matriculas[12]->cicloNivel !== null) 
                                        {{strval($alumno->matriculas[12]->cicloNivel->nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 13 && $alumno->matriculas[13]->cicloNivel !== null) 
                                        {{strval($alumno->matriculas[13]->cicloNivel->nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 14 && $alumno->matriculas[14]->cicloNivel !== null) 
                                        {{strval($alumno->matriculas[14]->cicloNivel->nombre)}}
                                    @endif
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="celdaNormal5">
                                <div style="height:11.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 0)
                                        @if($institucionEductiva !== null && $institucionEductiva->modalidad_siglas !== null)
                                            {{strval($institucionEductiva->modalidad_siglas)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 1)
                                        @if($institucionEductiva !== null && $institucionEductiva->modalidad_siglas !== null)
                                            {{strval($institucionEductiva->modalidad_siglas)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 2)
                                        @if($institucionEductiva !== null && $institucionEductiva->modalidad_siglas !== null)
                                            {{strval($institucionEductiva->modalidad_siglas)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 3)
                                        @if($institucionEductiva !== null && $institucionEductiva->modalidad_siglas !== null)
                                            {{strval($institucionEductiva->modalidad_siglas)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 4)
                                        @if($institucionEductiva !== null && $institucionEductiva->modalidad_siglas !== null)
                                            {{strval($institucionEductiva->modalidad_siglas)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 5)
                                        @if($institucionEductiva !== null && $institucionEductiva->modalidad_siglas !== null)
                                            {{strval($institucionEductiva->modalidad_siglas)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 6)
                                        @if($institucionEductiva !== null && $institucionEductiva->modalidad_siglas !== null)
                                            {{strval($institucionEductiva->modalidad_siglas)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 7)
                                        @if($institucionEductiva !== null && $institucionEductiva->modalidad_siglas !== null)
                                            {{strval($institucionEductiva->modalidad_siglas)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 8)
                                        @if($institucionEductiva !== null && $institucionEductiva->modalidad_siglas !== null)
                                            {{strval($institucionEductiva->modalidad_siglas)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 9)
                                        @if($institucionEductiva !== null && $institucionEductiva->modalidad_siglas !== null)
                                            {{strval($institucionEductiva->modalidad_siglas)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 10)
                                        @if($institucionEductiva !== null && $institucionEductiva->modalidad_siglas !== null)
                                            {{strval($institucionEductiva->modalidad_siglas)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 11)
                                        @if($institucionEductiva !== null && $institucionEductiva->modalidad_siglas !== null)
                                            {{strval($institucionEductiva->modalidad_siglas)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 12)
                                        @if($institucionEductiva !== null && $institucionEductiva->modalidad_siglas !== null)
                                            {{strval($institucionEductiva->modalidad_siglas)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 13)
                                        @if($institucionEductiva !== null && $institucionEductiva->modalidad_siglas !== null)
                                            {{strval($institucionEductiva->modalidad_siglas)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 14)
                                        @if($institucionEductiva !== null && $institucionEductiva->modalidad_siglas !== null)
                                            {{strval($institucionEductiva->modalidad_siglas)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="celdaNormal5">
                                <div style="height:11.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 0)
                                        @if($institucionEductiva !== null && $institucionEductiva->programa !== null)
                                            {{strval($institucionEductiva->programa)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 1)
                                        @if($institucionEductiva !== null && $institucionEductiva->programa !== null)
                                            {{strval($institucionEductiva->programa)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 2)
                                        @if($institucionEductiva !== null && $institucionEductiva->programa !== null)
                                            {{strval($institucionEductiva->programa)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 3)
                                        @if($institucionEductiva !== null && $institucionEductiva->programa !== null)
                                            {{strval($institucionEductiva->programa)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 4)
                                        @if($institucionEductiva !== null && $institucionEductiva->programa !== null)
                                            {{strval($institucionEductiva->programa)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 5)
                                        @if($institucionEductiva !== null && $institucionEductiva->programa !== null)
                                            {{strval($institucionEductiva->programa)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 6)
                                        @if($institucionEductiva !== null && $institucionEductiva->programa !== null)
                                            {{strval($institucionEductiva->programa)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 7)
                                        @if($institucionEductiva !== null && $institucionEductiva->programa !== null)
                                            {{strval($institucionEductiva->programa)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 8)
                                        @if($institucionEductiva !== null && $institucionEductiva->programa !== null)
                                            {{strval($institucionEductiva->programa)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 9)
                                        @if($institucionEductiva !== null && $institucionEductiva->programa !== null)
                                            {{strval($institucionEductiva->programa)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 10)
                                        @if($institucionEductiva !== null && $institucionEductiva->programa !== null)
                                            {{strval($institucionEductiva->programa)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 11)
                                        @if($institucionEductiva !== null && $institucionEductiva->programa !== null)
                                            {{strval($institucionEductiva->programa)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 12)
                                        @if($institucionEductiva !== null && $institucionEductiva->programa !== null)
                                            {{strval($institucionEductiva->programa)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 13)
                                        @if($institucionEductiva !== null && $institucionEductiva->programa !== null)
                                            {{strval($institucionEductiva->programa)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 14)
                                        @if($institucionEductiva !== null && $institucionEductiva->programa !== null)
                                            {{strval($institucionEductiva->programa)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="celdaNormal5">
                                <div style="height:11.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 0)
                                        @if($institucionEductiva !== null && $institucionEductiva->programa !== null)
                                            {{strval($institucionEductiva->programa)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 1)
                                        @if($institucionEductiva !== null && $institucionEductiva->programa !== null)
                                            {{strval($institucionEductiva->programa)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 2)
                                        @if($institucionEductiva !== null && $institucionEductiva->programa !== null)
                                            {{strval($institucionEductiva->programa)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 3)
                                        @if($institucionEductiva !== null && $institucionEductiva->programa !== null)
                                            {{strval($institucionEductiva->programa)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 4)
                                        @if($institucionEductiva !== null && $institucionEductiva->programa !== null)
                                            {{strval($institucionEductiva->programa)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 5)
                                        @if($institucionEductiva !== null && $institucionEductiva->programa !== null)
                                            {{strval($institucionEductiva->programa)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 6)
                                        @if($institucionEductiva !== null && $institucionEductiva->programa !== null)
                                            {{strval($institucionEductiva->programa)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 7)
                                        @if($institucionEductiva !== null && $institucionEductiva->programa !== null)
                                            {{strval($institucionEductiva->programa)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 8)
                                        @if($institucionEductiva !== null && $institucionEductiva->programa !== null)
                                            {{strval($institucionEductiva->programa)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 9)
                                        @if($institucionEductiva !== null && $institucionEductiva->programa !== null)
                                            {{strval($institucionEductiva->programa)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 10)
                                        @if($institucionEductiva !== null && $institucionEductiva->programa !== null)
                                            {{strval($institucionEductiva->programa)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 11)
                                        @if($institucionEductiva !== null && $institucionEductiva->programa !== null)
                                            {{strval($institucionEductiva->programa)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 12)
                                        @if($institucionEductiva !== null && $institucionEductiva->programa !== null)
                                            {{strval($institucionEductiva->programa)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 13)
                                        @if($institucionEductiva !== null && $institucionEductiva->programa !== null)
                                            {{strval($institucionEductiva->programa)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 14)
                                        @if($institucionEductiva !== null && $institucionEductiva->programa !== null)
                                            {{strval($institucionEductiva->programa)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 0)
                                        @if($institucionEductiva !== null && $institucionEductiva->forma !== null)
                                            {{strval($institucionEductiva->forma)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 1)
                                        @if($institucionEductiva !== null && $institucionEductiva->forma !== null)
                                            {{strval($institucionEductiva->forma)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 2)
                                        @if($institucionEductiva !== null && $institucionEductiva->forma !== null)
                                            {{strval($institucionEductiva->forma)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 3)
                                        @if($institucionEductiva !== null && $institucionEductiva->forma !== null)
                                            {{strval($institucionEductiva->forma)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 4)
                                        @if($institucionEductiva !== null && $institucionEductiva->forma !== null)
                                            {{strval($institucionEductiva->forma)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 5)
                                        @if($institucionEductiva !== null && $institucionEductiva->forma !== null)
                                            {{strval($institucionEductiva->forma)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 6)
                                        @if($institucionEductiva !== null && $institucionEductiva->forma !== null)
                                            {{strval($institucionEductiva->forma)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 7)
                                        @if($institucionEductiva !== null && $institucionEductiva->forma !== null)
                                            {{strval($institucionEductiva->forma)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 8)
                                        @if($institucionEductiva !== null && $institucionEductiva->forma !== null)
                                            {{strval($institucionEductiva->forma)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 9)
                                        @if($institucionEductiva !== null && $institucionEductiva->forma !== null)
                                            {{strval($institucionEductiva->forma)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 10)
                                        @if($institucionEductiva !== null && $institucionEductiva->forma !== null)
                                            {{strval($institucionEductiva->forma)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 11)
                                        @if($institucionEductiva !== null && $institucionEductiva->forma !== null)
                                            {{strval($institucionEductiva->forma)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 12)
                                        @if($institucionEductiva !== null && $institucionEductiva->forma !== null)
                                            {{strval($institucionEductiva->forma)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 13)
                                        @if($institucionEductiva !== null && $institucionEductiva->forma !== null)
                                            {{strval($institucionEductiva->forma)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 14)
                                        @if($institucionEductiva !== null && $institucionEductiva->forma !== null)
                                            {{strval($institucionEductiva->forma)}}
                                        @endif
                                    @endif     
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 0 && $alumno->matriculas[0]->cicloGrado !== null) 
                                        {{strval($alumno->matriculas[0]->cicloGrado->nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 1 && $alumno->matriculas[1]->cicloGrado !== null) 
                                        {{strval($alumno->matriculas[1]->cicloGrado->nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 2 && $alumno->matriculas[2]->cicloGrado !== null) 
                                        {{strval($alumno->matriculas[2]->cicloGrado->nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 3 && $alumno->matriculas[3]->cicloGrado !== null) 
                                        {{strval($alumno->matriculas[3]->cicloGrado->nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 4 && $alumno->matriculas[4]->cicloGrado !== null) 
                                        {{strval($alumno->matriculas[4]->cicloGrado->nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 5 && $alumno->matriculas[5]->cicloGrado !== null) 
                                        {{strval($alumno->matriculas[5]->cicloGrado->nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 6 && $alumno->matriculas[6]->cicloGrado !== null) 
                                        {{strval($alumno->matriculas[6]->cicloGrado->nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 7 && $alumno->matriculas[7]->cicloGrado !== null) 
                                        {{strval($alumno->matriculas[7]->cicloGrado->nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 8 && $alumno->matriculas[8]->cicloGrado !== null) 
                                        {{strval($alumno->matriculas[8]->cicloGrado->nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 9 && $alumno->matriculas[9]->cicloGrado !== null) 
                                        {{strval($alumno->matriculas[9]->cicloGrado->nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 10 && $alumno->matriculas[10]->cicloGrado !== null) 
                                        {{strval($alumno->matriculas[10]->cicloGrado->nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 11 && $alumno->matriculas[11]->cicloGrado !== null) 
                                        {{strval($alumno->matriculas[11]->cicloGrado->nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 12 && $alumno->matriculas[12]->cicloGrado !== null) 
                                        {{strval($alumno->matriculas[12]->cicloGrado->nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 13 && $alumno->matriculas[13]->cicloGrado !== null) 
                                        {{strval($alumno->matriculas[13]->cicloGrado->nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 14 && $alumno->matriculas[14]->cicloGrado !== null) 
                                        {{strval($alumno->matriculas[14]->cicloGrado->nombre)}}
                                    @endif
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 0 && $alumno->matriculas[0]->cicloSeccion !== null) 
                                        {{strval($alumno->matriculas[0]->cicloSeccion->nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 1 && $alumno->matriculas[1]->cicloSeccion !== null) 
                                        {{strval($alumno->matriculas[1]->cicloSeccion->nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 2 && $alumno->matriculas[2]->cicloSeccion !== null) 
                                        {{strval($alumno->matriculas[2]->cicloSeccion->nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 3 && $alumno->matriculas[3]->cicloSeccion !== null) 
                                        {{strval($alumno->matriculas[3]->cicloSeccion->nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 4 && $alumno->matriculas[4]->cicloSeccion !== null) 
                                        {{strval($alumno->matriculas[4]->cicloSeccion->nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 5 && $alumno->matriculas[5]->cicloSeccion !== null) 
                                        {{strval($alumno->matriculas[5]->cicloSeccion->nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 6 && $alumno->matriculas[6]->cicloSeccion !== null) 
                                        {{strval($alumno->matriculas[6]->cicloSeccion->nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 7 && $alumno->matriculas[7]->cicloSeccion !== null) 
                                        {{strval($alumno->matriculas[7]->cicloSeccion->nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 8 && $alumno->matriculas[8]->cicloSeccion !== null) 
                                        {{strval($alumno->matriculas[8]->cicloSeccion->nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 9 && $alumno->matriculas[9]->cicloSeccion !== null) 
                                        {{strval($alumno->matriculas[9]->cicloSeccion->nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 10 && $alumno->matriculas[10]->cicloSeccion !== null) 
                                        {{strval($alumno->matriculas[10]->cicloSeccion->nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 11 && $alumno->matriculas[11]->cicloSeccion !== null) 
                                        {{strval($alumno->matriculas[11]->cicloSeccion->nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 12 && $alumno->matriculas[12]->cicloSeccion !== null) 
                                        {{strval($alumno->matriculas[12]->cicloSeccion->nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 13 && $alumno->matriculas[13]->cicloSeccion !== null) 
                                        {{strval($alumno->matriculas[13]->cicloSeccion->nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 14 && $alumno->matriculas[14]->cicloSeccion !== null) 
                                        {{strval($alumno->matriculas[14]->cicloSeccion->nombre)}}
                                    @endif
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 0 && $alumno->matriculas[0]->turno !== null) 
                                        {{strval($alumno->matriculas[0]->turno->nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 1 && $alumno->matriculas[1]->turno !== null) 
                                        {{strval($alumno->matriculas[1]->turno->nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 2 && $alumno->matriculas[2]->turno !== null) 
                                        {{strval($alumno->matriculas[2]->turno->nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 3 && $alumno->matriculas[3]->turno !== null) 
                                        {{strval($alumno->matriculas[3]->turno->nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 4 && $alumno->matriculas[4]->turno !== null) 
                                        {{strval($alumno->matriculas[4]->turno->nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 5 && $alumno->matriculas[5]->turno !== null) 
                                        {{strval($alumno->matriculas[5]->turno->nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 6 && $alumno->matriculas[6]->turno !== null) 
                                        {{strval($alumno->matriculas[6]->turno->nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 7 && $alumno->matriculas[7]->turno !== null) 
                                        {{strval($alumno->matriculas[7]->turno->nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 8 && $alumno->matriculas[8]->turno !== null) 
                                        {{strval($alumno->matriculas[8]->turno->nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 9 && $alumno->matriculas[9]->turno !== null) 
                                        {{strval($alumno->matriculas[9]->turno->nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 10 && $alumno->matriculas[10]->turno !== null) 
                                        {{strval($alumno->matriculas[10]->turno->nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 11 && $alumno->matriculas[11]->turno !== null) 
                                        {{strval($alumno->matriculas[11]->turno->nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 12 && $alumno->matriculas[12]->turno !== null) 
                                        {{strval($alumno->matriculas[12]->turno->nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 13 && $alumno->matriculas[13]->turno !== null) 
                                        {{strval($alumno->matriculas[13]->turno->nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 14 && $alumno->matriculas[14]->turno !== null) 
                                        {{strval($alumno->matriculas[14]->turno->nombre)}}
                                    @endif
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                    <tr>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 0 && $alumno->matriculas[0]->sigla_situacion_final !== null && strval($alumno->matriculas[0]->sigla_situacion_final) === "A")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> A       
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> A </div> 
                                            @endif 
                                        </td>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 0 && $alumno->matriculas[0]->sigla_situacion_final !== null && strval($alumno->matriculas[0]->sigla_situacion_final) === "RR")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> RR       
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> RR </div> 
                                            @endif 
                                        </td>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 0 && $alumno->matriculas[0]->sigla_situacion_final !== null && strval($alumno->matriculas[0]->sigla_situacion_final) === "D")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> D       
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> D </div> 
                                            @endif 
                                        </td>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 0 && $alumno->matriculas[0]->sigla_situacion_final !== null && strval($alumno->matriculas[0]->sigla_situacion_final) === "R")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> R       
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> R </div> 
                                            @endif 
                                        </td>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 0 && $alumno->matriculas[0]->sigla_situacion_final !== null && strval($alumno->matriculas[0]->sigla_situacion_final) === "P")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> P
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> P </div> 
                                            @endif 
                                        </td>
                                    </tr>
                                    </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                    <tr>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 1 && $alumno->matriculas[1]->sigla_situacion_final !== null && strval($alumno->matriculas[1]->sigla_situacion_final) === "A")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> A       
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> A </div> 
                                            @endif 
                                        </td>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 1 && $alumno->matriculas[1]->sigla_situacion_final !== null && strval($alumno->matriculas[1]->sigla_situacion_final) === "RR")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> RR       
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> RR </div> 
                                            @endif 
                                        </td>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 1 && $alumno->matriculas[1]->sigla_situacion_final !== null && strval($alumno->matriculas[1]->sigla_situacion_final) === "D")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> D       
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> D </div> 
                                            @endif 
                                        </td>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 1 && $alumno->matriculas[1]->sigla_situacion_final !== null && strval($alumno->matriculas[1]->sigla_situacion_final) === "R")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> R       
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> R </div> 
                                            @endif 
                                        </td>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 1 && $alumno->matriculas[1]->sigla_situacion_final !== null && strval($alumno->matriculas[1]->sigla_situacion_final) === "P")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> P
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> P </div> 
                                            @endif 
                                        </td>
                                    </tr>
                                    </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                    <tr>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 2 && $alumno->matriculas[2]->sigla_situacion_final !== null && strval($alumno->matriculas[2]->sigla_situacion_final) === "A")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> A       
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> A </div> 
                                            @endif 
                                        </td>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 2 && $alumno->matriculas[2]->sigla_situacion_final !== null && strval($alumno->matriculas[2]->sigla_situacion_final) === "RR")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> RR       
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> RR </div> 
                                            @endif 
                                        </td>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 2 && $alumno->matriculas[2]->sigla_situacion_final !== null && strval($alumno->matriculas[2]->sigla_situacion_final) === "D")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> D       
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> D </div> 
                                            @endif 
                                        </td>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 2 && $alumno->matriculas[2]->sigla_situacion_final !== null && strval($alumno->matriculas[2]->sigla_situacion_final) === "R")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> R       
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> R </div> 
                                            @endif 
                                        </td>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 2 && $alumno->matriculas[2]->sigla_situacion_final !== null && strval($alumno->matriculas[2]->sigla_situacion_final) === "P")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> P
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> P </div> 
                                            @endif 
                                        </td>
                                    </tr>
                                    </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                    <tr>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 3 && $alumno->matriculas[3]->sigla_situacion_final !== null && strval($alumno->matriculas[3]->sigla_situacion_final) === "A")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> A       
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> A </div> 
                                            @endif 
                                        </td>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 3 && $alumno->matriculas[3]->sigla_situacion_final !== null && strval($alumno->matriculas[3]->sigla_situacion_final) === "RR")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> RR       
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> RR </div> 
                                            @endif 
                                        </td>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 3 && $alumno->matriculas[3]->sigla_situacion_final !== null && strval($alumno->matriculas[3]->sigla_situacion_final) === "D")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> D       
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> D </div> 
                                            @endif 
                                        </td>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 3 && $alumno->matriculas[3]->sigla_situacion_final !== null && strval($alumno->matriculas[3]->sigla_situacion_final) === "R")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> R       
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> R </div> 
                                            @endif 
                                        </td>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 3 && $alumno->matriculas[3]->sigla_situacion_final !== null && strval($alumno->matriculas[3]->sigla_situacion_final) === "P")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> P
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> P </div> 
                                            @endif 
                                        </td>
                                    </tr>
                                    </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                    <tr>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 4 && $alumno->matriculas[4]->sigla_situacion_final !== null && strval($alumno->matriculas[4]->sigla_situacion_final) === "A")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> A       
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> A </div> 
                                            @endif 
                                        </td>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 4 && $alumno->matriculas[4]->sigla_situacion_final !== null && strval($alumno->matriculas[4]->sigla_situacion_final) === "RR")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> RR       
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> RR </div> 
                                            @endif 
                                        </td>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 4 && $alumno->matriculas[4]->sigla_situacion_final !== null && strval($alumno->matriculas[4]->sigla_situacion_final) === "D")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> D       
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> D </div> 
                                            @endif 
                                        </td>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 4 && $alumno->matriculas[4]->sigla_situacion_final !== null && strval($alumno->matriculas[4]->sigla_situacion_final) === "R")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> R       
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> R </div> 
                                            @endif 
                                        </td>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 4 && $alumno->matriculas[4]->sigla_situacion_final !== null && strval($alumno->matriculas[4]->sigla_situacion_final) === "P")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> P
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> P </div> 
                                            @endif 
                                        </td>
                                    </tr>
                                    </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                    <tr>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 5 && $alumno->matriculas[5]->sigla_situacion_final !== null && strval($alumno->matriculas[5]->sigla_situacion_final) === "A")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> A       
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> A </div> 
                                            @endif 
                                        </td>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 5 && $alumno->matriculas[5]->sigla_situacion_final !== null && strval($alumno->matriculas[5]->sigla_situacion_final) === "RR")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> RR       
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> RR </div> 
                                            @endif 
                                        </td>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 5 && $alumno->matriculas[5]->sigla_situacion_final !== null && strval($alumno->matriculas[5]->sigla_situacion_final) === "D")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> D       
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> D </div> 
                                            @endif 
                                        </td>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 5 && $alumno->matriculas[5]->sigla_situacion_final !== null && strval($alumno->matriculas[5]->sigla_situacion_final) === "R")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> R       
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> R </div> 
                                            @endif 
                                        </td>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 5 && $alumno->matriculas[5]->sigla_situacion_final !== null && strval($alumno->matriculas[5]->sigla_situacion_final) === "P")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> P
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> P </div> 
                                            @endif 
                                        </td>
                                    </tr>
                                    </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                    <tr>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 6 && $alumno->matriculas[6]->sigla_situacion_final !== null && strval($alumno->matriculas[6]->sigla_situacion_final) === "A")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> A       
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> A </div> 
                                            @endif 
                                        </td>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 6 && $alumno->matriculas[6]->sigla_situacion_final !== null && strval($alumno->matriculas[6]->sigla_situacion_final) === "RR")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> RR       
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> RR </div> 
                                            @endif 
                                        </td>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 6 && $alumno->matriculas[6]->sigla_situacion_final !== null && strval($alumno->matriculas[6]->sigla_situacion_final) === "D")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> D       
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> D </div> 
                                            @endif 
                                        </td>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 6 && $alumno->matriculas[6]->sigla_situacion_final !== null && strval($alumno->matriculas[6]->sigla_situacion_final) === "R")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> R       
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> R </div> 
                                            @endif 
                                        </td>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 6 && $alumno->matriculas[6]->sigla_situacion_final !== null && strval($alumno->matriculas[6]->sigla_situacion_final) === "P")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> P
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> P </div> 
                                            @endif 
                                        </td>
                                    </tr>
                                    </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                    <tr>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 7 && $alumno->matriculas[7]->sigla_situacion_final !== null && strval($alumno->matriculas[7]->sigla_situacion_final) === "A")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> A       
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> A </div> 
                                            @endif 
                                        </td>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 7 && $alumno->matriculas[7]->sigla_situacion_final !== null && strval($alumno->matriculas[7]->sigla_situacion_final) === "RR")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> RR       
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> RR </div> 
                                            @endif 
                                        </td>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 7 && $alumno->matriculas[7]->sigla_situacion_final !== null && strval($alumno->matriculas[7]->sigla_situacion_final) === "D")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> D       
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> D </div> 
                                            @endif 
                                        </td>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 7 && $alumno->matriculas[7]->sigla_situacion_final !== null && strval($alumno->matriculas[7]->sigla_situacion_final) === "R")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> R       
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> R </div> 
                                            @endif 
                                        </td>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 7 && $alumno->matriculas[7]->sigla_situacion_final !== null && strval($alumno->matriculas[7]->sigla_situacion_final) === "P")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> P
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> P </div> 
                                            @endif 
                                        </td>
                                    </tr>
                                    </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                    <tr>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 8 && $alumno->matriculas[8]->sigla_situacion_final !== null && strval($alumno->matriculas[8]->sigla_situacion_final) === "A")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> A       
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> A </div> 
                                            @endif 
                                        </td>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 8 && $alumno->matriculas[8]->sigla_situacion_final !== null && strval($alumno->matriculas[8]->sigla_situacion_final) === "RR")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> RR       
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> RR </div> 
                                            @endif 
                                        </td>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 8 && $alumno->matriculas[8]->sigla_situacion_final !== null && strval($alumno->matriculas[8]->sigla_situacion_final) === "D")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> D       
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> D </div> 
                                            @endif 
                                        </td>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 8 && $alumno->matriculas[8]->sigla_situacion_final !== null && strval($alumno->matriculas[8]->sigla_situacion_final) === "R")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> R       
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> R </div> 
                                            @endif 
                                        </td>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 8 && $alumno->matriculas[8]->sigla_situacion_final !== null && strval($alumno->matriculas[8]->sigla_situacion_final) === "P")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> P
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> P </div> 
                                            @endif 
                                        </td>
                                    </tr>
                                    </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                    <tr>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 9 && $alumno->matriculas[9]->sigla_situacion_final !== null && strval($alumno->matriculas[9]->sigla_situacion_final) === "A")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> A       
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> A </div> 
                                            @endif 
                                        </td>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 9 && $alumno->matriculas[9]->sigla_situacion_final !== null && strval($alumno->matriculas[9]->sigla_situacion_final) === "RR")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> RR       
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> RR </div> 
                                            @endif 
                                        </td>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 9 && $alumno->matriculas[9]->sigla_situacion_final !== null && strval($alumno->matriculas[9]->sigla_situacion_final) === "D")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> D       
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> D </div> 
                                            @endif 
                                        </td>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 9 && $alumno->matriculas[9]->sigla_situacion_final !== null && strval($alumno->matriculas[9]->sigla_situacion_final) === "R")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> R       
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> R </div> 
                                            @endif 
                                        </td>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 9 && $alumno->matriculas[9]->sigla_situacion_final !== null && strval($alumno->matriculas[9]->sigla_situacion_final) === "P")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> P
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> P </div> 
                                            @endif 
                                        </td>
                                    </tr>
                                    </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                    <tr>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 10 && $alumno->matriculas[10]->sigla_situacion_final !== null && strval($alumno->matriculas[10]->sigla_situacion_final) === "A")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> A       
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> A </div> 
                                            @endif 
                                        </td>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 10 && $alumno->matriculas[10]->sigla_situacion_final !== null && strval($alumno->matriculas[10]->sigla_situacion_final) === "RR")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> RR       
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> RR </div> 
                                            @endif 
                                        </td>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 10 && $alumno->matriculas[10]->sigla_situacion_final !== null && strval($alumno->matriculas[10]->sigla_situacion_final) === "D")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> D       
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> D </div> 
                                            @endif 
                                        </td>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 10 && $alumno->matriculas[10]->sigla_situacion_final !== null && strval($alumno->matriculas[10]->sigla_situacion_final) === "R")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> R       
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> R </div> 
                                            @endif 
                                        </td>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 10 && $alumno->matriculas[10]->sigla_situacion_final !== null && strval($alumno->matriculas[10]->sigla_situacion_final) === "P")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> P
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> P </div> 
                                            @endif 
                                        </td>
                                    </tr>
                                    </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                    <tr>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 11 && $alumno->matriculas[11]->sigla_situacion_final !== null && strval($alumno->matriculas[11]->sigla_situacion_final) === "A")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> A       
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> A </div> 
                                            @endif 
                                        </td>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 11 && $alumno->matriculas[11]->sigla_situacion_final !== null && strval($alumno->matriculas[11]->sigla_situacion_final) === "RR")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> RR       
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> RR </div> 
                                            @endif 
                                        </td>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 11 && $alumno->matriculas[11]->sigla_situacion_final !== null && strval($alumno->matriculas[11]->sigla_situacion_final) === "D")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> D       
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> D </div> 
                                            @endif 
                                        </td>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 11 && $alumno->matriculas[11]->sigla_situacion_final !== null && strval($alumno->matriculas[11]->sigla_situacion_final) === "R")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> R       
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> R </div> 
                                            @endif 
                                        </td>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 11 && $alumno->matriculas[11]->sigla_situacion_final !== null && strval($alumno->matriculas[11]->sigla_situacion_final) === "P")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> P
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> P </div> 
                                            @endif 
                                        </td>
                                    </tr>
                                    </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                    <tr>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 12 && $alumno->matriculas[12]->sigla_situacion_final !== null && strval($alumno->matriculas[12]->sigla_situacion_final) === "A")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> A       
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> A </div> 
                                            @endif 
                                        </td>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 12 && $alumno->matriculas[12]->sigla_situacion_final !== null && strval($alumno->matriculas[12]->sigla_situacion_final) === "RR")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> RR       
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> RR </div> 
                                            @endif 
                                        </td>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 12 && $alumno->matriculas[12]->sigla_situacion_final !== null && strval($alumno->matriculas[12]->sigla_situacion_final) === "D")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> D       
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> D </div> 
                                            @endif 
                                        </td>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 12 && $alumno->matriculas[12]->sigla_situacion_final !== null && strval($alumno->matriculas[12]->sigla_situacion_final) === "R")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> R       
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> R </div> 
                                            @endif 
                                        </td>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 12 && $alumno->matriculas[12]->sigla_situacion_final !== null && strval($alumno->matriculas[12]->sigla_situacion_final) === "P")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> P
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> P </div> 
                                            @endif 
                                        </td>
                                    </tr>
                                    </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                    <tr>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 13 && $alumno->matriculas[13]->sigla_situacion_final !== null && strval($alumno->matriculas[13]->sigla_situacion_final) === "A")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> A       
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> A </div> 
                                            @endif 
                                        </td>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 13 && $alumno->matriculas[13]->sigla_situacion_final !== null && strval($alumno->matriculas[13]->sigla_situacion_final) === "RR")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> RR       
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> RR </div> 
                                            @endif 
                                        </td>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 13 && $alumno->matriculas[13]->sigla_situacion_final !== null && strval($alumno->matriculas[13]->sigla_situacion_final) === "D")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> D       
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> D </div> 
                                            @endif 
                                        </td>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 13 && $alumno->matriculas[13]->sigla_situacion_final !== null && strval($alumno->matriculas[13]->sigla_situacion_final) === "R")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> R       
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> R </div> 
                                            @endif 
                                        </td>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 13 && $alumno->matriculas[13]->sigla_situacion_final !== null && strval($alumno->matriculas[13]->sigla_situacion_final) === "P")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> P
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> P </div> 
                                            @endif 
                                        </td>
                                    </tr>
                                    </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                    <tr>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 14 && $alumno->matriculas[14]->sigla_situacion_final !== null && strval($alumno->matriculas[14]->sigla_situacion_final) === "A")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> A       
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> A </div> 
                                            @endif 
                                        </td>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 14 && $alumno->matriculas[14]->sigla_situacion_final !== null && strval($alumno->matriculas[14]->sigla_situacion_final) === "RR")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> RR       
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> RR </div> 
                                            @endif 
                                        </td>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 14 && $alumno->matriculas[14]->sigla_situacion_final !== null && strval($alumno->matriculas[14]->sigla_situacion_final) === "D")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> D       
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> D </div> 
                                            @endif 
                                        </td>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 14 && $alumno->matriculas[14]->sigla_situacion_final !== null && strval($alumno->matriculas[14]->sigla_situacion_final) === "R")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> R       
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> R </div> 
                                            @endif 
                                        </td>
                                        <td class="celdaNormal5" style="width: 20%;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 14 && $alumno->matriculas[14]->sigla_situacion_final !== null && strval($alumno->matriculas[14]->sigla_situacion_final) === "P")
                                                    <div style="height:10.29px; overflow:hidden; position:relative;
                                                    background-image: url('{{ asset('images/icone-x-noir.png') }}');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                    "> P
                                                    </div> 
                                            @else
                                                <div style="height:10.29px; overflow:hidden; position:relative;"> P </div> 
                                            @endif 
                                        </td>
                                    </tr>
                                    </table>
                            </td>
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                     

                        </tr>
                        <tr>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                    <tr>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                    <tr>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                    <tr>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                    <tr>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                    <tr>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                    <tr>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                    <tr>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                    <tr>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                    <tr>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                    <tr>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                    <tr>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                    <tr>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                    <tr>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                    <tr>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                    <tr>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                    <tr>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                    <tr>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                    <tr>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                    <tr>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                    <tr>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                    <tr>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                    <tr>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                    <tr>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                    <tr>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                    <tr>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                    <tr>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                    <tr>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                    <tr>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                    <tr>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                    <tr>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                        <td class="celdaNormal5" style="min-width: 20%">
                                            <div style="height:10.8px; overflow:hidden;">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                      
                       
                    </table>
                </td>
            </tr>
          </table>






















          <table class="table" style="margin-bottom: 0px; width:100%; margin-top:0cm;">
            <tr>
                <td class="titles">2.2 Traslados</td>
            </tr>
            <tr>
                <td style="vertical-align: top;">
                    <table class="table" style="margin-bottom: 0px; width:100%;">
                        <tr>
                            <td colspan="3" class="celdaFondoGrisBold3c">Fecha</td>
                            <td class="celdaFondoGrisBold3c">Motivo del traslado</td>
                            <td colspan="8" class="celdaFondoGrisBold3c">Institucion Educativa de Destino</td>
                            <td class="celdaFondoGrisBold3c">Vº Bº de Traslados</td>
                        </tr>
                        <tr>
                            <td class="celdaFondoGrisBold4">Día</td>
                            <td class="celdaFondoGrisBold4">Mes</td>
                            <td class="celdaFondoGrisBold4">Año</td>
                            <td class="celdaFondoGrisBold4">Descripción</td>
                            <td colspan="7"class="celdaFondoGrisBold4">Código Modular</td>
                            <td class="celdaFondoGrisBold4">Nombre</td>
                            <td class="celdaFondoGrisBold4" style="font-size:6px;">Firma y Post firma del Director de la I. E. que autoriza el traslado</td>

                        </tr>
                        <tr>
                            <td class="celdaNormal6" style="width: 4%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 0)
                                        {{substr(strval($alumno->traslados[0]->fecha),8,2)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 4%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 0)
                                        {{substr(strval($alumno->traslados[0]->fecha),5,2)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 4%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 0)
                                        {{substr(strval($alumno->traslados[0]->fecha),0,4)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 32%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 0)
                                        {{strval($alumno->traslados[0]->motivo)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 2%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 0 && strlen($alumno->traslados[0]->codigo_modular) == 7)
                                        {{substr(strval($alumno->traslados[0]->codigo_modular),0,1)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 2%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 0 && strlen($alumno->traslados[0]->codigo_modular) == 7)
                                        {{substr(strval($alumno->traslados[0]->codigo_modular),1,1)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 2%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 0 && strlen($alumno->traslados[0]->codigo_modular) == 7)
                                        {{substr(strval($alumno->traslados[0]->codigo_modular),2,1)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 2%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 0 && strlen($alumno->traslados[0]->codigo_modular) == 7)
                                        {{substr(strval($alumno->traslados[0]->codigo_modular),3,1)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 2%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 0 && strlen($alumno->traslados[0]->codigo_modular) == 7)
                                        {{substr(strval($alumno->traslados[0]->codigo_modular),4,1)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 2%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 0 && strlen($alumno->traslados[0]->codigo_modular) == 7)
                                        {{substr(strval($alumno->traslados[0]->codigo_modular),5,1)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 2%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 0 && strlen($alumno->traslados[0]->codigo_modular) == 7)
                                        {{substr(strval($alumno->traslados[0]->codigo_modular),6,1)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 21%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 0)
                                        {{strval($alumno->traslados[0]->ie_nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 21%">
                                <div style="height:8px; overflow:hidden;">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="celdaNormal6" style="width: 4%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 1)
                                        {{substr(strval($alumno->traslados[1]->fecha),8,2)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 4%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 1)
                                        {{substr(strval($alumno->traslados[1]->fecha),5,2)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 4%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 1)
                                        {{substr(strval($alumno->traslados[1]->fecha),0,4)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 32%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 1)
                                        {{strval($alumno->traslados[1]->motivo)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 2%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 1 && strlen($alumno->traslados[1]->codigo_modular) == 7)
                                        {{substr(strval($alumno->traslados[1]->codigo_modular),0,1)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 2%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 1 && strlen($alumno->traslados[1]->codigo_modular) == 7)
                                        {{substr(strval($alumno->traslados[1]->codigo_modular),1,1)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 2%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 1 && strlen($alumno->traslados[1]->codigo_modular) == 7)
                                        {{substr(strval($alumno->traslados[1]->codigo_modular),2,1)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 2%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 1 && strlen($alumno->traslados[1]->codigo_modular) == 7)
                                        {{substr(strval($alumno->traslados[1]->codigo_modular),3,1)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 2%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 1 && strlen($alumno->traslados[1]->codigo_modular) == 7)
                                        {{substr(strval($alumno->traslados[1]->codigo_modular),4,1)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 2%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 1 && strlen($alumno->traslados[1]->codigo_modular) == 7)
                                        {{substr(strval($alumno->traslados[1]->codigo_modular),5,1)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 2%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 1 && strlen($alumno->traslados[1]->codigo_modular) == 7)
                                        {{substr(strval($alumno->traslados[1]->codigo_modular),6,1)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 21%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 1)
                                        {{strval($alumno->traslados[1]->ie_nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 21%">
                                <div style="height:8px; overflow:hidden;">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="celdaNormal6" style="width: 4%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 2)
                                        {{substr(strval($alumno->traslados[2]->fecha),8,2)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 4%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 2)
                                        {{substr(strval($alumno->traslados[2]->fecha),5,2)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 4%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 2)
                                        {{substr(strval($alumno->traslados[2]->fecha),0,4)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 32%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 2)
                                        {{strval($alumno->traslados[2]->motivo)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 2%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 2 && strlen($alumno->traslados[2]->codigo_modular) == 7)
                                        {{substr(strval($alumno->traslados[2]->codigo_modular),0,1)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 2%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 2 && strlen($alumno->traslados[2]->codigo_modular) == 7)
                                        {{substr(strval($alumno->traslados[2]->codigo_modular),1,1)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 2%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 2 && strlen($alumno->traslados[2]->codigo_modular) == 7)
                                        {{substr(strval($alumno->traslados[2]->codigo_modular),2,1)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 2%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 2 && strlen($alumno->traslados[2]->codigo_modular) == 7)
                                        {{substr(strval($alumno->traslados[2]->codigo_modular),3,1)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 2%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 2 && strlen($alumno->traslados[2]->codigo_modular) == 7)
                                        {{substr(strval($alumno->traslados[2]->codigo_modular),4,1)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 2%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 2 && strlen($alumno->traslados[2]->codigo_modular) == 7)
                                        {{substr(strval($alumno->traslados[2]->codigo_modular),5,1)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 2%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 2 && strlen($alumno->traslados[2]->codigo_modular) == 7)
                                        {{substr(strval($alumno->traslados[2]->codigo_modular),6,1)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 21%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 2)
                                        {{strval($alumno->traslados[2]->ie_nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 21%">
                                <div style="height:8px; overflow:hidden;">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="celdaNormal6" style="width: 4%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 3)
                                        {{substr(strval($alumno->traslados[3]->fecha),8,2)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 4%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 3)
                                        {{substr(strval($alumno->traslados[3]->fecha),5,2)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 4%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 3)
                                        {{substr(strval($alumno->traslados[3]->fecha),0,4)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 32%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 3)
                                        {{strval($alumno->traslados[3]->motivo)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 2%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 3 && strlen($alumno->traslados[3]->codigo_modular) == 7)
                                        {{substr(strval($alumno->traslados[3]->codigo_modular),0,1)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 2%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 3 && strlen($alumno->traslados[3]->codigo_modular) == 7)
                                        {{substr(strval($alumno->traslados[3]->codigo_modular),1,1)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 2%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 3 && strlen($alumno->traslados[3]->codigo_modular) == 7)
                                        {{substr(strval($alumno->traslados[3]->codigo_modular),2,1)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 2%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 3 && strlen($alumno->traslados[3]->codigo_modular) == 7)
                                        {{substr(strval($alumno->traslados[3]->codigo_modular),3,1)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 2%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 3 && strlen($alumno->traslados[3]->codigo_modular) == 7)
                                        {{substr(strval($alumno->traslados[3]->codigo_modular),4,1)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 2%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 3 && strlen($alumno->traslados[3]->codigo_modular) == 7)
                                        {{substr(strval($alumno->traslados[3]->codigo_modular),5,1)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 2%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 3 && strlen($alumno->traslados[3]->codigo_modular) == 7)
                                        {{substr(strval($alumno->traslados[3]->codigo_modular),6,1)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 21%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 3)
                                        {{strval($alumno->traslados[3]->ie_nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 21%">
                                <div style="height:8px; overflow:hidden;">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="celdaNormal6" style="width: 4%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 4)
                                        {{substr(strval($alumno->traslados[4]->fecha),8,2)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 4%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 4)
                                        {{substr(strval($alumno->traslados[4]->fecha),5,2)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 4%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 4)
                                        {{substr(strval($alumno->traslados[4]->fecha),0,4)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 32%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 4)
                                        {{strval($alumno->traslados[4]->motivo)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 2%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 4 && strlen($alumno->traslados[4]->codigo_modular) == 7)
                                        {{substr(strval($alumno->traslados[4]->codigo_modular),0,1)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 2%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 4 && strlen($alumno->traslados[4]->codigo_modular) == 7)
                                        {{substr(strval($alumno->traslados[4]->codigo_modular),1,1)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 2%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 4 && strlen($alumno->traslados[4]->codigo_modular) == 7)
                                        {{substr(strval($alumno->traslados[4]->codigo_modular),2,1)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 2%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 4 && strlen($alumno->traslados[4]->codigo_modular) == 7)
                                        {{substr(strval($alumno->traslados[4]->codigo_modular),3,1)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 2%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 4 && strlen($alumno->traslados[4]->codigo_modular) == 7)
                                        {{substr(strval($alumno->traslados[4]->codigo_modular),4,1)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 2%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 4 && strlen($alumno->traslados[4]->codigo_modular) == 7)
                                        {{substr(strval($alumno->traslados[4]->codigo_modular),5,1)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 2%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 4 && strlen($alumno->traslados[4]->codigo_modular) == 7)
                                        {{substr(strval($alumno->traslados[4]->codigo_modular),6,1)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 21%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 4)
                                        {{strval($alumno->traslados[4]->ie_nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 21%">
                                <div style="height:8px; overflow:hidden;">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="celdaNormal6" style="width: 4%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 5)
                                        {{substr(strval($alumno->traslados[5]->fecha),8,2)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 4%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 5)
                                        {{substr(strval($alumno->traslados[5]->fecha),5,2)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 4%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 5)
                                        {{substr(strval($alumno->traslados[5]->fecha),0,4)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 32%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 5)
                                        {{strval($alumno->traslados[5]->motivo)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 2%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 5 && strlen($alumno->traslados[5]->codigo_modular) == 7)
                                        {{substr(strval($alumno->traslados[5]->codigo_modular),0,1)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 2%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 5 && strlen($alumno->traslados[5]->codigo_modular) == 7)
                                        {{substr(strval($alumno->traslados[5]->codigo_modular),1,1)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 2%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 5 && strlen($alumno->traslados[5]->codigo_modular) == 7)
                                        {{substr(strval($alumno->traslados[5]->codigo_modular),2,1)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 2%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 5 && strlen($alumno->traslados[5]->codigo_modular) == 7)
                                        {{substr(strval($alumno->traslados[5]->codigo_modular),3,1)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 2%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 5 && strlen($alumno->traslados[5]->codigo_modular) == 7)
                                        {{substr(strval($alumno->traslados[5]->codigo_modular),4,1)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 2%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 5 && strlen($alumno->traslados[5]->codigo_modular) == 7)
                                        {{substr(strval($alumno->traslados[5]->codigo_modular),5,1)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 2%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 5 && strlen($alumno->traslados[5]->codigo_modular) == 7)
                                        {{substr(strval($alumno->traslados[5]->codigo_modular),6,1)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 21%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 5)
                                        {{strval($alumno->traslados[5]->ie_nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 21%">
                                <div style="height:8px; overflow:hidden;">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="celdaNormal6" style="width: 4%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 6)
                                        {{substr(strval($alumno->traslados[6]->fecha),8,2)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 4%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 6)
                                        {{substr(strval($alumno->traslados[6]->fecha),5,2)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 4%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 6)
                                        {{substr(strval($alumno->traslados[6]->fecha),0,4)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 32%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 6)
                                        {{strval($alumno->traslados[6]->motivo)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 2%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 6 && strlen($alumno->traslados[6]->codigo_modular) == 7)
                                        {{substr(strval($alumno->traslados[6]->codigo_modular),0,1)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 2%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 6 && strlen($alumno->traslados[6]->codigo_modular) == 7)
                                        {{substr(strval($alumno->traslados[6]->codigo_modular),1,1)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 2%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 6 && strlen($alumno->traslados[6]->codigo_modular) == 7)
                                        {{substr(strval($alumno->traslados[6]->codigo_modular),2,1)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 2%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 6 && strlen($alumno->traslados[6]->codigo_modular) == 7)
                                        {{substr(strval($alumno->traslados[6]->codigo_modular),3,1)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 2%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 6 && strlen($alumno->traslados[6]->codigo_modular) == 7)
                                        {{substr(strval($alumno->traslados[6]->codigo_modular),4,1)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 2%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 6 && strlen($alumno->traslados[6]->codigo_modular) == 7)
                                        {{substr(strval($alumno->traslados[6]->codigo_modular),5,1)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 2%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 6 && strlen($alumno->traslados[6]->codigo_modular) == 7)
                                        {{substr(strval($alumno->traslados[6]->codigo_modular),6,1)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 21%">
                                <div style="height:8px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->traslados !== null && count($alumno->traslados) > 6)
                                        {{strval($alumno->traslados[6]->ie_nombre)}}
                                    @endif
                                </div>
                            </td>
                            <td class="celdaNormal6" style="width: 21%">
                                <div style="height:8px; overflow:hidden;">
                                </div>
                            </td>
                        </tr>

                       
                    </table>
                </td>
            </tr>
          </table>























          <table class="table" style="margin-bottom: 0px; width:100%; margin-top:0cm;">
            <tr>
                <td colspan="2" class="titles">3. Responsable de la Matrícula en la Institución Educativa y Fecha</td>
            </tr>
            <tr>
                <td class="titles" style="width: 14%"></td>
                <td class="titles" style="width: 84%"></td>
            </tr>
            <tr>
                <td style="vertical-align: top; width: 14%; ">
                    <table class="table" style="margin-bottom: 0px; width:99%;">
                        <tr>
                            <td class="celdaFondoGrisBold2">Datos - Años</td>
                        </tr>
                        <tr>
                            <td class="celdaFondoGrisBold4L" style="height: 23.07px;">Fecha</td>
                        </tr>
                        <tr>
                            <td class="celdaFondoGrisBold4L">Apellidos y Nombres</td>
                        </tr>
                        <tr>
                            <td class="celdaFondoGrisBold4L">Cargo</td>
                        </tr>
                    </table>
                </td>

                <td style="vertical-align: top;">
                    <table class="table" style="margin-bottom: 0px; width:100%;">
                        <tr>
                            <td class="celdaFondoGrisBold2" style="width: 6.6666666%">
                                @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 0)
                                    {{strval($alumno->matriculas[0]->ciclo->year)}}
                                @else
                                    20___
                                @endif 
                            </td>
                            <td class="celdaFondoGrisBold2" style="width: 6.6666666%">
                                @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 1)
                                    {{strval($alumno->matriculas[1]->ciclo->year)}}
                                @else
                                    20___
                                @endif 
                            </td>
                            <td class="celdaFondoGrisBold2" style="width: 6.6666666%">
                                @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 2)
                                    {{strval($alumno->matriculas[2]->ciclo->year)}}
                                @else
                                    20___
                                @endif 
                            </td>
                            <td class="celdaFondoGrisBold2" style="width: 6.6666666%">
                                @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 3)
                                    {{strval($alumno->matriculas[3]->ciclo->year)}}
                                @else
                                    20___
                                @endif 
                            </td>
                            <td class="celdaFondoGrisBold2" style="width: 6.6666666%">
                                @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 4)
                                    {{strval($alumno->matriculas[4]->ciclo->year)}}
                                @else
                                    20___
                                @endif 
                            </td>
                            <td class="celdaFondoGrisBold2" style="width: 6.6666666%">
                                @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 5)
                                    {{strval($alumno->matriculas[5]->ciclo->year)}}
                                @else
                                    20___
                                @endif 
                            </td>
                            <td class="celdaFondoGrisBold2" style="width: 6.6666666%">
                                @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 6)
                                    {{strval($alumno->matriculas[6]->ciclo->year)}}
                                @else
                                    20___
                                @endif 
                            </td>
                            <td class="celdaFondoGrisBold2" style="width: 6.6666666%">
                                @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 7)
                                    {{strval($alumno->matriculas[7]->ciclo->year)}}
                                @else
                                    20___
                                @endif 
                            </td>
                            <td class="celdaFondoGrisBold2" style="width: 6.6666666%">
                                @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 8)
                                    {{strval($alumno->matriculas[8]->ciclo->year)}}
                                @else
                                    20___
                                @endif 
                            </td>
                            <td class="celdaFondoGrisBold2" style="width: 6.6666666%">
                                @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 9)
                                    {{strval($alumno->matriculas[9]->ciclo->year)}}
                                @else
                                    20___
                                @endif 
                            </td>
                            <td class="celdaFondoGrisBold2" style="width: 6.6666666%">
                                @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 10)
                                    {{strval($alumno->matriculas[10]->ciclo->year)}}
                                @else
                                    20___
                                @endif 
                            </td>
                            <td class="celdaFondoGrisBold2" style="width: 6.6666666%">
                                @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 11)
                                    {{strval($alumno->matriculas[11]->ciclo->year)}}
                                @else
                                    20___
                                @endif 
                            </td>
                            <td class="celdaFondoGrisBold2" style="width: 6.6666666%">
                                @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 12)
                                    {{strval($alumno->matriculas[12]->ciclo->year)}}
                                @else
                                    20___
                                @endif 
                            </td>
                            <td class="celdaFondoGrisBold2" style="width: 6.6666666%">
                                @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 13)
                                    {{strval($alumno->matriculas[13]->ciclo->year)}}
                                @else
                                    20___
                                @endif 
                            </td>
                            <td class="celdaFondoGrisBold2" style="width: 6.6666666%">
                                @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 14)
                                    {{strval($alumno->matriculas[14]->ciclo->year)}}
                                @else
                                    20___
                                @endif 
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaFondoGrisBold4L" style="width: 30%;">Día</td>
                                    <td class="celdaFondoGrisBold4L" style="width: 30%;">Mes</td>
                                    <td class="celdaFondoGrisBold4L" style="width: 40%;">Año</td>
                                </tr>
                                <tr>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 0 && $alumno->matriculas[0]->fecha !== null)
                                                {{substr(strval($alumno->matriculas[0]->fecha),8,2)}}
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 0 && $alumno->matriculas[0]->fecha !== null)
                                                {{substr(strval($alumno->matriculas[0]->fecha),5,2)}}
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 0 && $alumno->matriculas[0]->fecha !== null)
                                                {{substr(strval($alumno->matriculas[0]->fecha),0,4)}}
                                            @endif 
                                        </div>
                                    </td>
                                </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaFondoGrisBold4L" style="width: 30%;">Día</td>
                                    <td class="celdaFondoGrisBold4L" style="width: 30%;">Mes</td>
                                    <td class="celdaFondoGrisBold4L" style="width: 40%;">Año</td>
                                </tr>
                                <tr>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 1 && $alumno->matriculas[1]->fecha !== null)
                                                {{substr(strval($alumno->matriculas[1]->fecha),8,2)}}
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 1 && $alumno->matriculas[1]->fecha !== null)
                                                {{substr(strval($alumno->matriculas[1]->fecha),5,2)}}
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 1 && $alumno->matriculas[1]->fecha !== null)
                                                {{substr(strval($alumno->matriculas[1]->fecha),0,4)}}
                                            @endif 
                                        </div>
                                    </td>
                                </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaFondoGrisBold4L" style="width: 30%;">Día</td>
                                    <td class="celdaFondoGrisBold4L" style="width: 30%;">Mes</td>
                                    <td class="celdaFondoGrisBold4L" style="width: 40%;">Año</td>
                                </tr>
                                <tr>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 2 && $alumno->matriculas[2]->fecha !== null)
                                                {{substr(strval($alumno->matriculas[2]->fecha),8,2)}}
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 2 && $alumno->matriculas[2]->fecha !== null)
                                                {{substr(strval($alumno->matriculas[2]->fecha),5,2)}}
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 2 && $alumno->matriculas[2]->fecha !== null)
                                                {{substr(strval($alumno->matriculas[2]->fecha),0,4)}}
                                            @endif 
                                        </div>
                                    </td>
                                </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaFondoGrisBold4L" style="width: 30%;">Día</td>
                                    <td class="celdaFondoGrisBold4L" style="width: 30%;">Mes</td>
                                    <td class="celdaFondoGrisBold4L" style="width: 40%;">Año</td>
                                </tr>
                                <tr>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 3 && $alumno->matriculas[3]->fecha !== null)
                                                {{substr(strval($alumno->matriculas[3]->fecha),8,2)}}
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 3 && $alumno->matriculas[3]->fecha !== null)
                                                {{substr(strval($alumno->matriculas[3]->fecha),5,2)}}
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 3 && $alumno->matriculas[3]->fecha !== null)
                                                {{substr(strval($alumno->matriculas[3]->fecha),0,4)}}
                                            @endif 
                                        </div>
                                    </td>
                                </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaFondoGrisBold4L" style="width: 30%;">Día</td>
                                    <td class="celdaFondoGrisBold4L" style="width: 30%;">Mes</td>
                                    <td class="celdaFondoGrisBold4L" style="width: 40%;">Año</td>
                                </tr>
                                <tr>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 4 && $alumno->matriculas[4]->fecha !== null)
                                                {{substr(strval($alumno->matriculas[4]->fecha),8,2)}}
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 4 && $alumno->matriculas[4]->fecha !== null)
                                                {{substr(strval($alumno->matriculas[4]->fecha),5,2)}}
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 4 && $alumno->matriculas[4]->fecha !== null)
                                                {{substr(strval($alumno->matriculas[4]->fecha),0,4)}}
                                            @endif 
                                        </div>
                                    </td>
                                </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaFondoGrisBold4L" style="width: 30%;">Día</td>
                                    <td class="celdaFondoGrisBold4L" style="width: 30%;">Mes</td>
                                    <td class="celdaFondoGrisBold4L" style="width: 40%;">Año</td>
                                </tr>
                                <tr>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 5 && $alumno->matriculas[5]->fecha !== null)
                                                {{substr(strval($alumno->matriculas[5]->fecha),8,2)}}
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 5 && $alumno->matriculas[5]->fecha !== null)
                                                {{substr(strval($alumno->matriculas[5]->fecha),5,2)}}
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 5 && $alumno->matriculas[5]->fecha !== null)
                                                {{substr(strval($alumno->matriculas[5]->fecha),0,4)}}
                                            @endif 
                                        </div>
                                    </td>
                                </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaFondoGrisBold4L" style="width: 30%;">Día</td>
                                    <td class="celdaFondoGrisBold4L" style="width: 30%;">Mes</td>
                                    <td class="celdaFondoGrisBold4L" style="width: 40%;">Año</td>
                                </tr>
                                <tr>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 6 && $alumno->matriculas[6]->fecha !== null)
                                                {{substr(strval($alumno->matriculas[6]->fecha),8,2)}}
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 6 && $alumno->matriculas[6]->fecha !== null)
                                                {{substr(strval($alumno->matriculas[6]->fecha),5,2)}}
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 6 && $alumno->matriculas[6]->fecha !== null)
                                                {{substr(strval($alumno->matriculas[6]->fecha),0,4)}}
                                            @endif 
                                        </div>
                                    </td>
                                </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaFondoGrisBold4L" style="width: 30%;">Día</td>
                                    <td class="celdaFondoGrisBold4L" style="width: 30%;">Mes</td>
                                    <td class="celdaFondoGrisBold4L" style="width: 40%;">Año</td>
                                </tr>
                                <tr>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 7 && $alumno->matriculas[7]->fecha !== null)
                                                {{substr(strval($alumno->matriculas[7]->fecha),8,2)}}
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 7 && $alumno->matriculas[7]->fecha !== null)
                                                {{substr(strval($alumno->matriculas[7]->fecha),5,2)}}
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 7 && $alumno->matriculas[7]->fecha !== null)
                                                {{substr(strval($alumno->matriculas[7]->fecha),0,4)}}
                                            @endif 
                                        </div>
                                    </td>
                                </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaFondoGrisBold4L" style="width: 30%;">Día</td>
                                    <td class="celdaFondoGrisBold4L" style="width: 30%;">Mes</td>
                                    <td class="celdaFondoGrisBold4L" style="width: 40%;">Año</td>
                                </tr>
                                <tr>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 8 && $alumno->matriculas[8]->fecha !== null)
                                                {{substr(strval($alumno->matriculas[8]->fecha),8,2)}}
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 8 && $alumno->matriculas[8]->fecha !== null)
                                                {{substr(strval($alumno->matriculas[8]->fecha),5,2)}}
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 8 && $alumno->matriculas[8]->fecha !== null)
                                                {{substr(strval($alumno->matriculas[8]->fecha),0,4)}}
                                            @endif 
                                        </div>
                                    </td>
                                </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaFondoGrisBold4L" style="width: 30%;">Día</td>
                                    <td class="celdaFondoGrisBold4L" style="width: 30%;">Mes</td>
                                    <td class="celdaFondoGrisBold4L" style="width: 40%;">Año</td>
                                </tr>
                                <tr>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 9 && $alumno->matriculas[9]->fecha !== null)
                                                {{substr(strval($alumno->matriculas[9]->fecha),8,2)}}
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 9 && $alumno->matriculas[9]->fecha !== null)
                                                {{substr(strval($alumno->matriculas[9]->fecha),5,2)}}
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 9 && $alumno->matriculas[9]->fecha !== null)
                                                {{substr(strval($alumno->matriculas[9]->fecha),0,4)}}
                                            @endif 
                                        </div>
                                    </td>
                                </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaFondoGrisBold4L" style="width: 30%;">Día</td>
                                    <td class="celdaFondoGrisBold4L" style="width: 30%;">Mes</td>
                                    <td class="celdaFondoGrisBold4L" style="width: 40%;">Año</td>
                                </tr>
                                <tr>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 10 && $alumno->matriculas[10]->fecha !== null)
                                                {{substr(strval($alumno->matriculas[10]->fecha),8,2)}}
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 10 && $alumno->matriculas[10]->fecha !== null)
                                                {{substr(strval($alumno->matriculas[10]->fecha),5,2)}}
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 10 && $alumno->matriculas[10]->fecha !== null)
                                                {{substr(strval($alumno->matriculas[10]->fecha),0,4)}}
                                            @endif 
                                        </div>
                                    </td>
                                </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaFondoGrisBold4L" style="width: 30%;">Día</td>
                                    <td class="celdaFondoGrisBold4L" style="width: 30%;">Mes</td>
                                    <td class="celdaFondoGrisBold4L" style="width: 40%;">Año</td>
                                </tr>
                                <tr>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 11 && $alumno->matriculas[11]->fecha !== null)
                                                {{substr(strval($alumno->matriculas[11]->fecha),8,2)}}
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 11 && $alumno->matriculas[11]->fecha !== null)
                                                {{substr(strval($alumno->matriculas[11]->fecha),5,2)}}
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 11 && $alumno->matriculas[11]->fecha !== null)
                                                {{substr(strval($alumno->matriculas[11]->fecha),0,4)}}
                                            @endif 
                                        </div>
                                    </td>
                                </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaFondoGrisBold4L" style="width: 30%;">Día</td>
                                    <td class="celdaFondoGrisBold4L" style="width: 30%;">Mes</td>
                                    <td class="celdaFondoGrisBold4L" style="width: 40%;">Año</td>
                                </tr>
                                <tr>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 12 && $alumno->matriculas[12]->fecha !== null)
                                                {{substr(strval($alumno->matriculas[12]->fecha),8,2)}}
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 12 && $alumno->matriculas[12]->fecha !== null)
                                                {{substr(strval($alumno->matriculas[12]->fecha),5,2)}}
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 12 && $alumno->matriculas[12]->fecha !== null)
                                                {{substr(strval($alumno->matriculas[12]->fecha),0,4)}}
                                            @endif 
                                        </div>
                                    </td>
                                </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaFondoGrisBold4L" style="width: 30%;">Día</td>
                                    <td class="celdaFondoGrisBold4L" style="width: 30%;">Mes</td>
                                    <td class="celdaFondoGrisBold4L" style="width: 40%;">Año</td>
                                </tr>
                                <tr>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 13 && $alumno->matriculas[13]->fecha !== null)
                                                {{substr(strval($alumno->matriculas[13]->fecha),8,2)}}
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 13 && $alumno->matriculas[13]->fecha !== null)
                                                {{substr(strval($alumno->matriculas[13]->fecha),5,2)}}
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 13 && $alumno->matriculas[13]->fecha !== null)
                                                {{substr(strval($alumno->matriculas[13]->fecha),0,4)}}
                                            @endif 
                                        </div>
                                    </td>
                                </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaFondoGrisBold4L" style="width: 30%;">Día</td>
                                    <td class="celdaFondoGrisBold4L" style="width: 30%;">Mes</td>
                                    <td class="celdaFondoGrisBold4L" style="width: 40%;">Año</td>
                                </tr>
                                <tr>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 14 && $alumno->matriculas[14]->fecha !== null)
                                                {{substr(strval($alumno->matriculas[14]->fecha),8,2)}}
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 14 && $alumno->matriculas[14]->fecha !== null)
                                                {{substr(strval($alumno->matriculas[14]->fecha),5,2)}}
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 14 && $alumno->matriculas[14]->fecha !== null)
                                                {{substr(strval($alumno->matriculas[14]->fecha),0,4)}}
                                            @endif 
                                        </div>
                                    </td>
                                </tr>
                                </table>
                            </td>
                           
                        </tr>

                        <tr>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 0 && $alumno->matriculas[0]->responsable_matricula_nombres !== null)
                                        {{strval($alumno->matriculas[0]->responsable_matricula_nombres)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 1 && $alumno->matriculas[1]->responsable_matricula_nombres !== null)
                                        {{strval($alumno->matriculas[1]->responsable_matricula_nombres)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 2 && $alumno->matriculas[2]->responsable_matricula_nombres !== null)
                                        {{strval($alumno->matriculas[2]->responsable_matricula_nombres)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 3 && $alumno->matriculas[3]->responsable_matricula_nombres !== null)
                                        {{strval($alumno->matriculas[3]->responsable_matricula_nombres)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 4 && $alumno->matriculas[4]->responsable_matricula_nombres !== null)
                                        {{strval($alumno->matriculas[4]->responsable_matricula_nombres)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 5 && $alumno->matriculas[5]->responsable_matricula_nombres !== null)
                                        {{strval($alumno->matriculas[5]->responsable_matricula_nombres)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 6 && $alumno->matriculas[6]->responsable_matricula_nombres !== null)
                                        {{strval($alumno->matriculas[6]->responsable_matricula_nombres)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 7 && $alumno->matriculas[7]->responsable_matricula_nombres !== null)
                                        {{strval($alumno->matriculas[7]->responsable_matricula_nombres)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 8 && $alumno->matriculas[8]->responsable_matricula_nombres !== null)
                                        {{strval($alumno->matriculas[8]->responsable_matricula_nombres)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 9 && $alumno->matriculas[9]->responsable_matricula_nombres !== null)
                                        {{strval($alumno->matriculas[9]->responsable_matricula_nombres)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 10 && $alumno->matriculas[10]->responsable_matricula_nombres !== null)
                                        {{strval($alumno->matriculas[10]->responsable_matricula_nombres)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 11 && $alumno->matriculas[11]->responsable_matricula_nombres !== null)
                                        {{strval($alumno->matriculas[11]->responsable_matricula_nombres)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 12 && $alumno->matriculas[12]->responsable_matricula_nombres !== null)
                                        {{strval($alumno->matriculas[12]->responsable_matricula_nombres)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 13 && $alumno->matriculas[13]->responsable_matricula_nombres !== null)
                                        {{strval($alumno->matriculas[13]->responsable_matricula_nombres)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 14 && $alumno->matriculas[14]->responsable_matricula_nombres !== null)
                                        {{strval($alumno->matriculas[14]->responsable_matricula_nombres)}}
                                    @endif 
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 0 && $alumno->matriculas[0]->cargo_responsable !== null)
                                        {{strval($alumno->matriculas[0]->cargo_responsable)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 1 && $alumno->matriculas[1]->cargo_responsable !== null)
                                        {{strval($alumno->matriculas[1]->cargo_responsable)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 2 && $alumno->matriculas[2]->cargo_responsable !== null)
                                        {{strval($alumno->matriculas[2]->cargo_responsable)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 3 && $alumno->matriculas[3]->cargo_responsable !== null)
                                        {{strval($alumno->matriculas[3]->cargo_responsable)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 4 && $alumno->matriculas[4]->cargo_responsable !== null)
                                        {{strval($alumno->matriculas[4]->cargo_responsable)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 5 && $alumno->matriculas[5]->cargo_responsable !== null)
                                        {{strval($alumno->matriculas[5]->cargo_responsable)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 6 && $alumno->matriculas[6]->cargo_responsable !== null)
                                        {{strval($alumno->matriculas[6]->cargo_responsable)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 7 && $alumno->matriculas[7]->cargo_responsable !== null)
                                        {{strval($alumno->matriculas[7]->cargo_responsable)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 8 && $alumno->matriculas[8]->cargo_responsable !== null)
                                        {{strval($alumno->matriculas[8]->cargo_responsable)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 9 && $alumno->matriculas[9]->cargo_responsable !== null)
                                        {{strval($alumno->matriculas[9]->cargo_responsable)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 10 && $alumno->matriculas[10]->cargo_responsable !== null)
                                        {{strval($alumno->matriculas[10]->cargo_responsable)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 11 && $alumno->matriculas[11]->cargo_responsable !== null)
                                        {{strval($alumno->matriculas[11]->cargo_responsable)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 12 && $alumno->matriculas[12]->cargo_responsable !== null)
                                        {{strval($alumno->matriculas[12]->cargo_responsable)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 13 && $alumno->matriculas[13]->cargo_responsable !== null)
                                        {{strval($alumno->matriculas[13]->cargo_responsable)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 14 && $alumno->matriculas[14]->cargo_responsable !== null)
                                        {{strval($alumno->matriculas[14]->cargo_responsable)}}
                                    @endif 
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
          </table>



















          <table class="table" style="margin-bottom: 0px; width:100%; margin-top:0cm;">
            <tr>
                <td colspan="2" class="titles">4. Datos del Apoderado</td>
            </tr>
            <tr>
                <td class="titles" style="width: 14%"></td>
                <td class="titles" style="width: 84%"></td>
            </tr>
            <tr>
                <td style="vertical-align: top; width: 14%; ">
                    <table class="table" style="margin-bottom: 0px; width:99%;">
                        <tr>
                            <td class="celdaFondoGrisBold2">Datos - Años</td>
                        </tr>
                        <tr>
                            <td class="celdaFondoGrisBold4L">Apellido Paterno</td>
                        </tr>
                        <tr>
                            <td class="celdaFondoGrisBold4L">Apellido Materno</td>
                        </tr>
                        <tr>
                            <td class="celdaFondoGrisBold4L">Nombres</td>
                        </tr>
                        <tr>
                            <td class="celdaFondoGrisBold4L">Parentesco con el Estudiante</td>
                        </tr>
                        <tr>
                            <td class="celdaFondoGrisBold4L" style="height: 23.07px;">Fecha de Nacimiento</td>
                        </tr>
                        <tr>
                            <td class="celdaFondoGrisBold4L">Grado de Instrucc.</td>
                        </tr>
                        <tr>
                            <td class="celdaFondoGrisBold4L">Ocupación</td>
                        </tr>
                        <tr>
                            <td class="celdaFondoGrisBold4L">Domicilio</td>
                        </tr>
                        <tr>
                            <td class="celdaFondoGrisBold4L">Teléfono</td>
                        </tr>
                    </table>
                </td>

                <td style="vertical-align: top;">
                    <table class="table" style="margin-bottom: 0px; width:100%;">
                        <tr>
                            <td class="celdaFondoGrisBold2" style="width: 6.6666666%">
                                @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 0)
                                    {{strval($alumno->matriculas[0]->ciclo->year)}}
                                @else
                                    20___
                                @endif 
                            </td>
                            <td class="celdaFondoGrisBold2" style="width: 6.6666666%">
                                @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 1)
                                    {{strval($alumno->matriculas[1]->ciclo->year)}}
                                @else
                                    20___
                                @endif 
                            </td>
                            <td class="celdaFondoGrisBold2" style="width: 6.6666666%">
                                @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 2)
                                    {{strval($alumno->matriculas[2]->ciclo->year)}}
                                @else
                                    20___
                                @endif 
                            </td>
                            <td class="celdaFondoGrisBold2" style="width: 6.6666666%">
                                @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 3)
                                    {{strval($alumno->matriculas[3]->ciclo->year)}}
                                @else
                                    20___
                                @endif 
                            </td>
                            <td class="celdaFondoGrisBold2" style="width: 6.6666666%">
                                @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 4)
                                    {{strval($alumno->matriculas[4]->ciclo->year)}}
                                @else
                                    20___
                                @endif 
                            </td>
                            <td class="celdaFondoGrisBold2" style="width: 6.6666666%">
                                @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 5)
                                    {{strval($alumno->matriculas[5]->ciclo->year)}}
                                @else
                                    20___
                                @endif 
                            </td>
                            <td class="celdaFondoGrisBold2" style="width: 6.6666666%">
                                @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 6)
                                    {{strval($alumno->matriculas[6]->ciclo->year)}}
                                @else
                                    20___
                                @endif 
                            </td>
                            <td class="celdaFondoGrisBold2" style="width: 6.6666666%">
                                @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 7)
                                    {{strval($alumno->matriculas[7]->ciclo->year)}}
                                @else
                                    20___
                                @endif 
                            </td>
                            <td class="celdaFondoGrisBold2" style="width: 6.6666666%">
                                @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 8)
                                    {{strval($alumno->matriculas[8]->ciclo->year)}}
                                @else
                                    20___
                                @endif 
                            </td>
                            <td class="celdaFondoGrisBold2" style="width: 6.6666666%">
                                @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 9)
                                    {{strval($alumno->matriculas[9]->ciclo->year)}}
                                @else
                                    20___
                                @endif 
                            </td>
                            <td class="celdaFondoGrisBold2" style="width: 6.6666666%">
                                @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 10)
                                    {{strval($alumno->matriculas[10]->ciclo->year)}}
                                @else
                                    20___
                                @endif 
                            </td>
                            <td class="celdaFondoGrisBold2" style="width: 6.6666666%">
                                @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 11)
                                    {{strval($alumno->matriculas[11]->ciclo->year)}}
                                @else
                                    20___
                                @endif 
                            </td>
                            <td class="celdaFondoGrisBold2" style="width: 6.6666666%">
                                @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 12)
                                    {{strval($alumno->matriculas[12]->ciclo->year)}}
                                @else
                                    20___
                                @endif 
                            </td>
                            <td class="celdaFondoGrisBold2" style="width: 6.6666666%">
                                @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 13)
                                    {{strval($alumno->matriculas[13]->ciclo->year)}}
                                @else
                                    20___
                                @endif 
                            </td>
                            <td class="celdaFondoGrisBold2" style="width: 6.6666666%">
                                @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 14)
                                    {{strval($alumno->matriculas[14]->ciclo->year)}}
                                @else
                                    20___
                                @endif 
                            </td>
                        </tr>
                        <tr>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 0 && $alumno->matriculas[0]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[0]->apoderadoMatricula->apellido_paterno)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 1 && $alumno->matriculas[1]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[1]->apoderadoMatricula->apellido_paterno)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 2 && $alumno->matriculas[2]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[2]->apoderadoMatricula->apellido_paterno)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 3 && $alumno->matriculas[3]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[3]->apoderadoMatricula->apellido_paterno)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 4 && $alumno->matriculas[4]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[4]->apoderadoMatricula->apellido_paterno)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 5 && $alumno->matriculas[5]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[5]->apoderadoMatricula->apellido_paterno)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 6 && $alumno->matriculas[6]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[6]->apoderadoMatricula->apellido_paterno)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 7 && $alumno->matriculas[7]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[7]->apoderadoMatricula->apellido_paterno)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 8 && $alumno->matriculas[8]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[8]->apoderadoMatricula->apellido_paterno)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 9 && $alumno->matriculas[9]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[9]->apoderadoMatricula->apellido_paterno)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 10 && $alumno->matriculas[10]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[10]->apoderadoMatricula->apellido_paterno)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 11 && $alumno->matriculas[11]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[11]->apoderadoMatricula->apellido_paterno)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 12 && $alumno->matriculas[12]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[12]->apoderadoMatricula->apellido_paterno)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 13 && $alumno->matriculas[13]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[13]->apoderadoMatricula->apellido_paterno)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 14 && $alumno->matriculas[14]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[14]->apoderadoMatricula->apellido_paterno)}}
                                    @endif 
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 0 && $alumno->matriculas[0]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[0]->apoderadoMatricula->apellido_materno)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 1 && $alumno->matriculas[1]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[1]->apoderadoMatricula->apellido_materno)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 2 && $alumno->matriculas[2]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[2]->apoderadoMatricula->apellido_materno)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 3 && $alumno->matriculas[3]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[3]->apoderadoMatricula->apellido_materno)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 4 && $alumno->matriculas[4]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[4]->apoderadoMatricula->apellido_materno)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 5 && $alumno->matriculas[5]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[5]->apoderadoMatricula->apellido_materno)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 6 && $alumno->matriculas[6]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[6]->apoderadoMatricula->apellido_materno)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 7 && $alumno->matriculas[7]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[7]->apoderadoMatricula->apellido_materno)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 8 && $alumno->matriculas[8]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[8]->apoderadoMatricula->apellido_materno)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 9 && $alumno->matriculas[9]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[9]->apoderadoMatricula->apellido_materno)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 10 && $alumno->matriculas[10]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[10]->apoderadoMatricula->apellido_materno)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 11 && $alumno->matriculas[11]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[11]->apoderadoMatricula->apellido_materno)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 12 && $alumno->matriculas[12]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[12]->apoderadoMatricula->apellido_materno)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 13 && $alumno->matriculas[13]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[13]->apoderadoMatricula->apellido_materno)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 14 && $alumno->matriculas[14]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[14]->apoderadoMatricula->apellido_materno)}}
                                    @endif 
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 0 && $alumno->matriculas[0]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[0]->apoderadoMatricula->nombres)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 1 && $alumno->matriculas[1]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[1]->apoderadoMatricula->nombres)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 2 && $alumno->matriculas[2]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[2]->apoderadoMatricula->nombres)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 3 && $alumno->matriculas[3]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[3]->apoderadoMatricula->nombres)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 4 && $alumno->matriculas[4]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[4]->apoderadoMatricula->nombres)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 5 && $alumno->matriculas[5]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[5]->apoderadoMatricula->nombres)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 6 && $alumno->matriculas[6]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[6]->apoderadoMatricula->nombres)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 7 && $alumno->matriculas[7]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[7]->apoderadoMatricula->nombres)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 8 && $alumno->matriculas[8]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[8]->apoderadoMatricula->nombres)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 9 && $alumno->matriculas[9]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[9]->apoderadoMatricula->nombres)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 10 && $alumno->matriculas[10]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[10]->apoderadoMatricula->nombres)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 11 && $alumno->matriculas[11]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[11]->apoderadoMatricula->nombres)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 12 && $alumno->matriculas[12]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[12]->apoderadoMatricula->nombres)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 13 && $alumno->matriculas[13]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[13]->apoderadoMatricula->nombres)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 14 && $alumno->matriculas[14]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[14]->apoderadoMatricula->nombres)}}
                                    @endif 
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 0 && $alumno->matriculas[0]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[0]->apoderadoMatricula->parentesco)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 1 && $alumno->matriculas[1]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[1]->apoderadoMatricula->parentesco)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 2 && $alumno->matriculas[2]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[2]->apoderadoMatricula->parentesco)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 3 && $alumno->matriculas[3]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[3]->apoderadoMatricula->parentesco)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 4 && $alumno->matriculas[4]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[4]->apoderadoMatricula->parentesco)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 5 && $alumno->matriculas[5]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[5]->apoderadoMatricula->parentesco)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 6 && $alumno->matriculas[6]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[6]->apoderadoMatricula->parentesco)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 7 && $alumno->matriculas[7]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[7]->apoderadoMatricula->parentesco)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 8 && $alumno->matriculas[8]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[8]->apoderadoMatricula->parentesco)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 9 && $alumno->matriculas[9]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[9]->apoderadoMatricula->parentesco)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 10 && $alumno->matriculas[10]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[10]->apoderadoMatricula->parentesco)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 11 && $alumno->matriculas[11]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[11]->apoderadoMatricula->parentesco)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 12 && $alumno->matriculas[12]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[12]->apoderadoMatricula->parentesco)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 13 && $alumno->matriculas[13]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[13]->apoderadoMatricula->parentesco)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 14 && $alumno->matriculas[14]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[14]->apoderadoMatricula->parentesco)}}
                                    @endif 
                                </div>
                            </td>
                        </tr>



                        <tr>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaFondoGrisBold4L" style="width: 30%;">Día</td>
                                    <td class="celdaFondoGrisBold4L" style="width: 30%;">Mes</td>
                                    <td class="celdaFondoGrisBold4L" style="width: 40%;">Año</td>
                                </tr>
                                <tr>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 0 && $alumno->matriculas[0]->apoderadoMatricula !== null && $alumno->matriculas[0]->apoderadoMatricula->fecha_nac != null)
                                                {{substr(strval($alumno->matriculas[0]->apoderadoMatricula->fecha_nac),8,2)}}
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 0 && $alumno->matriculas[0]->apoderadoMatricula !== null && $alumno->matriculas[0]->apoderadoMatricula->fecha_nac != null)
                                                {{substr(strval($alumno->matriculas[0]->apoderadoMatricula->fecha_nac),5,2)}}
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 0 && $alumno->matriculas[0]->apoderadoMatricula !== null && $alumno->matriculas[0]->apoderadoMatricula->fecha_nac != null)
                                                {{substr(strval($alumno->matriculas[0]->apoderadoMatricula->fecha_nac),0,4)}}
                                            @endif 
                                        </div>
                                    </td>
                                </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaFondoGrisBold4L" style="width: 30%;">Día</td>
                                    <td class="celdaFondoGrisBold4L" style="width: 30%;">Mes</td>
                                    <td class="celdaFondoGrisBold4L" style="width: 40%;">Año</td>
                                </tr>
                                <tr>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 1 && $alumno->matriculas[1]->apoderadoMatricula !== null && $alumno->matriculas[1]->apoderadoMatricula->fecha_nac != null)
                                                {{substr(strval($alumno->matriculas[1]->apoderadoMatricula->fecha_nac),8,2)}}
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 1 && $alumno->matriculas[1]->apoderadoMatricula !== null && $alumno->matriculas[1]->apoderadoMatricula->fecha_nac != null)
                                                {{substr(strval($alumno->matriculas[1]->apoderadoMatricula->fecha_nac),5,2)}}
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 1 && $alumno->matriculas[1]->apoderadoMatricula !== null && $alumno->matriculas[1]->apoderadoMatricula->fecha_nac != null)
                                                {{substr(strval($alumno->matriculas[1]->apoderadoMatricula->fecha_nac),0,4)}}
                                            @endif 
                                        </div>
                                    </td>
                                </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaFondoGrisBold4L" style="width: 30%;">Día</td>
                                    <td class="celdaFondoGrisBold4L" style="width: 30%;">Mes</td>
                                    <td class="celdaFondoGrisBold4L" style="width: 40%;">Año</td>
                                </tr>
                                <tr>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 2 && $alumno->matriculas[2]->apoderadoMatricula !== null && $alumno->matriculas[2]->apoderadoMatricula->fecha_nac != null)
                                                {{substr(strval($alumno->matriculas[2]->apoderadoMatricula->fecha_nac),8,2)}}
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 2 && $alumno->matriculas[2]->apoderadoMatricula !== null && $alumno->matriculas[2]->apoderadoMatricula->fecha_nac != null)
                                                {{substr(strval($alumno->matriculas[2]->apoderadoMatricula->fecha_nac),5,2)}}
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 2 && $alumno->matriculas[2]->apoderadoMatricula !== null && $alumno->matriculas[2]->apoderadoMatricula->fecha_nac != null)
                                                {{substr(strval($alumno->matriculas[2]->apoderadoMatricula->fecha_nac),0,4)}}
                                            @endif 
                                        </div>
                                    </td>
                                </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaFondoGrisBold4L" style="width: 30%;">Día</td>
                                    <td class="celdaFondoGrisBold4L" style="width: 30%;">Mes</td>
                                    <td class="celdaFondoGrisBold4L" style="width: 40%;">Año</td>
                                </tr>
                                <tr>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 3 && $alumno->matriculas[3]->apoderadoMatricula !== null && $alumno->matriculas[3]->apoderadoMatricula->fecha_nac != null)
                                                {{substr(strval($alumno->matriculas[3]->apoderadoMatricula->fecha_nac),8,2)}}
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 3 && $alumno->matriculas[3]->apoderadoMatricula !== null && $alumno->matriculas[3]->apoderadoMatricula->fecha_nac != null)
                                                {{substr(strval($alumno->matriculas[3]->apoderadoMatricula->fecha_nac),5,2)}}
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 3 && $alumno->matriculas[3]->apoderadoMatricula !== null && $alumno->matriculas[3]->apoderadoMatricula->fecha_nac != null)
                                                {{substr(strval($alumno->matriculas[3]->apoderadoMatricula->fecha_nac),0,4)}}
                                            @endif 
                                        </div>
                                    </td>
                                </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaFondoGrisBold4L" style="width: 30%;">Día</td>
                                    <td class="celdaFondoGrisBold4L" style="width: 30%;">Mes</td>
                                    <td class="celdaFondoGrisBold4L" style="width: 40%;">Año</td>
                                </tr>
                                <tr>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 4 && $alumno->matriculas[4]->apoderadoMatricula !== null && $alumno->matriculas[4]->apoderadoMatricula->fecha_nac != null)
                                                {{substr(strval($alumno->matriculas[4]->apoderadoMatricula->fecha_nac),8,2)}}
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 4 && $alumno->matriculas[4]->apoderadoMatricula !== null && $alumno->matriculas[4]->apoderadoMatricula->fecha_nac != null)
                                                {{substr(strval($alumno->matriculas[4]->apoderadoMatricula->fecha_nac),5,2)}}
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 4 && $alumno->matriculas[4]->apoderadoMatricula !== null && $alumno->matriculas[4]->apoderadoMatricula->fecha_nac != null)
                                                {{substr(strval($alumno->matriculas[4]->apoderadoMatricula->fecha_nac),0,4)}}
                                            @endif 
                                        </div>
                                    </td>
                                </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaFondoGrisBold4L" style="width: 30%;">Día</td>
                                    <td class="celdaFondoGrisBold4L" style="width: 30%;">Mes</td>
                                    <td class="celdaFondoGrisBold4L" style="width: 40%;">Año</td>
                                </tr>
                                <tr>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 5 && $alumno->matriculas[5]->apoderadoMatricula !== null && $alumno->matriculas[5]->apoderadoMatricula->fecha_nac != null)
                                                {{substr(strval($alumno->matriculas[5]->apoderadoMatricula->fecha_nac),8,2)}}
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 5 && $alumno->matriculas[5]->apoderadoMatricula !== null && $alumno->matriculas[5]->apoderadoMatricula->fecha_nac != null)
                                                {{substr(strval($alumno->matriculas[5]->apoderadoMatricula->fecha_nac),5,2)}}
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 5 && $alumno->matriculas[5]->apoderadoMatricula !== null && $alumno->matriculas[5]->apoderadoMatricula->fecha_nac != null)
                                                {{substr(strval($alumno->matriculas[5]->apoderadoMatricula->fecha_nac),0,4)}}
                                            @endif 
                                        </div>
                                    </td>
                                </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaFondoGrisBold4L" style="width: 30%;">Día</td>
                                    <td class="celdaFondoGrisBold4L" style="width: 30%;">Mes</td>
                                    <td class="celdaFondoGrisBold4L" style="width: 40%;">Año</td>
                                </tr>
                                <tr>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 6 && $alumno->matriculas[6]->apoderadoMatricula !== null && $alumno->matriculas[6]->apoderadoMatricula->fecha_nac != null)
                                                {{substr(strval($alumno->matriculas[6]->apoderadoMatricula->fecha_nac),8,2)}}
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 6 && $alumno->matriculas[6]->apoderadoMatricula !== null && $alumno->matriculas[6]->apoderadoMatricula->fecha_nac != null)
                                                {{substr(strval($alumno->matriculas[6]->apoderadoMatricula->fecha_nac),5,2)}}
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 6 && $alumno->matriculas[6]->apoderadoMatricula !== null && $alumno->matriculas[6]->apoderadoMatricula->fecha_nac != null)
                                                {{substr(strval($alumno->matriculas[6]->apoderadoMatricula->fecha_nac),0,4)}}
                                            @endif 
                                        </div>
                                    </td>
                                </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaFondoGrisBold4L" style="width: 30%;">Día</td>
                                    <td class="celdaFondoGrisBold4L" style="width: 30%;">Mes</td>
                                    <td class="celdaFondoGrisBold4L" style="width: 40%;">Año</td>
                                </tr>
                                <tr>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 7 && $alumno->matriculas[7]->apoderadoMatricula !== null && $alumno->matriculas[7]->apoderadoMatricula->fecha_nac != null)
                                                {{substr(strval($alumno->matriculas[7]->apoderadoMatricula->fecha_nac),8,2)}}
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 7 && $alumno->matriculas[7]->apoderadoMatricula !== null && $alumno->matriculas[7]->apoderadoMatricula->fecha_nac != null)
                                                {{substr(strval($alumno->matriculas[7]->apoderadoMatricula->fecha_nac),5,2)}}
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 7 && $alumno->matriculas[7]->apoderadoMatricula !== null && $alumno->matriculas[7]->apoderadoMatricula->fecha_nac != null)
                                                {{substr(strval($alumno->matriculas[7]->apoderadoMatricula->fecha_nac),0,4)}}
                                            @endif 
                                        </div>
                                    </td>
                                </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaFondoGrisBold4L" style="width: 30%;">Día</td>
                                    <td class="celdaFondoGrisBold4L" style="width: 30%;">Mes</td>
                                    <td class="celdaFondoGrisBold4L" style="width: 40%;">Año</td>
                                </tr>
                                <tr>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 8 && $alumno->matriculas[8]->apoderadoMatricula !== null && $alumno->matriculas[8]->apoderadoMatricula->fecha_nac != null)
                                                {{substr(strval($alumno->matriculas[8]->apoderadoMatricula->fecha_nac),8,2)}}
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 8 && $alumno->matriculas[8]->apoderadoMatricula !== null && $alumno->matriculas[8]->apoderadoMatricula->fecha_nac != null)
                                                {{substr(strval($alumno->matriculas[8]->apoderadoMatricula->fecha_nac),5,2)}}
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 8 && $alumno->matriculas[8]->apoderadoMatricula !== null && $alumno->matriculas[8]->apoderadoMatricula->fecha_nac != null)
                                                {{substr(strval($alumno->matriculas[8]->apoderadoMatricula->fecha_nac),0,4)}}
                                            @endif 
                                        </div>
                                    </td>
                                </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaFondoGrisBold4L" style="width: 30%;">Día</td>
                                    <td class="celdaFondoGrisBold4L" style="width: 30%;">Mes</td>
                                    <td class="celdaFondoGrisBold4L" style="width: 40%;">Año</td>
                                </tr>
                                <tr>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 9 && $alumno->matriculas[9]->apoderadoMatricula !== null && $alumno->matriculas[9]->apoderadoMatricula->fecha_nac != null)
                                                {{substr(strval($alumno->matriculas[9]->apoderadoMatricula->fecha_nac),8,2)}}
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 9 && $alumno->matriculas[9]->apoderadoMatricula !== null && $alumno->matriculas[9]->apoderadoMatricula->fecha_nac != null)
                                                {{substr(strval($alumno->matriculas[9]->apoderadoMatricula->fecha_nac),5,2)}}
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 9 && $alumno->matriculas[9]->apoderadoMatricula !== null && $alumno->matriculas[9]->apoderadoMatricula->fecha_nac != null)
                                                {{substr(strval($alumno->matriculas[9]->apoderadoMatricula->fecha_nac),0,4)}}
                                            @endif 
                                        </div>
                                    </td>
                                </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaFondoGrisBold4L" style="width: 30%;">Día</td>
                                    <td class="celdaFondoGrisBold4L" style="width: 30%;">Mes</td>
                                    <td class="celdaFondoGrisBold4L" style="width: 40%;">Año</td>
                                </tr>
                                <tr>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 10 && $alumno->matriculas[10]->apoderadoMatricula !== null && $alumno->matriculas[10]->apoderadoMatricula->fecha_nac != null)
                                                {{substr(strval($alumno->matriculas[10]->apoderadoMatricula->fecha_nac),8,2)}}
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 10 && $alumno->matriculas[10]->apoderadoMatricula !== null && $alumno->matriculas[10]->apoderadoMatricula->fecha_nac != null)
                                                {{substr(strval($alumno->matriculas[10]->apoderadoMatricula->fecha_nac),5,2)}}
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 10 && $alumno->matriculas[10]->apoderadoMatricula !== null && $alumno->matriculas[10]->apoderadoMatricula->fecha_nac != null)
                                                {{substr(strval($alumno->matriculas[10]->apoderadoMatricula->fecha_nac),0,4)}}
                                            @endif 
                                        </div>
                                    </td>
                                </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaFondoGrisBold4L" style="width: 30%;">Día</td>
                                    <td class="celdaFondoGrisBold4L" style="width: 30%;">Mes</td>
                                    <td class="celdaFondoGrisBold4L" style="width: 40%;">Año</td>
                                </tr>
                                <tr>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 11 && $alumno->matriculas[11]->apoderadoMatricula !== null && $alumno->matriculas[11]->apoderadoMatricula->fecha_nac != null)
                                                {{substr(strval($alumno->matriculas[11]->apoderadoMatricula->fecha_nac),8,2)}}
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 11 && $alumno->matriculas[11]->apoderadoMatricula !== null && $alumno->matriculas[11]->apoderadoMatricula->fecha_nac != null)
                                                {{substr(strval($alumno->matriculas[11]->apoderadoMatricula->fecha_nac),5,2)}}
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 11 && $alumno->matriculas[11]->apoderadoMatricula !== null && $alumno->matriculas[11]->apoderadoMatricula->fecha_nac != null)
                                                {{substr(strval($alumno->matriculas[11]->apoderadoMatricula->fecha_nac),0,4)}}
                                            @endif 
                                        </div>
                                    </td>
                                </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaFondoGrisBold4L" style="width: 30%;">Día</td>
                                    <td class="celdaFondoGrisBold4L" style="width: 30%;">Mes</td>
                                    <td class="celdaFondoGrisBold4L" style="width: 40%;">Año</td>
                                </tr>
                                <tr>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 12 && $alumno->matriculas[12]->apoderadoMatricula !== null && $alumno->matriculas[12]->apoderadoMatricula->fecha_nac != null)
                                                {{substr(strval($alumno->matriculas[12]->apoderadoMatricula->fecha_nac),8,2)}}
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 12 && $alumno->matriculas[12]->apoderadoMatricula !== null && $alumno->matriculas[12]->apoderadoMatricula->fecha_nac != null)
                                                {{substr(strval($alumno->matriculas[12]->apoderadoMatricula->fecha_nac),5,2)}}
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 12 && $alumno->matriculas[12]->apoderadoMatricula !== null && $alumno->matriculas[12]->apoderadoMatricula->fecha_nac != null)
                                                {{substr(strval($alumno->matriculas[12]->apoderadoMatricula->fecha_nac),0,4)}}
                                            @endif 
                                        </div>
                                    </td>
                                </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaFondoGrisBold4L" style="width: 30%;">Día</td>
                                    <td class="celdaFondoGrisBold4L" style="width: 30%;">Mes</td>
                                    <td class="celdaFondoGrisBold4L" style="width: 40%;">Año</td>
                                </tr>
                                <tr>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 13 && $alumno->matriculas[13]->apoderadoMatricula !== null && $alumno->matriculas[13]->apoderadoMatricula->fecha_nac != null)
                                                {{substr(strval($alumno->matriculas[13]->apoderadoMatricula->fecha_nac),8,2)}}
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 13 && $alumno->matriculas[13]->apoderadoMatricula !== null && $alumno->matriculas[13]->apoderadoMatricula->fecha_nac != null)
                                                {{substr(strval($alumno->matriculas[13]->apoderadoMatricula->fecha_nac),5,2)}}
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 13 && $alumno->matriculas[13]->apoderadoMatricula !== null && $alumno->matriculas[13]->apoderadoMatricula->fecha_nac != null)
                                                {{substr(strval($alumno->matriculas[13]->apoderadoMatricula->fecha_nac),0,4)}}
                                            @endif 
                                        </div>
                                    </td>
                                </tr>
                                </table>
                            </td>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaFondoGrisBold4L" style="width: 30%;">Día</td>
                                    <td class="celdaFondoGrisBold4L" style="width: 30%;">Mes</td>
                                    <td class="celdaFondoGrisBold4L" style="width: 40%;">Año</td>
                                </tr>
                                <tr>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 14 && $alumno->matriculas[14]->apoderadoMatricula !== null && $alumno->matriculas[14]->apoderadoMatricula->fecha_nac != null)
                                                {{substr(strval($alumno->matriculas[14]->apoderadoMatricula->fecha_nac),8,2)}}
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 14 && $alumno->matriculas[14]->apoderadoMatricula !== null && $alumno->matriculas[14]->apoderadoMatricula->fecha_nac != null)
                                                {{substr(strval($alumno->matriculas[14]->apoderadoMatricula->fecha_nac),5,2)}}
                                            @endif 
                                        </div>
                                    </td>
                                    <td class="celdaNormal5">
                                        <div style="height:10.29px; overflow:hidden;">
                                            @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 14 && $alumno->matriculas[14]->apoderadoMatricula !== null && $alumno->matriculas[14]->apoderadoMatricula->fecha_nac != null)
                                                {{substr(strval($alumno->matriculas[14]->apoderadoMatricula->fecha_nac),0,4)}}
                                            @endif 
                                        </div>
                                    </td>
                                </tr>
                                </table>
                            </td>
                           
                        </tr>

                        <tr>
                            <td class="celdaNormal5">
                                <div style="height:11.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 0 && $alumno->matriculas[0]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[0]->apoderadoMatricula->instruccion)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 1 && $alumno->matriculas[1]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[1]->apoderadoMatricula->instruccion)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 2 && $alumno->matriculas[2]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[2]->apoderadoMatricula->instruccion)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 3 && $alumno->matriculas[3]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[3]->apoderadoMatricula->instruccion)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 4 && $alumno->matriculas[4]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[4]->apoderadoMatricula->instruccion)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 5 && $alumno->matriculas[5]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[5]->apoderadoMatricula->instruccion)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 6 && $alumno->matriculas[6]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[6]->apoderadoMatricula->instruccion)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 7 && $alumno->matriculas[7]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[7]->apoderadoMatricula->instruccion)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 8 && $alumno->matriculas[8]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[8]->apoderadoMatricula->instruccion)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 9 && $alumno->matriculas[9]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[9]->apoderadoMatricula->instruccion)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 10 && $alumno->matriculas[10]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[10]->apoderadoMatricula->instruccion)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 11 && $alumno->matriculas[11]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[11]->apoderadoMatricula->instruccion)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 12 && $alumno->matriculas[12]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[12]->apoderadoMatricula->instruccion)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 13 && $alumno->matriculas[13]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[13]->apoderadoMatricula->instruccion)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 14 && $alumno->matriculas[14]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[14]->apoderadoMatricula->instruccion)}}
                                    @endif 
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="celdaNormal5">
                                <div style="height:11.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 0 && $alumno->matriculas[0]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[0]->apoderadoMatricula->ocupacion)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 1 && $alumno->matriculas[1]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[1]->apoderadoMatricula->ocupacion)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 2 && $alumno->matriculas[2]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[2]->apoderadoMatricula->ocupacion)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 3 && $alumno->matriculas[3]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[3]->apoderadoMatricula->ocupacion)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 4 && $alumno->matriculas[4]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[4]->apoderadoMatricula->ocupacion)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 5 && $alumno->matriculas[5]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[5]->apoderadoMatricula->ocupacion)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 6 && $alumno->matriculas[6]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[6]->apoderadoMatricula->ocupacion)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 7 && $alumno->matriculas[7]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[7]->apoderadoMatricula->ocupacion)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 8 && $alumno->matriculas[8]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[8]->apoderadoMatricula->ocupacion)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 9 && $alumno->matriculas[9]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[9]->apoderadoMatricula->ocupacion)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 10 && $alumno->matriculas[10]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[10]->apoderadoMatricula->ocupacion)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 11 && $alumno->matriculas[11]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[11]->apoderadoMatricula->ocupacion)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 12 && $alumno->matriculas[12]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[12]->apoderadoMatricula->ocupacion)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 13 && $alumno->matriculas[13]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[13]->apoderadoMatricula->ocupacion)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 14 && $alumno->matriculas[14]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[14]->apoderadoMatricula->ocupacion)}}
                                    @endif 
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="celdaNormal5">
                                <div style="height:11.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 0 && $alumno->matriculas[0]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[0]->apoderadoMatricula->direccion)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 1 && $alumno->matriculas[1]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[1]->apoderadoMatricula->direccion)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 2 && $alumno->matriculas[2]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[2]->apoderadoMatricula->direccion)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 3 && $alumno->matriculas[3]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[3]->apoderadoMatricula->direccion)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 4 && $alumno->matriculas[4]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[4]->apoderadoMatricula->direccion)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 5 && $alumno->matriculas[5]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[5]->apoderadoMatricula->direccion)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 6 && $alumno->matriculas[6]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[6]->apoderadoMatricula->direccion)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 7 && $alumno->matriculas[7]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[7]->apoderadoMatricula->direccion)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 8 && $alumno->matriculas[8]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[8]->apoderadoMatricula->direccion)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 9 && $alumno->matriculas[9]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[9]->apoderadoMatricula->direccion)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 10 && $alumno->matriculas[10]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[10]->apoderadoMatricula->direccion)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 11 && $alumno->matriculas[11]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[11]->apoderadoMatricula->direccion)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 12 && $alumno->matriculas[12]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[12]->apoderadoMatricula->direccion)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 13 && $alumno->matriculas[13]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[13]->apoderadoMatricula->direccion)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 14 && $alumno->matriculas[14]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[14]->apoderadoMatricula->direccion)}}
                                    @endif 
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 0 && $alumno->matriculas[0]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[0]->apoderadoMatricula->telefono)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.7px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 1 && $alumno->matriculas[1]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[1]->apoderadoMatricula->telefono)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 2 && $alumno->matriculas[2]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[2]->apoderadoMatricula->telefono)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 3 && $alumno->matriculas[3]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[3]->apoderadoMatricula->telefono)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 4 && $alumno->matriculas[4]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[4]->apoderadoMatricula->telefono)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 5 && $alumno->matriculas[5]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[5]->apoderadoMatricula->telefono)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 6 && $alumno->matriculas[6]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[6]->apoderadoMatricula->telefono)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 7 && $alumno->matriculas[7]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[7]->apoderadoMatricula->telefono)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 8 && $alumno->matriculas[8]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[8]->apoderadoMatricula->telefono)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 9 && $alumno->matriculas[9]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[9]->apoderadoMatricula->telefono)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 10 && $alumno->matriculas[10]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[10]->apoderadoMatricula->telefono)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 11 && $alumno->matriculas[11]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[11]->apoderadoMatricula->telefono)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 12 && $alumno->matriculas[12]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[12]->apoderadoMatricula->telefono)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 13 && $alumno->matriculas[13]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[13]->apoderadoMatricula->telefono)}}
                                    @endif 
                                </div>
                            </td>
                            <td class="celdaNormal5">
                                <div style="height:10.29px; overflow:hidden;">
                                    @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 14 && $alumno->matriculas[14]->apoderadoMatricula !== null)
                                        {{strval($alumno->matriculas[14]->apoderadoMatricula->telefono)}}
                                    @endif 
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
          </table>



















          <table class="table" style="margin-bottom: 0px; width:100%; margin-top:0.1cm;">
            <tr>
                <td colspan="2" class="titles">5. Supervivencia de los Padres</td>
            </tr>
            <tr>
                <td class="titles" style="width: 14%"></td>
                <td class="titles" style="width: 84%"></td>
            </tr>
            <tr>
                <td style="vertical-align: top; width: 14%; ">
                    <table class="table" style="margin-bottom: 0px; width:99%;">
                        <tr>
                            <td class="celdaFondoGrisBold2">Vive</td>
                        </tr>
                        <tr>
                            <td class="celdaFondoGrisBold4L">Padre</td>
                        </tr>
                        <tr>
                            <td class="celdaFondoGrisBold4L">Madre</td>
                        </tr>
                    </table>
                </td>

                <td style="vertical-align: top;">
                    <table class="table" style="margin-bottom: 0px; width:100%;">
                        <tr>
                            <td class="celdaFondoGrisBold2" style="width: 6.6666666%">
                                @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 0)
                                    {{strval($alumno->matriculas[0]->ciclo->year)}}
                                @else
                                    20___
                                @endif 
                            </td>
                            <td class="celdaFondoGrisBold2" style="width: 6.6666666%">
                                @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 1)
                                    {{strval($alumno->matriculas[1]->ciclo->year)}}
                                @else
                                    20___
                                @endif 
                            </td>
                            <td class="celdaFondoGrisBold2" style="width: 6.6666666%">
                                @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 2)
                                    {{strval($alumno->matriculas[2]->ciclo->year)}}
                                @else
                                    20___
                                @endif 
                            </td>
                            <td class="celdaFondoGrisBold2" style="width: 6.6666666%">
                                @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 3)
                                    {{strval($alumno->matriculas[3]->ciclo->year)}}
                                @else
                                    20___
                                @endif 
                            </td>
                            <td class="celdaFondoGrisBold2" style="width: 6.6666666%">
                                @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 4)
                                    {{strval($alumno->matriculas[4]->ciclo->year)}}
                                @else
                                    20___
                                @endif 
                            </td>
                            <td class="celdaFondoGrisBold2" style="width: 6.6666666%">
                                @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 5)
                                    {{strval($alumno->matriculas[5]->ciclo->year)}}
                                @else
                                    20___
                                @endif 
                            </td>
                            <td class="celdaFondoGrisBold2" style="width: 6.6666666%">
                                @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 6)
                                    {{strval($alumno->matriculas[6]->ciclo->year)}}
                                @else
                                    20___
                                @endif 
                            </td>
                            <td class="celdaFondoGrisBold2" style="width: 6.6666666%">
                                @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 7)
                                    {{strval($alumno->matriculas[7]->ciclo->year)}}
                                @else
                                    20___
                                @endif 
                            </td>
                            <td class="celdaFondoGrisBold2" style="width: 6.6666666%">
                                @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 8)
                                    {{strval($alumno->matriculas[8]->ciclo->year)}}
                                @else
                                    20___
                                @endif 
                            </td>
                            <td class="celdaFondoGrisBold2" style="width: 6.6666666%">
                                @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 9)
                                    {{strval($alumno->matriculas[9]->ciclo->year)}}
                                @else
                                    20___
                                @endif 
                            </td>
                            <td class="celdaFondoGrisBold2" style="width: 6.6666666%">
                                @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 10)
                                    {{strval($alumno->matriculas[10]->ciclo->year)}}
                                @else
                                    20___
                                @endif 
                            </td>
                            <td class="celdaFondoGrisBold2" style="width: 6.6666666%">
                                @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 11)
                                    {{strval($alumno->matriculas[11]->ciclo->year)}}
                                @else
                                    20___
                                @endif 
                            </td>
                            <td class="celdaFondoGrisBold2" style="width: 6.6666666%">
                                @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 12)
                                    {{strval($alumno->matriculas[12]->ciclo->year)}}
                                @else
                                    20___
                                @endif 
                            </td>
                            <td class="celdaFondoGrisBold2" style="width: 6.6666666%">
                                @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 13)
                                    {{strval($alumno->matriculas[13]->ciclo->year)}}
                                @else
                                    20___
                                @endif 
                            </td>
                            <td class="celdaFondoGrisBold2" style="width: 6.6666666%">
                                @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 14)
                                    {{strval($alumno->matriculas[14]->ciclo->year)}}
                                @else
                                    20___
                                @endif 
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaFondoGrisBold4L" style="width: 25%;">Si</td>
                                    <td class="celdaNormal5" style="width: 25%;">
                                        @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 0 && intval($alumno->matriculas[0]->vive_padre) === 1)
                                            X
                                        @endif 
                                    </td>
                                    <td class="celdaFondoGrisBold4L" style="width: 25%;">No</td>
                                    <td class="celdaNormal5" style="width: 25%;">
                                        @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 0 && intval($alumno->matriculas[0]->vive_padre) === 0)
                                            X
                                        @endif 
                                    </td>
                                </tr>
                                </table>
                            </td> 
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaFondoGrisBold4L" style="width: 25%;">Si</td>
                                    <td class="celdaNormal5" style="width: 25%;">
                                        @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 1 && intval($alumno->matriculas[1]->vive_padre) === 1)
                                            X
                                        @endif 
                                    </td>
                                    <td class="celdaFondoGrisBold4L" style="width: 25%;">No</td>
                                    <td class="celdaNormal5" style="width: 25%;">
                                        @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 1 && intval($alumno->matriculas[1]->vive_padre) === 0)
                                            X
                                        @endif 
                                    </td>
                                </tr>
                                </table>
                            </td> 
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaFondoGrisBold4L" style="width: 25%;">Si</td>
                                    <td class="celdaNormal5" style="width: 25%;">
                                        @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 2 && intval($alumno->matriculas[2]->vive_padre) === 1)
                                            X
                                        @endif 
                                    </td>
                                    <td class="celdaFondoGrisBold4L" style="width: 25%;">No</td>
                                    <td class="celdaNormal5" style="width: 25%;">
                                        @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 2 && intval($alumno->matriculas[2]->vive_padre) === 0)
                                            X
                                        @endif 
                                    </td>
                                </tr>
                                </table>
                            </td> 
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaFondoGrisBold4L" style="width: 25%;">Si</td>
                                    <td class="celdaNormal5" style="width: 25%;">
                                        @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 3 && intval($alumno->matriculas[3]->vive_padre) === 1)
                                            X
                                        @endif 
                                    </td>
                                    <td class="celdaFondoGrisBold4L" style="width: 25%;">No</td>
                                    <td class="celdaNormal5" style="width: 25%;">
                                        @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 3 && intval($alumno->matriculas[3]->vive_padre) === 0)
                                            X
                                        @endif 
                                    </td>
                                </tr>
                                </table>
                            </td> 
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaFondoGrisBold4L" style="width: 25%;">Si</td>
                                    <td class="celdaNormal5" style="width: 25%;">
                                        @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 4 && intval($alumno->matriculas[4]->vive_padre) === 1)
                                            X
                                        @endif 
                                    </td>
                                    <td class="celdaFondoGrisBold4L" style="width: 25%;">No</td>
                                    <td class="celdaNormal5" style="width: 25%;">
                                        @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 4 && intval($alumno->matriculas[4]->vive_padre) === 0)
                                            X
                                        @endif 
                                    </td>
                                </tr>
                                </table>
                            </td> 
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaFondoGrisBold4L" style="width: 25%;">Si</td>
                                    <td class="celdaNormal5" style="width: 25%;">
                                        @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 5 && intval($alumno->matriculas[5]->vive_padre) === 1)
                                            X
                                        @endif 
                                    </td>
                                    <td class="celdaFondoGrisBold4L" style="width: 25%;">No</td>
                                    <td class="celdaNormal5" style="width: 25%;">
                                        @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 5 && intval($alumno->matriculas[5]->vive_padre) === 0)
                                            X
                                        @endif 
                                    </td>
                                </tr>
                                </table>
                            </td> 
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaFondoGrisBold4L" style="width: 25%;">Si</td>
                                    <td class="celdaNormal5" style="width: 25%;">
                                        @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 6 && intval($alumno->matriculas[6]->vive_padre) === 1)
                                            X
                                        @endif 
                                    </td>
                                    <td class="celdaFondoGrisBold4L" style="width: 25%;">No</td>
                                    <td class="celdaNormal5" style="width: 25%;">
                                        @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 6 && intval($alumno->matriculas[6]->vive_padre) === 0)
                                            X
                                        @endif 
                                    </td>
                                </tr>
                                </table>
                            </td> 
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaFondoGrisBold4L" style="width: 25%;">Si</td>
                                    <td class="celdaNormal5" style="width: 25%;">
                                        @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 7 && intval($alumno->matriculas[7]->vive_padre) === 1)
                                            X
                                        @endif 
                                    </td>
                                    <td class="celdaFondoGrisBold4L" style="width: 25%;">No</td>
                                    <td class="celdaNormal5" style="width: 25%;">
                                        @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 7 && intval($alumno->matriculas[7]->vive_padre) === 0)
                                            X
                                        @endif 
                                    </td>
                                </tr>
                                </table>
                            </td> 
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaFondoGrisBold4L" style="width: 25%;">Si</td>
                                    <td class="celdaNormal5" style="width: 25%;">
                                        @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 8 && intval($alumno->matriculas[8]->vive_padre) === 1)
                                            X
                                        @endif 
                                    </td>
                                    <td class="celdaFondoGrisBold4L" style="width: 25%;">No</td>
                                    <td class="celdaNormal5" style="width: 25%;">
                                        @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 8 && intval($alumno->matriculas[8]->vive_padre) === 0)
                                            X
                                        @endif 
                                    </td>
                                </tr>
                                </table>
                            </td> 
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaFondoGrisBold4L" style="width: 25%;">Si</td>
                                    <td class="celdaNormal5" style="width: 25%;">
                                        @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 9 && intval($alumno->matriculas[9]->vive_padre) === 1)
                                            X
                                        @endif 
                                    </td>
                                    <td class="celdaFondoGrisBold4L" style="width: 25%;">No</td>
                                    <td class="celdaNormal5" style="width: 25%;">
                                        @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 9 && intval($alumno->matriculas[9]->vive_padre) === 0)
                                            X
                                        @endif 
                                    </td>
                                </tr>
                                </table>
                            </td> 
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaFondoGrisBold4L" style="width: 25%;">Si</td>
                                    <td class="celdaNormal5" style="width: 25%;">
                                        @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 10 && intval($alumno->matriculas[10]->vive_padre) === 1)
                                            X
                                        @endif 
                                    </td>
                                    <td class="celdaFondoGrisBold4L" style="width: 25%;">No</td>
                                    <td class="celdaNormal5" style="width: 25%;">
                                        @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 10 && intval($alumno->matriculas[10]->vive_padre) === 0)
                                            X
                                        @endif 
                                    </td>
                                </tr>
                                </table>
                            </td> 
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaFondoGrisBold4L" style="width: 25%;">Si</td>
                                    <td class="celdaNormal5" style="width: 25%;">
                                        @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 11 && intval($alumno->matriculas[11]->vive_padre) === 1)
                                            X
                                        @endif 
                                    </td>
                                    <td class="celdaFondoGrisBold4L" style="width: 25%;">No</td>
                                    <td class="celdaNormal5" style="width: 25%;">
                                        @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 11 && intval($alumno->matriculas[11]->vive_padre) === 0)
                                            X
                                        @endif 
                                    </td>
                                </tr>
                                </table>
                            </td> 
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaFondoGrisBold4L" style="width: 25%;">Si</td>
                                    <td class="celdaNormal5" style="width: 25%;">
                                        @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 12 && intval($alumno->matriculas[12]->vive_padre) === 1)
                                            X
                                        @endif 
                                    </td>
                                    <td class="celdaFondoGrisBold4L" style="width: 25%;">No</td>
                                    <td class="celdaNormal5" style="width: 25%;">
                                        @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 12 && intval($alumno->matriculas[12]->vive_padre) === 0)
                                            X
                                        @endif 
                                    </td>
                                </tr>
                                </table>
                            </td> 
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaFondoGrisBold4L" style="width: 25%;">Si</td>
                                    <td class="celdaNormal5" style="width: 25%;">
                                        @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 13 && intval($alumno->matriculas[13]->vive_padre) === 1)
                                            X
                                        @endif 
                                    </td>
                                    <td class="celdaFondoGrisBold4L" style="width: 25%;">No</td>
                                    <td class="celdaNormal5" style="width: 25%;">
                                        @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 13 && intval($alumno->matriculas[13]->vive_padre) === 0)
                                            X
                                        @endif 
                                    </td>
                                </tr>
                                </table>
                            </td> 
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaFondoGrisBold4L" style="width: 25%;">Si</td>
                                    <td class="celdaNormal5" style="width: 25%;">
                                        @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 14 && intval($alumno->matriculas[14]->vive_padre) === 1)
                                            X
                                        @endif 
                                    </td>
                                    <td class="celdaFondoGrisBold4L" style="width: 25%;">No</td>
                                    <td class="celdaNormal5" style="width: 25%;">
                                        @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 14 && intval($alumno->matriculas[14]->vive_padre) === 0)
                                            X
                                        @endif 
                                    </td>
                                </tr>
                                </table>
                            </td> 
                        </tr>
                        <tr>
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaFondoGrisBold4L" style="width: 25%;">Si</td>
                                    <td class="celdaNormal5" style="width: 25%;">
                                        @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 0 && intval($alumno->matriculas[0]->vive_madre) === 1)
                                            X
                                        @endif 
                                    </td>
                                    <td class="celdaFondoGrisBold4L" style="width: 25%;">No</td>
                                    <td class="celdaNormal5" style="width: 25%;">
                                        @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 0 && intval($alumno->matriculas[0]->vive_madre) === 0)
                                            X
                                        @endif 
                                    </td>
                                </tr>
                                </table>
                            </td> 
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaFondoGrisBold4L" style="width: 25%;">Si</td>
                                    <td class="celdaNormal5" style="width: 25%;">
                                        @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 1 && intval($alumno->matriculas[1]->vive_madre) === 1)
                                            X
                                        @endif 
                                    </td>
                                    <td class="celdaFondoGrisBold4L" style="width: 25%;">No</td>
                                    <td class="celdaNormal5" style="width: 25%;">
                                        @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 1 && intval($alumno->matriculas[1]->vive_madre) === 0)
                                            X
                                        @endif 
                                    </td>
                                </tr>
                                </table>
                            </td> 
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaFondoGrisBold4L" style="width: 25%;">Si</td>
                                    <td class="celdaNormal5" style="width: 25%;">
                                        @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 2 && intval($alumno->matriculas[2]->vive_madre) === 1)
                                            X
                                        @endif 
                                    </td>
                                    <td class="celdaFondoGrisBold4L" style="width: 25%;">No</td>
                                    <td class="celdaNormal5" style="width: 25%;">
                                        @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 2 && intval($alumno->matriculas[2]->vive_madre) === 0)
                                            X
                                        @endif 
                                    </td>
                                </tr>
                                </table>
                            </td> 
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaFondoGrisBold4L" style="width: 25%;">Si</td>
                                    <td class="celdaNormal5" style="width: 25%;">
                                        @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 3 && intval($alumno->matriculas[3]->vive_madre) === 1)
                                            X
                                        @endif 
                                    </td>
                                    <td class="celdaFondoGrisBold4L" style="width: 25%;">No</td>
                                    <td class="celdaNormal5" style="width: 25%;">
                                        @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 3 && intval($alumno->matriculas[3]->vive_madre) === 0)
                                            X
                                        @endif 
                                    </td>
                                </tr>
                                </table>
                            </td> 
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaFondoGrisBold4L" style="width: 25%;">Si</td>
                                    <td class="celdaNormal5" style="width: 25%;">
                                        @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 4 && intval($alumno->matriculas[4]->vive_madre) === 1)
                                            X
                                        @endif 
                                    </td>
                                    <td class="celdaFondoGrisBold4L" style="width: 25%;">No</td>
                                    <td class="celdaNormal5" style="width: 25%;">
                                        @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 4 && intval($alumno->matriculas[4]->vive_madre) === 0)
                                            X
                                        @endif 
                                    </td>
                                </tr>
                                </table>
                            </td> 
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaFondoGrisBold4L" style="width: 25%;">Si</td>
                                    <td class="celdaNormal5" style="width: 25%;">
                                        @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 5 && intval($alumno->matriculas[5]->vive_madre) === 1)
                                            X
                                        @endif 
                                    </td>
                                    <td class="celdaFondoGrisBold4L" style="width: 25%;">No</td>
                                    <td class="celdaNormal5" style="width: 25%;">
                                        @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 5 && intval($alumno->matriculas[5]->vive_madre) === 0)
                                            X
                                        @endif 
                                    </td>
                                </tr>
                                </table>
                            </td> 
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaFondoGrisBold4L" style="width: 25%;">Si</td>
                                    <td class="celdaNormal5" style="width: 25%;">
                                        @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 6 && intval($alumno->matriculas[6]->vive_madre) === 1)
                                            X
                                        @endif 
                                    </td>
                                    <td class="celdaFondoGrisBold4L" style="width: 25%;">No</td>
                                    <td class="celdaNormal5" style="width: 25%;">
                                        @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 6 && intval($alumno->matriculas[6]->vive_madre) === 0)
                                            X
                                        @endif 
                                    </td>
                                </tr>
                                </table>
                            </td> 
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaFondoGrisBold4L" style="width: 25%;">Si</td>
                                    <td class="celdaNormal5" style="width: 25%;">
                                        @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 7 && intval($alumno->matriculas[7]->vive_madre) === 1)
                                            X
                                        @endif 
                                    </td>
                                    <td class="celdaFondoGrisBold4L" style="width: 25%;">No</td>
                                    <td class="celdaNormal5" style="width: 25%;">
                                        @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 7 && intval($alumno->matriculas[7]->vive_madre) === 0)
                                            X
                                        @endif 
                                    </td>
                                </tr>
                                </table>
                            </td> 
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaFondoGrisBold4L" style="width: 25%;">Si</td>
                                    <td class="celdaNormal5" style="width: 25%;">
                                        @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 8 && intval($alumno->matriculas[8]->vive_madre) === 1)
                                            X
                                        @endif 
                                    </td>
                                    <td class="celdaFondoGrisBold4L" style="width: 25%;">No</td>
                                    <td class="celdaNormal5" style="width: 25%;">
                                        @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 8 && intval($alumno->matriculas[8]->vive_madre) === 0)
                                            X
                                        @endif 
                                    </td>
                                </tr>
                                </table>
                            </td> 
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaFondoGrisBold4L" style="width: 25%;">Si</td>
                                    <td class="celdaNormal5" style="width: 25%;">
                                        @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 9 && intval($alumno->matriculas[9]->vive_madre) === 1)
                                            X
                                        @endif 
                                    </td>
                                    <td class="celdaFondoGrisBold4L" style="width: 25%;">No</td>
                                    <td class="celdaNormal5" style="width: 25%;">
                                        @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 9 && intval($alumno->matriculas[9]->vive_madre) === 0)
                                            X
                                        @endif 
                                    </td>
                                </tr>
                                </table>
                            </td> 
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaFondoGrisBold4L" style="width: 25%;">Si</td>
                                    <td class="celdaNormal5" style="width: 25%;">
                                        @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 10 && intval($alumno->matriculas[10]->vive_madre) === 1)
                                            X
                                        @endif 
                                    </td>
                                    <td class="celdaFondoGrisBold4L" style="width: 25%;">No</td>
                                    <td class="celdaNormal5" style="width: 25%;">
                                        @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 10 && intval($alumno->matriculas[10]->vive_madre) === 0)
                                            X
                                        @endif 
                                    </td>
                                </tr>
                                </table>
                            </td> 
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaFondoGrisBold4L" style="width: 25%;">Si</td>
                                    <td class="celdaNormal5" style="width: 25%;">
                                        @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 11 && intval($alumno->matriculas[11]->vive_madre) === 1)
                                            X
                                        @endif 
                                    </td>
                                    <td class="celdaFondoGrisBold4L" style="width: 25%;">No</td>
                                    <td class="celdaNormal5" style="width: 25%;">
                                        @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 11 && intval($alumno->matriculas[11]->vive_madre) === 0)
                                            X
                                        @endif 
                                    </td>
                                </tr>
                                </table>
                            </td> 
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaFondoGrisBold4L" style="width: 25%;">Si</td>
                                    <td class="celdaNormal5" style="width: 25%;">
                                        @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 12 && intval($alumno->matriculas[12]->vive_madre) === 1)
                                            X
                                        @endif 
                                    </td>
                                    <td class="celdaFondoGrisBold4L" style="width: 25%;">No</td>
                                    <td class="celdaNormal5" style="width: 25%;">
                                        @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 12 && intval($alumno->matriculas[12]->vive_madre) === 0)
                                            X
                                        @endif 
                                    </td>
                                </tr>
                                </table>
                            </td> 
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaFondoGrisBold4L" style="width: 25%;">Si</td>
                                    <td class="celdaNormal5" style="width: 25%;">
                                        @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 13 && intval($alumno->matriculas[13]->vive_madre) === 1)
                                            X
                                        @endif 
                                    </td>
                                    <td class="celdaFondoGrisBold4L" style="width: 25%;">No</td>
                                    <td class="celdaNormal5" style="width: 25%;">
                                        @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 13 && intval($alumno->matriculas[13]->vive_madre) === 0)
                                            X
                                        @endif 
                                    </td>
                                </tr>
                                </table>
                            </td> 
                            <td style="padding: 0px;">
                                <table class="table" style="margin-bottom: 0px; width:100%;">
                                <tr>
                                    <td class="celdaFondoGrisBold4L" style="width: 25%;">Si</td>
                                    <td class="celdaNormal5" style="width: 25%;">
                                        @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 14 && intval($alumno->matriculas[14]->vive_madre) === 1)
                                            X
                                        @endif 
                                    </td>
                                    <td class="celdaFondoGrisBold4L" style="width: 25%;">No</td>
                                    <td class="celdaNormal5" style="width: 25%;">
                                        @if($alumno !== null && $alumno->matriculas !== null && count($alumno->matriculas) > 14 && intval($alumno->matriculas[14]->vive_madre) === 0)
                                            X
                                        @endif 
                                    </td>
                                </tr>
                                </table>
                            </td> 
                        </tr>
                        
                    </table>
                </td>
            </tr>
          </table>







          <table class="table" style="margin-bottom: 0px; width:100%; margin-top:0.1cm;">
            <tr>
                <td style="width: 35%; font-size:8px; font-weight:normal; vertical-align: top;">
                    <table class="table" style="margin-bottom: 0px; width:100%;">
                        <tr>
                            <td style="vertical-align: top"><b>[1] Modalidad :</b></td>
                            <td>(EBR)Edu.Básica Regular, (EBR-AD)Edu.Básica Regular A Distancia. <br>
                                (EBA)Edu.Básica Alternativa, (EBE)Educación Básica Especial

                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top"><b>[2] Programa (de E.B.A.) :</b></td>
                            <td>PA, Programa de Alfabetización (PA) <br>
                                (PBJ)PEBAJA.Prog.de Educ.Bás.Alter. de Jóvenes y Adultos

                            </td>
                        </tr>
                    </table>
                </td>
                <td style="width: 30%; font-size:8px; font-weight:normal; vertical-align: top;">
                    <table class="table" style="margin-bottom: 0px; width:100%;">
                        <tr>
                            <td style="vertical-align: top"><b>[3] Ciclo :</b></td>
                            <td>Para el caso de EBA:(IN) Inicial, (INT) Intermedio, (AV) Avanzado
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top"><b>[4] Forma :</b></td>
                            <td>(Esc) Escolarizado, (NoEsc) No Escolarizado <br>
                                Para el caso EBA: (P) Presencial, (SP) Semi Presencial, (AD) A distancia
                            </td>
                        </tr>
                    </table>
                </td>
                <td style="width: 35%; font-size:8px; font-weight:normal; vertical-align: top;">
                    <table class="table" style="margin-bottom: 0px; width:100%;">
                        <tr>
                            <td style="vertical-align: top"><b>[5] Turno :</b></td>
                            <td>(M) Mañana, (T) Tarde, (N) Noche
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top"><b>[6] Situación Final  :</b></td>
                            <td>(Marcar "X" donde corresponda) (A) Aprobado, <br>
                                (RR) Requiere Recuperación, (D) Desaprobado, ( R ) Retirado <br>
                                Para el caso de EBA: (RR) Requiere Recuperación, (P) Promovido
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
          </table>

    </div>

