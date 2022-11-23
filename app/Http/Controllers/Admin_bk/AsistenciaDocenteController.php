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
use App\Models\DocenteAsistenciaDia;
use App\Models\AsistenciaDocente;
use App\Models\CicloCurso;
use App\Models\CicloGrado;
use App\Models\Docente;


use stdClass;

class AsistenciaDocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $docentes_asistencias_dia_id = $request->docentes_asistencias_dia_id;
        //$asistenciasDocentes = AsistenciaDocente::where('activo', '1')->where('borrado', '0')->where('docentes_asistencias_dia_id', $docentes_asistencias_dia_id)->paginate(30);

        $asistenciasDocentes = AsistenciaDocente::GetDocenteAsistenciaDiaActive($docentes_asistencias_dia_id);

        return [ 
            'registros' => $asistenciasDocentes,
            'pagination'=>[
                'total'=> $asistenciasDocentes->total(),
                'current_page'=> $asistenciasDocentes->currentPage(),
                'per_page'=> $asistenciasDocentes->perPage(),
                'last_page'=> $asistenciasDocentes->lastPage(),
                'from'=> $asistenciasDocentes->firstItem(),
                'to'=> $asistenciasDocentes->lastItem(),
            ]
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
        $fecha=$request->fecha;
        $ciclo_escolar_id=$request->ciclo_escolar_id;
        $estado=$request->estado;
        $observacion=$request->observacion;
        $docente_id=$request->docente_id;
        $docentes_asistencias_dia_id=$request->docentes_asistencias_dia_id;

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

        $input5  = array('docente_id' => $docente_id);
        $reglas5 = array('docente_id' => 'required');

        $input6  = array('docentes_asistencias_dia_id' => $docentes_asistencias_dia_id);
        $reglas6 = array('docentes_asistencias_dia_id' => 'required');

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
            $msj='Debe de remitir el Docente de Asistencia';
            $selector='docente_id';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator6->fails())
        {
            $result='0';
            $msj='Debe de remitir la Asistencia Abierta';
            $selector='docentes_asistencias_dia_id';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

            $registro = new AsistenciaDocente;

            $registro->fecha=$fecha;
            $registro->ciclo_escolar_id=$ciclo_escolar_id;
            $registro->estado=$estado;
            $registro->observacion=$observacion;
            $registro->activo='1';
            $registro->borrado='0';
            $registro->docente_id=$docente_id;
            $registro->docentes_asistencias_dia_id=$docentes_asistencias_dia_id;

            $registro->save();

            $msj='Asistencia de Docente Registrado Exitosamente';

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
        $ciclo_escolar_id=$request->ciclo_escolar_id;
        $estado=$request->estado;
        $observacion=$request->observacion;
        $docente_id=$request->docente_id;
        $docentes_asistencias_dia_id=$request->docentes_asistencias_dia_id;

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

        $input5  = array('docente_id' => $docente_id);
        $reglas5 = array('docente_id' => 'required');

        $input6  = array('docentes_asistencias_dia_id' => $docentes_asistencias_dia_id);
        $reglas6 = array('docentes_asistencias_dia_id' => 'required');

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
            $msj='Debe de remitir el Docente de Asistencia';
            $selector='docente_id';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator6->fails())
        {
            $result='0';
            $msj='Debe de remitir la Asistencia Abierta';
            $selector='docentes_asistencias_dia_id';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

            $registro = AsistenciaDocente::find($id);

            $registro->estado=$estado;
            $registro->observacion=$observacion;

            $registro->save();

            $msj='Asistencia de Docente Modificado Exitosamente';

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

        $registro = AsistenciaDocente::find($id);
        $registro->delete();      

        $msj='Asistencia de Docente eliminado exitosamente';

        return response()->json(["result"=>$result,'msj'=>$msj]);
    }
}
