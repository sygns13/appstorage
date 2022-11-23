<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\TipoDocumento;
use App\Models\Documento;
use App\Models\Version;
use App\Models\Area;
use App\Models\Log;

use App\Constantes\Constantes;

use stdClass;
use Validator;
use Auth;
use Storage;
use PDF;

class DocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index1()
    {
        $tipoDocumentos = TipoDocumento::where('activo', Constantes::REGISTRO_ACTIVO)->where('borrado', Constantes::REGISTRO_NO_BORRADO)->orderBy('id')->get();
        $areas = Area::where('activo', Constantes::REGISTRO_ACTIVO)->where('borrado', Constantes::REGISTRO_NO_BORRADO)->orderBy('id')->get();

        $documentos = Documento::where('borrado', Constantes::REGISTRO_NO_BORRADO)->where('activo', Constantes::REGISTRO_ACTIVO)->where('estado', Constantes::ESTADO_DOCUMENTO_EMITIDO)->orderBy('tipo_documento_id')->orderBy('id')->get();
        $id_area=Auth::user()->area_id;

        $area = Area::find($id_area);

        return view('admin.documento.index', compact('tipoDocumentos', 'documentos', 'id_area', 'area', 'areas'));
    }

    public function index2()
    {
        $tipoDocumentos = TipoDocumento::where('activo', Constantes::REGISTRO_ACTIVO)->where('borrado', Constantes::REGISTRO_NO_BORRADO)->orderBy('id')->get();
        $areas = Area::where('activo', Constantes::REGISTRO_ACTIVO)->where('borrado', Constantes::REGISTRO_NO_BORRADO)->orderBy('id')->get();

        $documentos = Documento::where('borrado', Constantes::REGISTRO_NO_BORRADO)->where('activo', Constantes::REGISTRO_ACTIVO)->where('estado', Constantes::ESTADO_DOCUMENTO_EMITIDO)->orderBy('tipo_documento_id')->orderBy('id')->get();
        $id_area=Auth::user()->area_id;

        $area = Area::find($id_area);

        return view('admin.repositorio.index', compact('tipoDocumentos', 'documentos', 'id_area', 'area', 'areas'));
    }

    public function index3()
    {
        $tipoDocumentos = TipoDocumento::where('activo', Constantes::REGISTRO_ACTIVO)->where('borrado', Constantes::REGISTRO_NO_BORRADO)->orderBy('id')->get();
        $areas = Area::where('activo', Constantes::REGISTRO_ACTIVO)->where('borrado', Constantes::REGISTRO_NO_BORRADO)->orderBy('id')->get();

        $documentos = Documento::where('borrado', Constantes::REGISTRO_NO_BORRADO)->where('activo', Constantes::REGISTRO_ACTIVO)->where('estado', Constantes::ESTADO_DOCUMENTO_EMITIDO)->orderBy('tipo_documento_id')->orderBy('id')->get();
        $id_area=Auth::user()->area_id;

        $area = Area::find($id_area);

        return view('admin.historicos.index', compact('tipoDocumentos', 'documentos', 'id_area', 'area', 'areas'));
    }

    public function index(Request $request)
    {
        $response = Documento::GetRegistros($request);
        return $response;
    }

    public function getrepositorio(Request $request)
    {
        $response = Documento::GetRegistrosRepositorio($request);
        return $response;
    }

    public function gethistoricos(Request $request)
    {
        $response = Documento::GetRegistrosHistoricos($request);
        return $response;
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

    public function postVersionDoc(Request $request)
    {
        $id=$request->id;
        $nombre=$request->nombre;
        $codigo=$request->codigo;
        $documento_relacionado_id=$request->documento_relacionado_id;
        $area_id=$request->area_id;
        $area_revision_id=$request->area_revision_id;
        $area_aprobacion_id=$request->area_aprobacion_id;
        $ubicacion_electronica=$request->ubicacion_electronica;

        $tipo_documento_id=$request->tipo_documento_id;
        $obs_elaboracion=$request->obs_elaboracion;
        $obs_revision=$request->obs_revision;
        $obs_aprobacion=$request->obs_aprobacion;
        $version_actual=$request->version_actual;
        $revision=$request->revision;
        $estado=$request->estado;

        $fecha_elaboracion=$request->fecha_elaboracion;
        $fecha_revision=$request->fecha_revision;
        $fecha_aprobacion=$request->fecha_aprobacion;
        

        $result='1';
        $msj='';
        $selector='';

        if($fecha_elaboracion == null || $fecha_elaboracion == ""){
            $result='0';
            $msj='Debe remitir la Fecha de Elaboración del Documento';
            $selector='cbutfecha_elaboracion';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }
        if($fecha_revision == null || $fecha_revision == ""){
            $result='0';
            $msj='Debe remitir la Fecha de Revisión del Documento';
            $selector='cbutfecha_revision';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }
        if($fecha_aprobacion == null || $fecha_aprobacion == ""){
            $result='0';
            $msj='Debe remitir la Fecha de Aprobación del Documento';
            $selector='cbutfecha_aprobacion';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        $input11  = array('version_actual' => $version_actual);
        $reglas11 = array('version_actual' => 'required');

        $input12  = array('revision' => $revision);
        $reglas12 = array('revision' => 'required');

        $validator11 = Validator::make($input11, $reglas11);
        $validator12 = Validator::make($input12, $reglas12);

        if ($validator11->fails())
        {
            $result='0';
            $msj='Debe remitir la Versión Actual del Documento';
            $selector='txtversion_actual';
            
            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }
        
        if ($validator12->fails())
        {
            $result='0';
            $msj='Debe remitir la Revisión Actual del Documento';
            $selector='txtrevision';
            
            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }


        $registroBD = Documento::findOrFail($id);
        $bandera = false;

        if(intval($version_actual) > intval($registroBD->version_actual)){
            $bandera = true;
        }

        if(intval($revision) > intval($registroBD->revision)){
            $bandera = true;
        }

        if (!$bandera)
        {
            $result='0';
            $msj='Por lo menos la Versión o la Revisión debe ser superior';
            $selector='txtversion_actual';
            
            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if(intval($version_actual) < intval($registroBD->version_actual)){
            $bandera = false;
        }
        if (!$bandera)
        {
            $result='0';
            $msj='La Versión Remitida no puede ser menor a la Versión Actual';
            $selector='txtversion_actual';
            
            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if(intval($revision) < intval($registroBD->revision)){
            $bandera = false;
        }
        if (!$bandera)
        {
            $result='0';
            $msj='La Revisión Remitida no puede ser menor a la Revisión Actual';
            $selector='txtrevision';
            
            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        $archivo="";
        $file = $request->archivo;
        $segureFile=0;

        if($request->hasFile('archivo')){

            $aux2='doc_'.$tipo_documento_id.'_'.date('d-m-Y').'-'.date('H-i-s');
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
                    $subir2=Storage::disk('repositorio')->put($ubicacion_electronica.'/'.$nuevoNombre2, \File::get($file));

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

        if($segureFile==1){
            Storage::disk('repositorio')->delete($ubicacion_electronica.'/'.$archivo);
            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }


        //$registroBD


        //Guardando Registro Histórico
        $registro = new Version;

        $registro->nombre=$registroBD->nombre;
        $registro->codigo=$registroBD->codigo;
        $registro->documento_relacionado_id=$registroBD->documento_relacionado_id;
        $registro->area_id=$registroBD->area_id;
        $registro->area_revision_id=$registroBD->area_revision_id;
        $registro->area_aprobacion_id=$registroBD->area_aprobacion_id;
        $registro->version_actual=$registroBD->version_actual;
        $registro->fecha_elaboracion=$registroBD->fecha_elaboracion;
        $registro->fecha_revision=$registroBD->fecha_revision;
        $registro->fecha_aprobacion=$registroBD->fecha_aprobacion;
        $registro->ubicacion_electronica=$registroBD->ubicacion_electronica;
        $registro->nombre_electronico=$registroBD->nombre_electronico;
        $registro->revision=$registroBD->revision;
        $registro->activo=Constantes::REGISTRO_ACTIVO;
        $registro->borrado=Constantes::REGISTRO_NO_BORRADO;
        $registro->documento_id=$registroBD->id;
        
        $registro->obs_elaboracion=$registroBD->obs_elaboracion;
        $registro->obs_revision=$registroBD->obs_revision;
        $registro->obs_aprobacion=$registroBD->obs_aprobacion;
        $registro->estado=Constantes::ESTADO_DOCUMENTO_HISTORICO;
        $registro->user_elaboracion_id=$registroBD->user_elaboracion_id;
        $registro->tipo_documento_id=$registroBD->tipo_documento_id;
        
        $registro->save();


        //Guardando Nueva Versión Vigente
        $registroVig = Documento::findOrFail($id);

        $registroVig->version_actual=$version_actual;
        $registroVig->fecha_elaboracion=$fecha_elaboracion;
        $registroVig->fecha_revision=$fecha_revision;
        $registroVig->fecha_aprobacion=$fecha_aprobacion;
        $registroVig->ubicacion_electronica=$ubicacion_electronica;
        $registroVig->nombre_electronico=$archivo;
        $registroVig->obs_elaboracion=$obs_elaboracion;
        $registroVig->revision=$revision;
        $registroVig->user_elaboracion_id=Auth::user()->id;

        $registroVig->save();

        $log = new Log;

        $log->documento_id = $registroVig->id;
        $log->estado = $estado;
        $log->fecha = date('Y-m-d');
        $log->hora = date('H:i:s');
        $log->sustento = $obs_elaboracion . " Nueva Versión - Revisión";
        $log->user_id = Auth::user()->id;
        $log->area_id = $area_id;

        $log->save();

        $msj='Nueva Versión o Revisión de Documento Registrada con Éxito';

        return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nombre=$request->nombre;
        $codigo=$request->codigo;
        $documento_relacionado_id=$request->documento_relacionado_id;
        $area_id=$request->area_id;
        $area_revision_id=$request->area_revision_id;
        $area_aprobacion_id=$request->area_aprobacion_id;
        $ubicacion_electronica=$request->ubicacion_electronica;

        $tipo_documento_id=$request->tipo_documento_id;
        $obs_elaboracion=$request->obs_elaboracion;
        $obs_revision=$request->obs_revision;
        $obs_aprobacion=$request->obs_aprobacion;
        $version_actual=$request->version_actual;
        $revision=$request->revision;
        $estado=$request->estado;

        $fecha_elaboracion=$request->fecha_elaboracion;
        $fecha_revision=$request->fecha_revision;
        $fecha_aprobacion=$request->fecha_aprobacion;
        

        $result='1';
        $msj='';
        $selector='';


        


        $input1  = array('nombre' => $nombre);
        $reglas1 = array('nombre' => 'required');

        $input2  = array('nombre' => $nombre);
        $reglas2 = array('nombre' => 'unique:documentos,nombre'.',1,borrado');

        $input3  = array('codigo' => $codigo);
        $reglas3 = array('codigo' => 'required');

        $input4  = array('codigo' => $codigo);
        $reglas4 = array('codigo' => 'unique:documentos,codigo'.',1,borrado');

        $input5  = array('documento_relacionado_id' => $documento_relacionado_id);
        $reglas5 = array('documento_relacionado_id' => 'required');

        $input6  = array('area_id' => $area_id);
        $reglas6 = array('area_id' => 'required');

        $input7  = array('area_revision_id' => $area_revision_id);
        $reglas7 = array('area_revision_id' => 'required');

        $input8  = array('area_aprobacion_id' => $area_aprobacion_id);
        $reglas8 = array('area_aprobacion_id' => 'required');

        $input9  = array('tipo_documento_id' => $tipo_documento_id);
        $reglas9 = array('tipo_documento_id' => 'required');

        $input10  = array('obs_elaboracion' => $obs_elaboracion);
        $reglas10 = array('obs_elaboracion' => 'required');

        $input11  = array('version_actual' => $version_actual);
        $reglas11 = array('version_actual' => 'required');

        $input12  = array('revision' => $revision);
        $reglas12 = array('revision' => 'required');

        $input13  = array('estado' => $estado);
        $reglas13 = array('estado' => 'required');

        $input14  = array('obs_revision' => $obs_revision);
        $reglas14 = array('obs_revision' => 'required');

        $input15  = array('obs_aprobacion' => $obs_aprobacion);
        $reglas15 = array('obs_aprobacion' => 'required');

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


        if($fecha_elaboracion == null || $fecha_elaboracion == ""){
            $result='0';
            $msj='Debe remitir la Fecha de Elaboración del Documento';
            $selector='cbutfecha_elaboracion';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }
        if($fecha_revision == null || $fecha_revision == ""){
            $result='0';
            $msj='Debe remitir la Fecha de Revisión del Documento';
            $selector='cbutfecha_revision';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }
        if($fecha_aprobacion == null || $fecha_aprobacion == ""){
            $result='0';
            $msj='Debe remitir la Fecha de Aprobación del Documento';
            $selector='cbutfecha_aprobacion';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator9->fails() || intval($tipo_documento_id) == 0)
        {
            $result='0';
            $msj='Debe remitir el Tipo de Documento';
            $selector='cbutipo_documento_id';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator1->fails())
        {
            $result='0';
            $msj='Debe ingresar el Nombre del Documento';
            $selector='txtnombre';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator2->fails())
        {
            $result='0';
            $msj='El Nombre del Documento Ingresado ya se encuentra Registrado';
            $selector='txtnombre';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator3->fails())
        {
            $result='0';
            $msj='Debe ingresar el Código del Documento';
            $selector='txtcodigo';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator4->fails())
        {
            $result='0';
            $msj='El Código del Documento Ingresado ya se encuentra Registrado';
            $selector='txtcodigo';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator5->fails())
        {
            $result='0';
            $msj='Debe remitir el Documento Relacionado';
            $selector='cbudocumento_relacionado_id';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator6->fails() || $area_id == "0")
        {
            $result='0';
            $msj='Debe remitir el Área de Elaboración del Documento';
            $selector='cbuarea_id';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator7->fails() || $area_revision_id == "0")
        {
            $result='0';
            $msj='Debe remitir el Área de Revisión del Documento';
            $selector='cbuarea_revision_id';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator8->fails() || $area_aprobacion_id == "0")
        {
            $result='0';
            $msj='Debe remitir el Área de Aprobación del Documento';
            $selector='cbuarea_aprobacion_id';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }
        
        if ($validator10->fails())
        {
            $obs_elaboracion = "";
        }
        
        if ($validator11->fails())
        {
            $result='0';
            $msj='Debe remitir la Versión Actual del Documento';
            $selector='txtversion_actual';
            
            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }
        
        if ($validator12->fails())
        {
            $result='0';
            $msj='Debe remitir la Revisión Actual del Documento';
            $selector='txtrevision';
            
            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }
        
        if ($validator13->fails())
        {
            $result='0';
            $msj='Debe remitir el Estado Actual del Documento';
            $selector='txtestado';
            
            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }
        
        if ($validator14->fails())
        {
            $obs_revision = "";
        }
        
        if ($validator15->fails())
        {
            $obs_aprobacion = "";
        }
        

        $archivo="";
        $file = $request->archivo;
        $segureFile=0;

        if($request->hasFile('archivo')){

            $aux2='doc_'.$tipo_documento_id.'_'.date('d-m-Y').'-'.date('H-i-s');
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
                    $subir2=Storage::disk('repositorio')->put($ubicacion_electronica.'/'.$nuevoNombre2, \File::get($file));

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

        if($segureFile==1){
            Storage::disk('repositorio')->delete($ubicacion_electronica.'/'.$archivo);
            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }


        $registro = new Documento;

        $registro->nombre=$nombre;
        $registro->codigo=$codigo;
        $registro->documento_relacionado_id=$documento_relacionado_id;
        $registro->area_id=$area_id;
        $registro->area_revision_id=$area_revision_id;
        $registro->area_aprobacion_id=$area_aprobacion_id;
        $registro->version_actual=$version_actual;
        $registro->fecha_elaboracion=$fecha_elaboracion;
        $registro->fecha_revision=$fecha_revision;
        $registro->fecha_aprobacion=$fecha_aprobacion;
        $registro->ubicacion_electronica=$ubicacion_electronica;
        $registro->nombre_electronico=$archivo;
        $registro->obs_elaboracion=$obs_elaboracion;
        $registro->obs_revision=$obs_revision;
        $registro->obs_aprobacion=$obs_aprobacion;
        $registro->revision=$revision;
        $registro->estado=$estado;
        $registro->user_elaboracion_id=Auth::user()->id;
        $registro->tipo_documento_id=$tipo_documento_id;
        $registro->activo=Constantes::REGISTRO_ACTIVO;
        $registro->borrado=Constantes::REGISTRO_NO_BORRADO;

        $registro->save();

        $log = new Log;

        $log->documento_id = $registro->id;
        $log->estado = $estado;
        $log->fecha = date('Y-m-d');
        $log->hora = date('H:i:s');
        $log->sustento = $obs_elaboracion;
        $log->user_id = Auth::user()->id;
        $log->area_id = $area_id;

        $log->save();

        $msj='Nuevo Documento Registrado con Éxito';

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
        $nombre=$request->nombre;
        $codigo=$request->codigo;
        $documento_relacionado_id=$request->documento_relacionado_id;
        $area_id=$request->area_id;
        $area_revision_id=$request->area_revision_id;
        $area_aprobacion_id=$request->area_aprobacion_id;
        $ubicacion_electronica=$request->ubicacion_electronica;
        $nombre_electronico=$request->nombre_electronico;

        $tipo_documento_id=$request->tipo_documento_id;
        $obs_elaboracion=$request->obs_elaboracion;
        $obs_revision=$request->obs_revision;
        $obs_aprobacion=$request->obs_aprobacion;
        $version_actual=$request->version_actual;
        $revision=$request->revision;
        $estado=$request->estado;

        $fecha_elaboracion=$request->fecha_elaboracion;
        $fecha_revision=$request->fecha_revision;
        $fecha_aprobacion=$request->fecha_aprobacion;
        

        $result='1';
        $msj='';
        $selector='';


        $input1  = array('nombre' => $nombre);
        $reglas1 = array('nombre' => 'required');

        $input2  = array('nombre' => $nombre);
        $reglas2 = array('nombre' => 'unique:documentos,nombre,'.$id.',id,borrado,0');

        $input3  = array('codigo' => $codigo);
        $reglas3 = array('codigo' => 'required');

        $input4  = array('codigo' => $codigo);
        $reglas4 = array('codigo' => 'unique:documentos,codigo,'.$id.',id,borrado,0');

        $input5  = array('documento_relacionado_id' => $documento_relacionado_id);
        $reglas5 = array('documento_relacionado_id' => 'required');

        $input6  = array('area_id' => $area_id);
        $reglas6 = array('area_id' => 'required');

        $input7  = array('area_revision_id' => $area_revision_id);
        $reglas7 = array('area_revision_id' => 'required');

        $input8  = array('area_aprobacion_id' => $area_aprobacion_id);
        $reglas8 = array('area_aprobacion_id' => 'required');

        $input9  = array('tipo_documento_id' => $tipo_documento_id);
        $reglas9 = array('tipo_documento_id' => 'required');

        $input10  = array('obs_elaboracion' => $obs_elaboracion);
        $reglas10 = array('obs_elaboracion' => 'required');

        $input11  = array('version_actual' => $version_actual);
        $reglas11 = array('version_actual' => 'required');

        $input12  = array('revision' => $revision);
        $reglas12 = array('revision' => 'required');

        $input13  = array('estado' => $estado);
        $reglas13 = array('estado' => 'required');

        $input14  = array('obs_revision' => $obs_revision);
        $reglas14 = array('obs_revision' => 'required');

        $input15  = array('obs_aprobacion' => $obs_aprobacion);
        $reglas15 = array('obs_aprobacion' => 'required');

        $input16  = array('nombre_electronico' => $nombre_electronico);
        $reglas16 = array('nombre_electronico' => 'required');

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

        
        if($fecha_elaboracion == null || $fecha_elaboracion == ""){
            $result='0';
            $msj='Debe remitir la Fecha de Elaboración del Documento';
            $selector='cbutfecha_elaboracion';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }
        if($fecha_revision == null || $fecha_revision == ""){
            $result='0';
            $msj='Debe remitir la Fecha de Revisión del Documento';
            $selector='cbutfecha_revision';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }
        if($fecha_aprobacion == null || $fecha_aprobacion == ""){
            $result='0';
            $msj='Debe remitir la Fecha de Aprobación del Documento';
            $selector='cbutfecha_aprobacion';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator9->fails() || intval($tipo_documento_id) == 0)
        {
            $result='0';
            $msj='Debe remitir el Tipo de Documento';
            $selector='cbutipo_documento_id';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator1->fails())
        {
            $result='0';
            $msj='Debe ingresar el Nombre del Documento';
            $selector='txtnombre';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator2->fails())
        {
            $result='0';
            $msj='El Nombre del Documento Ingresado ya se encuentra Registrado';
            $selector='txtnombre';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator3->fails())
        {
            $result='0';
            $msj='Debe ingresar el Código del Documento';
            $selector='txtcodigo';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator4->fails())
        {
            $result='0';
            $msj='El Código del Documento Ingresado ya se encuentra Registrado';
            $selector='txtcodigo';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator5->fails())
        {
            $result='0';
            $msj='Debe remitir el Documento Relacionado';
            $selector='cbudocumento_relacionado_id';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator6->fails() || $area_id == "0")
        {
            $result='0';
            $msj='Debe remitir el Área de Elaboración del Documento';
            $selector='cbuarea_id';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator7->fails() || $area_revision_id == "0")
        {
            $result='0';
            $msj='Debe remitir el Área de Revisión del Documento';
            $selector='cbuarea_revision_id';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator8->fails() || $area_aprobacion_id == "0")
        {
            $result='0';
            $msj='Debe remitir el Área de Aprobación del Documento';
            $selector='cbuarea_aprobacion_id';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }
        
        if ($validator10->fails())
        {
            $obs_elaboracion = "";
        }
        
        if ($validator11->fails())
        {
            $result='0';
            $msj='Debe remitir la Versión Actual del Documento';
            $selector='txtversion_actual';
            
            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }
        
        if ($validator12->fails())
        {
            $result='0';
            $msj='Debe remitir la Revisión Actual del Documento';
            $selector='txtrevision';
            
            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }
        
        if ($validator13->fails())
        {
            $result='0';
            $msj='Debe remitir el Estado Actual del Documento';
            $selector='txtestado';
            
            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }
        
        if ($validator14->fails())
        {
            $obs_revision = "";
        }
        
        if ($validator15->fails())
        {
            $obs_aprobacion = "";
        }
        
        if ($validator16->fails())
        {
            $result='0';
            $msj='Debe remitir el Nombre Electrónico del Documento';
            $selector='nombre_electronico';
            
            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }
        

        $archivo="";
        $file = $request->archivo;
        $segureFile=0;

        if($request->hasFile('archivo')){

            $aux2='doc_'.$tipo_documento_id.'_'.date('d-m-Y').'-'.date('H-i-s');
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
                    $subir2=Storage::disk('repositorio')->put($ubicacion_electronica.'/'.$nuevoNombre2, \File::get($file));

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

        if($segureFile==1){
            Storage::disk('repositorio')->delete($ubicacion_electronica.'/'.$archivo);
            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if(strlen($archivo)>0){
            Storage::disk('repositorio')->delete($ubicacion_electronica.'/'.$nombre_electronico);
            $nombre_electronico = $archivo;
        }


        $registro = Documento::findOrFail($id);

        $registro->nombre=$nombre;
        $registro->codigo=$codigo;
        $registro->documento_relacionado_id=$documento_relacionado_id;
        $registro->area_id=$area_id;
        $registro->area_revision_id=$area_revision_id;
        $registro->area_aprobacion_id=$area_aprobacion_id;
        $registro->version_actual=$version_actual;
        $registro->fecha_elaboracion=$fecha_elaboracion;
        $registro->fecha_revision=$fecha_revision;
        $registro->fecha_aprobacion=$fecha_aprobacion;
        $registro->ubicacion_electronica=$ubicacion_electronica;
        $registro->nombre_electronico=$nombre_electronico;
        $registro->obs_elaboracion=$obs_elaboracion;
        $registro->obs_revision=$obs_revision;
        $registro->obs_aprobacion=$obs_aprobacion;
        $registro->revision=$revision;
        $registro->estado=$estado;
        $registro->user_elaboracion_id=Auth::user()->id;
        $registro->tipo_documento_id=$tipo_documento_id;
        $registro->activo=Constantes::REGISTRO_ACTIVO;
        $registro->borrado=Constantes::REGISTRO_NO_BORRADO;

        $registro->save();

        $msj='Documento Modificado con Éxito';

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

        $registro = Documento::find($id);
        //$registro->delete();      
        $registro->borrado=Constantes::REGISTRO_BORRADO;
        $registro->save();

        $msj='Documento eliminado exitosamente';

        return response()->json(["result"=>$result,'msj'=>$msj]);
    }
}
