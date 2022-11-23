<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Auth;

use App\Models\Docente;
use App\Models\TipoDocumento;
use App\Models\User;
use App\Models\CicloEscolar;

use stdClass;
use Illuminate\Support\Facades\Hash;


class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index1()
    {
        return view('admin.docente.index');
    }

    public function index2()
    {
        $cicloActivo = CicloEscolar::GetCicloActivo();
        $ciclos = CicloEscolar::GetAllCiclos();
        return view('docente.lista-alumnos.index',compact('cicloActivo', 'ciclos'));
    }

    public function index(Request $request)
    {
        $response = Docente::GetDocentes($request);

        $tipoDocumentos = TipoDocumento::all();
        $response["tipoDocumentos"] = $tipoDocumentos;


        return $response;
    }

    public function getListaAlumnos(Request $request)
    {
        $ciclo_id=$request->ciclo_id;
        $iduser =Auth::user()->id;

        $response = Docente::GetListaAlumnos($iduser, $ciclo_id);

        return $response;
    }

    public function getListaAlumnosAsignacion(Request $request)
    {
        $id=$request->id;
        $response = Docente::GetListaAlumnosAsignacion($id);

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

        $tipo_documento_id=$request->tipo_documento_id;
        $num_documento=$request->num_documento;
        $apellidos=$request->apellidos;
        $nombre=$request->nombre;
        $especialidad=$request->especialidad;
        $genero=$request->genero;
        $telefono=$request->telefono;
        $direccion=$request->direccion;
        $codigo_plaza=$request->codigo_plaza;

        $name=$request->name;
        $email=$request->email;
        $password=$request->password;
        $activo=$request->activo;

        $result='1';
        $msj='';
        $selector='';


        $input1  = array('tipo_documento_id' => $tipo_documento_id);
        $reglas1 = array('tipo_documento_id' => 'required');

        $input2  = array('num_documento' => $num_documento);
        $reglas2 = array('num_documento' => 'required');

        $input3  = array('apellidos' => $apellidos);
        $reglas3 = array('apellidos' => 'required');

        $input4  = array('nombre' => $nombre);
        $reglas4 = array('nombre' => 'required');

        /* $input2  = array('nombre' => $nombre);
        $reglas2 = array('nombre' => 'unique:zonas,nombre'.',1,borrado'); */

        $input5  = array('genero' => $genero);
        $reglas5 = array('genero' => 'required');

        $input6  = array('codigo_plaza' => $codigo_plaza);
        $reglas6 = array('codigo_plaza' => 'required');

        $input7  = array('name' => $name);
        $reglas7 = array('name' => 'required');

        $input8  = array('email' => $email);
        $reglas8 = array('email' => 'required');

        $input9  = array('password' => $password);
        $reglas9 = array('password' => 'required');

        $input10  = array('activo' => $activo);
        $reglas10 = array('activo' => 'required');

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

        if ($validator1->fails() || intval($tipo_documento_id) == 0)
        {
            $result='0';
            $msj='Debe ingresar el Tipo de Documento de Identidad del Docente';
            $selector='cbutipo_documento_id';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        $tipoDocumento = TipoDocumento::find($tipo_documento_id);

        if ($validator2->fails())
        {
            $result='0';
            $msj='Debe de ingresar el Número de '.$tipoDocumento->nombre.' del Docente';
            $selector='txtnum_documento';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if (strlen($num_documento)!=$tipoDocumento->digitos)
        {
            $result='0';
            $msj='El Número de '.$tipoDocumento->nombre.' del Docente debe tener '.$tipoDocumento->digitos.' dígitos';
            $selector='txtnum_documento';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator3->fails())
        {
            $result='0';
            $msj='Debe ingresar los Apellidos del Docente';
            $selector='txtapellidos';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }
        if ($validator4->fails())
        {
            $result='0';
            $msj='Debe ingresar los Nombres del Docente';
            $selector='txtnombre';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }
        if ($validator5->fails())
        {
            $result='0';
            $msj='Debe ingresar el género del Docente';
            $selector='cbugenero';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }
        if ($validator6->fails())
        {
            $result='0';
            $msj='Debe ingresar el Código de Plaza del Docente';
            $selector='txtcodigo_plaza';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }
        if ($validator7->fails())
        {
            $result='0';
            $msj='Debe ingresar el Username del Docente';
            $selector='txtname';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }
        if ($validator8->fails())
        {
            $result='0';
            $msj='Debe ingresar el Email del Docente';
            $selector='txtemail';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }
        if ($validator9->fails())
        {
            $result='0';
            $msj='Debe ingresar el Password del Docente';
            $selector='txtpassword';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }
        if ($validator10->fails())
        {
            $result='0';
            $msj='Debe ingresar si el usuario del docente está activo o no';
            $selector='cbuactivo';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }


            $registroA = new User;

            $registroA->name=$name;
            $registroA->email=$email;
            $registroA->password=bcrypt($password);
            $registroA->tipo_user_id='3';
            $registroA->activo=$activo;
            $registroA->borrado='0';

            $registroA->save();

            $registro = new Docente;

            $registro->tipo_documento_id=$tipo_documento_id;
            $registro->num_documento=$num_documento;
            $registro->apellidos=$apellidos;
            $registro->nombre=$nombre;
            $registro->especialidad=$especialidad;
            $registro->genero=$genero;
            $registro->telefono=$telefono;
            $registro->direccion=$direccion;
            $registro->codigo_plaza=$codigo_plaza;
            $registro->user_id=$registroA->id;
            $registro->activo=$activo;
            $registro->borrado='0';

            $registro->save();

            $msj='Nuevo Docente Registrado con Éxito';

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

        $tipo_documento_id=$request->tipo_documento_id;
        $num_documento=$request->num_documento;
        $apellidos=$request->apellidos;
        $nombre=$request->nombre;
        $especialidad=$request->especialidad;
        $genero=$request->genero;
        $telefono=$request->telefono;
        $direccion=$request->direccion;
        $codigo_plaza=$request->codigo_plaza;

        $name=$request->name;
        $email=$request->email;
        $password=$request->password;
        $activo=$request->activo;
        $modifPsw = $request->modifPsw;

        $result='1';
        $msj='';
        $selector='';


        $input1  = array('tipo_documento_id' => $tipo_documento_id);
        $reglas1 = array('tipo_documento_id' => 'required');

        $input2  = array('num_documento' => $num_documento);
        $reglas2 = array('num_documento' => 'required');

        $input3  = array('apellidos' => $apellidos);
        $reglas3 = array('apellidos' => 'required');

        $input4  = array('nombre' => $nombre);
        $reglas4 = array('nombre' => 'required');

        /* $input2  = array('nombre' => $nombre);
        $reglas2 = array('nombre' => 'unique:zonas,nombre'.',1,borrado'); */

        $input5  = array('genero' => $genero);
        $reglas5 = array('genero' => 'required');

        $input6  = array('codigo_plaza' => $codigo_plaza);
        $reglas6 = array('codigo_plaza' => 'required');

        $input7  = array('name' => $name);
        $reglas7 = array('name' => 'required');

        $input8  = array('email' => $email);
        $reglas8 = array('email' => 'required');

        $input9  = array('password' => $password);
        $reglas9 = array('password' => 'required');

        $input10  = array('activo' => $activo);
        $reglas10 = array('activo' => 'required');

        $input11  = array('email' => $email);
        $reglas11 = array('email' => 'email');

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

        if ($validator1->fails())
        {
            $result='0';
            $msj='Debe ingresar el Tipo de Documento de Identidad del Docente';
            $selector='cbutipo_documento_id';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        $tipoDocumento = TipoDocumento::find($tipo_documento_id);

        if ($validator2->fails())
        {
            $result='0';
            $msj='Debe de ingresar el Número de '.$tipoDocumento->nombre.' del Docente';
            $selector='txtnum_documento';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if (strlen($num_documento)!=$tipoDocumento->digitos)
        {
            $result='0';
            $msj='El Número de '.$tipoDocumento->nombre.' del Docente debe tener '.$tipoDocumento->digitos.' dígitos';
            $selector='txtnum_documento';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator3->fails())
        {
            $result='0';
            $msj='Debe ingresar los Apellidos del Docente';
            $selector='txtapellidos';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }
        if ($validator4->fails())
        {
            $result='0';
            $msj='Debe ingresar los Nombres del Docente';
            $selector='txtnombre';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }
        if ($validator5->fails())
        {
            $result='0';
            $msj='Debe ingresar el género del Docente';
            $selector='cbugenero';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }
        if ($validator6->fails())
        {
            $result='0';
            $msj='Debe ingresar el Código de Plaza del Docente';
            $selector='txtcodigo_plaza';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }
        if ($validator7->fails())
        {
            $result='0';
            $msj='Debe ingresar el Username del Docente';
            $selector='txtname';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }
        if ($validator8->fails())
        {
            $result='0';
            $msj='Debe ingresar el Email del Docente';
            $selector='txtemail';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }
        if ($validator9->fails() && intval($modifPsw) == 1)
        {
            $result='0';
            $msj='Debe ingresar el Password del Docente';
            $selector='txtpassword';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator10->fails())
        {
            $result='0';
            $msj='Debe ingresar si el usuario del docente está activo o no';
            $selector='cbucbuactivo';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }
        if ($validator11->fails())
        {
            $result='0';
            $msj='Debe ingresar un Email válido';
            $selector='txtemail';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }


            $registro = Docente::find($id);

            $registro->tipo_documento_id=$tipo_documento_id;
            $registro->num_documento=$num_documento;
            $registro->apellidos=$apellidos;
            $registro->nombre=$nombre;
            $registro->especialidad=$especialidad;
            $registro->genero=$genero;
            $registro->telefono=$telefono;
            $registro->direccion=$direccion;
            $registro->codigo_plaza=$codigo_plaza;
            $registro->activo=$activo;

            $registro->save();

            $registroA = User::find($registro->user_id);

            $registroA->name=$name;
            $registroA->email=$email;

            if(intval($modifPsw) == 1)
            {
                $registroA->password=bcrypt($password);
            }

            $registroA->activo=$activo;

            $registroA->save();

            $msj='Docente Modificado con Éxito';

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

        $registro = Docente::find($id);
        $registro->borrado='1';
        $registro->save();

        $registroA = User::find($registro->user_id);
        //$task->delete();
        $registroA->borrado='1';
        $registroA->activo='0';
        $registroA->save();

        

        $msj='Docente eliminado exitosamente';

        return response()->json(["result"=>$result,'msj'=>$msj]);
    }

    public function altabaja($id,$estado)
    {
        $result='1';
        $msj='';
        $selector='';

        $registro = Docente::find($id);
        $registro->activo=$estado;
        $registro->save();

        $updateUsuario = User::findOrFail($registro->user_id);
        $updateUsuario->activo=$estado;
        $updateUsuario->save();

        if(strval($estado)=="0"){
            $msj='El Docente fue Desactivado exitosamente';
        }elseif(strval($estado)=="1"){
            $msj='El Docente fue Activado exitosamente';
        }

        return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);

    }
}
