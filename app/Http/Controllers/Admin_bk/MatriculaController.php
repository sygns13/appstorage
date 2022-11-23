<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Auth;

use App\Models\CicloEscolar;
use App\Models\Matricula;
use App\Models\TipoDocumento;
use App\Models\User;
use App\Models\Estado;
use App\Models\Departamento;
use App\Models\Provincia;
use App\Models\Distrito;
use App\Models\Niveles;
use App\Models\Grado;
use App\Models\CicloSeccion;
use App\Models\Alumno;
use App\Models\Apoderado;
use App\Models\Traslado;
use App\Models\Domicilio;
use App\Models\ApoderadoMatricula;
use App\Models\Turno;

use App\Models\InstitucionEducativa;

use stdClass;
use DB;
use Storage;
use PDF;

use Illuminate\Support\Facades\Hash;

class MatriculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index1()
    {
        $cicloActivo = CicloEscolar::GetCicloActivo();

        $estados = Estado::where('activo',1)->where('borrado',0)->orderBy('nombre','asc')->get();
        $departamentos = Departamento::where('activo',1)->where('borrado',0)->orderBy('nombre','asc')->get();
        $provincias = Provincia::where('activo',1)->where('borrado',0)->orderBy('nombre','asc')->get();
        $distritos = Distrito::where('activo',1)->where('borrado',0)->orderBy('nombre','asc')->get();

        $niveles = Niveles::where('activo',1)->where('borrado',0)->orderBy('id','asc')->get();
        $grados = Grado::where('activo',1)->where('borrado',0)->orderBy('orden','asc')->get();

        return view('admin.matricula.index',compact('cicloActivo', 'estados', 'departamentos', 'provincias', 'distritos', 'niveles', 'grados'));
    }

    public function index2()
    {
        $cicloActivo = CicloEscolar::GetCicloActivo();
        $ciclos = CicloEscolar::GetAllCiclos();

        return view('admin.nomina.index',compact('cicloActivo', 'ciclos'));
    }

    public function index(Request $request)
    {
        return $tipoDocumentos = TipoDocumento::all();
    }

    public function indexNomina(Request $request)
    {
        $ciclo_id = $request->ciclo_id;

        $registros = Matricula::GetDatosGenericsByCiclo($ciclo_id);

        return [ 
                'registros' => $registros,
               ];
    }

    public function getCicloSeccion($gradoMaster_id)
    {
        $cicloActivo = CicloEscolar::GetCicloActivo();

        if(!$cicloActivo){
            return [];
        }
        
        $cicloSeccions = CicloSeccion::GetSeccionsByCicloAndGradoMaster($cicloActivo->id, $gradoMaster_id);

        return $cicloSeccions;
    }

    public function getMatriculaActiva($alumno_id)
    {
        $cicloActivo = CicloEscolar::GetCicloActivo();

        if(!$cicloActivo){

            return response()->json(["result"=>'0','msj'=>"No existe ciclo activo",'matricula'=>null]);
            return null;
        }
        
        $matricula = Matricula::GetMatriculasByCicloAndAlumno($cicloActivo->id, $alumno_id);

        if($matricula == null){
            return response()->json(["result"=>'0','msj'=>"Matricula no encontrada",'matricula'=>null, 'traslado'=>null]);
        }

        $traslado = Traslado::where('matricula_id',$matricula->id)
                                ->where('tipo', '1')
                                ->where('activo', '1')
                                ->where('borrado', '0')
                                ->first();

        $cicloSeccion = CicloSeccion::find($matricula->ciclo_seccion_id);

        $turno = Turno::find($cicloSeccion->turno_id);
        $turno = $turno->nombre;

        return response()->json(["result"=>'1','msj'=>"",'matricula'=>$matricula, 'traslado'=>$traslado, 'turno' => $turno]);
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
        ini_set('memory_limit','256M');

        $result='1';
        $msj='';
        $selector='';

        $alumno_id = $request->alumno_id;
        $matricula = json_decode(stripslashes($request->matricula));
        $traslado = json_decode(stripslashes($request->traslado));


        //Binding Data

        $cicloActivo = CicloEscolar::GetCicloActivo();

        if(!$cicloActivo){
            $result='0';
            $msj='No se cuenta con un Año Escolar Lectivo Activo, contacte con el administrador del sistema';
            $selector='cbuciclo_escolar_id';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        $alumno = Alumno::find($alumno_id);

        if(!$alumno){
            $result='0';
            $msj='Seleccione un alumno';
            $selector='txtalumno_id';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        $estado = 1;
        $matri_es_traslado = isset($matricula->es_traslado) ? $matricula->es_traslado : null;
        $matri_responsable_matricula_nombres = isset($matricula->responsable_matricula_nombres) ? $matricula->responsable_matricula_nombres : null;
        $matri_cargo_responsable = isset($matricula->cargo_responsable) ? $matricula->cargo_responsable : null;
        $matri_ciclo_seccion_id = isset($matricula->ciclo_seccion_id) ? $matricula->ciclo_seccion_id : null;
        $matri_trabaja = isset($matricula->trabaja) ? $matricula->trabaja : null;
        $matri_activo = isset($matricula->activo) ? $matricula->activo : null;
        
        $traslado_motivo = isset($traslado->motivo) ? $traslado->motivo : null;
        $traslado_codigo_modular = isset($traslado->codigo_modular) ? $traslado->codigo_modular : null;
        $traslado_ie_nombre = isset($traslado->ie_nombre) ? $traslado->ie_nombre : null;
        $traslado_res_traslado = isset($traslado->res_traslado) ? $traslado->res_traslado : null;


        $input1  = array('matri_es_traslado' => $matri_es_traslado);
        $reglas1 = array('matri_es_traslado' => 'required');

        $input2  = array('matri_responsable_matricula_nombres' => $matri_responsable_matricula_nombres);
        $reglas2 = array('matri_responsable_matricula_nombres' => 'required');

        $input3  = array('matri_cargo_responsable' => $matri_cargo_responsable);
        $reglas3 = array('matri_cargo_responsable' => 'required');

        $input4  = array('matri_ciclo_seccion_id' => $matri_ciclo_seccion_id);
        $reglas4 = array('matri_ciclo_seccion_id' => 'required');

        $input5  = array('matri_trabaja' => $matri_trabaja);
        $reglas5 = array('matri_trabaja' => 'required');

        $input6  = array('matri_activo' => $matri_activo);
        $reglas6 = array('matri_activo' => 'required');

        $input7  = array('traslado_motivo' => $traslado_motivo);
        $reglas7 = array('traslado_motivo' => 'required');

        $input8  = array('traslado_codigo_modular' => $traslado_codigo_modular);
        $reglas8 = array('traslado_codigo_modular' => 'required');

        $input9  = array('traslado_ie_nombre' => $traslado_ie_nombre);
        $reglas9 = array('traslado_ie_nombre' => 'required');

        $input10  = array('traslado_res_traslado' => $traslado_res_traslado);
        $reglas10 = array('traslado_res_traslado' => 'required');

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

        if ($validator1->fails())
        {
            $result='0';
            $msj='Debe de seleccionar si el alumno es traslado';
            $selector='cbumatri_es_traslado';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator2->fails())
        {
            $result='0';
            $msj='Debe de ingresar el responsable de la matricula';
            $selector='txtmatri_responsable_matricula_nombres';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator3->fails())
        {
            $result='0';
            $msj='Debe ingresar el cargo del responsable de la matricula';
            $selector='txtmatri_cargo_responsable';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator4->fails() || intval($matri_ciclo_seccion_id) == 0)
        {
            $result='0';
            $msj='Debe de seleccionar la seccion del alumno';
            $selector='cbumatri_ciclo_seccion_id';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        

        if (($validator8->fails() || strlen(strval($traslado_codigo_modular)) != 7) && intval($matri_es_traslado) == 1)
        {
            $result='0';
            $msj='Debe ingresar el código modular de la IE de procedencia del alumno, debe de tener 7 dígitos';
            $selector='txttraslado_codigo_modular';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator9->fails() && intval($matri_es_traslado) == 1)
        {
            $result='0';
            $msj='Debe ingresar el nombre de la IE de procedencia del alumno';
            $selector='txttraslado_ie_nombre';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator10->fails() && intval($matri_es_traslado) == 1)
        {
            $result='0';
            $msj='Debe ingresar el nombre de la Resolución de traslado';
            $selector='txttraslado_res_traslado';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator7->fails() && intval($matri_es_traslado) == 1)
        {
            $result='0';
            $msj='Debe ingresar el motivo del traslado';
            $selector='txttraslado_motivo';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        $archivo="";
        $file = $request->archivo;
        $segureFile=0;

        if(intval($matri_es_traslado) == 1){
            if($request->hasFile('archivo')){

                $nombreArchivo=$request->nombrefile;

                $aux2='documento_'.date('d-m-Y').'-'.date('H-i-s');
                $input2  = array('archivo' => $file) ;
                $reglas2 = array('archivo' => 'required|file:1,1024000');
                $validatorF = Validator::make($input2, $reglas2);     

                if ($validatorF->fails())
                {
                    $segureFile=1;
                    $msj="El archivo adjunto ingresado tiene un tamaño superior a 100 MB, ingrese otro archivo o limpie el formulario";
                    $result='0';
                    $selector='archivo';
                }
                else
                {
                    $nombre2=$file->getClientOriginalName();
                    $extension2=$file->getClientOriginalExtension();
                    $nuevoNombre2=$aux2.".".$extension2;
                    //$subir2=Storage::disk('infoFile')->put($nuevoNombre2, \File::get($file));

                    if($extension2=="pdf"|| $extension2=="PDF")
                    {

                        $subir2=false;
                        $subir2=Storage::disk('documentoMatricula')->put($nuevoNombre2, \File::get($file));

                    if($subir2){
                        $archivo=$nuevoNombre2;
                    }
                    else{
                        $msj="Error al subir el archivo adjunto, intentelo nuevamente luego";
                        $segureFile=1;
                        $result='0';
                        $selector='archivo';
                    }
                    }
                    else {
                        $segureFile=1;
                        $msj="El archivo adjunto ingresado tiene una extensión no válida, ingrese otro archivo o limpie el formulario";
                        $result='0';
                        $selector='archivo';
                    }
                }

            }
            else{
                $msj="Debe de adjuntar un archivo adjunto válido, ingrese un archivo";
                $segureFile=1;
                $result='0';
                $selector='archivo';
            }     
        }   

        if($segureFile==1){
            Storage::disk('documentoMatricula')->delete($archivo);
        }
        else{

            $vive_madre = 0;
            $vive_padre = 0;

            $apoderados = Apoderado::where('alumno_id',$alumno_id)
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

            if(intval($alumno->DI) == 1 ||
                intval($alumno->DA) == 1 ||
                intval($alumno->DV) == 1 ||
                intval($alumno->DM) == 1 ||
                intval($alumno->SC) == 1 ||
                intval($alumno->OT) == 1 )
                {
                    $tiene_discapacidad = 1;
                }

            $fecha = date("Y-m-d");

            $alumnoSave = Alumno::find($alumno->id);
            $alumnoSave->estado_grado = '1';

            if(0 == intval($alumno->estado_grado) && null == $alumno->anio_ingreso){
                $contMatriculas = Matricula::where('alumno_id', $alumno->id)->count();

                if($contMatriculas == 0){

                    $ie = InstitucionEducativa::where('borrado','0')
                                            ->where('activo','1')
                                            ->first();

                    $alumnoSave->anio_ingreso = $cicloActivo->year;
                    $alumnoSave->codigo_modular = $ie->codigo_modular;

                    $numMatricula = 1;
                    $flag = 0;

                    $countAlumnosYear = Alumno::where('anio_ingreso', $cicloActivo->year)->count();

                    while ($countAlumnosYear >= 10000) {
                        $countAlumnosYear -=10000; 
                        $flag++;
                    }
                    $numMatricula += $countAlumnosYear;

                    $alumnoSave->numero_matricula = $numMatricula;
                    $alumnoSave->flag = $flag;
                }
            }

            $alumnoSave->save();

            $registro = new Matricula;

            $registro->alumno_id = $alumno->id;
            $registro->ciclo_escolar_id = $cicloActivo->id;
            $registro->fecha = $fecha;
            $registro->estado = $estado;
            $registro->es_traslado = $matri_es_traslado;
            $registro->tiene_discapacidad = $tiene_discapacidad;
            $registro->vive_madre = $vive_madre;
            $registro->vive_padre = $vive_padre;
            $registro->responsable_matricula_nombres = strtoupper($matri_responsable_matricula_nombres);
            $registro->cargo_responsable = strtoupper($matri_cargo_responsable);
            $registro->ciclo_seccion_id = $matri_ciclo_seccion_id;
            $registro->trabaja = $matri_trabaja;
            $registro->activo='1';
            $registro->borrado='0';
            $registro->DI = $alumno->DI;
            $registro->DA = $alumno->DA;
            $registro->DV = $alumno->DV;
            $registro->DM = $alumno->DM;
            $registro->SC = $alumno->SC;
            $registro->OT = $alumno->OT;

            $registro->save();

            if(intval($matri_es_traslado) == 1){

                $registroB = new Traslado;

                $registroB->fecha = $fecha;
                $registroB->motivo = $traslado_motivo;
                $registroB->codigo_modular = $traslado_codigo_modular;
                $registroB->ie_nombre = strtoupper($traslado_ie_nombre);
                $registroB->alumno_id = $alumno->id;
                $registroB->activo ='1';
                $registroB->borrado ='0';
                $registroB->res_traslado = $traslado_res_traslado;
                $registroB->resolucion_traslado = $archivo;
                $registroB->matricula_id = $registro->id;
                $registroB->tipo ='1';

                $registroB->save();
            }

            $registroC = new Domicilio;

            $registroC->anio = $cicloActivo->year;
            $registroC->direccion = $alumno->direccion;
            $registroC->lugar = $alumno->lugar;
            $registroC->departamento = $alumno->departamento;
            $registroC->provincia = $alumno->provincia;
            $registroC->distrito = $alumno->distrito;
            $registroC->telefono = $alumno->telefono;
            $registroC->alumno_id = $alumno->id;
            $registroC->activo = '1';
            $registroC->borrado = '0';
            $registroC->matricula_id = $registro->id;
            
            $registroC->save();

            //Registro de Apoderado Principal de Matricula
            foreach ($apoderados as $apoderado) {
                if($apoderado->principal == "1"){

                    $registroD = new ApoderadoMatricula;

                    $registroD->alumno_id = $alumno->id;
                    $registroD->matricula_id = $registro->id;
                    $registroD->apellido_paterno = $apoderado->apellido_materno;
                    $registroD->apellido_materno = $apoderado->apellido_paterno;
                    $registroD->nombres = $apoderado->nombres;
                    $registroD->parentesco = $apoderado->tipo_apoderado;
                    $registroD->fecha_nac = $apoderado->fecha_nacimiento;
                    $registroD->instruccion = $apoderado->grado_instruccion;
                    $registroD->ocupacion = $apoderado->ocupacion;
                    $registroD->direccion = $apoderado->direccion;
                    $registroD->telefono = $apoderado->telefono;
                    $registroD->activo = '1';
                    $registroD->borrado = '0';

                    $registroD->save();
                }
            }

            $msj='Matrícula del Alumno(a) Registrada con Éxito';
        }

        return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        
    }

    public function generatePDF()
    {

        $users = User::get();
  
        $data = [
            'title' => 'Welcome to ItSolutionStuff.com',
            'date' => date('m/d/Y'),
            'users' => $users
        ]; 
            
        $pdf = PDF::loadView('myPDF', $data);
        $pdf->setPaper('A4', 'landscape');
        $pdf->setOption('defaultFont', 'Arial');
     
        return $pdf->download('itsolutionstuff.pdf');
    }

    public function verPDF()
    {

        $users = User::get();
  
        $data = [
            'title' => 'Welcome to ItSolutionStuff.com',
            'date' => date('m/d/Y'),
            'users' => $users
        ]; 

        $title = 'Welcome to ItSolutionStuff.com';
        $date = date('m/d/Y');
        
            
        /* $pdf = PDF::loadView('myPDF', $data);
        $pdf->setPaper('A4', 'landscape'); */
     
        return view('myPDF',compact('users','title','date'));
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
        ini_set('memory_limit','256M');

        $result='1';
        $msj='';
        $selector='';

        $alumno_id = $request->alumno_id;
        $matricula = json_decode(stripslashes($request->matricula));
        $traslado = json_decode(stripslashes($request->traslado));


        //Binding Data

        $cicloActivo = CicloEscolar::GetCicloActivo();

        if(!$cicloActivo){
            $result='0';
            $msj='No se cuenta con un Año Escolar Lectivo Activo, contacte con el administrador del sistema';
            $selector='cbuciclo_escolar_id';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        $alumno = Alumno::find($alumno_id);

        if(!$alumno){
            $result='0';
            $msj='Seleccione un alumno';
            $selector='txtalumno_id';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        $estado = 1;
        $matri_es_traslado = isset($matricula->es_traslado) ? $matricula->es_traslado : null;
        $matri_responsable_matricula_nombres = isset($matricula->responsable_matricula_nombres) ? $matricula->responsable_matricula_nombres : null;
        $matri_cargo_responsable = isset($matricula->cargo_responsable) ? $matricula->cargo_responsable : null;
        $matri_ciclo_seccion_id = isset($matricula->ciclo_seccion_id) ? $matricula->ciclo_seccion_id : null;
        $matri_trabaja = isset($matricula->trabaja) ? $matricula->trabaja : null;
        $matri_activo = isset($matricula->activo) ? $matricula->activo : null;
        
        $traslado_motivo = isset($traslado->motivo) ? $traslado->motivo : null;
        $traslado_codigo_modular = isset($traslado->codigo_modular) ? $traslado->codigo_modular : null;
        $traslado_ie_nombre = isset($traslado->ie_nombre) ? $traslado->ie_nombre : null;
        $traslado_res_traslado = isset($traslado->res_traslado) ? $traslado->res_traslado : null;


        $input1  = array('matri_es_traslado' => $matri_es_traslado);
        $reglas1 = array('matri_es_traslado' => 'required');

        $input2  = array('matri_responsable_matricula_nombres' => $matri_responsable_matricula_nombres);
        $reglas2 = array('matri_responsable_matricula_nombres' => 'required');

        $input3  = array('matri_cargo_responsable' => $matri_cargo_responsable);
        $reglas3 = array('matri_cargo_responsable' => 'required');

        $input4  = array('matri_ciclo_seccion_id' => $matri_ciclo_seccion_id);
        $reglas4 = array('matri_ciclo_seccion_id' => 'required');

        $input5  = array('matri_trabaja' => $matri_trabaja);
        $reglas5 = array('matri_trabaja' => 'required');

        $input6  = array('matri_activo' => $matri_activo);
        $reglas6 = array('matri_activo' => 'required');

        $input7  = array('traslado_motivo' => $traslado_motivo);
        $reglas7 = array('traslado_motivo' => 'required');

        $input8  = array('traslado_codigo_modular' => $traslado_codigo_modular);
        $reglas8 = array('traslado_codigo_modular' => 'required');

        $input9  = array('traslado_ie_nombre' => $traslado_ie_nombre);
        $reglas9 = array('traslado_ie_nombre' => 'required');

        $input10  = array('traslado_res_traslado' => $traslado_res_traslado);
        $reglas10 = array('traslado_res_traslado' => 'required');

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

        if ($validator1->fails())
        {
            $result='0';
            $msj='Debe de seleccionar si el alumno es traslado';
            $selector='cbumatri_es_traslado';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator2->fails())
        {
            $result='0';
            $msj='Debe de ingresar el responsable de la matricula';
            $selector='txtmatri_responsable_matricula_nombres';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator3->fails())
        {
            $result='0';
            $msj='Debe ingresar el cargo del responsable de la matricula';
            $selector='txtmatri_cargo_responsable';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator4->fails() || intval($matri_ciclo_seccion_id) == 0)
        {
            $result='0';
            $msj='Debe de seleccionar la seccion del alumno';
            $selector='cbumatri_ciclo_seccion_id';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        

        if (($validator8->fails() || strlen(strval($traslado_codigo_modular)) != 7) && intval($matri_es_traslado) == 1)
        {
            $result='0';
            $msj='Debe ingresar el código modular de la IE de procedencia del alumno, debe de tener 7 dígitos';
            $selector='txttraslado_codigo_modular';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator9->fails() && intval($matri_es_traslado) == 1)
        {
            $result='0';
            $msj='Debe ingresar el nombre de la IE de procedencia del alumno';
            $selector='txttraslado_ie_nombre';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator10->fails() && intval($matri_es_traslado) == 1)
        {
            $result='0';
            $msj='Debe ingresar el nombre de la Resolución de traslado';
            $selector='txttraslado_res_traslado';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator7->fails() && intval($matri_es_traslado) == 1)
        {
            $result='0';
            $msj='Debe ingresar el motivo del traslado';
            $selector='txttraslado_motivo';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        $archivo="";
        $file = $request->archivo;
        $segureFile=0;

        $oldImg = isset($traslado->resolucion_traslado) ? $traslado->resolucion_traslado : null;;

        if(intval($matri_es_traslado) == 1){
            if($request->hasFile('archivo')){

                $nombreArchivo=$request->nombrefile;

                $aux2='documento_'.date('d-m-Y').'-'.date('H-i-s');
                $input2  = array('archivo' => $file) ;
                $reglas2 = array('archivo' => 'required|file:1,1024000');
                $validatorF = Validator::make($input2, $reglas2);     

                if ($validatorF->fails())
                {
                    $segureFile=1;
                    $msj="El archivo adjunto ingresado tiene un tamaño superior a 100 MB, ingrese otro archivo o limpie el formulario";
                    $result='0';
                    $selector='archivo';
                }
                else
                {
                    $nombre2=$file->getClientOriginalName();
                    $extension2=$file->getClientOriginalExtension();
                    $nuevoNombre2=$aux2.".".$extension2;
                    //$subir2=Storage::disk('infoFile')->put($nuevoNombre2, \File::get($file));

                    if($extension2=="pdf"|| $extension2=="PDF")
                    {

                        $subir2=false;
                        $subir2=Storage::disk('documentoMatricula')->put($nuevoNombre2, \File::get($file));

                    if($subir2){
                        $archivo=$nuevoNombre2;
                    }
                    else{
                        $msj="Error al subir el archivo adjunto, intentelo nuevamente luego";
                        $segureFile=1;
                        $result='0';
                        $selector='archivo';
                    }
                    }
                    else {
                        $segureFile=1;
                        $msj="El archivo adjunto ingresado tiene una extensión no válida, ingrese otro archivo o limpie el formulario";
                        $result='0';
                        $selector='archivo';
                    }
                }

            }   
        }   

        if($segureFile==1){
            Storage::disk('documentoMatricula')->delete($archivo);
        }
        else{

            $vive_madre = 0;
            $vive_padre = 0;

            $apoderados = Apoderado::where('alumno_id',$alumno_id)
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

            if(intval($alumno->DI) == 1 ||
                intval($alumno->DA) == 1 ||
                intval($alumno->DV) == 1 ||
                intval($alumno->DM) == 1 ||
                intval($alumno->SC) == 1 ||
                intval($alumno->OT) == 1 )
                {
                    $tiene_discapacidad = 1;
                }

            $fecha = date("Y-m-d");

            if(0 == intval($alumno->estado_grado) && null == $alumno->anio_ingreso){
                $contMatriculas = Matricula::where('alumno_id', $alumno->id)->count();

                if($contMatriculas == 0){

                    $ie = InstitucionEducativa::where('borrado','0')
                                            ->where('activo','1')
                                            ->first();

                    $alumnoSave = Alumno::find($alumno->id);

                    $alumnoSave->estado_grado = '1';
                    $alumnoSave->anio_ingreso = $cicloActivo->year;
                    $alumnoSave->codigo_modular = $ie->codigo_modular;

                    $numMatricula = 1;
                    $flag = 0;

                    $countAlumnosYear = Alumno::where('anio_ingreso', $cicloActivo->year)->count();

                    while ($countAlumnosYear >= 10000) {
                        $countAlumnosYear -=10000; 
                        $flag++;
                    }
                    $numMatricula += $countAlumnosYear;

                    $alumnoSave->numero_matricula = $numMatricula;
                    $alumnoSave->flag = $flag;

                    $alumnoSave->save();
                }
            }

            $registro = Matricula::find($id);

            $registro->estado = $estado;
            $registro->es_traslado = $matri_es_traslado;
            $registro->tiene_discapacidad = $tiene_discapacidad;
            $registro->vive_madre = $vive_madre;
            $registro->vive_padre = $vive_padre;
            $registro->responsable_matricula_nombres = strtoupper($matri_responsable_matricula_nombres);
            $registro->cargo_responsable = strtoupper($matri_cargo_responsable);
            $registro->ciclo_seccion_id = $matri_ciclo_seccion_id;
            $registro->trabaja = $matri_trabaja;
            $registro->activo='1';
            $registro->borrado='0';
            $registro->DI = $alumno->DI;
            $registro->DA = $alumno->DA;
            $registro->DV = $alumno->DV;
            $registro->DM = $alumno->DM;
            $registro->SC = $alumno->SC;
            $registro->OT = $alumno->OT;

            $registro->save();

            $registroB = Traslado::where('matricula_id', $registro->id)
                                ->where('tipo', '1')
                                ->where('activo', '1')
                                ->where('borrado', '0')
                                ->first();

            if($registroB != null && intval($matri_es_traslado) == 1){

                if(strlen($archivo)>0){
                    Storage::disk('documentoMatricula')->delete($oldImg);
                    $registroB->resolucion_traslado = $archivo;
                }

                $registroB->fecha = $fecha;
                $registroB->motivo = $traslado_motivo;
                $registroB->codigo_modular = $traslado_codigo_modular;
                $registroB->ie_nombre = strtoupper($traslado_ie_nombre);
                $registroB->res_traslado = $traslado_res_traslado;
                
                $registroB->matricula_id = $registro->id;
                $registroB->tipo ='1';

                $registroB->save();

            }

            if($registroB != null && intval($matri_es_traslado) != 1){
                Storage::disk('documentoMatricula')->delete($oldImg);
                $registroB->delete();

            }

            if($registroB == null && intval($matri_es_traslado) == 1){

                $registroB = new Traslado;

                $registroB->fecha = $fecha;
                $registroB->motivo = $traslado_motivo;
                $registroB->codigo_modular = $traslado_codigo_modular;
                $registroB->ie_nombre = strtoupper($traslado_ie_nombre);
                $registroB->alumno_id = $alumno->id;
                $registroB->activo ='1';
                $registroB->borrado ='0';
                $registroB->res_traslado = $traslado_res_traslado;
                $registroB->resolucion_traslado = $archivo;
                $registroB->matricula_id = $registro->id;
                $registroB->tipo ='1';

                $registroB->save();
            }

            $registroC = Domicilio::where('matricula_id', $registro->id)->where('activo', '1')->where('borrado', '0')->first();

            if($registroC != null){
                
                $registroC->direccion = $alumno->direccion;
                $registroC->lugar = $alumno->lugar;
                $registroC->departamento = $alumno->departamento;
                $registroC->provincia = $alumno->provincia;
                $registroC->distrito = $alumno->distrito;
                $registroC->telefono = $alumno->telefono;
                
                $registroC->save();
            }

            //Registro de Apoderado Principal de Matricula
            foreach ($apoderados as $apoderado) {
                if($apoderado->principal == "1"){

                    $registroD = ApoderadoMatricula::where('matricula_id', $registro->id)->where('activo', '1')->where('borrado', '0')->first();

                    $registroD->apellido_paterno = $apoderado->apellido_materno;
                    $registroD->apellido_materno = $apoderado->apellido_paterno;
                    $registroD->nombres = $apoderado->nombres;
                    $registroD->parentesco = $apoderado->tipo_apoderado;
                    $registroD->fecha_nac = $apoderado->fecha_nacimiento;
                    $registroD->instruccion = $apoderado->grado_instruccion;
                    $registroD->ocupacion = $apoderado->ocupacion;
                    $registroD->direccion = $apoderado->direccion;
                    $registroD->telefono = $apoderado->telefono;

                    $registroD->save();
                }
            }

            $msj='Matrícula del Alumno(a) Modificado con Éxito';
        }

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
        $result='1';
        $msj='1';

        $registro = Matricula::find($id);

        $registroA = Alumno::find($registro->alumno_id);
        $registroA->estado_grado = $registroA->old_estado_grado;
        $registroA->save();

        $registroB = Traslado::where('matricula_id', $registro->id)
                            ->where('tipo', '1')
                            ->where('activo', '1')
                            ->where('borrado', '0')
                            ->first();

        if($registroB != null){
            Storage::disk('documentoMatricula')->delete($registroB->resolucion_traslado);
            $registroB->delete();
        }

        $registroC = Domicilio::where('matricula_id', $registro->id)->where('activo', '1')->where('borrado', '0')->first();

        if($registroC != null){
            $registroC->delete();
        }

        $registroD = ApoderadoMatricula::where('matricula_id', $registro->id)->where('activo', '1')->where('borrado', '0')->first();

        if($registroD != null){
            $registroD->delete();
        }

        if($registro != null){
            $registro->delete();
        }
        

        $msj='La Matrícula fue Anulada exitosamente';

        return response()->json(["result"=>$result,'msj'=>$msj]);
    }
}
