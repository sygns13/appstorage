<?php

namespace App\Constantes;

class Constantes  {

    const REGISTRO_ACTIVO = '1';
    const REGISTRO_INACTIVO = '0';

    const REGISTRO_BORRADO = '1';
    const REGISTRO_NO_BORRADO = '0';
    const REGISTRO_NO_BORRADO_2_DEFAULT = '2';

    const SUPER_ADMINISTRADOR = '1';


    const CANTIDAD_UNIDAD = 1;
    const CANTIDAD_ZERO = 0;

    //Estados de Documentos
    const ESTADO_DOCUMENTO_BORRADOR_GENERADO = 0;
    const ESTADO_DOCUMENTO_BORRADOR_APROBADO = 1;
    const ESTADO_DOCUMENTO_BORRADOR_RECHAZADO = 2;
    const ESTADO_DOCUMENTO_BORRADOR_CORREGIDO = 3;
    const ESTADO_DOCUMENTO_ELABORADO_FIRMADO = 4;
    const ESTADO_DOCUMENTO_EVALUACION_FIRMADO = 5;
    const ESTADO_DOCUMENTO_EVALUACION_RECHAZADO = 6;
    const ESTADO_DOCUMENTO_APROBACION_FIRMADO = 7;
    const ESTADO_DOCUMENTO_APROBACION_RECHAZADO = 8;
    const ESTADO_DOCUMENTO_EMITIDO = 9;
    const ESTADO_DOCUMENTO_HISTORICO = 10;



}