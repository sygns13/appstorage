<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Validator;
use Auth;

use App\Models\TipoDocumento;
use App\Models\Alumno;
use App\Models\Apoderado;
use App\Models\Estado;
use App\Models\Departamento;
use App\Models\Provincia;
use App\Models\Distrito;
use App\Models\User;

use App\Models\Matricula;
use App\Models\ApoderadoMatricula;

use App\Models\Domicilio;
use App\Models\Traslado;

use stdClass;
use Illuminate\Support\Facades\Hash;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function buscarAlumno($tipo_documento_id, $num_documento){

        $result='1';
        $msj='';
        $selector='';

        $input1  = array('tipo_documento_id' => $tipo_documento_id);
        $reglas1 = array('tipo_documento_id' => 'required');

        $input2  = array('num_documento' => $num_documento);
        $reglas2 = array('num_documento' => 'required');

        $validator1 = Validator::make($input1, $reglas1);
        $validator2 = Validator::make($input2, $reglas2);

        if ($validator1->fails() || intval($tipo_documento_id) == 0)
        {
            $result='0';
            $msj='Debe de seleccionar un tipo de Documento Válido';
            $selector='cbutipo_documento_id';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        $tipoDocumento = TipoDocumento::find($tipo_documento_id);

        if ($validator2->fails())
        {
            $result='0';
            $msj='Debe de ingresar el Número de '.$tipoDocumento->nombre.' del Alumno';
            $selector='txtnum_documento';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if (strlen($num_documento)!=$tipoDocumento->digitos)
        {
            $result='0';
            $msj='El Número de '.$tipoDocumento->nombre.' del Alumno debe tener '.$tipoDocumento->digitos.' dígitos';
            $selector='txtnum_documento';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        $data = Alumno::GetByDocIdentidad($tipo_documento_id, $num_documento);
        $resultFound = false;
        if($data){
            $resultFound = true;
            $msj='Alumno encontrado en el Sistema';
        }

        return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector ,'alumno'=>$data, 'resultFound' => $resultFound]);

    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $result='1';
        $msj='';
        $selector='';

        $alumno = $request->alumno;
        $apoderadoMadre = $request->apoderadoMadre;
        $apoderadoPadre = $request->apoderadoPadre;
        $apoderadoOtro = $request->apoderadoOtro;
        
        //Binding Data
        
        $alu_tipo_documento_id = isset($alumno["tipo_documento_id"]) ? $alumno["tipo_documento_id"] : null;
        $alu_num_documento = isset($alumno["num_documento"]) ? $alumno["num_documento"] : null;
        $alu_apellido_paterno = isset($alumno["apellido_paterno"]) ? $alumno["apellido_paterno"] : null;
        $alu_apellido_materno = isset($alumno["apellido_materno"]) ? $alumno["apellido_materno"] : null;
        $alu_nombres = isset($alumno["nombres"]) ? $alumno["nombres"] : null;
        $alu_fecha_nacimiento = isset($alumno["fecha_nacimiento"]) ? $alumno["fecha_nacimiento"] : null;
        $alu_genero = isset($alumno["genero"]) ? $alumno["genero"] : null;
        $alu_grado_actual = isset($alumno["grado_actual"]) ? $alumno["grado_actual"] : null;
        $alu_nivel_actual = isset($alumno["nivel_actual"]) ? $alumno["nivel_actual"] : null;
        $alu_telefono = isset($alumno["telefono"]) ? $alumno["telefono"] : null;
        $alu_direccion = isset($alumno["direccion"]) ? $alumno["direccion"] : null;
        $alu_correo = isset($alumno["correo"]) ? $alumno["correo"] : null;
        $alu_pais = isset($alumno["pais"]) ? $alumno["pais"] : null;
        $alu_sigla_pais = isset($alumno["sigla_pais"]) ? $alumno["sigla_pais"] : null;
        $alu_departamento = isset($alumno["departamento"]) ? $alumno["departamento"] : null;
        $alu_provincia = isset($alumno["provincia"]) ? $alumno["provincia"] : null;
        $alu_distrito = isset($alumno["distrito"]) ? $alumno["distrito"] : null;
        $alu_lugar = isset($alumno["lugar"]) ? $alumno["lugar"] : null;
        $alu_lengua_materna = isset($alumno["lengua_materna"]) ? $alumno["lengua_materna"] : null;
        $alu_segunda_lengua = isset($alumno["segunda_lengua"]) ? $alumno["segunda_lengua"] : null;
        $alu_num_hermanos = isset($alumno["num_hermanos"]) ? $alumno["num_hermanos"] : null;
        $alu_lugar_hermano = isset($alumno["lugar_hermano"]) ? $alumno["lugar_hermano"] : null;
        $alu_religion = isset($alumno["religion"]) ? $alumno["religion"] : null;
        $alu_DI = isset($alumno["DI"]) ? $alumno["DI"] : null;
        $alu_DA = isset($alumno["DA"]) ? $alumno["DA"] : null;
        $alu_DV = isset($alumno["DV"]) ? $alumno["DV"] : null;
        $alu_DM = isset($alumno["DM"]) ? $alumno["DM"] : null;
        $alu_SC = isset($alumno["SC"]) ? $alumno["SC"] : null;
        $alu_OT = isset($alumno["OT"]) ? $alumno["OT"] : null;
        $alu_nacimiento = isset($alumno["nacimiento"]) ? $alumno["nacimiento"] : null;
        $alu_nacimiento_registrado = isset($alumno["nacimiento_registrado"]) ? $alumno["nacimiento_registrado"] : null;
        $alu_obs_nacimiento = isset($alumno["obs_nacimiento"]) ? $alumno["obs_nacimiento"] : null;
        $alu_levanto_cabeza = isset($alumno["levanto_cabeza"]) ? $alumno["levanto_cabeza"] : null;
        $alu_se_sento = isset($alumno["se_sento"]) ? $alumno["se_sento"] : null;
        $alu_se_paro = isset($alumno["se_paro"]) ? $alumno["se_paro"] : null;
        $alu_se_camino = isset($alumno["se_camino"]) ? $alumno["se_camino"] : null;
        $alu_se_control_esfinter = isset($alumno["se_control_esfinter"]) ? $alumno["se_control_esfinter"] : null;
        $alu_se_primeras_palabras = isset($alumno["se_primeras_palabras"]) ? $alumno["se_primeras_palabras"] : null;
        $alu_se_hablo_fluido = isset($alumno["se_hablo_fluido"]) ? $alumno["se_hablo_fluido"] : null;
        $alu_pais_id = isset($alumno["pais_id"]) ? $alumno["pais_id"] : null;
        $alu_departamento_id = isset($alumno["departamento_id"]) ? $alumno["departamento_id"] : null;
        $alu_provincia_id = isset($alumno["provincia_id"]) ? $alumno["provincia_id"] : null;
        $alu_distrito_id = isset($alumno["distrito_id"]) ? $alumno["distrito_id"] : null;

        $madre_apellido_materno = isset($apoderadoMadre["apellido_materno"]) ? $apoderadoMadre["apellido_materno"] : null;    
        $madre_apellido_paterno = isset($apoderadoMadre["apellido_paterno"]) ? $apoderadoMadre["apellido_paterno"] : null;    
        $madre_nombres = isset($apoderadoMadre["nombres"]) ? $apoderadoMadre["nombres"] : null;    
        $madre_vive = isset($apoderadoMadre["vive"]) ? $apoderadoMadre["vive"] : null;    
        $madre_fecha_nacimiento = isset($apoderadoMadre["fecha_nacimiento"]) ? $apoderadoMadre["fecha_nacimiento"] : null;    
        $madre_escolaridad_sigla = isset($apoderadoMadre["escolaridad_sigla"]) ? $apoderadoMadre["escolaridad_sigla"] : null;    
        $madre_ocupacion = isset($apoderadoMadre["ocupacion"]) ? $apoderadoMadre["ocupacion"] : null;    
        $madre_vive_con_estudiante = isset($apoderadoMadre["vive_con_estudiante"]) ? $apoderadoMadre["vive_con_estudiante"] : null;    
        $madre_religion = isset($apoderadoMadre["religion"]) ? $apoderadoMadre["religion"] : null;    
        $madre_tipo_apoderado = isset($apoderadoMadre["tipo_apoderado"]) ? $apoderadoMadre["tipo_apoderado"] : null;    
        $madre_tipo_documento_id = isset($apoderadoMadre["tipo_documento_id"]) ? $apoderadoMadre["tipo_documento_id"] : null;    
        $madre_alumno_id = isset($apoderadoMadre["alumno_id"]) ? $apoderadoMadre["alumno_id"] : null;    
        $madre_num_documento = isset($apoderadoMadre["num_documento"]) ? $apoderadoMadre["num_documento"] : null;    
        $madre_telefono = isset($apoderadoMadre["telefono"]) ? $apoderadoMadre["telefono"] : null;    
        $madre_direccion = isset($apoderadoMadre["direccion"]) ? $apoderadoMadre["direccion"] : null;    
        $madre_correo = isset($apoderadoMadre["correo"]) ? $apoderadoMadre["correo"] : null;    
        $madre_tipo_apoderado_id = isset($apoderadoMadre["tipo_apoderado_id"]) ? $apoderadoMadre["tipo_apoderado_id"] : null;    
        $madre_principal = isset($apoderadoMadre["principal"]) ? $apoderadoMadre["principal"] : null;       

        $padre_apellido_materno = isset($apoderadoPadre["apellido_materno"]) ? $apoderadoPadre["apellido_materno"] : null;    
        $padre_apellido_paterno = isset($apoderadoPadre["apellido_paterno"]) ? $apoderadoPadre["apellido_paterno"] : null;    
        $padre_nombres = isset($apoderadoPadre["nombres"]) ? $apoderadoPadre["nombres"] : null;    
        $padre_vive = isset($apoderadoPadre["vive"]) ? $apoderadoPadre["vive"] : null;    
        $padre_fecha_nacimiento = isset($apoderadoPadre["fecha_nacimiento"]) ? $apoderadoPadre["fecha_nacimiento"] : null;    
        $padre_escolaridad_sigla = isset($apoderadoPadre["escolaridad_sigla"]) ? $apoderadoPadre["escolaridad_sigla"] : null;    
        $padre_ocupacion = isset($apoderadoPadre["ocupacion"]) ? $apoderadoPadre["ocupacion"] : null;    
        $padre_vive_con_estudiante = isset($apoderadoPadre["vive_con_estudiante"]) ? $apoderadoPadre["vive_con_estudiante"] : null;    
        $padre_religion = isset($apoderadoPadre["religion"]) ? $apoderadoPadre["religion"] : null;    
        $padre_tipo_apoderado = isset($apoderadoPadre["tipo_apoderado"]) ? $apoderadoPadre["tipo_apoderado"] : null;    
        $padre_tipo_documento_id = isset($apoderadoPadre["tipo_documento_id"]) ? $apoderadoPadre["tipo_documento_id"] : null;    
        $padre_alumno_id = isset($apoderadoPadre["alumno_id"]) ? $apoderadoPadre["alumno_id"] : null;    
        $padre_num_documento = isset($apoderadoPadre["num_documento"]) ? $apoderadoPadre["num_documento"] : null;    
        $padre_telefono = isset($apoderadoPadre["telefono"]) ? $apoderadoPadre["telefono"] : null;    
        $padre_direccion = isset($apoderadoPadre["direccion"]) ? $apoderadoPadre["direccion"] : null;    
        $padre_correo = isset($apoderadoPadre["correo"]) ? $apoderadoPadre["correo"] : null;    
        $padre_tipo_apoderado_id = isset($apoderadoPadre["tipo_apoderado_id"]) ? $apoderadoPadre["tipo_apoderado_id"] : null;    
        $padre_principal = isset($apoderadoPadre["principal"]) ? $apoderadoPadre["principal"] : null;    

        $otro_apellido_materno = isset($apoderadoOtro["apellido_materno"]) ? $apoderadoOtro["apellido_materno"] : null;    
        $otro_apellido_paterno = isset($apoderadoOtro["apellido_paterno"]) ? $apoderadoOtro["apellido_paterno"] : null;    
        $otro_nombres = isset($apoderadoOtro["nombres"]) ? $apoderadoOtro["nombres"] : null;    
        $otro_vive = isset($apoderadoOtro["vive"]) ? $apoderadoOtro["vive"] : null;    
        $otro_fecha_nacimiento = isset($apoderadoOtro["fecha_nacimiento"]) ? $apoderadoOtro["fecha_nacimiento"] : null;    
        $otro_escolaridad_sigla = isset($apoderadoOtro["escolaridad_sigla"]) ? $apoderadoOtro["escolaridad_sigla"] : null;    
        $otro_ocupacion = isset($apoderadoOtro["ocupacion"]) ? $apoderadoOtro["ocupacion"] : null;    
        $otro_vive_con_estudiante = isset($apoderadoOtro["vive_con_estudiante"]) ? $apoderadoOtro["vive_con_estudiante"] : null;    
        $otro_religion = isset($apoderadoOtro["religion"]) ? $apoderadoOtro["religion"] : null;    
        $otro_tipo_apoderado = isset($apoderadoOtro["tipo_apoderado"]) ? $apoderadoOtro["tipo_apoderado"] : null;    
        $otro_tipo_documento_id = isset($apoderadoOtro["tipo_documento_id"]) ? $apoderadoOtro["tipo_documento_id"] : null;    
        $otro_alumno_id = isset($apoderadoOtro["alumno_id"]) ? $apoderadoOtro["alumno_id"] : null;    
        $otro_num_documento = isset($apoderadoOtro["num_documento"]) ? $apoderadoOtro["num_documento"] : null;    
        $otro_telefono = isset($apoderadoOtro["telefono"]) ? $apoderadoOtro["telefono"] : null;    
        $otro_direccion = isset($apoderadoOtro["direccion"]) ? $apoderadoOtro["direccion"] : null;    
        $otro_correo = isset($apoderadoOtro["correo"]) ? $apoderadoOtro["correo"] : null;    
        $otro_tipo_apoderado_id = isset($apoderadoOtro["tipo_apoderado_id"]) ? $apoderadoOtro["tipo_apoderado_id"] : null;    
        $otro_principal = isset($apoderadoOtro["principal"]) ? $apoderadoOtro["principal"] : null;    

        //Validaciones alumno
        $input1  = array('alu_tipo_documento_id' => $alu_tipo_documento_id);
        $reglas1 = array('alu_tipo_documento_id' => 'required');

        $input2  = array('alu_num_documento' => $alu_num_documento);
        $reglas2 = array('alu_num_documento' => 'required');

        $input3  = array('alu_apellido_paterno' => $alu_apellido_paterno);
        $reglas3 = array('alu_apellido_paterno' => 'required');

        $input4  = array('alu_apellido_materno' => $alu_apellido_materno);
        $reglas4 = array('alu_apellido_materno' => 'required');

        $input5  = array('alu_nombres' => $alu_nombres);
        $reglas5 = array('alu_nombres' => 'required');

        $input6  = array('alu_fecha_nacimiento' => $alu_fecha_nacimiento);
        $reglas6 = array('alu_fecha_nacimiento' => 'required');

        $input7  = array('alu_genero' => $alu_genero);
        $reglas7 = array('alu_genero' => 'required');

        $input8  = array('alu_grado_actual' => $alu_grado_actual);
        $reglas8 = array('alu_grado_actual' => 'required');

        $input9  = array('alu_nivel_actual' => $alu_nivel_actual);
        $reglas9 = array('alu_nivel_actual' => 'required');

        $input10  = array('alu_lengua_materna' => $alu_lengua_materna);
        $reglas10 = array('alu_lengua_materna' => 'required');

        $input11  = array('alu_num_hermanos' => $alu_num_hermanos);
        $reglas11 = array('alu_num_hermanos' => 'required');

        $input12  = array('alu_lugar_hermano' => $alu_lugar_hermano);
        $reglas12 = array('alu_lugar_hermano' => 'required');

        $input13  = array('alu_nacimiento' => $alu_nacimiento);
        $reglas13 = array('alu_nacimiento' => 'required');

        $input14  = array('alu_nacimiento_registrado' => $alu_nacimiento_registrado);
        $reglas14 = array('alu_nacimiento_registrado' => 'required');

        $input15  = array('alu_pais_id' => $alu_pais_id);
        $reglas15 = array('alu_pais_id' => 'required');

        $input16  = array('alu_departamento_id' => $alu_departamento_id);
        $reglas16 = array('alu_departamento_id' => 'required');

        $input17  = array('alu_provincia_id' => $alu_provincia_id);
        $reglas17 = array('alu_provincia_id' => 'required');

        $input18  = array('alu_distrito_id' => $alu_distrito_id);
        $reglas18 = array('alu_distrito_id' => 'required');

        $validator1 = Validator::make($input1, $reglas1);
        $validator2 = Validator::make($input2, $reglas2);
        $validator3 = Validator::make($input3, $reglas3);
        $validator4 = Validator::make($input4, $reglas4);
        $validator5 = Validator::make($input5, $reglas5);
        $validator6 = Validator::make($input6, $reglas6);
        $validator7 = Validator::make($input7, $reglas7);
        $validator8 = Validator::make($input8, $reglas8);
        $validator9 = Validator::make($input9, $reglas9);
        $validator10 = Validator::make($input10, $reglas10);
        $validator11 = Validator::make($input11, $reglas11);
        $validator12 = Validator::make($input12, $reglas12);
        $validator13 = Validator::make($input13, $reglas13);
        $validator14 = Validator::make($input14, $reglas14);
        $validator15 = Validator::make($input15, $reglas15);
        $validator16 = Validator::make($input16, $reglas16);
        $validator17 = Validator::make($input17, $reglas17);
        $validator18 = Validator::make($input18, $reglas18);

        if ($validator1->fails() || intval($alu_tipo_documento_id) == 0)
        {
            $result='0';
            $msj='Debe ingresar el Tipo de Documento de Identidad del Alumno';
            $selector='cbutipo_documento_id';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        $tipoDocumento = TipoDocumento::find($alu_tipo_documento_id);

        if ($validator2->fails())
        {
            $result='0';
            $msj='Debe de ingresar el Número de '.$tipoDocumento->nombre.' del Alumno';
            $selector='txtnum_documento';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if (strlen($alu_num_documento)!=$tipoDocumento->digitos)
        {
            $result='0';
            $msj='El Número de '.$tipoDocumento->nombre.' del Alumno debe tener '.$tipoDocumento->digitos.' dígitos';
            $selector='txtnum_documento';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator3->fails())
        {
            $result='0';
            $msj='Debe ingresar el Apellido Paterno del Alumno';
            $selector='txtapellido_paterno';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator4->fails())
        {
            $result='0';
            $msj='Debe ingresar el Apellido Materno del Alumno';
            $selector='txtapellido_materno';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator5->fails())
        {
            $result='0';
            $msj='Debe ingresar los nombres del Alumno';
            $selector='txtnombres';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator6->fails())
        {
            $result='0';
            $msj='Debe ingresar la Fecha de Nacimiento del Alumno';
            $selector='txtfecha_nacimiento';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator7->fails())
        {
            $result='0';
            $msj='Debe ingresar el género del Alumno';
            $selector='cbugenero';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator13->fails())
        {
            $result='0';
            $msj='Debe ingresar si el nacimiento del alumno fue normal o con complicaciones';
            $selector='cbunacimiento';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator14->fails() )
        {
            $result='0';
            $msj='Debe ingresar si el nacimiento del alumno fue registrado';
            $selector='cbunacimiento_registrado';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator11->fails())
        {
            $result='0';
            $msj='Debe ingresar el número de hermanos del alumno';
            $selector='txtnum_hermanos';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator12->fails())
        {
            $result='0';
            $msj='Debe ingresar el lugar de hermano del alumno';
            $selector='txtlugar_hermano';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator10->fails())
        {
            $result='0';
            $msj='Debe ingresar la lengua materna del Alumno';
            $selector='txtlengua_materna';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator9->fails() || intval($alu_nivel_actual) == 0)
        {
            $result='0';
            $msj='Debe ingresar el Nivel Actual que corresponde matricular al Alumno';
            $selector='cbunivel_actual';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator8->fails() || intval($alu_grado_actual) == 0)
        {
            $result='0';
            $msj='Debe ingresar el Grado Actual que corresponde matricular al Alumno';
            $selector='cbugrado_actual';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator15->fails() || intval($alu_pais_id) == 0)
        {
            $result='0';
            $msj='Debe de seleccionar el pais del Alumno';
            $selector='cbucbupais';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator16->fails() && intval($alu_pais_id) == 1)
        {
            $result='0';
            $msj='Debe de seleccionar el departamento del Alumno';
            $selector='cbudepartamento_id';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator17->fails() && intval($alu_pais_id) == 1)
        {
            $result='0';
            $msj='Debe de seleccionar la provincia del Alumno';
            $selector='cbuprovincia_id';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator18->fails() && intval($alu_pais_id) == 1)
        {
            $result='0';
            $msj='Debe de seleccionar el distrito del Alumno';
            $selector='cbudistrito_id';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if($alu_telefono == null){
            $alu_telefono = "";
        }

        if($alu_direccion == null){
            $alu_direccion = "";
        }

        if($alu_correo == null){
            $alu_correo = "";
        }

        $pais = Estado::find($alu_pais_id);

        $alu_pais = $pais->nombre;
        $alu_sigla_pais = $pais->codigo;

        if(intval($alu_pais_id) == 1){
            $departamento = Departamento::find($alu_departamento_id);
            $alu_departamento = $departamento->nombre;

            $provincia = Provincia::find($alu_provincia_id);
            $alu_provincia = $provincia->nombre;

            $distrito = Distrito::find($alu_distrito_id);
            $alu_distrito = $distrito->nombre;
        } else {
            $alu_departamento = "";
            $alu_provincia = "";
            $alu_distrito = "";
        }

        if($alu_lugar == null){
            $alu_lugar = "";
        }

        if($alu_segunda_lengua == null){
            $alu_segunda_lengua = "";
        }

        if($alu_religion == null){
            $alu_religion = "";
        }

        if($alu_DI == null){
            $alu_DI = 0;
        }
        if($alu_DA == null){
            $alu_DA = 0;
        }
        if($alu_DV == null){
            $alu_DV = 0;
        }
        if($alu_DM == null){
            $alu_DM = 0;
        }
        if($alu_SC == null){
            $alu_SC = 0;
        }
        if($alu_OT == null){
            $alu_OT = 0;
        }

        if($alu_obs_nacimiento == null){
            $alu_obs_nacimiento = "";
        }

        if($alu_levanto_cabeza == null || $alu_levanto_cabeza == ""){
            $alu_levanto_cabeza == null;
        }
        if($alu_se_sento == null || $alu_se_sento == ""){
            $alu_se_sento == null;
        }
        if($alu_se_paro == null || $alu_se_paro == ""){
            $alu_se_paro == null;
        }
        if($alu_se_camino == null || $alu_se_camino == ""){
            $alu_se_camino == null;
        }
        if($alu_se_control_esfinter == null || $alu_se_control_esfinter == ""){
            $alu_se_control_esfinter == null;
        }
        if($alu_se_primeras_palabras == null || $alu_se_primeras_palabras == ""){
            $alu_se_primeras_palabras == null;
        }
        if($alu_se_hablo_fluido == null || $alu_se_hablo_fluido == ""){
            $alu_se_hablo_fluido == null;
        }


        //Validacion Apoderado Principal
        if(intval($madre_principal) == 0 && intval($padre_principal) == 0 && intval($otro_principal) == 0)
        {
            $result='0';
            $msj='Debe de seleccionar a uno de los apoderados como Apoderado Principal';
            $selector='checkboxMadreApodPrincipal';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }


        //Validaciones madre
        $input19  = array('madre_num_documento' => $madre_num_documento);
        $reglas19 = array('madre_num_documento' => 'required');

        $input20  = array('madre_correo' => $madre_correo);
        $reglas20 = array('madre_correo' => 'required');

        $validator19 = Validator::make($input19, $reglas19);
        $validator20 = Validator::make($input20, $reglas20);


        $tipoDocumentoM = TipoDocumento::find($madre_tipo_documento_id);

        if ( !$validator19->fails() && strlen($madre_num_documento)!=$tipoDocumentoM->digitos)
        {
            $result='0';
            $msj='Si ingresa el Número de '.$tipoDocumentoM->nombre.' de la Madre debe tener '.$tipoDocumentoM->digitos.' dígitos';
            $selector='txtnum_documentoM';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if(intval($madre_principal) == 1 && $validator20->fails())
        {
            $result='0';
            $msj='Si selecciona a la Madre como Apoderado Principal, debe ingresar un correo electrónico para la creación de su cuenta';
            $selector='txtcorreoM';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if($madre_apellido_materno == null){
            $madre_apellido_materno = "";
        }

        if($madre_apellido_paterno == null){
            $madre_apellido_paterno = "";
        }

        if($madre_apellido_materno == null){
            $madre_apellido_materno = "";
        }

        if($madre_nombres == null){
            $madre_nombres = "";
        }

        $madre_principal = intval($madre_principal);
        $madre_vive = intval($madre_vive);
        $madre_vive_con_estudiante = intval($madre_vive_con_estudiante);
        $madre_tipo_apoderado = "Madre";
        $madre_tipo_apoderado_id = 1;

        /* if($madre_grado_instruccion == null){
            $madre_grado_instruccion = "";
        } */
        $madre_grado_instruccion = "";

        switch ($madre_escolaridad_sigla) {
            case 'SE':
                $madre_grado_instruccion = "SIN ESCOLARIDAD";
                break;
            case 'P':
                $madre_grado_instruccion = "PRIMARIA COMPLETA";
                break;
            case 'PI':
                $madre_grado_instruccion = "PRIMARIA INCOMPLETA";
                break;
            case 'S':
                $madre_grado_instruccion = "SECUNDARIA COMPLETA";
                break;
            case 'SI':
                $madre_grado_instruccion = "SECUNDARIA INCOMPLETA";
                break;
            case 'SP':
                $madre_grado_instruccion = "SUPERIOR COMPLETA";
                break;
            case 'SPI':
                $madre_grado_instruccion = "SUPERIOR INCOMPLETA";
                break;
            
            default:
                $madre_grado_instruccion = "";
                break;
        }

        if($madre_ocupacion == null){
            $madre_ocupacion = "";
        }

        if($madre_religion == null){
            $madre_religion = "";
        }

        if($madre_telefono == null){
            $madre_telefono = "";
        }

        if($madre_direccion == null){
            $madre_direccion = "";
        }

        if($madre_religion == null){
            $madre_religion = "";
        }

        //Validaciones padre
        $input21  = array('padre_num_documento' => $padre_num_documento);
        $reglas21 = array('padre_num_documento' => 'required');

        $input22  = array('padre_correo' => $padre_correo);
        $reglas22 = array('padre_correo' => 'required');

        $validator21 = Validator::make($input21, $reglas21);
        $validator22 = Validator::make($input22, $reglas22);


        $tipoDocumentoP = TipoDocumento::find($padre_tipo_documento_id);

        if ( !$validator21->fails() && strlen($padre_num_documento)!=$tipoDocumentoP->digitos)
        {
            $result='0';
            $msj='Si ingresa el Número de '.$tipoDocumentoP->nombre.' del Padre debe tener '.$tipoDocumentoP->digitos.' dígitos';
            $selector='txtnum_documentoP';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if(intval($padre_principal) == 1 && $validator22->fails())
        {
            $result='0';
            $msj='Si selecciona al Padre como Apoderado Principal, debe ingresar un correo electrónico para la creación de su cuenta';
            $selector='txtcorreoP';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if($padre_apellido_materno == null){
            $padre_apellido_materno = "";
        }

        if($padre_apellido_paterno == null){
            $padre_apellido_paterno = "";
        }

        if($padre_apellido_materno == null){
            $padre_apellido_materno = "";
        }

        if($padre_nombres == null){
            $padre_nombres = "";
        }

        $padre_principal = intval($padre_principal);
        $padre_vive = intval($padre_vive);
        $padre_vive_con_estudiante = intval($padre_vive_con_estudiante);
        $padre_tipo_apoderado = "Padre";
        $padre_tipo_apoderado_id = 2;

        /* if($padre_grado_instruccion == null){
            $padre_grado_instruccion = "";
        } */
        switch ($padre_escolaridad_sigla) {
            case 'SE':
                $padre_grado_instruccion = "SIN ESCOLARIDAD";
                break;
            case 'P':
                $padre_grado_instruccion = "PRIMARIA COMPLETA";
                break;
            case 'PI':
                $padre_grado_instruccion = "PRIMARIA INCOMPLETA";
                break;
            case 'S':
                $padre_grado_instruccion = "SECUNDARIA COMPLETA";
                break;
            case 'SI':
                $padre_grado_instruccion = "SECUNDARIA INCOMPLETA";
                break;
            case 'SP':
                $padre_grado_instruccion = "SUPERIOR COMPLETA";
                break;
            case 'SPI':
                $padre_grado_instruccion = "SUPERIOR INCOMPLETA";
                break;
            
            default:
                $padre_grado_instruccion = "";
                break;
        }

        if($padre_ocupacion == null){
            $padre_ocupacion = "";
        }

        if($padre_religion == null){
            $padre_religion = "";
        }

        if($padre_telefono == null){
            $padre_telefono = "";
        }

        if($padre_direccion == null){
            $padre_direccion = "";
        }
        
        if($padre_religion == null){
            $padre_religion = "";
        }

        //Validaciones Otro Apoderado
        $input23  = array('otro_num_documento' => $otro_num_documento);
        $reglas23 = array('otro_num_documento' => 'required');

        $input24  = array('otro_correo' => $otro_correo);
        $reglas24 = array('otro_correo' => 'required');

        $input25  = array('otro_tipo_apoderado' => $otro_tipo_apoderado);
        $reglas25 = array('otro_tipo_apoderado' => 'required');

        $validator23 = Validator::make($input23, $reglas23);
        $validator24 = Validator::make($input24, $reglas24);
        $validator25 = Validator::make($input25, $reglas25);


        $tipoDocumentoO = TipoDocumento::find($otro_tipo_documento_id);

        if ( !$validator23->fails() && strlen($otro_num_documento)!=$tipoDocumentoO->digitos)
        {
            $result='0';
            $msj='Si ingresa el Número de '.$tipoDocumentoO->nombre.' de Otro Apoderado, debe tener '.$tipoDocumentoO->digitos.' dígitos';
            $selector='txtnum_documentoO';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if(intval($otro_principal) == 1 && $validator24->fails())
        {
            $result='0';
            $msj='Si selecciona al Otro Apoderado como Apoderado Orincipal, debe ingresar un correo electrónico para la creación de su cuenta';
            $selector='txtcorreoO';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if(intval($otro_principal) == 1 && $validator25->fails())
        {
            $result='0';
            $msj='Si selecciona al Otro Apoderado como Apoderado Orincipal, debe ingresar el parentesco que tiene con el alumno';
            $selector='txttipo_apoderadoO';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if($otro_apellido_materno == null){
            $otro_apellido_materno = "";
        }

        if($otro_apellido_paterno == null){
            $otro_apellido_paterno = "";
        }

        if($otro_apellido_materno == null){
            $otro_apellido_materno = "";
        }

        if($otro_nombres == null){
            $otro_nombres = "";
        }

        $otro_principal = intval($otro_principal);
        $otro_vive = intval($otro_vive);
        $otro_vive_con_estudiante = intval($otro_vive_con_estudiante);
        $otro_tipo_apoderado_id = 3;

        /* if($otro_grado_instruccion == null){
            $otro_grado_instruccion = "";
        } */
        switch ($otro_escolaridad_sigla) {
            case 'SE':
                $otro_grado_instruccion = "SIN ESCOLARIDAD";
                break;
            case 'P':
                $otro_grado_instruccion = "PRIMARIA COMPLETA";
                break;
            case 'PI':
                $otro_grado_instruccion = "PRIMARIA INCOMPLETA";
                break;
            case 'S':
                $otro_grado_instruccion = "SECUNDARIA COMPLETA";
                break;
            case 'SI':
                $otro_grado_instruccion = "SECUNDARIA INCOMPLETA";
                break;
            case 'SP':
                $otro_grado_instruccion = "SUPERIOR COMPLETA";
                break;
            case 'SPI':
                $otro_grado_instruccion = "SUPERIOR INCOMPLETA";
                break;
            
            default:
                $otro_grado_instruccion = "";
                break;
        }

        if($otro_ocupacion == null){
            $otro_ocupacion = "";
        }

        if($otro_religion == null){
            $otro_religion = "";
        }

        if($otro_telefono == null){
            $otro_telefono = "";
        }

        if($otro_direccion == null){
            $otro_direccion = "";
        }

        if($otro_religion == null){
            $otro_religion = "";
        }


        //Si paso todas las validaciones registro de Datos
        $emailCuenta = "";
        if($madre_principal == 1){
            $emailCuenta = $madre_correo;
        }
        if($padre_principal == 1){
            $emailCuenta = $padre_correo;
        }
        if($otro_principal == 1){
            $emailCuenta = $otro_correo;
        }

        $registroA = new User;

        $registroA->name=$alu_num_documento;
        $registroA->email=$emailCuenta;
        $registroA->password=bcrypt($alu_num_documento);
        $registroA->tipo_user_id='4';
        $registroA->activo='1';
        $registroA->borrado='0';

        $registroA->save();

        $registro = new Alumno;

        $registro->user_id=$registroA->id;

        $registro->tipo_documento_id=$alu_tipo_documento_id;
        $registro->num_documento=$alu_num_documento;
        $registro->apellido_paterno=$alu_apellido_paterno;
        $registro->apellido_materno=$alu_apellido_materno;
        $registro->nombres=$alu_nombres;
        $registro->fecha_nacimiento=$alu_fecha_nacimiento;
        $registro->genero=$alu_genero;
        $registro->grado_actual=$alu_grado_actual;
        $registro->nivel_actual=$alu_nivel_actual;
        $registro->telefono=$alu_telefono;
        $registro->direccion=$alu_direccion;
        $registro->correo=$alu_correo;
        $registro->pais=$alu_pais;
        $registro->sigla_pais=$alu_sigla_pais;
        $registro->departamento=$alu_departamento;
        $registro->provincia=$alu_provincia;
        $registro->distrito=$alu_distrito;
        $registro->lugar=$alu_lugar;
        $registro->lengua_materna=$alu_lengua_materna;
        $registro->segunda_lengua=$alu_segunda_lengua;
        $registro->num_hermanos=$alu_num_hermanos;
        $registro->lugar_hermano=$alu_lugar_hermano;
        $registro->religion=$alu_religion;
        $registro->DI=$alu_DI;
        $registro->DA=$alu_DA;
        $registro->DV=$alu_DV;
        $registro->nacimiento=$alu_nacimiento;
        $registro->obs_nacimiento=$alu_obs_nacimiento;
        $registro->levanto_cabeza=$alu_levanto_cabeza;
        $registro->se_sento=$alu_se_sento;
        $registro->se_paro=$alu_se_paro;
        $registro->se_camino=$alu_se_camino;
        $registro->se_control_esfinter=$alu_se_control_esfinter;
        $registro->se_primeras_palabras=$alu_se_primeras_palabras;
        $registro->se_hablo_fluido=$alu_se_hablo_fluido;
        $registro->nacimiento_registrado=$alu_nacimiento_registrado;
        $registro->DM=$alu_DM;
        $registro->SC=$alu_SC;
        $registro->OT=$alu_OT;
        $registro->pais_id=$alu_pais_id;
        $registro->departamento_id=$alu_departamento_id;
        $registro->provincia_id=$alu_provincia_id;
        $registro->distrito_id=$alu_distrito_id;

        $registro->estado_grado= '0';
        $registro->activo='1';
        $registro->borrado='0';
        $registro->old_estado_grado='0';

        $registro->save();


        //Registro Madre
        $registroB = new Apoderado;

        $registroB->alumno_id=$registro->id;

        $registroB->apellido_materno=$madre_apellido_materno;
        $registroB->apellido_paterno=$madre_apellido_paterno;
        $registroB->nombres=$madre_nombres;
        $registroB->vive=$madre_vive;
        $registroB->fecha_nacimiento=$madre_fecha_nacimiento;
        $registroB->grado_instruccion=$madre_grado_instruccion;
        $registroB->ocupacion=$madre_ocupacion;
        $registroB->vive_con_estudiante=$madre_vive_con_estudiante;
        $registroB->religion=$madre_religion;
        $registroB->tipo_apoderado=$madre_tipo_apoderado;
        $registroB->tipo_documento_id=$madre_tipo_documento_id;
        $registroB->num_documento=$madre_num_documento;
        $registroB->telefono=$madre_telefono;
        $registroB->direccion=$madre_direccion;
        $registroB->correo=$madre_correo;
        $registroB->tipo_apoderado_id=$madre_tipo_apoderado_id;
        $registroB->principal=$madre_principal;
        $registroB->escolaridad_sigla=$madre_escolaridad_sigla;
        
        $registroB->activo='1';
        $registroB->borrado='0';

        $registroB->save();


        //Registro Padre
        $registroC = new Apoderado;

        $registroC->alumno_id=$registro->id;

        $registroC->apellido_materno=$padre_apellido_materno;
        $registroC->apellido_paterno=$padre_apellido_paterno;
        $registroC->nombres=$padre_nombres;
        $registroC->vive=$padre_vive;
        $registroC->fecha_nacimiento=$padre_fecha_nacimiento;
        $registroC->grado_instruccion=$padre_grado_instruccion;
        $registroC->ocupacion=$padre_ocupacion;
        $registroC->vive_con_estudiante=$padre_vive_con_estudiante;
        $registroC->religion=$padre_religion;
        $registroC->tipo_apoderado=$padre_tipo_apoderado;
        $registroC->tipo_documento_id=$padre_tipo_documento_id;
        $registroC->num_documento=$padre_num_documento;
        $registroC->telefono=$padre_telefono;
        $registroC->direccion=$padre_direccion;
        $registroC->correo=$padre_correo;
        $registroC->tipo_apoderado_id=$padre_tipo_apoderado_id;
        $registroC->principal=$padre_principal;
        $registroC->escolaridad_sigla=$padre_escolaridad_sigla;
        
        $registroC->activo='1';
        $registroC->borrado='0';

        $registroC->save();


        //Registro Otro Apoderado
        $registroD = new Apoderado;

        $registroD->alumno_id=$registro->id;

        $registroD->apellido_materno=$otro_apellido_materno;
        $registroD->apellido_paterno=$otro_apellido_paterno;
        $registroD->nombres=$otro_nombres;
        $registroD->vive=$otro_vive;
        $registroD->fecha_nacimiento=$otro_fecha_nacimiento;
        $registroD->grado_instruccion=$otro_grado_instruccion;
        $registroD->ocupacion=$otro_ocupacion;
        $registroD->vive_con_estudiante=$otro_vive_con_estudiante;
        $registroD->religion=$otro_religion;
        $registroD->tipo_apoderado=$otro_tipo_apoderado;
        $registroD->tipo_documento_id=$otro_tipo_documento_id;
        $registroD->num_documento=$otro_num_documento;
        $registroD->telefono=$otro_telefono;
        $registroD->direccion=$otro_direccion;
        $registroD->correo=$otro_correo;
        $registroD->tipo_apoderado_id=$otro_tipo_apoderado_id;
        $registroD->principal=$otro_principal;
        $registroD->escolaridad_sigla=$otro_escolaridad_sigla;
        
        $registroD->activo='1';
        $registroD->borrado='0';

        $registroD->save();


        $msj='Nuevo Alumno Registrado con Éxito';

        return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);


  

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $result='1';
        $msj='';
        $selector='';

        $alumno = $request->alumno;
        $apoderadoMadre = $request->apoderadoMadre;
        $apoderadoPadre = $request->apoderadoPadre;
        $apoderadoOtro = $request->apoderadoOtro;
        
        //Binding Data
        
        $alu_tipo_documento_id = isset($alumno["tipo_documento_id"]) ? $alumno["tipo_documento_id"] : null;
        $alu_num_documento = isset($alumno["num_documento"]) ? $alumno["num_documento"] : null;
        $alu_apellido_paterno = isset($alumno["apellido_paterno"]) ? $alumno["apellido_paterno"] : null;
        $alu_apellido_materno = isset($alumno["apellido_materno"]) ? $alumno["apellido_materno"] : null;
        $alu_nombres = isset($alumno["nombres"]) ? $alumno["nombres"] : null;
        $alu_fecha_nacimiento = isset($alumno["fecha_nacimiento"]) ? $alumno["fecha_nacimiento"] : null;
        $alu_genero = isset($alumno["genero"]) ? $alumno["genero"] : null;
        $alu_grado_actual = isset($alumno["grado_actual"]) ? $alumno["grado_actual"] : null;
        $alu_nivel_actual = isset($alumno["nivel_actual"]) ? $alumno["nivel_actual"] : null;
        $alu_telefono = isset($alumno["telefono"]) ? $alumno["telefono"] : null;
        $alu_direccion = isset($alumno["direccion"]) ? $alumno["direccion"] : null;
        $alu_correo = isset($alumno["correo"]) ? $alumno["correo"] : null;
        $alu_pais = isset($alumno["pais"]) ? $alumno["pais"] : null;
        $alu_sigla_pais = isset($alumno["sigla_pais"]) ? $alumno["sigla_pais"] : null;
        $alu_departamento = isset($alumno["departamento"]) ? $alumno["departamento"] : null;
        $alu_provincia = isset($alumno["provincia"]) ? $alumno["provincia"] : null;
        $alu_distrito = isset($alumno["distrito"]) ? $alumno["distrito"] : null;
        $alu_lugar = isset($alumno["lugar"]) ? $alumno["lugar"] : null;
        $alu_lengua_materna = isset($alumno["lengua_materna"]) ? $alumno["lengua_materna"] : null;
        $alu_segunda_lengua = isset($alumno["segunda_lengua"]) ? $alumno["segunda_lengua"] : null;
        $alu_num_hermanos = isset($alumno["num_hermanos"]) ? $alumno["num_hermanos"] : null;
        $alu_lugar_hermano = isset($alumno["lugar_hermano"]) ? $alumno["lugar_hermano"] : null;
        $alu_religion = isset($alumno["religion"]) ? $alumno["religion"] : null;
        $alu_DI = isset($alumno["DI"]) ? $alumno["DI"] : null;
        $alu_DA = isset($alumno["DA"]) ? $alumno["DA"] : null;
        $alu_DV = isset($alumno["DV"]) ? $alumno["DV"] : null;
        $alu_DM = isset($alumno["DM"]) ? $alumno["DM"] : null;
        $alu_SC = isset($alumno["SC"]) ? $alumno["SC"] : null;
        $alu_OT = isset($alumno["OT"]) ? $alumno["OT"] : null;
        $alu_nacimiento = isset($alumno["nacimiento"]) ? $alumno["nacimiento"] : null;
        $alu_nacimiento_registrado = isset($alumno["nacimiento_registrado"]) ? $alumno["nacimiento_registrado"] : null;
        $alu_obs_nacimiento = isset($alumno["obs_nacimiento"]) ? $alumno["obs_nacimiento"] : null;
        $alu_levanto_cabeza = isset($alumno["levanto_cabeza"]) ? $alumno["levanto_cabeza"] : null;
        $alu_se_sento = isset($alumno["se_sento"]) ? $alumno["se_sento"] : null;
        $alu_se_paro = isset($alumno["se_paro"]) ? $alumno["se_paro"] : null;
        $alu_se_camino = isset($alumno["se_camino"]) ? $alumno["se_camino"] : null;
        $alu_se_control_esfinter = isset($alumno["se_control_esfinter"]) ? $alumno["se_control_esfinter"] : null;
        $alu_se_primeras_palabras = isset($alumno["se_primeras_palabras"]) ? $alumno["se_primeras_palabras"] : null;
        $alu_se_hablo_fluido = isset($alumno["se_hablo_fluido"]) ? $alumno["se_hablo_fluido"] : null;
        $alu_pais_id = isset($alumno["pais_id"]) ? $alumno["pais_id"] : null;
        $alu_departamento_id = isset($alumno["departamento_id"]) ? $alumno["departamento_id"] : null;
        $alu_provincia_id = isset($alumno["provincia_id"]) ? $alumno["provincia_id"] : null;
        $alu_distrito_id = isset($alumno["distrito_id"]) ? $alumno["distrito_id"] : null;

        $madre_id = isset($apoderadoMadre["id"]) ? $apoderadoMadre["id"] : null;    
        $madre_apellido_materno = isset($apoderadoMadre["apellido_materno"]) ? $apoderadoMadre["apellido_materno"] : null;    
        $madre_apellido_paterno = isset($apoderadoMadre["apellido_paterno"]) ? $apoderadoMadre["apellido_paterno"] : null;    
        $madre_nombres = isset($apoderadoMadre["nombres"]) ? $apoderadoMadre["nombres"] : null;    
        $madre_vive = isset($apoderadoMadre["vive"]) ? $apoderadoMadre["vive"] : null;    
        $madre_fecha_nacimiento = isset($apoderadoMadre["fecha_nacimiento"]) ? $apoderadoMadre["fecha_nacimiento"] : null;    
        $madre_escolaridad_sigla = isset($apoderadoMadre["escolaridad_sigla"]) ? $apoderadoMadre["escolaridad_sigla"] : null;    
        $madre_ocupacion = isset($apoderadoMadre["ocupacion"]) ? $apoderadoMadre["ocupacion"] : null;    
        $madre_vive_con_estudiante = isset($apoderadoMadre["vive_con_estudiante"]) ? $apoderadoMadre["vive_con_estudiante"] : null;    
        $madre_religion = isset($apoderadoMadre["religion"]) ? $apoderadoMadre["religion"] : null;    
        $madre_tipo_apoderado = isset($apoderadoMadre["tipo_apoderado"]) ? $apoderadoMadre["tipo_apoderado"] : null;    
        $madre_tipo_documento_id = isset($apoderadoMadre["tipo_documento_id"]) ? $apoderadoMadre["tipo_documento_id"] : null;    
        $madre_alumno_id = isset($apoderadoMadre["alumno_id"]) ? $apoderadoMadre["alumno_id"] : null;    
        $madre_num_documento = isset($apoderadoMadre["num_documento"]) ? $apoderadoMadre["num_documento"] : null;    
        $madre_telefono = isset($apoderadoMadre["telefono"]) ? $apoderadoMadre["telefono"] : null;    
        $madre_direccion = isset($apoderadoMadre["direccion"]) ? $apoderadoMadre["direccion"] : null;    
        $madre_correo = isset($apoderadoMadre["correo"]) ? $apoderadoMadre["correo"] : null;    
        $madre_tipo_apoderado_id = isset($apoderadoMadre["tipo_apoderado_id"]) ? $apoderadoMadre["tipo_apoderado_id"] : null;    
        $madre_principal = isset($apoderadoMadre["principal"]) ? $apoderadoMadre["principal"] : null;       

        $padre_id = isset($apoderadoPadre["id"]) ? $apoderadoPadre["id"] : null;    
        $padre_apellido_materno = isset($apoderadoPadre["apellido_materno"]) ? $apoderadoPadre["apellido_materno"] : null;    
        $padre_apellido_paterno = isset($apoderadoPadre["apellido_paterno"]) ? $apoderadoPadre["apellido_paterno"] : null;    
        $padre_nombres = isset($apoderadoPadre["nombres"]) ? $apoderadoPadre["nombres"] : null;    
        $padre_vive = isset($apoderadoPadre["vive"]) ? $apoderadoPadre["vive"] : null;    
        $padre_fecha_nacimiento = isset($apoderadoPadre["fecha_nacimiento"]) ? $apoderadoPadre["fecha_nacimiento"] : null;    
        $padre_escolaridad_sigla = isset($apoderadoPadre["escolaridad_sigla"]) ? $apoderadoPadre["escolaridad_sigla"] : null;    
        $padre_ocupacion = isset($apoderadoPadre["ocupacion"]) ? $apoderadoPadre["ocupacion"] : null;    
        $padre_vive_con_estudiante = isset($apoderadoPadre["vive_con_estudiante"]) ? $apoderadoPadre["vive_con_estudiante"] : null;    
        $padre_religion = isset($apoderadoPadre["religion"]) ? $apoderadoPadre["religion"] : null;    
        $padre_tipo_apoderado = isset($apoderadoPadre["tipo_apoderado"]) ? $apoderadoPadre["tipo_apoderado"] : null;    
        $padre_tipo_documento_id = isset($apoderadoPadre["tipo_documento_id"]) ? $apoderadoPadre["tipo_documento_id"] : null;    
        $padre_alumno_id = isset($apoderadoPadre["alumno_id"]) ? $apoderadoPadre["alumno_id"] : null;    
        $padre_num_documento = isset($apoderadoPadre["num_documento"]) ? $apoderadoPadre["num_documento"] : null;    
        $padre_telefono = isset($apoderadoPadre["telefono"]) ? $apoderadoPadre["telefono"] : null;    
        $padre_direccion = isset($apoderadoPadre["direccion"]) ? $apoderadoPadre["direccion"] : null;    
        $padre_correo = isset($apoderadoPadre["correo"]) ? $apoderadoPadre["correo"] : null;    
        $padre_tipo_apoderado_id = isset($apoderadoPadre["tipo_apoderado_id"]) ? $apoderadoPadre["tipo_apoderado_id"] : null;    
        $padre_principal = isset($apoderadoPadre["principal"]) ? $apoderadoPadre["principal"] : null;    

        $otro_id = isset($apoderadoOtro["id"]) ? $apoderadoOtro["id"] : null;    
        $otro_apellido_materno = isset($apoderadoOtro["apellido_materno"]) ? $apoderadoOtro["apellido_materno"] : null;    
        $otro_apellido_paterno = isset($apoderadoOtro["apellido_paterno"]) ? $apoderadoOtro["apellido_paterno"] : null;    
        $otro_nombres = isset($apoderadoOtro["nombres"]) ? $apoderadoOtro["nombres"] : null;    
        $otro_vive = isset($apoderadoOtro["vive"]) ? $apoderadoOtro["vive"] : null;    
        $otro_fecha_nacimiento = isset($apoderadoOtro["fecha_nacimiento"]) ? $apoderadoOtro["fecha_nacimiento"] : null;    
        $otro_escolaridad_sigla = isset($apoderadoOtro["escolaridad_sigla"]) ? $apoderadoOtro["escolaridad_sigla"] : null;    
        $otro_ocupacion = isset($apoderadoOtro["ocupacion"]) ? $apoderadoOtro["ocupacion"] : null;    
        $otro_vive_con_estudiante = isset($apoderadoOtro["vive_con_estudiante"]) ? $apoderadoOtro["vive_con_estudiante"] : null;    
        $otro_religion = isset($apoderadoOtro["religion"]) ? $apoderadoOtro["religion"] : null;    
        $otro_tipo_apoderado = isset($apoderadoOtro["tipo_apoderado"]) ? $apoderadoOtro["tipo_apoderado"] : null;    
        $otro_tipo_documento_id = isset($apoderadoOtro["tipo_documento_id"]) ? $apoderadoOtro["tipo_documento_id"] : null;    
        $otro_alumno_id = isset($apoderadoOtro["alumno_id"]) ? $apoderadoOtro["alumno_id"] : null;    
        $otro_num_documento = isset($apoderadoOtro["num_documento"]) ? $apoderadoOtro["num_documento"] : null;    
        $otro_telefono = isset($apoderadoOtro["telefono"]) ? $apoderadoOtro["telefono"] : null;    
        $otro_direccion = isset($apoderadoOtro["direccion"]) ? $apoderadoOtro["direccion"] : null;    
        $otro_correo = isset($apoderadoOtro["correo"]) ? $apoderadoOtro["correo"] : null;    
        $otro_tipo_apoderado_id = isset($apoderadoOtro["tipo_apoderado_id"]) ? $apoderadoOtro["tipo_apoderado_id"] : null;    
        $otro_principal = isset($apoderadoOtro["principal"]) ? $apoderadoOtro["principal"] : null;    

        //Validaciones alumno
        $input1  = array('alu_tipo_documento_id' => $alu_tipo_documento_id);
        $reglas1 = array('alu_tipo_documento_id' => 'required');

        $input2  = array('alu_num_documento' => $alu_num_documento);
        $reglas2 = array('alu_num_documento' => 'required');

        $input3  = array('alu_apellido_paterno' => $alu_apellido_paterno);
        $reglas3 = array('alu_apellido_paterno' => 'required');

        $input4  = array('alu_apellido_materno' => $alu_apellido_materno);
        $reglas4 = array('alu_apellido_materno' => 'required');

        $input5  = array('alu_nombres' => $alu_nombres);
        $reglas5 = array('alu_nombres' => 'required');

        $input6  = array('alu_fecha_nacimiento' => $alu_fecha_nacimiento);
        $reglas6 = array('alu_fecha_nacimiento' => 'required');

        $input7  = array('alu_genero' => $alu_genero);
        $reglas7 = array('alu_genero' => 'required');

        $input8  = array('alu_grado_actual' => $alu_grado_actual);
        $reglas8 = array('alu_grado_actual' => 'required');

        $input9  = array('alu_nivel_actual' => $alu_nivel_actual);
        $reglas9 = array('alu_nivel_actual' => 'required');

        $input10  = array('alu_lengua_materna' => $alu_lengua_materna);
        $reglas10 = array('alu_lengua_materna' => 'required');

        $input11  = array('alu_num_hermanos' => $alu_num_hermanos);
        $reglas11 = array('alu_num_hermanos' => 'required');

        $input12  = array('alu_lugar_hermano' => $alu_lugar_hermano);
        $reglas12 = array('alu_lugar_hermano' => 'required');

        $input13  = array('alu_nacimiento' => $alu_nacimiento);
        $reglas13 = array('alu_nacimiento' => 'required');

        $input14  = array('alu_nacimiento_registrado' => $alu_nacimiento_registrado);
        $reglas14 = array('alu_nacimiento_registrado' => 'required');

        $input15  = array('alu_pais_id' => $alu_pais_id);
        $reglas15 = array('alu_pais_id' => 'required');

        $input16  = array('alu_departamento_id' => $alu_departamento_id);
        $reglas16 = array('alu_departamento_id' => 'required');

        $input17  = array('alu_provincia_id' => $alu_provincia_id);
        $reglas17 = array('alu_provincia_id' => 'required');

        $input18  = array('alu_distrito_id' => $alu_distrito_id);
        $reglas18 = array('alu_distrito_id' => 'required');

        $validator1 = Validator::make($input1, $reglas1);
        $validator2 = Validator::make($input2, $reglas2);
        $validator3 = Validator::make($input3, $reglas3);
        $validator4 = Validator::make($input4, $reglas4);
        $validator5 = Validator::make($input5, $reglas5);
        $validator6 = Validator::make($input6, $reglas6);
        $validator7 = Validator::make($input7, $reglas7);
        $validator8 = Validator::make($input8, $reglas8);
        $validator9 = Validator::make($input9, $reglas9);
        $validator10 = Validator::make($input10, $reglas10);
        $validator11 = Validator::make($input11, $reglas11);
        $validator12 = Validator::make($input12, $reglas12);
        $validator13 = Validator::make($input13, $reglas13);
        $validator14 = Validator::make($input14, $reglas14);
        $validator15 = Validator::make($input15, $reglas15);
        $validator16 = Validator::make($input16, $reglas16);
        $validator17 = Validator::make($input17, $reglas17);
        $validator18 = Validator::make($input18, $reglas18);

        if ($validator1->fails() || intval($alu_tipo_documento_id) == 0)
        {
            $result='0';
            $msj='Debe ingresar el Tipo de Documento de Identidad del Alumno';
            $selector='cbutipo_documento_id';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        $tipoDocumento = TipoDocumento::find($alu_tipo_documento_id);

        if ($validator2->fails())
        {
            $result='0';
            $msj='Debe de ingresar el Número de '.$tipoDocumento->nombre.' del Alumno';
            $selector='txtnum_documento';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if (strlen($alu_num_documento)!=$tipoDocumento->digitos)
        {
            $result='0';
            $msj='El Número de '.$tipoDocumento->nombre.' del Alumno debe tener '.$tipoDocumento->digitos.' dígitos';
            $selector='txtnum_documento';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator3->fails())
        {
            $result='0';
            $msj='Debe ingresar el Apellido Paterno del Alumno';
            $selector='txtapellido_paterno';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator4->fails())
        {
            $result='0';
            $msj='Debe ingresar el Apellido Materno del Alumno';
            $selector='txtapellido_materno';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator5->fails())
        {
            $result='0';
            $msj='Debe ingresar los nombres del Alumno';
            $selector='txtnombres';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator6->fails())
        {
            $result='0';
            $msj='Debe ingresar la Fecha de Nacimiento del Alumno';
            $selector='txtfecha_nacimiento';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator7->fails())
        {
            $result='0';
            $msj='Debe ingresar el género del Alumno';
            $selector='cbugenero';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator13->fails())
        {
            $result='0';
            $msj='Debe ingresar si el nacimiento del alumno fue normal o con complicaciones';
            $selector='cbunacimiento';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator14->fails() )
        {
            $result='0';
            $msj='Debe ingresar si el nacimiento del alumno fue registrado';
            $selector='cbunacimiento_registrado';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator11->fails())
        {
            $result='0';
            $msj='Debe ingresar el número de hermanos del alumno';
            $selector='txtnum_hermanos';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator12->fails())
        {
            $result='0';
            $msj='Debe ingresar el lugar de hermano del alumno';
            $selector='txtlugar_hermano';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator10->fails())
        {
            $result='0';
            $msj='Debe ingresar la lengua materna del Alumno';
            $selector='txtlengua_materna';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator9->fails() || intval($alu_nivel_actual) == 0)
        {
            $result='0';
            $msj='Debe ingresar el Nivel Actual que corresponde matricular al Alumno';
            $selector='cbunivel_actual';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator8->fails() || intval($alu_grado_actual) == 0)
        {
            $result='0';
            $msj='Debe ingresar el Grado Actual que corresponde matricular al Alumno';
            $selector='cbugrado_actual';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator15->fails() || intval($alu_pais_id) == 0)
        {
            $result='0';
            $msj='Debe de seleccionar el pais del Alumno';
            $selector='cbucbupais';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator16->fails() && intval($alu_pais_id) == 1)
        {
            $result='0';
            $msj='Debe de seleccionar el departamento del Alumno';
            $selector='cbudepartamento_id';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator17->fails() && intval($alu_pais_id) == 1)
        {
            $result='0';
            $msj='Debe de seleccionar la provincia del Alumno';
            $selector='cbuprovincia_id';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator18->fails() && intval($alu_pais_id) == 1)
        {
            $result='0';
            $msj='Debe de seleccionar el distrito del Alumno';
            $selector='cbudistrito_id';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if($alu_telefono == null){
            $alu_telefono = "";
        }

        if($alu_direccion == null){
            $alu_direccion = "";
        }

        if($alu_correo == null){
            $alu_correo = "";
        }

        $pais = Estado::find($alu_pais_id);

        $alu_pais = $pais->nombre;
        $alu_sigla_pais = $pais->codigo;

        if(intval($alu_pais_id) == 1){
            $departamento = Departamento::find($alu_departamento_id);
            $alu_departamento = $departamento->nombre;

            $provincia = Provincia::find($alu_provincia_id);
            $alu_provincia = $provincia->nombre;

            $distrito = Distrito::find($alu_distrito_id);
            $alu_distrito = $distrito->nombre;
        } else {
            $alu_departamento = "";
            $alu_provincia = "";
            $alu_distrito = "";
        }

        if($alu_lugar == null){
            $alu_lugar = "";
        }

        if($alu_segunda_lengua == null){
            $alu_segunda_lengua = "";
        }

        if($alu_religion == null){
            $alu_religion = "";
        }

        if($alu_DI == null){
            $alu_DI = 0;
        }
        if($alu_DA == null){
            $alu_DA = 0;
        }
        if($alu_DV == null){
            $alu_DV = 0;
        }
        if($alu_DM == null){
            $alu_DM = 0;
        }
        if($alu_SC == null){
            $alu_SC = 0;
        }
        if($alu_OT == null){
            $alu_OT = 0;
        }

        if($alu_obs_nacimiento == null){
            $alu_obs_nacimiento = "";
        }

        if($alu_levanto_cabeza == null || $alu_levanto_cabeza == ""){
            $alu_levanto_cabeza == null;
        }
        if($alu_se_sento == null || $alu_se_sento == ""){
            $alu_se_sento == null;
        }
        if($alu_se_paro == null || $alu_se_paro == ""){
            $alu_se_paro == null;
        }
        if($alu_se_camino == null || $alu_se_camino == ""){
            $alu_se_camino == null;
        }
        if($alu_se_control_esfinter == null || $alu_se_control_esfinter == ""){
            $alu_se_control_esfinter == null;
        }
        if($alu_se_primeras_palabras == null || $alu_se_primeras_palabras == ""){
            $alu_se_primeras_palabras == null;
        }
        if($alu_se_hablo_fluido == null || $alu_se_hablo_fluido == ""){
            $alu_se_hablo_fluido == null;
        }


        //Validacion Apoderado Principal
        if(intval($madre_principal) == 0 && intval($padre_principal) == 0 && intval($otro_principal) == 0)
        {
            $result='0';
            $msj='Debe de seleccionar a uno de los apoderados como Apoderado Principal';
            $selector='checkboxMadreApodPrincipal';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }


        //Validaciones madre
        $input19  = array('madre_num_documento' => $madre_num_documento);
        $reglas19 = array('madre_num_documento' => 'required');

        $input20  = array('madre_correo' => $madre_correo);
        $reglas20 = array('madre_correo' => 'required');

        $validator19 = Validator::make($input19, $reglas19);
        $validator20 = Validator::make($input20, $reglas20);


        $tipoDocumentoM = TipoDocumento::find($madre_tipo_documento_id);

        if ( !$validator19->fails() && strlen($madre_num_documento)!=$tipoDocumentoM->digitos)
        {
            $result='0';
            $msj='Si ingresa el Número de '.$tipoDocumentoM->nombre.' de la Madre debe tener '.$tipoDocumentoM->digitos.' dígitos';
            $selector='txtnum_documentoM';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if(intval($madre_principal) == 1 && $validator20->fails())
        {
            $result='0';
            $msj='Si selecciona a la Madre como Apoderado Principal, debe ingresar un correo electrónico para la creación de su cuenta';
            $selector='txtcorreoM';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if($madre_apellido_materno == null){
            $madre_apellido_materno = "";
        }

        if($madre_apellido_paterno == null){
            $madre_apellido_paterno = "";
        }

        if($madre_apellido_materno == null){
            $madre_apellido_materno = "";
        }

        if($madre_nombres == null){
            $madre_nombres = "";
        }

        $madre_principal = intval($madre_principal);
        $madre_vive = intval($madre_vive);
        $madre_vive_con_estudiante = intval($madre_vive_con_estudiante);
        $madre_tipo_apoderado = "Madre";
        $madre_tipo_apoderado_id = 1;

        /* if($madre_grado_instruccion == null){
            $madre_grado_instruccion = "";
        } */

        $madre_grado_instruccion = "";

        switch ($madre_escolaridad_sigla) {
            case 'SE':
                $madre_grado_instruccion = "SIN ESCOLARIDAD";
                break;
            case 'P':
                $madre_grado_instruccion = "PRIMARIA COMPLETA";
                break;
            case 'PI':
                $madre_grado_instruccion = "PRIMARIA INCOMPLETA";
                break;
            case 'S':
                $madre_grado_instruccion = "SECUNDARIA COMPLETA";
                break;
            case 'SI':
                $madre_grado_instruccion = "SECUNDARIA INCOMPLETA";
                break;
            case 'SP':
                $madre_grado_instruccion = "SUPERIOR COMPLETA";
                break;
            case 'SPI':
                $madre_grado_instruccion = "SUPERIOR INCOMPLETA";
                break;
            
            default:
                $madre_grado_instruccion = "";
                break;
        }

        if($madre_ocupacion == null){
            $madre_ocupacion = "";
        }

        if($madre_religion == null){
            $madre_religion = "";
        }

        if($madre_telefono == null){
            $madre_telefono = "";
        }

        if($madre_direccion == null){
            $madre_direccion = "";
        }

        if($madre_religion == null){
            $madre_religion = "";
        }

        //Validaciones padre
        $input21  = array('padre_num_documento' => $padre_num_documento);
        $reglas21 = array('padre_num_documento' => 'required');

        $input22  = array('padre_correo' => $padre_correo);
        $reglas22 = array('padre_correo' => 'required');

        $validator21 = Validator::make($input21, $reglas21);
        $validator22 = Validator::make($input22, $reglas22);


        $tipoDocumentoP = TipoDocumento::find($padre_tipo_documento_id);

        if ( !$validator21->fails() && strlen($padre_num_documento)!=$tipoDocumentoP->digitos)
        {
            $result='0';
            $msj='Si ingresa el Número de '.$tipoDocumentoP->nombre.' del Padre debe tener '.$tipoDocumentoP->digitos.' dígitos';
            $selector='txtnum_documentoP';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if(intval($padre_principal) == 1 && $validator22->fails())
        {
            $result='0';
            $msj='Si selecciona al Padre como Apoderado Principal, debe ingresar un correo electrónico para la creación de su cuenta';
            $selector='txtcorreoP';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if($padre_apellido_materno == null){
            $padre_apellido_materno = "";
        }

        if($padre_apellido_paterno == null){
            $padre_apellido_paterno = "";
        }

        if($padre_apellido_materno == null){
            $padre_apellido_materno = "";
        }

        if($padre_nombres == null){
            $padre_nombres = "";
        }

        $padre_principal = intval($padre_principal);
        $padre_vive = intval($padre_vive);
        $padre_vive_con_estudiante = intval($padre_vive_con_estudiante);
        $padre_tipo_apoderado = "Padre";
        $padre_tipo_apoderado_id = 2;

        /* if($padre_grado_instruccion == null){
            $padre_grado_instruccion = "";
        } */
        switch ($padre_escolaridad_sigla) {
            case 'SE':
                $padre_grado_instruccion = "SIN ESCOLARIDAD";
                break;
            case 'P':
                $padre_grado_instruccion = "PRIMARIA COMPLETA";
                break;
            case 'PI':
                $padre_grado_instruccion = "PRIMARIA INCOMPLETA";
                break;
            case 'S':
                $padre_grado_instruccion = "SECUNDARIA COMPLETA";
                break;
            case 'SI':
                $padre_grado_instruccion = "SECUNDARIA INCOMPLETA";
                break;
            case 'SP':
                $padre_grado_instruccion = "SUPERIOR COMPLETA";
                break;
            case 'SPI':
                $padre_grado_instruccion = "SUPERIOR INCOMPLETA";
                break;
            
            default:
                $padre_grado_instruccion = "";
                break;
        }

        if($padre_ocupacion == null){
            $padre_ocupacion = "";
        }

        if($padre_religion == null){
            $padre_religion = "";
        }

        if($padre_telefono == null){
            $padre_telefono = "";
        }

        if($padre_direccion == null){
            $padre_direccion = "";
        }
        
        if($padre_religion == null){
            $padre_religion = "";
        }

        //Validaciones Otro Apoderado
        $input23  = array('otro_num_documento' => $otro_num_documento);
        $reglas23 = array('otro_num_documento' => 'required');

        $input24  = array('otro_correo' => $otro_correo);
        $reglas24 = array('otro_correo' => 'required');

        $input25  = array('otro_tipo_apoderado' => $otro_tipo_apoderado);
        $reglas25 = array('otro_tipo_apoderado' => 'required');

        $validator23 = Validator::make($input23, $reglas23);
        $validator24 = Validator::make($input24, $reglas24);
        $validator25 = Validator::make($input25, $reglas25);


        $tipoDocumentoO = TipoDocumento::find($otro_tipo_documento_id);

        if ( !$validator23->fails() && strlen($otro_num_documento)!=$tipoDocumentoO->digitos)
        {
            $result='0';
            $msj='Si ingresa el Número de '.$tipoDocumentoO->nombre.' de Otro Apoderado, debe tener '.$tipoDocumentoO->digitos.' dígitos';
            $selector='txtnum_documentoO';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if(intval($otro_principal) == 1 && $validator24->fails())
        {
            $result='0';
            $msj='Si selecciona al Otro Apoderado como Apoderado Orincipal, debe ingresar un correo electrónico para la creación de su cuenta';
            $selector='txtcorreoO';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if(intval($otro_principal) == 1 && $validator25->fails())
        {
            $result='0';
            $msj='Si selecciona al Otro Apoderado como Apoderado Orincipal, debe ingresar el parentesco que tiene con el alumno';
            $selector='txttipo_apoderadoO';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if($otro_apellido_materno == null){
            $otro_apellido_materno = "";
        }

        if($otro_apellido_paterno == null){
            $otro_apellido_paterno = "";
        }

        if($otro_apellido_materno == null){
            $otro_apellido_materno = "";
        }

        if($otro_nombres == null){
            $otro_nombres = "";
        }

        $otro_principal = intval($otro_principal);
        $otro_vive = intval($otro_vive);
        $otro_vive_con_estudiante = intval($otro_vive_con_estudiante);
        $otro_tipo_apoderado_id = 3;

        /* if($otro_grado_instruccion == null){
            $otro_grado_instruccion = "";
        } */
        switch ($otro_escolaridad_sigla) {
            case 'SE':
                $otro_grado_instruccion = "SIN ESCOLARIDAD";
                break;
            case 'P':
                $otro_grado_instruccion = "PRIMARIA COMPLETA";
                break;
            case 'PI':
                $otro_grado_instruccion = "PRIMARIA INCOMPLETA";
                break;
            case 'S':
                $otro_grado_instruccion = "SECUNDARIA COMPLETA";
                break;
            case 'SI':
                $otro_grado_instruccion = "SECUNDARIA INCOMPLETA";
                break;
            case 'SP':
                $otro_grado_instruccion = "SUPERIOR COMPLETA";
                break;
            case 'SPI':
                $otro_grado_instruccion = "SUPERIOR INCOMPLETA";
                break;
            
            default:
                $otro_grado_instruccion = "";
                break;
        }

        if($otro_ocupacion == null){
            $otro_ocupacion = "";
        }

        if($otro_religion == null){
            $otro_religion = "";
        }

        if($otro_telefono == null){
            $otro_telefono = "";
        }

        if($otro_direccion == null){
            $otro_direccion = "";
        }

        if($otro_religion == null){
            $otro_religion = "";
        }


        //Si paso todas las validaciones registro de Datos
        $emailCuenta = "";
        if($madre_principal == 1){
            $emailCuenta = $madre_correo;
        }
        if($padre_principal == 1){
            $emailCuenta = $padre_correo;
        }
        if($otro_principal == 1){
            $emailCuenta = $otro_correo;
        }

        
        $registro = Alumno::findOrFail($id);

        $registro->tipo_documento_id=$alu_tipo_documento_id;
        $registro->num_documento=$alu_num_documento;
        $registro->apellido_paterno=$alu_apellido_paterno;
        $registro->apellido_materno=$alu_apellido_materno;
        $registro->nombres=$alu_nombres;
        $registro->fecha_nacimiento=$alu_fecha_nacimiento;
        $registro->genero=$alu_genero;
        $registro->grado_actual=$alu_grado_actual;
        $registro->nivel_actual=$alu_nivel_actual;
        $registro->telefono=$alu_telefono;
        $registro->direccion=$alu_direccion;
        $registro->correo=$alu_correo;
        $registro->pais=$alu_pais;
        $registro->sigla_pais=$alu_sigla_pais;
        $registro->departamento=$alu_departamento;
        $registro->provincia=$alu_provincia;
        $registro->distrito=$alu_distrito;
        $registro->lugar=$alu_lugar;
        $registro->lengua_materna=$alu_lengua_materna;
        $registro->segunda_lengua=$alu_segunda_lengua;
        $registro->num_hermanos=$alu_num_hermanos;
        $registro->lugar_hermano=$alu_lugar_hermano;
        $registro->religion=$alu_religion;
        $registro->DI=$alu_DI;
        $registro->DA=$alu_DA;
        $registro->DV=$alu_DV;
        $registro->nacimiento=$alu_nacimiento;
        $registro->obs_nacimiento=$alu_obs_nacimiento;
        $registro->levanto_cabeza=$alu_levanto_cabeza;
        $registro->se_sento=$alu_se_sento;
        $registro->se_paro=$alu_se_paro;
        $registro->se_camino=$alu_se_camino;
        $registro->se_control_esfinter=$alu_se_control_esfinter;
        $registro->se_primeras_palabras=$alu_se_primeras_palabras;
        $registro->se_hablo_fluido=$alu_se_hablo_fluido;
        $registro->nacimiento_registrado=$alu_nacimiento_registrado;
        $registro->DM=$alu_DM;
        $registro->SC=$alu_SC;
        $registro->OT=$alu_OT;
        $registro->pais_id=$alu_pais_id;
        $registro->departamento_id=$alu_departamento_id;
        $registro->provincia_id=$alu_provincia_id;
        $registro->distrito_id=$alu_distrito_id;


        $registro->save();

        //User
        $registroA = User::find($registro->user_id);

        $registroA->name=$alu_num_documento;
        $registroA->email=$emailCuenta;
        $registroA->password=bcrypt($alu_num_documento);
        $registroA->tipo_user_id='4';

        $registroA->save();


        //Registro Madre
        $registroB = Apoderado::find($madre_id);

        $registroB->alumno_id=$registro->id;

        $registroB->apellido_materno=$madre_apellido_materno;
        $registroB->apellido_paterno=$madre_apellido_paterno;
        $registroB->nombres=$madre_nombres;
        $registroB->vive=$madre_vive;
        $registroB->fecha_nacimiento=$madre_fecha_nacimiento;
        $registroB->grado_instruccion=$madre_grado_instruccion;
        $registroB->ocupacion=$madre_ocupacion;
        $registroB->vive_con_estudiante=$madre_vive_con_estudiante;
        $registroB->religion=$madre_religion;
        $registroB->tipo_apoderado=$madre_tipo_apoderado;
        $registroB->tipo_documento_id=$madre_tipo_documento_id;
        $registroB->num_documento=$madre_num_documento;
        $registroB->telefono=$madre_telefono;
        $registroB->direccion=$madre_direccion;
        $registroB->correo=$madre_correo;
        $registroB->tipo_apoderado_id=$madre_tipo_apoderado_id;
        $registroB->principal=$madre_principal;
        $registroB->escolaridad_sigla=$madre_escolaridad_sigla;
        
        $registroB->activo='1';
        $registroB->borrado='0';

        $registroB->save();


        //Registro Padre
        $registroC = Apoderado::find($padre_id);

        $registroC->alumno_id=$registro->id;

        $registroC->apellido_materno=$padre_apellido_materno;
        $registroC->apellido_paterno=$padre_apellido_paterno;
        $registroC->nombres=$padre_nombres;
        $registroC->vive=$padre_vive;
        $registroC->fecha_nacimiento=$padre_fecha_nacimiento;
        $registroC->grado_instruccion=$padre_grado_instruccion;
        $registroC->ocupacion=$padre_ocupacion;
        $registroC->vive_con_estudiante=$padre_vive_con_estudiante;
        $registroC->religion=$padre_religion;
        $registroC->tipo_apoderado=$padre_tipo_apoderado;
        $registroC->tipo_documento_id=$padre_tipo_documento_id;
        $registroC->num_documento=$padre_num_documento;
        $registroC->telefono=$padre_telefono;
        $registroC->direccion=$padre_direccion;
        $registroC->correo=$padre_correo;
        $registroC->tipo_apoderado_id=$padre_tipo_apoderado_id;
        $registroC->principal=$padre_principal;
        $registroC->escolaridad_sigla=$padre_escolaridad_sigla;
        
        $registroC->activo='1';
        $registroC->borrado='0';

        $registroC->save();


        //Registro Otro Apoderado
        $registroD = Apoderado::find($otro_id);

        $registroD->alumno_id=$registro->id;

        $registroD->apellido_materno=$otro_apellido_materno;
        $registroD->apellido_paterno=$otro_apellido_paterno;
        $registroD->nombres=$otro_nombres;
        $registroD->vive=$otro_vive;
        $registroD->fecha_nacimiento=$otro_fecha_nacimiento;
        $registroD->grado_instruccion=$otro_grado_instruccion;
        $registroD->ocupacion=$otro_ocupacion;
        $registroD->vive_con_estudiante=$otro_vive_con_estudiante;
        $registroD->religion=$otro_religion;
        $registroD->tipo_apoderado=$otro_tipo_apoderado;
        $registroD->tipo_documento_id=$otro_tipo_documento_id;
        $registroD->num_documento=$otro_num_documento;
        $registroD->telefono=$otro_telefono;
        $registroD->direccion=$otro_direccion;
        $registroD->correo=$otro_correo;
        $registroD->tipo_apoderado_id=$otro_tipo_apoderado_id;
        $registroD->principal=$otro_principal;
        $registroD->escolaridad_sigla=$otro_escolaridad_sigla;
        
        $registroD->activo='1';
        $registroD->borrado='0';

        $registroD->save();

        //Update tablas de matrícula si el alumno está matriculado en un ciclo vigente
        if(intval($registro->estado_grado) == 1){

            $matricula_id = $request->matricula_id;

            $vive_madre = 0;
            $vive_padre = 0;

            $apoderados = Apoderado::where('alumno_id',$registro->id)
                            ->where('activo',1)
                            ->where('borrado',0)
                            ->get();

            foreach ($apoderados as $apoderado) {
                if($apoderado->tipo_apoderado_id == 1){
                    $vive_madre = $apoderado->vive;
                }
                if($apoderado->tipo_apoderado_id == 2){
                    $vive_padre = $apoderado->vive;
                }
            }

            $tiene_discapacidad = 0;

            if(intval($registro->DI) == 1 ||
                intval($registro->DA) == 1 ||
                intval($registro->DV) == 1 ||
                intval($registro->DM) == 1 ||
                intval($registro->SC) == 1 ||
                intval($registro->OT) == 1 )
                {
                    $tiene_discapacidad = 1;
                }

            $registroE = Matricula::find($matricula_id);
            
            $registroE->tiene_discapacidad = $tiene_discapacidad;
            $registroE->vive_madre = $vive_madre;
            $registroE->vive_padre = $vive_padre;
            $registroE->DI = $registro->DI;
            $registroE->DA = $registro->DA;
            $registroE->DV = $registro->DV;
            $registroE->DM = $registro->DM;
            $registroE->SC = $registro->SC;
            $registroE->OT = $registro->OT;

            $registroE->save();

            $registroF = Domicilio::where('matricula_id', $matricula_id)->where('activo', '1')->where('borrado', '0')->first();

            if($registroF != null){

                $registroF->direccion = $registro->direccion;
                $registroF->lugar = $registro->lugar;
                $registroF->departamento = $registro->departamento;
                $registroF->provincia = $registro->provincia;
                $registroF->distrito = $registro->distrito;
                $registroF->telefono = $registro->telefono;

                $registroF->save();
            }

            //Update del Apoderado Principal de Matricula
            foreach ($apoderados as $apoderado) {
                if($apoderado->principal == "1"){

                    $registroG = ApoderadoMatricula::where('matricula_id', $matricula_id)->where('activo', '1')->where('borrado', '0')->first();

                    $registroG->apellido_paterno = $apoderado->apellido_materno;
                    $registroG->apellido_materno = $apoderado->apellido_paterno;
                    $registroG->nombres = $apoderado->nombres;
                    $registroG->parentesco = $apoderado->tipo_apoderado;
                    $registroG->fecha_nac = $apoderado->fecha_nacimiento;
                    $registroG->instruccion = $apoderado->grado_instruccion;
                    $registroG->ocupacion = $apoderado->ocupacion;
                    $registroG->direccion = $apoderado->direccion;
                    $registroG->telefono = $apoderado->telefono;

                    $registroG->save();
                }
            }

            
        }


        $msj='Alumno Modificado con Éxito';

        return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);


  

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
