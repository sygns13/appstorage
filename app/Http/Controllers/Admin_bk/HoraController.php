<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Turno;
use App\Models\Hora;

use Validator;
use Auth;

class HoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index1()
    {
        $turnos = Turno::all();
        return view('admin.hora.index',compact('turnos'));
    }

    public function index(Request $request)
    {
        $response = Hora::GetHoras($request);

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
        ini_set('memory_limit','256M');
        ini_set('upload_max_filesize','20M');

        $horaini=$request->horaini;
        $horafin=$request->horafin;
        $tipo=$request->tipo;
        $turno_id=$request->turno_id;

        $result='1';
        $msj='';
        $selector='';


        $input1  = array('horaini' => $horaini);
        $reglas1 = array('horaini' => 'required');

        $input2  = array('horafin' => $horafin);
        $reglas2 = array('horafin' => 'required');

        $input3  = array('tipo' => $tipo);
        $reglas3 = array('tipo' => 'required');

        $input4  = array('turno_id' => $turno_id);
        $reglas4 = array('turno_id' => 'required');

        $validator1 = Validator::make($input1, $reglas1);
        $validator2 = Validator::make($input2, $reglas2);
        $validator3 = Validator::make($input3, $reglas3);
        $validator4 = Validator::make($input4, $reglas4);

        if ($validator1->fails())
        {
            $result='0';
            $msj='Debe ingresar la Hora de Inicio';
            $selector='txthoraini';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator2->fails())
        {
            $result='0';
            $msj='Debe de ingresar la Hora de Finalización';
            $selector='txthorafin';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator3->fails())
        {
            $result='0';
            $msj='Debe seleccionar el tipo de Hora';
            $selector='cbutipo';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator4->fails())
        {
            $result='0';
            $msj='Debe seleccuinar el turno al que corresponde la Hora';
            $selector='cbuturno_id';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }
      

            $registro = new Hora;

            $registro->horaini=$horaini;
            $registro->horafin=$horafin;
            $registro->tipo=$tipo;
            $registro->turno_id=$turno_id;
            $registro->activo='1';
            $registro->borrado='0';

            $registro->save();

            $msj='Nueva Hora Registrada con Éxito';

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
        ini_set('memory_limit','256M');
        ini_set('upload_max_filesize','20M');

        $horaini=$request->horaini;
        $horafin=$request->horafin;
        $tipo=$request->tipo;
        $turno_id=$request->turno_id;

        $result='1';
        $msj='';
        $selector='';


        $input1  = array('horaini' => $horaini);
        $reglas1 = array('horaini' => 'required');

        $input2  = array('horafin' => $horafin);
        $reglas2 = array('horafin' => 'required');

        $input3  = array('tipo' => $tipo);
        $reglas3 = array('tipo' => 'required');

        $input4  = array('turno_id' => $turno_id);
        $reglas4 = array('turno_id' => 'required');

        $validator1 = Validator::make($input1, $reglas1);
        $validator2 = Validator::make($input2, $reglas2);
        $validator3 = Validator::make($input3, $reglas3);
        $validator4 = Validator::make($input4, $reglas4);

        if ($validator1->fails())
        {
            $result='0';
            $msj='Debe ingresar la Hora de Inicio';
            $selector='txthoraini';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator2->fails())
        {
            $result='0';
            $msj='Debe de ingresar la Hora de Finalización';
            $selector='txthorafin';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator3->fails())
        {
            $result='0';
            $msj='Debe seleccionar el tipo de Hora';
            $selector='cbutipo';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator4->fails())
        {
            $result='0';
            $msj='Debe seleccuinar el turno al que corresponde la Hora';
            $selector='cbuturno_id';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }
      

            $registro = Hora::find($id);

            $registro->horaini=$horaini;
            $registro->horafin=$horafin;
            $registro->tipo=$tipo;
            $registro->turno_id=$turno_id;

            $registro->save();

            $msj='Hora Modificada con Éxito';

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

        $registro = Hora::find($id);
        $registro->delete();      

        $msj='Hora eliminada exitosamente';

        return response()->json(["result"=>$result,'msj'=>$msj]);
    }
}
