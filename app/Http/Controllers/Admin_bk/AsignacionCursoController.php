<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Validator;
use Auth;

use App\Models\AsignacionCurso;
use App\Models\Curso;
use App\Models\Grado;
use App\Models\CicloEscolar;
use App\Models\CicloCurso;
use App\Models\CicloGrado;
use App\Models\Docente;


use stdClass;

class AsignacionCursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index1()
    {
        $cicloActivo = CicloEscolar::GetCicloActivo();
        $docentesActivos = Docente::where('activo', '1')->where('borrado', '0')->orderBy('apellidos')->orderBy('nombre')->get();

        return view('admin.asignacion-curso.index',compact('cicloActivo', 'docentesActivos'));
    }

    public function index()
    {
        $registros = AsignacionCurso::GetAllDataAsignacionActivo();

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

        $ciclo_seccion_id=$request->ciclo_seccion_id;
        $ciclo_cursos_id=$request->ciclo_cursos_id;
        $docente_id=$request->docente_id;

        $input1  = array('docente_id' => $docente_id);
        $reglas1 = array('docente_id' => 'required');

        $validator1 = Validator::make($input1, $reglas1);

        if ($validator1->fails() || intval($docente_id) == 0)
        {
            $result='0';
            $msj='Debe de seleccionar un Docente para Asignar al curso';
            $selector='cbudocente_id';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        $registro = new AsignacionCurso;

        $registro->ciclo_seccion_id = $ciclo_seccion_id;
        $registro->ciclo_cursos_id = $ciclo_cursos_id;
        $registro->docente_id = $docente_id;
        $registro->activo = '1';
        $registro->borrado = '0';

        $registro->save();


        $msj='El Docente se ha asignado con éxito al curso';

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

        $ciclo_seccion_id=$request->ciclo_seccion_id;
        $ciclo_cursos_id=$request->ciclo_cursos_id;
        $docente_id=$request->docente_id;

        $input1  = array('docente_id' => $docente_id);
        $reglas1 = array('docente_id' => 'required');

        $validator1 = Validator::make($input1, $reglas1);

        if ($validator1->fails() || intval($docente_id) == 0)
        {
            $result='0';
            $msj='Debe de seleccionar un Docente para Asignar al curso';
            $selector='cbudocente_id';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        $registro = AsignacionCurso::find($id);

        $registro->docente_id = $docente_id;

        $registro->save();


        $msj='El Docente se ha asignado con éxito al curso';

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

        $registro = AsignacionCurso::findOrFail($id);
        $registro->borrado = '1';
        $registro->save();
        

        $msj='La Asignación del Docente fue eliminado exitosamente';


        return response()->json(["result"=>$result,'msj'=>$msj]);
    }
}
