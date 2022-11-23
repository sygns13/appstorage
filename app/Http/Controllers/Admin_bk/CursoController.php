<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Auth;

use App\Models\Curso;
use App\Models\Grado;
use App\Models\CicloEscolar;
use App\Models\CicloCurso;
use App\Models\CicloGrado;


use stdClass;

class CursoController extends Controller
{
    public function index1()
    {
        return view('admin.curso.index');
    }

    public function index()
    {

        $registros = Curso::GetAllDataCursos();
        
        return [ 
                'registros' => $registros 
               ];
    }

    public function store(Request $request)
    {
        $result='1';
        $msj='';
        $selector='';

        $nombre=$request->nombre;
        $orden=$request->orden;
        $grado_id=$request->grado_id;

        $input1  = array('nombre' => $nombre);
        $reglas1 = array('nombre' => 'required');

        $input2  = array('orden' => $orden);
        $reglas2 = array('orden' => 'required');

        $validator1 = Validator::make($input1, $reglas1);
        $validator2 = Validator::make($input2, $reglas2);

        if ($validator1->fails())
        {
            $result='0';
            $msj='Debe ingresar el nombre del Curso';
            $selector='txtnombre';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator2->fails())
        {
            $result='0';
            $msj='Debe ingresar el Orden';
            $selector='txtorden';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        $registro = new Curso;

        $registro->nombre=$nombre;
        $registro->orden=$orden;
        $registro->grado_id=$grado_id;
        $registro->activo='1';
        $registro->borrado='0';

        $registro->save();

        //Data Transaccional
        $cicloActivo = CicloEscolar::GetCicloActivo();

        if($cicloActivo != null){

            $gradoActivo = CicloGrado::GetGradoByCicloAndGrado($cicloActivo->id, $grado_id);

            $registro_cursos = new CicloCurso;
            $registro_cursos->ciclo_grado_id = $gradoActivo->id;
            $registro_cursos->nombre = $registro->nombre;
            $registro_cursos->orden = $registro->orden;
            $registro_cursos->curso_id = $registro->id;
            $registro_cursos->opcion = $cicloActivo->opcion;
            $registro_cursos->activo='1';
            $registro_cursos->borrado='0';
            $registro_cursos->ciclo_escolar_id=$cicloActivo->id;

            $registro_cursos->save();

        }



        $msj='El Curso se ha registrado con éxito';

        return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
    }

    public function update(Request $request, $id)
    {
        $result='1';
        $msj='';
        $selector='';

        $nombre=$request->nombre;
        $orden=$request->orden;
        $grado_id=$request->grado_id;

        $input1  = array('nombre' => $nombre);
        $reglas1 = array('nombre' => 'required');

        $input2  = array('orden' => $orden);
        $reglas2 = array('orden' => 'required');

        $validator1 = Validator::make($input1, $reglas1);
        $validator2 = Validator::make($input2, $reglas2);

        if ($validator1->fails())
        {
            $result='0';
            $msj='Debe ingresar el nombre del curso';
            $selector='txtnombre';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator2->fails())
        {
            $result='0';
            $msj='Debe ingresar el Orden del Curso';
            $selector='txtorden';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        $registro = Curso::find($id);

        $registro->nombre=$nombre;
        $registro->orden=$orden;

        $registro->save();

        //Data Transaccional
        $cicloActivo = CicloEscolar::GetCicloActivo();

        if($cicloActivo != null){
            $registro_curso = CicloCurso::GetCursoByCicloAndCurso($cicloActivo->id, $registro->id);

            $registro_curso->nombre=$registro->nombre;
            $registro_curso->orden=$registro->orden;

            $registro_curso->save();
        }



        $msj='El Curso se ha modificado con éxito';

        return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
    }

    public function destroy($id)
    {
        $result='1';
        $msj='1';

        $registro = Curso::findOrFail($id);
        $registro->borrado = '1';
        $registro->save();
        
        //$registro->delete();

        //Data Transaccional
        $cicloActivo = CicloEscolar::GetCicloActivo();

        if($cicloActivo != null){
            $registro_curso = CicloCurso::GetCursoByCicloAndCurso($cicloActivo->id, $registro->id);
            $registro_curso->delete();
        }

        $msj='El Curso fue eliminado exitosamente';


        return response()->json(["result"=>$result,'msj'=>$msj]);
    }

}
