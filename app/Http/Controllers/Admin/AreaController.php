<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Area;
use App\Models\TipoUser;
use App\Models\User;

use App\Constantes\Constantes;

use Validator;
use Auth;


class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index1()
    {
        return view('admin.area.index');
    }


    public function index(Request $request)
    {
        $response = Area::GetRegistros($request);
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
        $siglas=$request->codigo;
        $codigo=$request->codigo;
        $nivel=$request->nivel;

        $result='1';
        $msj='';
        $selector='';


        $input1  = array('nombre' => $nombre);
        $reglas1 = array('nombre' => 'required');

        $input2  = array('codigo' => $codigo);
        $reglas2 = array('codigo' => 'required');

        $input3  = array('nombre' => $nombre);
        $reglas3 = array('nombre' => 'unique:areas,nombre'.',1,borrado');

        $input4  = array('codigo' => $codigo);
        $reglas4 = array('codigo' => 'unique:areas,codigo'.',1,borrado');

        $validator1 = Validator::make($input1, $reglas1);
        $validator2 = Validator::make($input2, $reglas2);
        $validator3 = Validator::make($input3, $reglas3);
        $validator4 = Validator::make($input4, $reglas4);


        if(!isset($nivel) || intval($nivel) == 0){
            $result='0';
            $msj='Seleccione un Tipo de Área';
            $selector='cbunivel';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }
        if ($validator1->fails())
        {
            $result='0';
            $msj='Debe ingresar el Nombre del Área';
            $selector='txtnombre';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator2->fails())
        {
            $result='0';
            $msj='Debe de ingresar el Código del Área';
            $selector='txtcodigo';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }
        if ($validator3->fails())
        {
            $result='0';
            $msj='El Nombre del Área Ingresado ya se encuentra Registrado';
            $selector='txtnombre';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator4->fails())
        {
            $result='0';
            $msj='El Código del Área Ingresado ya se encuentra Registrado';
            $selector='txtcodigo';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }
        

            $registro = new Area;

            $registro->nombre=$nombre;
            $registro->siglas=$siglas;
            $registro->codigo=$codigo;
            $registro->nivel=$nivel;
            $registro->activo=Constantes::REGISTRO_ACTIVO;
            $registro->borrado=Constantes::REGISTRO_NO_BORRADO;

            $registro->save();

            $msj='Nueva Área Registrada con Éxito';

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
        $siglas=$request->codigo;
        $codigo=$request->codigo;
        $nivel=$request->nivel;

        $result='1';
        $msj='';
        $selector='';


        $input1  = array('nombre' => $nombre);
        $reglas1 = array('nombre' => 'required');

        $input2  = array('codigo' => $codigo);
        $reglas2 = array('codigo' => 'required');

        $input3  = array('nombre' => $nombre);
        $reglas3 = array('nombre' => 'unique:areas,nombre,'.$id.',id,borrado,0');

        $input4  = array('codigo' => $codigo);
        $reglas4 = array('codigo' => 'unique:areas,codigo,'.$id.',id,borrado,0');

        $validator1 = Validator::make($input1, $reglas1);
        $validator2 = Validator::make($input2, $reglas2);
        $validator3 = Validator::make($input3, $reglas3);
        $validator4 = Validator::make($input4, $reglas4);


        if(!isset($nivel) || intval($nivel) == 0){
            $result='0';
            $msj='Seleccione un Tipo de Área';
            $selector='cbunivel';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }
        if ($validator1->fails())
        {
            $result='0';
            $msj='Debe ingresar el Nombre del Área';
            $selector='txtnombre';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator2->fails())
        {
            $result='0';
            $msj='Debe de ingresar el Código del Área';
            $selector='txtcodigo';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }
        if ($validator3->fails())
        {
            $result='0';
            $msj='El Nombre del Área Ingresado ya se encuentra Registrado';
            $selector='txtnombre';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator4->fails())
        {
            $result='0';
            $msj='El Código del Área Ingresado ya se encuentra Registrado';
            $selector='txtcodigo';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

            $registro = Area::findOrFail($id);

            $registro->nombre=$nombre;
            $registro->siglas=$siglas;
            $registro->codigo=$codigo;
            $registro->nivel=$nivel;

            $registro->save();

            User::where('area_id', $id)->update(['tipo_user_id' => $nivel]);

            $msj='Área Modificada con Éxito';

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

        $registro = Area::find($id);
        //$registro->delete();      
        $registro->borrado=Constantes::REGISTRO_BORRADO;
        $registro->save();

        $msj='Área eliminada exitosamente';

        return response()->json(["result"=>$result,'msj'=>$msj]);
    }
}
