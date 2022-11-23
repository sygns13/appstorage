<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Auth;

use App\Http\Controllers\Admin\PersonaController;

use App\Models\Persona;
use App\Models\TipoUser;
use App\Models\User;
use App\Models\Area;

use stdClass;
use Illuminate\Support\Facades\Hash;

use App\Constantes\Constantes;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index1()
    {
        $areas = Area::where('activo', Constantes::REGISTRO_ACTIVO)->where('borrado', Constantes::REGISTRO_NO_BORRADO)->orderBy('nivel')->orderBy('id')->get();
        $tipoUsers = TipoUser::where('activo', Constantes::REGISTRO_ACTIVO)->where('borrado', Constantes::REGISTRO_NO_BORRADO)->orderBy('id')->get();

        return view('admin.usuario.index',compact('areas', 'tipoUsers'));
    }

    public function index(Request $request)
    {
        $response = User::GetUsuarios($request);

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
        $name=$request->name;
        $email=$request->email;
        $password=$request->password;
        $activo=$request->activo;

        $tipo_user_id=$request->tipo_user_id;
        $area_id=$request->area_id;
        $persona_id=$request->persona_id;

        $result='1';
        $msj='';
        $selector='';


        $input1  = array('name' => $name);
        $reglas1 = array('name' => 'required');

        $input2  = array('email' => $email);
        $reglas2 = array('email' => 'required');

        $input3  = array('name' => $name);
        $reglas3 = array('name' => 'unique:users,name'.',1,borrado');

        $input4  = array('email' => $email);
        $reglas4 = array('email' => 'unique:users,email'.',1,borrado');

        $input5  = array('password' => $password);
        $reglas5 = array('password' => 'required');

        $input6  = array('tipo_user_id' => $tipo_user_id);
        $reglas6 = array('tipo_user_id' => 'required');

        $input7  = array('area_id' => $area_id);
        $reglas7 = array('area_id' => 'required');

        $input8  = array('persona_id' => $persona_id);
        $reglas8 = array('persona_id' => 'required');

        $validator1 = Validator::make($input1, $reglas1);
        $validator2 = Validator::make($input2, $reglas2);
        $validator3 = Validator::make($input3, $reglas3);
        $validator4 = Validator::make($input4, $reglas4);
        $validator5 = Validator::make($input5, $reglas5);
        $validator6 = Validator::make($input6, $reglas6);
        $validator7 = Validator::make($input7, $reglas7);
        $validator8 = Validator::make($input8, $reglas8);


        if ($validator1->fails())
        {
            $result='0';
            $msj='Debe ingresar el Username del Usuario';
            $selector='txtname';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator2->fails())
        {
            $result='0';
            $msj='Debe de ingresar el Email del Usuario';
            $selector='txtemail';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }
        if ($validator3->fails())
        {
            $result='0';
            $msj='El Username Ingresado ya se encuentra Registrado';
            $selector='txtname';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator4->fails())
        {
            $result='0';
            $msj='El Email Ingresado ya se encuentra Registrado';
            $selector='txtemail';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator5->fails())
        {
            $result='0';
            $msj='Debe de ingresar el Password del Usuario';
            $selector='txtpassword';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator6->fails() || intval($tipo_user_id) == 0)
        {
            $result='0';
            $msj='Debe de seleccionar el tipo del Usuario';
            $selector='cbutipo_user_id';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator7->fails() || intval($area_id) == 0)
        {
            $result='0';
            $msj='Debe de seleccionar el área del Usuario';
            $selector='cbuarea_id';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator8->fails() || intval($persona_id) == 0)
        {
            
            $responsePersona = PersonaController::store($request);

            if(intval($responsePersona["result"]) == 0){
                return response()->json($responsePersona);
            }

            $persona_id = $responsePersona["persona"]->id;
        }
        else{
            $responsePersona = PersonaController::update($request, $persona_id);

            if(intval($responsePersona["result"]) == 0){
                return response()->json($responsePersona);
            }
        }


            $registro = new User;

            $registro->name=$name;
            $registro->email=$email;
            $registro->password=bcrypt($password);

            $registro->tipo_user_id=$tipo_user_id;
            $registro->persona_id=$persona_id;
            $registro->area_id=$area_id;

            $registro->activo=$activo;
            $registro->borrado=Constantes::REGISTRO_NO_BORRADO;

            $registro->save();

            $msj='Nuevo Usuario Registrado con Éxito';

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
        $name=$request->name;
        $email=$request->email;
        $password=$request->password;
        $activo=$request->activo;

        $tipo_user_id=$request->tipo_user_id;
        $area_id=$request->area_id;
        $persona_id=$request->persona_id;

        $modifPsw = $request->modifPsw;

        $result='1';
        $msj='';
        $selector='';


        $input1  = array('name' => $name);
        $reglas1 = array('name' => 'required');

        $input2  = array('email' => $email);
        $reglas2 = array('email' => 'required');

        $input3  = array('name' => $name);
        $reglas3 = array('name' => 'unique:users,name,'.$id.',id,borrado,0');

        $input4  = array('email' => $email);
        $reglas4 = array('email' => 'unique:users,email,'.$id.',id,borrado,0');

        $input5  = array('password' => $password);
        $reglas5 = array('password' => 'required');

        $input6  = array('tipo_user_id' => $tipo_user_id);
        $reglas6 = array('tipo_user_id' => 'required');

        $input7  = array('area_id' => $area_id);
        $reglas7 = array('area_id' => 'required');

        $input8  = array('persona_id' => $persona_id);
        $reglas8 = array('persona_id' => 'required');

        $validator1 = Validator::make($input1, $reglas1);
        $validator2 = Validator::make($input2, $reglas2);
        $validator3 = Validator::make($input3, $reglas3);
        $validator4 = Validator::make($input4, $reglas4);
        $validator5 = Validator::make($input5, $reglas5);
        $validator6 = Validator::make($input6, $reglas6);
        $validator7 = Validator::make($input7, $reglas7);
        $validator8 = Validator::make($input8, $reglas8);


        if ($validator1->fails())
        {
            $result='0';
            $msj='Debe ingresar el Username del Usuario';
            $selector='txtname';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator2->fails())
        {
            $result='0';
            $msj='Debe de ingresar el Email del Usuario';
            $selector='txtemail';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }
        if ($validator3->fails())
        {
            $result='0';
            $msj='El Username Ingresado ya se encuentra Registrado';
            $selector='txtname';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator4->fails())
        {
            $result='0';
            $msj='El Email Ingresado ya se encuentra Registrado';
            $selector='txtemail';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator5->fails() && intval($modifPsw) == 1)
        {
            $result='0';
            $msj='Debe de ingresar el Password del Usuario';
            $selector='txtpassword';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator6->fails() || intval($tipo_user_id) == 0)
        {
            $result='0';
            $msj='Debe de seleccionar el tipo del Usuario';
            $selector='cbutipo_user_id';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator7->fails() || intval($area_id) == 0)
        {
            $result='0';
            $msj='Debe de seleccionar el área del Usuario';
            $selector='cbuarea_id';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        $responsePersona = PersonaController::update($request, $persona_id);

        if(intval($responsePersona["result"]) == 0){
            return response()->json($responsePersona);
        }


            $registro = User::findOrFail($id);

            $registro->name=$name;
            $registro->email=$email;
            if(intval($modifPsw) == 1)
            {
                $registro->password=bcrypt($password);
            }

            $registro->tipo_user_id=$tipo_user_id;
            $registro->area_id=$area_id;

            $registro->activo=$activo;

            $registro->save();

            $msj='Usuario Modificado con Éxito';

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

        $registro = User::findOrFail($id);
        //$task->delete();
        $registro->borrado=Constantes::REGISTRO_BORRADO;
        $registro->activo=Constantes::REGISTRO_INACTIVO;
        $registro->save();

        $msj='Usuario eliminado exitosamente';

        return response()->json(["result"=>$result,'msj'=>$msj]);
    }

    public function altabaja($id,$estado)
    {
        $result='1';
        $msj='';
        $selector='';

        $registro = User::findOrFail($id);
        $registro->activo=$estado;
        $registro->save();

        if(strval($estado)==Constantes::REGISTRO_INACTIVO){
            $msj='El Usuario fue Desactivado exitosamente';
        }elseif(strval($estado)==Constantes::REGISTRO_ACTIVO){
            $msj='El Usuario fue Activado exitosamente';
        }

        return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);

    }
}
