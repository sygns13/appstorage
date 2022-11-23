<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Validator;
use Auth;

use App\Models\InstitucionEducativa;

use stdClass;

class InstitucionEducativaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index1()
    {
        return view('admin.ie.index');
    }

    public function index()
    {

        $registro = InstitucionEducativa::where('borrado','0')
                                            ->where('activo','1')
                                            ->first();
        
        return [ 
                'registro' => $registro 
               ];
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
        //
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

        $codigo_modular=$request->codigo_modular;
        $nombre=$request->nombre;
        $resolucion_creacion=$request->resolucion_creacion;

        $input1  = array('codigo_modular' => $codigo_modular);
        $reglas1 = array('codigo_modular' => 'required');

        $input2  = array('nombre' => $nombre);
        $reglas2 = array('nombre' => 'required');

        $input3  = array('resolucion_creacion' => $resolucion_creacion);
        $reglas3 = array('resolucion_creacion' => 'required');

        $validator1 = Validator::make($input1, $reglas1);
        $validator2 = Validator::make($input2, $reglas2);
        $validator3 = Validator::make($input3, $reglas3);

        if ($validator1->fails())
        {
            $result='0';
            $msj='Debe ingresar el Código Modular de la Institución Educativa';
            $selector='txtcodigo_modular';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator2->fails())
        {
            $result='0';
            $msj='Debe ingresar el nombre de la Institución Educativa';
            $selector='txtnombre';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator3->fails())
        {
            $result='0';
            $msj='Debe ingresar la Resolución de Creación de la Institución Educativa';
            $selector='txtresolucion_creacion';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        $registro = InstitucionEducativa::find($id);

        $registro->codigo_modular=$codigo_modular;
        $registro->nombre=$nombre;
        $registro->resolucion_creacion=$resolucion_creacion;

        $registro->save();



        $msj='La Institución Educativa se ha modificado con éxito';

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
