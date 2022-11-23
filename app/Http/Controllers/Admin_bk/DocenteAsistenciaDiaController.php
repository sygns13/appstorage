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

class DocenteAsistenciaDiaController extends Controller
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


        return view('admin.asistencia-docente.index',compact('cicloActivo', 'hoy'));
    }

    public function index(Request $request)
    {
        $date = $request->date;

        $diaAsistencia = DocenteAsistenciaDia::GetDocenteAsistenciaDiaByDate($date);
        $asistenciasDocentes = [];

        if(!$diaAsistencia){
            return [ 
                'diaAsistencia' => $diaAsistencia,
                'registros' => $asistenciasDocentes,
               ];
        }

        $asistenciasDocentes = AsistenciaDocente::GetDocenteAsistenciaDiaActive($diaAsistencia->id);
        return [ 
            'diaAsistencia' => $diaAsistencia,
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
        $tipo=$request->tipo;

        $result='1';
        $msj='';
        $selector='';


        $input1  = array('fecha' => $fecha);
        $reglas1 = array('fecha' => 'required');

        $input2  = array('ciclo_escolar_id' => $ciclo_escolar_id);
        $reglas2 = array('ciclo_escolar_id' => 'required');

        $input3  = array('tipo' => $tipo);
        $reglas3 = array('tipo' => 'required');

        $validator1 = Validator::make($input1, $reglas1);
        $validator2 = Validator::make($input2, $reglas2);
        $validator3 = Validator::make($input3, $reglas3);

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
            $msj='Debe seleccionar el tipo de Día de Asistencia';
            $selector='cbutipo';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

            $registro = new DocenteAsistenciaDia;

            $registro->fecha=$fecha;
            $registro->ciclo_escolar_id=$ciclo_escolar_id;
            $registro->tipo=$tipo;
            $registro->activo='1';
            $registro->borrado='0';

            $registro->save();

            $msj='Nueva Día de Asistencia de Docentes Habilitado Exitosamente';

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
        $tipo=$request->tipo;

        $result='1';
        $msj='';
        $selector='';


        $input1  = array('fecha' => $fecha);
        $reglas1 = array('fecha' => 'required');

        $input2  = array('ciclo_escolar_id' => $ciclo_escolar_id);
        $reglas2 = array('ciclo_escolar_id' => 'required');

        $input3  = array('tipo' => $tipo);
        $reglas3 = array('tipo' => 'required');

        $validator1 = Validator::make($input1, $reglas1);
        $validator2 = Validator::make($input2, $reglas2);
        $validator3 = Validator::make($input3, $reglas3);

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
            $msj='Debe seleccionar el tipo de Día de Asistencia';
            $selector='cbutipo';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

            $registro = DocenteAsistenciaDia::find($id) ;

            $registro->fecha=$fecha;
            $registro->ciclo_escolar_id=$ciclo_escolar_id;
            $registro->tipo=$tipo;

            $registro->save();

            $msj='Día de Asistencia de Docentes Modificado Exitosamente';

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

        $registroAsistencias = AsistenciaDocente::where('docentes_asistencias_dia_id', $id)->delete();

        $registro = DocenteAsistenciaDia::find($id);
        $registro->delete();      

        $msj='Día de Asistencia eliminado exitosamente';

        return response()->json(["result"=>$result,'msj'=>$msj]);
    }
}
