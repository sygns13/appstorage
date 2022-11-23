<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Auth;

use App\Models\Secciones;
use App\Models\CicloSeccion;
use App\Models\CicloGrado;
use App\Models\CicloEscolar;

use stdClass;

class SeccionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index1()
    {
        return view('admin.seccion.index');
    }


    public function index()
    {

        $registros = Secciones::GetAllDataIE();
        
        return [ 
                'registros' => $registros 
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
        $result='1';
        $msj='';
        $selector='';

        $nombre=$request->nombre;
        $sigla=$request->sigla;
        $grado_id=$request->grado_id;

        $input1  = array('nombre' => $nombre);
        $reglas1 = array('nombre' => 'required');

        $input2  = array('sigla' => $sigla);
        $reglas2 = array('sigla' => 'required');

        $validator1 = Validator::make($input1, $reglas1);
        $validator2 = Validator::make($input2, $reglas2);

        if ($validator1->fails())
        {
            $result='0';
            $msj='Debe ingresar el nombre de la Sección';
            $selector='txtnombre';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator2->fails())
        {
            $result='0';
            $msj='Debe ingresar la SIGLA de la Sección';
            $selector='txtsigla';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        $registro = new Secciones;

        $registro->nombre=$nombre;
        $registro->sigla=$sigla;
        $registro->grado_id=$grado_id;
        $registro->activo='1';
        $registro->borrado='0';

        $registro->save();

        //Data Transaccional
        $cicloActivo = CicloEscolar::GetCicloActivo();

        if($cicloActivo != null){

            $gradoActivo = CicloGrado::GetGradoByCicloAndGrado($cicloActivo->id, $grado_id);

            $registro_seccion = new CicloSeccion;
            $registro_seccion->seccion_id=$registro->id;
            $registro_seccion->nombre=$registro->nombre;
            $registro_seccion->sigla=$registro->sigla;
            $registro_seccion->ciclo_grados_id=$gradoActivo->id;
            $registro_seccion->turno_id='0';
            $registro_seccion->activo='1';
            $registro_seccion->borrado='0';
            $registro_seccion->ciclo_escolar_id=$cicloActivo->id;

            $registro_seccion->save();



            //$seccion = CicloSeccion::GetSeccionByCicloAndSeccion($cicloActivo->id, $registro->id);
        }




        $msj='La Sección se ha registrado con éxito';

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

        $nombre=$request->nombre;
        $sigla=$request->sigla;
        $grado_id=$request->grado_id;

        $input1  = array('nombre' => $nombre);
        $reglas1 = array('nombre' => 'required');

        $input2  = array('sigla' => $sigla);
        $reglas2 = array('sigla' => 'required');

        $validator1 = Validator::make($input1, $reglas1);
        $validator2 = Validator::make($input2, $reglas2);

        if ($validator1->fails())
        {
            $result='0';
            $msj='Debe ingresar el nombre de la Sección';
            $selector='txtnombre';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator2->fails())
        {
            $result='0';
            $msj='Debe ingresar la SIGLA de la Sección';
            $selector='txtsigla';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        $registro = Secciones::find($id);

        $registro->nombre=$nombre;
        $registro->sigla=$sigla;

        $registro->save();

        //Data Transaccional
        $cicloActivo = CicloEscolar::GetCicloActivo();

        if($cicloActivo != null){
            $registro_seccion = CicloSeccion::GetSeccionByCicloAndSeccion($cicloActivo->id, $registro->id);

            $registro_seccion->nombre=$registro->nombre;
            $registro_seccion->sigla=$registro->sigla;

            $registro_seccion->save();
        }



        $msj='La Sección se ha modificado con éxito';

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

        $registro = Secciones::findOrFail($id);
        $registro->borrado = '1';
        $registro->save();
        
        //$registro->delete();

        //Data Transaccional
        $cicloActivo = CicloEscolar::GetCicloActivo();

        if($cicloActivo != null){
            $seccion = CicloSeccion::GetSeccionByCicloAndSeccion($cicloActivo->id, $registro->id);
            $seccion->delete();
        }

        $msj='La Sección fue eliminada exitosamente';


        return response()->json(["result"=>$result,'msj'=>$msj]);
    }
}
