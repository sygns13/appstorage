<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\TipoDocumento;

use App\Constantes\Constantes;

use Validator;
use Auth;

class TipoDocumentoController extends Controller
{
    public function index1()
    {
        return view('admin.tipodocumento.index');
    }


    public function index(Request $request)
    {
        $response = TipoDocumento::GetRegistros($request);
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

        $result='1';
        $msj='';
        $selector='';


        $input1  = array('nombre' => $nombre);
        $reglas1 = array('nombre' => 'required');

        $input2  = array('nombre' => $nombre);
        $reglas2 = array('nombre' => 'unique:tipo_documentos,nombre'.',1,borrado');

        $validator1 = Validator::make($input1, $reglas1);
        $validator2 = Validator::make($input2, $reglas2);


        if ($validator1->fails())
        {
            $result='0';
            $msj='Debe ingresar el Nombre del Tipo de Documento';
            $selector='txtnombre';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator2->fails())
        {
            $result='0';
            $msj='El Nombre del Tipo de Documento Ingresado ya se encuentra Registrado';
            $selector='txtnombre';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }


        $registro = new TipoDocumento;

        $registro->nombre=$nombre;
        $registro->activo=Constantes::REGISTRO_ACTIVO;
        $registro->borrado=Constantes::REGISTRO_NO_BORRADO;

        $registro->save();

        $msj='Nuevo Tipo de Documento Registrado con Éxito';

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

        $result='1';
        $msj='';
        $selector='';


        $input1  = array('nombre' => $nombre);
        $reglas1 = array('nombre' => 'required');

        $input2  = array('nombre' => $nombre);
        $reglas2 = array('nombre' => 'unique:tipo_documentos,nombre,'.$id.',id,borrado,0');

        $validator1 = Validator::make($input1, $reglas1);
        $validator2 = Validator::make($input2, $reglas2);


        if ($validator1->fails())
        {
            $result='0';
            $msj='Debe ingresar el Nombre del Tipo de Documento';
            $selector='txtnombre';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator2->fails())
        {
            $result='0';
            $msj='El Nombre del Tipo de Documento Ingresado ya se encuentra Registrado';
            $selector='txtnombre';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }


        $registro = TipoDocumento::findOrFail($id);

        $registro->nombre=$nombre;

        $registro->save();

        $msj='Tipo de Documento Modificado con Éxito';

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

        $registro = TipoDocumento::find($id);
        //$registro->delete();      
        $registro->borrado=Constantes::REGISTRO_BORRADO;
        $registro->save();

        $msj='Tipo de Documento eliminado exitosamente';

        return response()->json(["result"=>$result,'msj'=>$msj]);
    }
}
