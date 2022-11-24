<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\TipoDocumento;
use App\Models\Documento;
use App\Models\Plantilla;
use App\Models\Version;
use App\Models\Area;
use App\Models\Log;

use App\Constantes\Constantes;

use stdClass;
use Validator;
use Auth;
use Storage;
use PDF;

class PlantillaController extends Controller
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

        return view('admin.plantilla.index', compact('tipoDocumentos', 'documentos', 'id_area', 'area', 'areas'));
    }

    public function index2()
    {
        $tipoDocumentos = TipoDocumento::where('activo', Constantes::REGISTRO_ACTIVO)->where('borrado', Constantes::REGISTRO_NO_BORRADO)->orderBy('id')->get();
        $areas = Area::where('activo', Constantes::REGISTRO_ACTIVO)->where('borrado', Constantes::REGISTRO_NO_BORRADO)->orderBy('id')->get();

        $documentos = Documento::where('borrado', Constantes::REGISTRO_NO_BORRADO)->where('activo', Constantes::REGISTRO_ACTIVO)->where('estado', Constantes::ESTADO_DOCUMENTO_EMITIDO)->orderBy('tipo_documento_id')->orderBy('id')->get();
        $id_area=Auth::user()->area_id;

        $area = Area::find($id_area);

        return view('admin.repoplantilla.index', compact('tipoDocumentos', 'documentos', 'id_area', 'area', 'areas'));
    }

    public function index(Request $request)
    {
        $response = Plantilla::GetRegistros($request);
        return $response;
    }

    public function getrepoplantillas(Request $request)
    {
        $response = Plantilla::GetRegistrosRepositorio($request);
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
        $fecha=$request->fecha;
        $ubicacion_electronica=$request->ubicacion_electronica;
        $observacion=$request->observacion;
        $estado='1';

        $documento_id=$request->documento_id;
        $area_id=$request->area_id;
        $tipo_documento_id=$request->tipo_documento_id;

        if(Auth::user()->tipo_user_id > 1){
            $area_id = Auth::user()->area_id;
        }
        
        $result='1';
        $msj='';
        $selector='';

        $input1  = array('nombre' => $nombre);
        $reglas1 = array('nombre' => 'required');

        $input2  = array('nombre' => $nombre);
        $reglas2 = array('nombre' => 'unique:plantillas,nombre'.',1,borrado');

        $input3  = array('codigo' => $codigo);
        $reglas3 = array('codigo' => 'required');

        $input4  = array('codigo' => $codigo);
        $reglas4 = array('codigo' => 'unique:plantillas,codigo'.',1,borrado');

        $input5  = array('fecha' => $fecha);
        $reglas5 = array('fecha' => 'required');

        $input7  = array('observacion' => $observacion);
        $reglas7 = array('observacion' => 'required');

        $input8  = array('documento_id' => $documento_id);
        $reglas8 = array('documento_id' => 'required');

        $input9  = array('area_id' => $area_id);
        $reglas9 = array('area_id' => 'required');

        $input10  = array('tipo_documento_id' => $tipo_documento_id);
        $reglas10 = array('tipo_documento_id' => 'required');


        $validator1 = Validator::make($input1, $reglas1);
        $validator2 = Validator::make($input2, $reglas2);
        $validator3 = Validator::make($input3, $reglas3);
        $validator4 = Validator::make($input4, $reglas4);
        $validator5 = Validator::make($input5, $reglas5);
        $validator7 = Validator::make($input7, $reglas7);
        $validator8 = Validator::make($input8, $reglas8);
        $validator9 = Validator::make($input9, $reglas9);
        $validator10 = Validator::make($input10, $reglas10);


        if ($validator10->fails() || intval($tipo_documento_id) == 0)
        {
            $result='0';
            $msj='Debe remitir el Tipo de Documento';
            $selector='cbutipo_documento_id';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator9->fails() || $area_id == "0")
        {
            $result='0';
            $msj='Debe remitir el Área de Elaboración de la plantilla del Documento';
            $selector='cbuarea_id';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator1->fails())
        {
            $result='0';
            $msj='Debe ingresar el Nombre de la plantilla del Documento';
            $selector='txtnombre';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator2->fails())
        {
            $result='0';
            $msj='El Nombre de la plantilla del Documento Ingresado ya se encuentra Registrado';
            $selector='txtnombre';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator3->fails())
        {
            $result='0';
            $msj='Debe ingresar el Código de la plantilla del Documento';
            $selector='txtcodigo';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator4->fails())
        {
            $result='0';
            $msj='El Código de la plantilla del Documento Ingresado ya se encuentra Registrado';
            $selector='txtcodigo';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator5->fails())
        {
            $result='0';
            $msj='Debe ingresar la fecha de la plantilla del Documento';
            $selector='txtfecha';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator7->fails())
        {
            $observacion = "";
        }

        if ($validator8->fails())
        {
            $result='0';
            $msj='Debe remitir el Documento Relacionado';
            $selector='cbudocumento_id';

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

                if($extension2=="doc"|| $extension2=="DOC" || $extension2=="docx"|| $extension2=="DOCX" ||
                    $extension2=="xls"|| $extension2=="XLS" || $extension2=="xlsx"|| $extension2=="XLSX")
                {

                    $subir2=false;
                    $subir2=Storage::disk('plantillas')->put($ubicacion_electronica.'/'.$nuevoNombre2, \File::get($file));

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
            Storage::disk('plantillas')->delete($ubicacion_electronica.'/'.$archivo);
            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }


        $registro = new Plantilla;

        $registro->nombre=$nombre;
        $registro->codigo=$codigo;
        $registro->fecha=$fecha;
        $registro->ubicacion_electronica=$ubicacion_electronica;
        $registro->nombre_electronico=$archivo;
        $registro->activo=Constantes::REGISTRO_ACTIVO;
        $registro->borrado=Constantes::REGISTRO_NO_BORRADO;
        $registro->observacion=$observacion;
        $registro->estado=$estado;
        $registro->user_elaboracion_id=Auth::user()->id;
        $registro->documento_id=$documento_id;
        $registro->area_id=$area_id;
        $registro->tipo_documento_id=$tipo_documento_id;

        $registro->save();

        $msj='Nueva Plantilla de Documento Registrada con Éxito';

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
        $fecha=$request->fecha;
        $ubicacion_electronica=$request->ubicacion_electronica;
        $nombre_electronico=$request->nombre_electronico;
        $observacion=$request->observacion;
        $estado='1';

        $documento_id=$request->documento_id;
        $area_id=$request->area_id;
        $tipo_documento_id=$request->tipo_documento_id;


        if(Auth::user()->tipo_user_id > 1){
            $area_id = Auth::user()->area_id;
        }
        
        $result='1';
        $msj='';
        $selector='';

        $input1  = array('nombre' => $nombre);
        $reglas1 = array('nombre' => 'required');

        $input2  = array('nombre' => $nombre);
        $reglas2 = array('nombre' => 'unique:plantillas,nombre,'.$id.',id,borrado,0');

        $input3  = array('codigo' => $codigo);
        $reglas3 = array('codigo' => 'required');

        $input4  = array('codigo' => $codigo);
        $reglas4 = array('codigo' => 'unique:plantillas,codigo,'.$id.',id,borrado,0');

        $input5  = array('fecha' => $fecha);
        $reglas5 = array('fecha' => 'required');

        $input7  = array('observacion' => $observacion);
        $reglas7 = array('observacion' => 'required');

        $input8  = array('documento_id' => $documento_id);
        $reglas8 = array('documento_id' => 'required');

        $input9  = array('area_id' => $area_id);
        $reglas9 = array('area_id' => 'required');

        $input10  = array('tipo_documento_id' => $tipo_documento_id);
        $reglas10 = array('tipo_documento_id' => 'required');


        $validator1 = Validator::make($input1, $reglas1);
        $validator2 = Validator::make($input2, $reglas2);
        $validator3 = Validator::make($input3, $reglas3);
        $validator4 = Validator::make($input4, $reglas4);
        $validator5 = Validator::make($input5, $reglas5);
        $validator7 = Validator::make($input7, $reglas7);
        $validator8 = Validator::make($input8, $reglas8);
        $validator9 = Validator::make($input9, $reglas9);
        $validator10 = Validator::make($input10, $reglas10);


        if ($validator10->fails() || intval($tipo_documento_id) == 0)
        {
            $result='0';
            $msj='Debe remitir el Tipo de Documento';
            $selector='cbutipo_documento_id';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator9->fails() || $area_id == "0")
        {
            $result='0';
            $msj='Debe remitir el Área de Elaboración de la plantilla del Documento';
            $selector='cbuarea_id';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator1->fails())
        {
            $result='0';
            $msj='Debe ingresar el Nombre de la plantilla del Documento';
            $selector='txtnombre';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator2->fails())
        {
            $result='0';
            $msj='El Nombre de la plantilla del Documento Ingresado ya se encuentra Registrado';
            $selector='txtnombre';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator3->fails())
        {
            $result='0';
            $msj='Debe ingresar el Código de la plantilla del Documento';
            $selector='txtcodigo';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator4->fails())
        {
            $result='0';
            $msj='El Código de la plantilla del Documento Ingresado ya se encuentra Registrado';
            $selector='txtcodigo';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator5->fails())
        {
            $result='0';
            $msj='Debe ingresar la fecha de la plantilla del Documento';
            $selector='txtfecha';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator7->fails())
        {
            $observacion = "";
        }

        if ($validator8->fails())
        {
            $result='0';
            $msj='Debe remitir el Documento Relacionado';
            $selector='cbudocumento_id';

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

                if($extension2=="doc"|| $extension2=="DOC" || $extension2=="docx"|| $extension2=="DOCX" ||
                    $extension2=="xls"|| $extension2=="XLS" || $extension2=="xlsx"|| $extension2=="XLSX")
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
            Storage::disk('plantillas')->delete($ubicacion_electronica.'/'.$archivo);
            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if(strlen($archivo)>0){
            Storage::disk('plantillas')->delete($ubicacion_electronica.'/'.$nombre_electronico);
            $nombre_electronico = $archivo;
        }


        $registro = Plantilla::findOrFail($id);

        $registro->nombre=$nombre;
        $registro->codigo=$codigo;
        $registro->fecha=$fecha;
        $registro->ubicacion_electronica=$ubicacion_electronica;
        $registro->nombre_electronico=$nombre_electronico;
        $registro->activo=Constantes::REGISTRO_ACTIVO;
        $registro->borrado=Constantes::REGISTRO_NO_BORRADO;
        $registro->observacion=$observacion;
        $registro->estado=$estado;
        $registro->user_elaboracion_id=Auth::user()->id;
        $registro->documento_id=$documento_id;
        $registro->area_id=$area_id;
        $registro->tipo_documento_id=$tipo_documento_id;

        $registro->save();

        $msj='Plantilla de Documento Modificado con Éxito';

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

        $registro = Plantilla::find($id);
        //$registro->delete();      
        $registro->borrado=Constantes::REGISTRO_BORRADO;
        $registro->save();

        $msj='Plantilla de Documento eliminado exitosamente';

        return response()->json(["result"=>$result,'msj'=>$msj]);
    }
}
