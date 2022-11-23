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
use App\Models\Asistencia;
use App\Models\AsistenciaAlumno;
use App\Models\CicloCurso;
use App\Models\CicloGrado;
use App\Models\Docente;

use DateTime;
use stdClass;

class AsistenciaAlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    private function storeAsistencia(Request $request)
    {
        $fecha=$request->fecha;
        $ciclo_escolar_id=$request->ciclo_escolar_id;
        $ciclo_seccion_id=$request->ciclo_seccion_id;
        $ciclo_curso_id=$request->ciclo_curso_id;
        $horario_id=$request->horario_id;
        $tema=$request->tema;

        $result='1';
        $msj='';
        $selector='';


        $input1  = array('fecha' => $fecha);
        $reglas1 = array('fecha' => 'required');

        $input2  = array('ciclo_escolar_id' => $ciclo_escolar_id);
        $reglas2 = array('ciclo_escolar_id' => 'required');

        $input3  = array('ciclo_seccion_id' => $ciclo_seccion_id);
        $reglas3 = array('ciclo_seccion_id' => 'required');

        $input4  = array('ciclo_curso_id' => $ciclo_curso_id);
        $reglas4 = array('ciclo_curso_id' => 'required');

        $input5  = array('horario_id' => $horario_id);
        $reglas5 = array('horario_id' => 'required');

        $input6  = array('tema' => $tema);
        $reglas6 = array('tema' => 'required');

        $validator1 = Validator::make($input1, $reglas1);
        $validator2 = Validator::make($input2, $reglas2);
        $validator3 = Validator::make($input3, $reglas3);
        $validator4 = Validator::make($input4, $reglas4);
        $validator5 = Validator::make($input5, $reglas5);
        $validator6 = Validator::make($input6, $reglas6);

        if ($validator1->fails())
        {
            $result='0';
            $msj='Debe ingresar la Fecha de Asistencia';
            $selector='txtfecha';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator2->fails())
        {
            $result='0';
            $msj='Debe de existir un Año Escolar Vigente';
            $selector='ciclo_escolar_id';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator3->fails())
        {
            $result='0';
            $msj='Debe de remitir la sección del Alumno';
            $selector='ciclo_seccion_id';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator4->fails())
        {
            $result='0';
            $msj='Debe de remitir el Curo del Alumno';
            $selector='ciclo_curso_id';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator5->fails())
        {
            $result='0';
            $msj='Debe de remitir el Horario del Alumno';
            $selector='horario_id';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator6->fails())
        {
            $tema = "";
        }

            $registro = new Asistencia;

            $registro->fecha=$fecha;
            $registro->ciclo_seccion_id=$ciclo_seccion_id;
            $registro->ciclo_escolar_id=$ciclo_escolar_id;
            $registro->ciclo_curso_id=$ciclo_curso_id;
            $registro->activo='1';
            $registro->borrado='0';
            $registro->horario_id=$horario_id;
            $registro->tema=$tema;

            $registro->save();

            $msj='Nueva Tema de Día de Asistencia de Alumno Registrado Exitosamente';

        return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector, 'asistencia_id' => $registro->id]);
    }


    public function store(Request $request)
    {
        $fecha=$request->fecha;
        $alumno_id=$request->alumno_id;
        $ciclo_escolar_id=$request->ciclo_escolar_id;
        $ciclo_seccion_id=$request->ciclo_seccion_id;
        $estado=$request->estado;
        $asistencia_id=$request->asistencia_id;
        $observacion=$request->observacion;


        $result='1';
        $msj='';
        $selector='';


        $input1  = array('fecha' => $fecha);
        $reglas1 = array('fecha' => 'required');

        $input2  = array('ciclo_escolar_id' => $ciclo_escolar_id);
        $reglas2 = array('ciclo_escolar_id' => 'required');

        $input3  = array('estado' => $estado);
        $reglas3 = array('estado' => 'required');

        $input4  = array('observacion' => $observacion);
        $reglas4 = array('observacion' => 'required');

        $input5  = array('alumno_id' => $alumno_id);
        $reglas5 = array('alumno_id' => 'required');

        $input6  = array('ciclo_seccion_id' => $ciclo_seccion_id);
        $reglas6 = array('ciclo_seccion_id' => 'required');

        $input7  = array('asistencia_id' => $asistencia_id);
        $reglas7 = array('asistencia_id' => 'required');

        $validator1 = Validator::make($input1, $reglas1);
        $validator2 = Validator::make($input2, $reglas2);
        $validator3 = Validator::make($input3, $reglas3);
        $validator4 = Validator::make($input4, $reglas4);
        $validator5 = Validator::make($input5, $reglas5);
        $validator6 = Validator::make($input6, $reglas6);
        $validator7 = Validator::make($input7, $reglas7);

        if ($validator1->fails())
        {
            $result='0';
            $msj='Debe ingresar la Fecha de Asistencia';
            $selector='txtfecha';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator2->fails())
        {
            $result='0';
            $msj='Debe de existir un Año Escolar Vigente';
            $selector='ciclo_escolar_id';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator3->fails())
        {
            $result='0';
            $msj='Debe Ingresar el tipo de Asistencia';
            $selector='btnestado';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator4->fails())
        {
            $observacion = "";
        }

        if ($validator5->fails())
        {
            $result='0';
            $msj='Debe de remitir el Alumno de Asistencia';
            $selector='alumno_id';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator6->fails())
        {
            $result='0';
            $msj='Debe de remitir la Sección del Alumno';
            $selector='ciclo_seccion_id';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator7->fails() || intval($asistencia_id) <= 0)
        {
            $result='0';
            $msj='Debe de remitir la Asistencia Abierta del Alumno';
            $selector='asistencia_id';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

            $registro = new AsistenciaAlumno;

            $registro->fecha=$fecha;
            $registro->alumno_id=$alumno_id;
            $registro->ciclo_escolar_id=$ciclo_escolar_id;
            $registro->ciclo_seccion_id=$ciclo_seccion_id;
            $registro->estado=$estado;
            $registro->observacion=$observacion;
            $registro->activo='1';
            $registro->borrado='0';
            $registro->asistencia_id=$asistencia_id;
            
            $registro->save();

            $msj='Asistencia de Alumno Registrada Exitosamente';

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
        $fecha=$request->fecha;
        $alumno_id=$request->alumno_id;
        $ciclo_escolar_id=$request->ciclo_escolar_id;
        $ciclo_seccion_id=$request->ciclo_seccion_id;
        $estado=$request->estado;
        $asistencia_id=$request->asistencia_id;
        $observacion=$request->observacion;


        $result='1';
        $msj='';
        $selector='';


        $input1  = array('fecha' => $fecha);
        $reglas1 = array('fecha' => 'required');

        $input2  = array('ciclo_escolar_id' => $ciclo_escolar_id);
        $reglas2 = array('ciclo_escolar_id' => 'required');

        $input3  = array('estado' => $estado);
        $reglas3 = array('estado' => 'required');

        $input4  = array('observacion' => $observacion);
        $reglas4 = array('observacion' => 'required');

        $input5  = array('alumno_id' => $alumno_id);
        $reglas5 = array('alumno_id' => 'required');

        $input6  = array('ciclo_seccion_id' => $ciclo_seccion_id);
        $reglas6 = array('ciclo_seccion_id' => 'required');

        $input7  = array('asistencia_id' => $asistencia_id);
        $reglas7 = array('asistencia_id' => 'required');

        $validator1 = Validator::make($input1, $reglas1);
        $validator2 = Validator::make($input2, $reglas2);
        $validator3 = Validator::make($input3, $reglas3);
        $validator4 = Validator::make($input4, $reglas4);
        $validator5 = Validator::make($input5, $reglas5);
        $validator6 = Validator::make($input6, $reglas6);
        $validator7 = Validator::make($input7, $reglas7);

        if ($validator1->fails())
        {
            $result='0';
            $msj='Debe ingresar la Fecha de Asistencia';
            $selector='txtfecha';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator2->fails())
        {
            $result='0';
            $msj='Debe de existir un Año Escolar Vigente';
            $selector='ciclo_escolar_id';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator3->fails())
        {
            $result='0';
            $msj='Debe Ingresar el tipo de Asistencia';
            $selector='btnestado';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator4->fails())
        {
            $observacion = "";
        }

        if ($validator5->fails())
        {
            $result='0';
            $msj='Debe de remitir el Alumno de Asistencia';
            $selector='alumno_id';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator6->fails())
        {
            $result='0';
            $msj='Debe de remitir la Sección del Alumno';
            $selector='ciclo_seccion_id';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator7->fails() || intval($asistencia_id) < 0)
        {
            $result='0';
            $msj='Debe de remitir la Asistencia Abierta del Alumno';
            $selector='asistencia_id';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

            if(intval($asistencia_id) == 0){

                $AsistenciaDia = $this->storeAsistencia($request);

                if($AsistenciaDia->result == "0"){
                    return $AsistenciaDia;
                }

                $asistencia_id = $AsistenciaDia->asistencia_id;
            }

            $registro = AsistenciaAlumno::find($id);

            $registro->estado=$estado;
            $registro->observacion=$observacion;
            
            $registro->save();

            $msj='Asistencia de Alumno Registrada Exitosamente';

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

        $registro = AsistenciaAlumno::find($id);
        $registro->delete();      

        $msj='Asistencia de Alumno eliminado exitosamente';

        return response()->json(["result"=>$result,'msj'=>$msj]);
    }
}
