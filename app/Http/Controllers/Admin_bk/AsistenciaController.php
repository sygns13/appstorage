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

class AsistenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index1()
    {
        $cicloActivo = CicloEscolar::GetCicloActivo();
        $hoy = date('Y-m-d');

        return view('docente.asistencia-alumnos.index',compact('cicloActivo', 'hoy'));
    }


    public function index(Request $request)
    {

        $fecha = $request->fecha;

        $response = ['error' =>true , 'msg' => 'Fecha No Válida'];

        if ($this->validaFecha($fecha)){
            $fechaDateTime = new DateTime($fecha);
            $tipodia=date("N",$fechaDateTime->getTimestamp());
        
            $cicloActivo = CicloEscolar::GetCicloActivo();
            $iduser =Auth::user()->id;
    
            $response = Docente::GetItemsAsistenciaAlumnos($iduser, $cicloActivo->id, $tipodia, $fecha);
        }
        

        return $response;
    }

    private function validaFecha($fecha){
        $valores = explode('-', $fecha);
        if(count($valores) == 3 && checkdate($valores[1], $valores[2], $valores[0]) && strlen($fecha)==10){
            return true;
    
        }
        //var_dump($valores);
        return false;
    
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

            $msj='Tema de Día de Asistencia Registrado Exitosamente';

        return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector, 'asistencia_id' => $registro->id]);
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

            $registro = Asistencia::find($id);
            $registro->horario_id=$horario_id;
            $registro->tema=$tema;

            $registro->save();

            $msj='Tema de Día de Asistencia Registrado Exitosamente';

        return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector, 'asistencia_id' => $registro->id]);
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

        $registroAsistencias = AsistenciaAlumno::where('asistencia_id', $id)->delete();

        $registro = Asistencia::find($id);
        $registro->delete();      

        $msj='Día de Asistencia eliminado exitosamente';

        return response()->json(["result"=>$result,'msj'=>$msj]);
    }
}
