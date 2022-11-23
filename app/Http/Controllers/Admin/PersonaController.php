<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Persona;

use App\Constantes\Constantes;

use Validator;
use Auth;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $response = Persona::GetRegistros($request);
        return $response;
    }

    public function getPersonByDNI($dni)
    {
        $data = Persona::GetPersonaByDNI($dni);
        $itemFound = false;
        if(isset($data)){
            $itemFound = true;
        }

        return response()->json(['data'=>$data, 'itemFound' => $resultFound]);
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
    public static function store(Request $request)
    {
        $apellidos=$request->apellidos;
        $nombres=$request->nombres;
        $dni=$request->dni;
        $telefono=$request->telefono;
        $direccion=$request->direccion;

        $result='1';
        $msj='';
        $selector='';


        $input1  = array('apellidos' => $apellidos);
        $reglas1 = array('apellidos' => 'required');

        $input2  = array('nombres' => $nombres);
        $reglas2 = array('nombres' => 'required');

        $input3  = array('dni' => $dni);
        $reglas3 = array('dni' => 'required');
        
        //$input4  = array('dni' => $dni);
        //$reglas4 = array('dni' => 'unique:personas,dni'.',1,borrado');
        
        $input5  = array('telefono' => $telefono);
        $reglas5 = array('telefono' => 'required');

        $input6  = array('direccion' => $direccion);
        $reglas6 = array('direccion' => 'required');


        $validator1 = Validator::make($input1, $reglas1);
        $validator2 = Validator::make($input2, $reglas2);
        $validator3 = Validator::make($input3, $reglas3);
        //$validator4 = Validator::make($input4, $reglas4);
        $validator5 = Validator::make($input5, $reglas5);
        $validator6 = Validator::make($input6, $reglas6);


        if ($validator1->fails())
        {
            $result='0';
            $msj='Debe ingresar los Apellidos del Usuario';
            $selector='txtapellidos';

            return ["result"=>$result,'msj'=>$msj,'selector'=>$selector];
        }

        if ($validator2->fails())
        {
            $result='0';
            $msj='Debe ingresar los Nombres del Usuario';
            $selector='txtnombres';

            return ["result"=>$result,'msj'=>$msj,'selector'=>$selector];
        }
        if ($validator3->fails() || strlen(trim($dni)) != 8)
        {
            $result='0';
            $msj='Debe ingresar el DNI del Usuario, y debe de tener 8 dígitos';
            $selector='txtdni';

            return ["result"=>$result,'msj'=>$msj,'selector'=>$selector];
        }

        /* if ($validator4->fails())
        {
            $result='0';
            $msj='El DNI del Usuario ya se encuentra Registrado';
            $selector='txtdni';

            return ["result"=>$result,'msj'=>$msj,'selector'=>$selector];
        } */

        if ($validator5->fails())
        {
            $telefono = "";
        }

        if ($validator6->fails())
        {
            $direccion = "";
        }

            $registro = new Persona;

            $registro->apellidos=$apellidos;
            $registro->nombres=$nombres;
            $registro->dni=$dni;
            $registro->telefono=$telefono;
            $registro->direccion=$direccion;

            $registro->save();

            $msj='Nueva Persona Registrada con Éxito';

        return ["result"=>$result,'msj'=>$msj,'selector'=>$selector, 'persona' =>$registro];
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
    public static function update(Request $request, $id)
    {
        $apellidos=$request->apellidos;
        $nombres=$request->nombres;
        $dni=$request->dni;
        $telefono=$request->telefono;
        $direccion=$request->direccion;

        $result='1';
        $msj='';
        $selector='';


        $input1  = array('apellidos' => $apellidos);
        $reglas1 = array('apellidos' => 'required');

        $input2  = array('nombres' => $nombres);
        $reglas2 = array('nombres' => 'required');

        $input3  = array('dni' => $dni);
        $reglas3 = array('dni' => 'required');
        
        //$input4  = array('dni' => $dni);
        //$reglas4 = array('dni' => 'unique:personas,dni,'.$id.',id,borrado,0');
        
        $input5  = array('telefono' => $telefono);
        $reglas5 = array('telefono' => 'required');

        $input6  = array('direccion' => $direccion);
        $reglas6 = array('direccion' => 'required');


        $validator1 = Validator::make($input1, $reglas1);
        $validator2 = Validator::make($input2, $reglas2);
        $validator3 = Validator::make($input3, $reglas3);
        //$validator4 = Validator::make($input4, $reglas4);
        $validator5 = Validator::make($input5, $reglas5);
        $validator6 = Validator::make($input6, $reglas6);


        if ($validator1->fails())
        {
            $result='0';
            $msj='Debe ingresar los Apellidos del Usuario';
            $selector='txtapellidos';

            return ["result"=>$result,'msj'=>$msj,'selector'=>$selector];
        }

        if ($validator2->fails())
        {
            $result='0';
            $msj='Debe ingresar los Nombres del Usuario';
            $selector='txtnombres';

            return ["result"=>$result,'msj'=>$msj,'selector'=>$selector];
        }
        if ($validator3->fails() || strlen(trim($dni)) != 8)
        {
            $result='0';
            $msj='Debe ingresar el DNI del Usuario, y debe de tener 8 dígitos';
            $selector='txtdni';

            return ["result"=>$result,'msj'=>$msj,'selector'=>$selector];
        }

        /* if ($validator4->fails())
        {
            $result='0';
            $msj='El DNI del Usuario ya se encuentra Registrado';
            $selector='txtdni';

            return ["result"=>$result,'msj'=>$msj,'selector'=>$selector];
        } */

        if ($validator5->fails())
        {
            $telefono = "";
        }

        if ($validator6->fails())
        {
            $direccion = "";
        }

            $registro = Persona::findOrFail($id);

            $registro->apellidos=$apellidos;
            $registro->nombres=$nombres;
            $registro->dni=$dni;
            $registro->telefono=$telefono;
            $registro->direccion=$direccion;

            $registro->save();

            $msj='Persona Modificada con Éxito';

        return ["result"=>$result,'msj'=>$msj,'selector'=>$selector];
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

        $registro = Persona::find($id);
        //$registro->delete();      
        $registro->borrado='1';
        $registro->save();

        $msj='Persona eliminada exitosamente';

        return response()->json(["result"=>$result,'msj'=>$msj]);
    }
}
