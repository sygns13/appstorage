<!DOCTYPE html>
<html>
<head>
    <title>NÓMINA DE MATRICULA</title>
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}
    <style>
        @page { 
            margin-left: 0.8cm; 
            margin-top: 0.3.2cm;
            margin-bottom: 0.3.2cm;
        }
        /* body { padding: .5in; border: 2in solid orange; } */
        .table{
            border-spacing: 0!important;
        }
        .celdaFondoGrisBold1{
            text-align:center; 
            font-size: 10px; 
            border: 1px solid black; 
            background-color: #dddddd;
            font-weight: bold;
            padding: 0px!important;
        }
        .celdaFondoGrisBold2{
            text-align:center; 
            font-size: 10px; 
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
            font-size: 10px; 
            border: 1px solid black; 
            width: 0.5cm!important;
            height: 14px;
            padding: 0px!important;
        }
    
        .celdaNormalBig{
            text-align:center; 
            font-size: 10px; 
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
        .celdaNormal{
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
            font-size: 10px; 
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
              <th style="vertical-align: top; width: 160px;" >
                <div class="widget-user-image" style="padding: 0px!important; width: 154.3px;" >
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

              <th style="text-align: center;" >
                <p style="font-size: 30px; font-weight:bolder; margin-top: 10px;">NÓMINA DE MATRÍCULA - 2019</p>
            </th>
            <th style="width: 163px;"></th>
            </tr>
          </table>







          <table class="table" style="margin-bottom: 0px; width:100%">
            <tr>
                <td rowspan="2" class="celdaFondoGrisBold1" style="width: 15%; ">Datos de la Instancia de Gestión Educativa Descentralizada (DRE - UGEL)</td>
                <td class="celdaFondoGrisBold1" style="width: 40%; height: 18.2px;">Datos de la Institución Educativa o Programa Educativo</td>
                <td class="celdaFondoGrisBold1" style="width: 20%">Periodo Lectivo</td>
                <td class="celdaFondoGrisBold1" style="width: 20%">Ubicación Geográfica</td>
            </tr>

            <tr>
                <td style="padding: 0px;">
                    <table class="table" style="margin-bottom: 0px; width:100%;">
                        <tr>
                            <td class="celdaFondoGrisBold1" style="width: 23%;height: 18.2px;">Número y/o Nombre</td>
                            <td class="celdaNormalBig" style="width: 57%">86005 RICARDO PALMA CARRILLO</td>
                            <td class="celdaFondoGrisBold1" style="width: 13%">Gestión<sup>(7)</sup></td>
                            <td class="celdaNormalBig" style="width: 7%">PGD</td>
                        </tr>
                    </table>
                </td>

                <td style="padding: 0px;">
                    <table class="table" style="margin-bottom: 0px; width:100%;">
                        <tr>
                            <td class="celdaFondoGrisBold1" style="width: 19%;height: 18.2px;">Inicio</td>
                            <td class="celdaNormalBig" style="width: 33%">11/03/2019</td>
                            <td class="celdaFondoGrisBold1" style="width: 15%">Fin</td>
                            <td class="celdaNormalBig" style="width: 33%">31/12/2019</td>
                        </tr>
                    </table>
                </td>

                <td style="padding: 0px;">
                    <table class="table" style="margin-bottom: 0px; width:100%;">
                        <tr>
                            <td class="celdaFondoGrisBold1" style="width: 18%;height: 18.2px;">Dpto.</td>
                            <td class="celdaNormalBig" style="width: 82%">Ancash</td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr>
                <td style="padding: 0px;">
                    <table class="table" style="margin-bottom: 0px; width:100%;">
                        <tr>
                            <td class="celdaFondoGrisBold1" style="width: 34%;height: 16px;">Código</td>
                            <td class="celdaNormalBig" style="width: 11%">0</td>
                            <td class="celdaNormalBig" style="width: 11%">2</td>
                            <td class="celdaNormalBig" style="width: 11%">0</td>
                            <td class="celdaNormalBig" style="width: 11%">0</td>
                            <td class="celdaNormalBig" style="width: 11%">0</td>
                            <td class="celdaNormalBig" style="width: 11%">1</td>
                        </tr>
                    </table>
                </td>

                <td style="padding: 0px;">
                    <table class="table" style="margin-bottom: 0px; width:100%;">
                        <tr>
                            <td class="celdaFondoGrisBold1" style="width: 23%;height: 16px;">Código Modular</td>
                            <td class="celdaNormalBig" style="width: 3%">8</td>
                            <td class="celdaNormalBig" style="width: 3%">8</td>
                            <td class="celdaNormalBig" style="width: 3%">8</td>
                            <td class="celdaNormalBig" style="width: 3%">8</td>
                            <td class="celdaNormalBig" style="width: 3%">8</td>
                            <td class="celdaNormalBig" style="width: 3%">8</td>
                            <td class="celdaNormalBig" style="width: 3%">8</td>
                            <td class="celdaFondoGrisBold1" style="width: 23%">Característica<sup>(4)</sup></td>
                            <td class="celdaNormalBig" style="width: 7%">PC</td>
                            <td class="celdaFondoGrisBold1" style="width: 19%">Programa<sup>(8)</sup></td>
                            <td class="celdaNormalBig" style="width: 7%">-</td>
                        </tr>
                    </table>
                </td>

                <td class="celdaFondoGrisBold1">
                    Datos del Estudiante
                </td>

                <td style="padding: 0px;">
                    <table class="table" style="margin-bottom: 0px; width:100%;">
                        <tr>
                            <td class="celdaFondoGrisBold1" style="width: 18%;height: 16px;">Prov.</td>
                            <td class="celdaNormalBig" style="width: 82%">Huaraz</td>
                        </tr>
                    </table>
                </td>

            </tr>

            <tr>
                <td style="padding: 0px; vertical-align: top;" rowspan="3">
                    <table class="table" style="margin-bottom: 0px; width:100%;">
                        <tr>
                            <td class="celdaFondoGrisBold1" style="width: 34%; height: 77px;">Nombre de la DRE - UGEL</td>
                            <td class="celdaNormalBig" style="width: 66%">UGEL Huaraz</td>
                        </tr>
                    </table>
                </td>

                <td style="padding: 0px;">
                    <table class="table" style="margin-bottom: 0px; width:100%;">
                        <tr>
                            <td class="celdaFondoGrisBold1" style="width: 23%;">Resolución de Creación N°</td>
                            <td class="celdaNormalBig" style="width: 50%">RDD N° 728</td>
                            <td class="celdaFondoGrisBold1" style="width: 20%">Forma<sup>(5)</sup></td>
                            <td class="celdaNormalBig" style="width: 7%">Esc</td>

                        </tr>
                    </table>
                </td>

                <td style="padding: 0px; vertical-align: bottom;" rowspan="5">
                    <table class="table" style="margin-bottom: 0px; width:100%;">
                        <tr>
                            <td class="celdaNormal5" style="width: 8.33%; vertical-align: bottom; height: 132px;  ">
                                <div style="width:14px!important;">
                                    <div style="display:inline-block;white-space:nowrap;line-height:1.5;transform:translate(0,100%) rotate(-90deg);transform-origin:0 0;">
                                        Sexo H/M
                                    </div>
                                </div>
                            </td>
                            <td class="celdaNormal5" style="width: 8.33%; vertical-align: bottom;  ">
                                <div style="width:14px!important;">
                                    <div style="display:inline-block;white-space:nowrap;line-height:1.5;transform:translate(0,100%) rotate(-90deg);transform-origin:0 0;">
                                        Situación de Matrícula (10)
                                    </div>
                                </div>
                            </td>
                            <td class="celdaNormal5" style="width: 8.33%; vertical-align: bottom;  ">
                                <div style="width:14px!important;">
                                    <div style="display:inline-block;white-space:nowrap;line-height:1.5;transform:translate(0,100%) rotate(-90deg);transform-origin:0 0;">
                                        País
                                    </div>
                                </div>
                            </td>
                            <td class="celdaNormal5" style="width: 8.33%; vertical-align: bottom;  ">
                                <div style="width:14px!important;">
                                    <div style="display:inline-block;white-space:nowrap;line-height:1.5;transform:translate(0,100%) rotate(-90deg);transform-origin:0 0;">
                                        Padre vive SI / NO
                                    </div>
                                </div>
                            </td>
                            <td class="celdaNormal5" style="width: 8.33%; vertical-align: bottom;  ">
                                <div style="width:14px!important;">
                                    <div style="display:inline-block;white-space:nowrap;line-height:1.5;transform:translate(0,100%) rotate(-90deg);transform-origin:0 0;">
                                        Madre vive SI / NO
                                    </div>
                                </div>
                            </td>
                            <td class="celdaNormal5" style="width: 8.33%; vertical-align: bottom;  ">
                                <div style="width:14px!important;">
                                    <div style="display:inline-block;white-space:nowrap;line-height:1.5;transform:translate(0,100%) rotate(-90deg);transform-origin:0 0;">
                                        Lengua Materna (12)
                                    </div>
                                </div>
                            </td>
                            <td class="celdaNormal5" style="width: 8.33%; vertical-align: bottom;  ">
                                <div style="width:14px!important;">
                                    <div style="display:inline-block;white-space:nowrap;line-height:1.5;transform:translate(0,100%) rotate(-90deg);transform-origin:0 0;">
                                        Segunda Lengua (12)
                                    </div>
                                </div>
                            </td>
                            <td class="celdaNormal5" style="width: 8.33%; vertical-align: bottom;  ">
                                <div style="width:14px!important;">
                                    <div style="display:inline-block;white-space:nowrap;line-height:1.5;transform:translate(0,100%) rotate(-90deg);transform-origin:0 0;">
                                        Trabaja el Estudiante SI / NO
                                    </div>
                                </div>
                            </td>
                            <td class="celdaNormal5" style="width: 8.33%; vertical-align: bottom;  ">
                                <div style="width:14px!important;">
                                    <div style="display:inline-block;white-space:nowrap;line-height:1.5;transform:translate(0,100%) rotate(-90deg);transform-origin:0 0;">
                                        Horas semanales que labora
                                    </div>
                                </div>
                            </td>
                            <td class="celdaNormal5" style="width: 8.33%; vertical-align: bottom;  ">
                                <div style="width:14px!important;">
                                    <div style="display:inline-block;white-space:nowrap;line-height:1.5;transform:translate(0,100%) rotate(-90deg);transform-origin:0 0;">
                                        Escolaridad de la Madre SI / NO
                                    </div>
                                </div>
                            </td>
                            <td class="celdaNormal5" style="width: 8.33%; vertical-align: bottom;  ">
                                <div style="width:14px!important;">
                                    <div style="display:inline-block;white-space:nowrap;line-height:1.5;transform:translate(0,100%) rotate(-90deg);transform-origin:0 0;">
                                        Nacimiento Registrado SI / NO
                                    </div>
                                </div>
                            </td>
                            <td class="celdaNormal5" style="width: 8.33%; vertical-align: bottom;  ">
                                <div style="width:14px!important;">
                                    <div style="display:inline-block;white-space:nowrap;line-height:1.5;transform:translate(0,100%) rotate(-90deg);transform-origin:0 0;">
                                        Tipo de Discapacidad (14)
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>

                <td style="padding: 0px;">
                    <table class="table" style="margin-bottom: 0px; width:100%;">
                        <tr>
                            <td class="celdaFondoGrisBold1" style="width: 18%;height: 24px;">Dist.</td>
                            <td class="celdaNormalBig" style="width: 82%">Huaraz</td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr>
                <td style="padding: 0px; vertical-align: top;">
                    <table class="table" style="margin-bottom: 0px; width:100%;">
                        <tr>
                            <td class="celdaFondoGrisBold1" style="width: 23%; height:24px;">Nivel/Ciclo<sup>(1)</sup></td>
                            <td class="celdaNormalBig" style="width: 7%">PRI</td>
                            <td class="celdaFondoGrisBold1" style="width: 19%">Grado/Edad<sup>(3)</sup></td>
                            <td class="celdaNormalBig" style="width: 5%">3</td>
                            <td class="celdaFondoGrisBold1" style="width: 18%">Sección<sup>(6)</sup></td>
                            <td class="celdaNormalBig" style="width: 5%">-</td>
                            <td class="celdaFondoGrisBold1" style="width: 18%">Turno<sup>(9)</sup></td>
                            <td class="celdaNormalBig" style="width: 5%">M</td>

                        </tr>
                    </table>
                </td>

                <td class="celdaFondoGrisBold1">
                    Centro Poblado
                </td>
            </tr>

            <tr>
                <td style="padding: 0px; vertical-align: top;">
                    <table class="table" style="margin-bottom: 0px; width:100%;">
                        <tr>
                            <td class="celdaFondoGrisBold1" style="width: 23%;height:24px;">Modalidad<sup>(2)</sup></td>
                            <td class="celdaNormalBig" style="width: 7%">EBR</td>
                            <td class="celdaFondoGrisBold1" style="width: 35%">Nombre Sección (Solo Inicial)</td>
                            <td class="celdaNormalBig" style="width: 35%"></td>
                        </tr>
                    </table>
                </td>

                <td class="celdaNormalBig">
                    SAN NILOCAS
                </td>
            </tr>

            <tr>
                <td style="padding: 0px; vertical-align: bottom;" rowspan="2">
                    <table class="table" style="margin-bottom: 0px; width:100%;">
                        <tr>
                            <td class="celdaNormalBig" style="width: 10%; height: 53px!important; font-size: 13px;">N</td>
                            <td class="celdaNormalBig" style="width: 90%; font-size: 15px;">N° de D.N.I. o Código del Estudiante<sup>(16)</sup></td>
                        </tr>
                    </table>
                </td>

                <td style="padding: 0px; vertical-align: bottom;" rowspan="2">
                    
                    <table class="table" style="margin-bottom: 0px; width:100%;">
                        <tr>
                            <td class="celdaNormalBig" style="width: 80%; height:50px; font-size: 15px;" rowspan="2">Apellidos y Nombres (Orden Alfabético)</td>
                            <td class="celdaFondoGrisBold1" style="width: 20%; font-size: 11px;" colspan="3">Fecha de Nacimiento</td>
                        </tr>
                        <tr>
                            <td class="celdaNormalBig" style="width: 6%; font-size: 11px;" >Día</td>
                            <td class="celdaNormalBig" style="width: 6%; font-size: 11px;" >Mes</td>
                            <td class="celdaNormalBig" style="width: 8%; font-size: 11px;" >Año</td>
                        </tr>
                    </table>


                </td>

                <td class="celdaFondoGrisBold1" style="font-size: 11px;">
                    Institución Educativa de Procedencia<sup>(15)</sup>
                </td>

            </tr>

            <tr>
                <td style="padding: 0px;">
                    <table class="table" style="margin-bottom: 0px; width:100%;">
                        <tr>
                            <td class="celdaFondoGrisBold1" style="width: 28%; font-size: 11px;">Código Modular</td>
                            <td class="celdaFondoGrisBold1" style="width: 72%; font-size: 11px;">Número y/o Nombre  - RJ/RD</td>
                        </tr>
                    </table>
                </td>
            </tr>













            <tr>
                <td style="padding: 0px;">
                    <table class="table" style="margin-bottom: 0px; width:100%;">
                        <tr>
                            <td class="celdaNormalBig" style="width: 10%;">
                                <div style="height:12px; overflow:hidden;">
                                    1
                                </div>
                            </td>
                            <td class="celdaNormalBig" style="width: 6.43%;">
                                <div style="height:12px; overflow:hidden;">
                                    D
                                </div>
                            </td>
                            <td class="celdaNormalBig" style="width: 6.43%;">
                                <div style="height:12px; overflow:hidden;">
                                    N
                                </div>
                            </td>
                            <td class="celdaNormalBig" style="width: 6.43%;">
                                <div style="height:12px; overflow:hidden;">
                                    I
                                </div>
                            </td>
                            <td class="celdaNormalBig" style="width: 6.43%;">
                                <div style="height:12px; overflow:hidden;">
                                    
                                </div>
                            </td>
                            <td class="celdaNormalBig" style="width: 6.43%;">
                                <div style="height:12px; overflow:hidden;">
                                    
                                </div>
                            </td>
                            <td class="celdaNormalBig" style="width: 6.43%;">
                                <div style="height:12px; overflow:hidden;">
                                    
                                </div>
                            </td>
                            <td class="celdaNormalBig" style="width: 6.43%;">
                                <div style="height:12px; overflow:hidden;">
                                    1
                                </div>
                            </td>
                            <td class="celdaNormalBig" style="width: 6.43%;">
                                <div style="height:12px; overflow:hidden;">
                                    1
                                </div>
                            </td>
                            <td class="celdaNormalBig" style="width: 6.43%;">
                                <div style="height:12px; overflow:hidden;">
                                    1
                                </div>
                            </td>
                            <td class="celdaNormalBig" style="width: 6.43%;">
                                <div style="height:12px; overflow:hidden;">
                                    1
                                </div>
                            </td>
                            <td class="celdaNormalBig" style="width: 6.43%;">
                                <div style="height:12px; overflow:hidden;">
                                    1
                                </div>
                            </td>
                            <td class="celdaNormalBig" style="width: 6.43%;">
                                <div style="height:12px; overflow:hidden;">
                                    1
                                </div>
                            </td>
                            <td class="celdaNormalBig" style="width: 6.42%;">
                                <div style="height:12px; overflow:hidden;">
                                    1
                                </div>
                            </td>
                            <td class="celdaNormalBig" style="width: 6.42%;">
                                <div style="height:12px; overflow:hidden;">
                                    1
                                </div>
                            </td>

                            
                        </tr>
                    </table>
                </td>


                <td style="padding: 0px;">
                    <table class="table" style="margin-bottom: 0px; width:100%;">
                        <tr>
                            <td class="celdaNormalBig" style="width: 80%;">
                                <div style="height:12px; overflow:hidden;">
                                    ARIAS OSORIO, Anderson Deyvi
                                </div>
                            </td>
                            <td class="celdaNormalBig" style="width: 6%;" >
                                <div style="height:12px; overflow:hidden;">
                                    24
                                </div>
                            </td>
                            <td class="celdaNormalBig" style="width: 6%;" >
                                <div style="height:12px; overflow:hidden;">
                                    08
                                </div>
                            </td>
                            <td class="celdaNormalBig" style="width: 8%;" >
                                <div style="height:12px; overflow:hidden;">
                                    2010
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>



                <td style="padding: 0px;" >
                    <table class="table" style="margin-bottom: 0px; width:100%;">
                        <tr>
                            <td class="celdaNormalBig" style="width: 8.33%;">
                                <div style="height:12px; overflow:hidden;">
                                    H
                                </div>
                            </td>
                            <td class="celdaNormalBig" style="width: 8.33%;">
                                <div style="height:12px; overflow:hidden;">
                                    PG
                                </div>
                            </td>
                            <td class="celdaNormalBig" style="width: 8.33%;">
                                <div style="height:12px; overflow:hidden;">
                                    P
                                </div>
                            </td>
                            <td class="celdaNormalBig" style="width: 8.33%;">
                                <div style="height:12px; overflow:hidden;">
                                    SI
                                </div>
                            </td>
                            <td class="celdaNormalBig" style="width: 8.33%;">
                                <div style="height:12px; overflow:hidden;">
                                    SI
                                </div>
                            </td>
                            <td class="celdaNormalBig" style="width: 8.33%;">
                                <div style="height:12px; overflow:hidden;">
                                    Q
                                </div>
                            </td>
                            <td class="celdaNormalBig" style="width: 8.33%;">
                                <div style="height:12px; overflow:hidden;">
                                    C
                                </div>
                            </td>
                            <td class="celdaNormalBig" style="width: 8.33%;">
                                <div style="height:12px; overflow:hidden;">
                                    NO
                                </div>
                            </td>
                            <td class="celdaNormalBig" style="width: 8.33%;">
                                <div style="height:12px; overflow:hidden;">
                                    
                                </div>
                            </td>
                            <td class="celdaNormalBig" style="width: 8.33%;">
                                <div style="height:12px; overflow:hidden;">
                                    P
                                </div>
                            </td>
                            <td class="celdaNormalBig" style="width: 8.33%;">
                                <div style="height:12px; overflow:hidden;">
                                    SI
                                </div>
                            </td>
                            <td class="celdaNormalBig" style="width: 8.33%;">
                                <div style="height:12px; overflow:hidden;">
                                    
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>

             
                    <td style="padding: 0px;">
                        <table class="table" style="margin-bottom: 0px; width:100%;">
                            <tr>
                                <td class="celdaNormalBig" style="width: 4%;">
                                    <div style="height:12px; overflow:hidden;">
                                        1
                                    </div>
                                </td>
                                <td class="celdaNormalBig" style="width: 4%;">
                                    <div style="height:12px; overflow:hidden;">
                                        1
                                    </div>
                                </td>
                                <td class="celdaNormalBig" style="width: 4%;">
                                    <div style="height:12px; overflow:hidden;">
                                        1
                                    </div>
                                </td>
                                <td class="celdaNormalBig" style="width: 4%;">
                                    <div style="height:12px; overflow:hidden;">
                                        1
                                    </div>
                                </td>
                                <td class="celdaNormalBig" style="width: 4%;">
                                    <div style="height:12px; overflow:hidden;">
                                        1
                                    </div>
                                </td>
                                <td class="celdaNormalBig" style="width: 4%;">
                                    <div style="height:12px; overflow:hidden;">
                                        1
                                    </div>
                                </td>
                                <td class="celdaNormalBig" style="width: 4%;">
                                    <div style="height:12px; overflow:hidden;">
                                        1
                                    </div>
                                </td>
                                <td class="celdaNormalBig" style="width: 72%;">
                                    <div style="height:12px; overflow:hidden;">
                                        Número y/o Nombre  - RJ/RD
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>

            </tr>

          </table>






















          <table class="table" style="margin-bottom: 0px; width:100%; margin-top:0.1cm;">
            <tr>
                <td style="width: 35%; font-size:7px; font-weight:normal; vertical-align: top;">
                    <table class="table" style="margin-bottom: 0px; width:100%;">
                        <tr>
                            <td style="vertical-align: top"><b>(1) Nivel / Ciclo :</b></td>
                            <td>Para el caso EBR/EBE: (INI) Inicial, (PRI) Primaria, (SEC) Secundaria<br>
                                Para el caso de EBA:(IN) Inicial, (INT) Intermedio, (AV) Avanzado

                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top"><b>(2) Modalidad :</b></td>
                            <td>(EBR)Edu.Básica Regular, (EBR-AD)Edu.Básica Regular A Distancia. <br>
                                (EBA)Edu.Básica Alternativa, (EBE)Educación Básica Especial

                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top"><b>(3) Grado/Edad :</b></td>
                            <td>En el caso de E. Inicial: registrar Edad (0,1,2,3,4,5). <br>
                                En el caso de Primaria o Secundaria: registrar grados: 1,2,3,4,5,6. <br>
                                En el caso de EBA: C. Inicial 1°. 2°; Intermedio 1°, 2°, 3°; Avanzado 1°, 2°. 3°, 4° <br>
                                Colocar "-" si en la Nómina hay alumnos de varias edades (EI) o grados (Pr).

                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top"><b>(4) Caracteristicas :</b></td>
                            <td>Primaria: (U) Unidocente, (PM) Polidocente Multigrado y (PC) Polidicente. <br>
                                Completo.

                            </td>
                        </tr>
                    </table>
                </td>
                <td style="width: 30%; font-size:7px; font-weight:normal; vertical-align: top;">
                    <table class="table" style="margin-bottom: 0px; width:100%;">
                        <tr>
                            <td style="vertical-align: top"><b>(5) Forma :</b></td>
                            <td>(Esc) Escolarizado, (NoEsc) No Escolarizado <br>
                                Para el caso EBA: (P) Presencial, (SP) Semi Presencial, (AD) A distancia
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top"><b>(6) Sección :</b></td>
                            <td>A, B, C, ... Colocar "-" si es sección única o <br>
                                si se trata de Nivel Inicial
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top"><b>(7) Gestión :</b></td>
                            <td>(PGD) Pública de gestión directa, (PGP) Pública de Gestión Privada, (PR) Privada
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top"><b>(8) Programa <br>(sólo E.B.A.) :</b></td>
                            <td>
                                (PBJ)PEBAJA.Prog.de Educ.Bás.Alter. de Niños y Adolescentes <br>
                                (PBJ)PEBAJA.Prog.de Educ.Bás.Alter. de Jóvenes y Adultos <br>
                                PBN/PEJ: PEBAJA/PEBAJA. Prog. de Educ. Básica Alter. de <br>
                                Niños y Adolescentes, y Jóvenes y Adultos. <br>
                                Colocar "-" en caso de no corresponder


                            </td>
                        </tr>
                    </table>
                </td>
                <td style="width: 35%; font-size:7px; font-weight:normal; vertical-align: top;">
                    <table class="table" style="margin-bottom: 0px; width:100%;">
                        <tr>
                            <td style="vertical-align: top"><b>(9) Turno :</b></td>
                            <td>(M) Mañana, (T) Tarde, (N) Noche
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top"><b>(10) Situación de Matrícula  :</b></td>
                            <td> (I) Ingresante, (P) Promovido, (PG) Permanece en el Grado, (RE) Reentrante <br>
                                 Solo en el caso de EBA: (REI) Reingresante
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top"><b>(11) País  :</b></td>
                            <td> (PE) Perú, (EC) Ecuador, (CO) Colombia, (BR) Brasil, (BO) Bolivia, (CH) Chile, (OT) Otro
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top"><b>(12) Lengua  :</b></td>
                            <td> (C) Castellano, (Q) Quechua, (AI) Aimara, (OT) Otra lengua, (E) Lengua Extranjera
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top"><b>(13) Escolarid. de la Madre :</b></td>
                            <td> (SE) Sin Escolaridad, (P) Primaria, (S) Secundaria, y (SP) Superior
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top"><b>(14) Tipo de discapacidad :</b></td>
                            <td> (DI) Discapacidad Intelectual, (DA) Discapacidad Auditiva, (DV) Discapacidad Visual, <br>
                                (DM) Discapacidad Motora, (SC)Sordoceguera (OT) Otra <br>
                                En caso de no adolecer discapacidad, dejar en blanco
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top"><b>(15) IE de Procedencia :</b></td>
                            <td> Solo para el caso de estudiantes que proceden de otra Institución Educativa
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top"><b>(16) N° de DNI o Cod. del <br> Est. :</b></td>
                            <td> El Cód. del Est. Se anotará solo en el caso que el estudiante no posea D.N.I.
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
          </table>

    </div>

