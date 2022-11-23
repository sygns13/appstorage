<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Auth;

use App\Models\Horario;
use App\Models\Secciones;
use App\Models\CicloSeccion;
use App\Models\CicloGrado;
use App\Models\CicloEscolar;
use App\Models\Turno;
use App\Models\Hora;


use stdClass;

class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index1()
    {
        $cicloActivo = CicloEscolar::GetCicloActivo();
        return view('admin.horario.index',compact('cicloActivo'));
    }

    public function index2()
    {
        $cicloActivo = CicloEscolar::GetCicloActivo();
        $ciclos = CicloEscolar::GetAllCiclos();
        return view('reporte.horario.index',compact('cicloActivo', 'ciclos'));
    }

    public function index()
    {

        $registros = Horario::GetAllDataHorarioActivo();

        $turnos = Turno::all();
        $horas = Hora::where('borrado','0')->where('activo','1')->get();
        
        return [ 
                'registros' => $registros,
                'turnos' => $turnos,
                'horas' => $horas,
               ];
    }

    public function indexReporte(Request $request)
    {

        $ciclo_id = $request->ciclo_id;

        $registros = Horario::GetDataHorarioByCiclo($ciclo_id);

        $turnos = Turno::all();
        $horas = Hora::where('borrado','0')->where('activo','1')->get();
        
        return [ 
                'registros' => $registros,
                'turnos' => $turnos,
                'horas' => $horas,
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

        $horarioLu = $request->horario["lunes"];
        $horarioMa = $request->horario["martes"];
        $horarioMi = $request->horario["miercoles"];
        $horarioJu = $request->horario["jueves"];
        $horarioVi = $request->horario["viernes"];

        $seccionSeleccionada = $request->seccionSeleccionada;
        $turnoSeleccionado = $request->turnoSeleccionado;

        $cicloActivo = CicloEscolar::GetCicloActivo();

        //Validaciones
        if(!$cicloActivo){
            $result='0';
            $msj='No hay ciclo activo';
            $selector='';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if(intval($turnoSeleccionado) == 0){
            $result='0';
            $msj='Debe seleccionar un turno válido';
            $selector='cbuTurno';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if(intval($seccionSeleccionada) == 0){
            $result='0';
            $msj='Debe seleccionar una sección';
            $selector='cbuseccion';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        $horas = Hora::where('borrado','0')->where('activo','1')->where('turno_id', $turnoSeleccionado)->get();

        if(count($horas) == 0){
            $result='0';
            $msj='No hay horas disponibles para el turno seleccionado';
            $selector='cbuTurno';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if(count($horarioLu) == 0 || count($horarioMa) == 0 || count($horarioMi) == 0 || count($horarioJu) == 0 || count($horarioVi) == 0){
            $result='0';
            $msj='No hay horas disponibles para el turno seleccionado';
            $selector='cbuTurno';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        //var_dump($horario);

        //Registro de datos

        $cicloSeccion = CicloSeccion::find($seccionSeleccionada);
        $cicloSeccion->turno_id = $turnoSeleccionado;
        $cicloSeccion->save();

        foreach ($horas as $key => $hora) {
            $borrar = true;

            if(isset($horarioLu[$hora->id])){
                $borrar = false;
                $existe = false;

                $horario = Horario::where('ciclo_escolar_id', $cicloActivo->id)
                                    ->where('ciclo_seccion_id', $seccionSeleccionada)
                                    ->where('hora_id', $hora->id)
                                    ->where('turno_id', $turnoSeleccionado)
                                    ->where('dia_semana', 1)
                                    ->first();
                if($horario){
                    $existe = true;
                    $horario->ciclo_curso_id = $horarioLu[$hora->id];
                    $horario->save();
                }
                if(!$existe){
                    $horario = new Horario();
                    $horario->dia_semana = 1;
                    $horario->hora_ini = $hora->horaini;
                    $horario->hora_fin = $hora->horafin;
                    $horario->ciclo_curso_id = $horarioLu[$hora->id];
                    $horario->activo = '1';
                    $horario->borrado = '0';
                    $horario->ciclo_escolar_id = $cicloActivo->id;
                    $horario->ciclo_seccion_id = $seccionSeleccionada;
                    $horario->hora_id = $hora->id;
                    $horario->turno_id = $turnoSeleccionado;

                    $horario->save();
                }  
            }

            if(isset($horarioMa[$hora->id])){
                $borrar = false;
                $existe = false;

                $horario = Horario::where('ciclo_escolar_id', $cicloActivo->id)
                                    ->where('ciclo_seccion_id', $seccionSeleccionada)
                                    ->where('hora_id', $hora->id)
                                    ->where('turno_id', $turnoSeleccionado)
                                    ->where('dia_semana', 2)
                                    ->first();
                if($horario){
                    $existe = true;
                    $horario->ciclo_curso_id = $horarioMa[$hora->id];
                    $horario->save();
                }
                if(!$existe){
                    $horario = new Horario();
                    $horario->dia_semana = 2;
                    $horario->hora_ini = $hora->horaini;
                    $horario->hora_fin = $hora->horafin;
                    $horario->ciclo_curso_id = $horarioMa[$hora->id];
                    $horario->activo = '1';
                    $horario->borrado = '0';
                    $horario->ciclo_escolar_id = $cicloActivo->id;
                    $horario->ciclo_seccion_id = $seccionSeleccionada;
                    $horario->hora_id = $hora->id;
                    $horario->turno_id = $turnoSeleccionado;
                    
                    $horario->save();
                }  
            }

            if(isset($horarioMi[$hora->id])){
                $borrar = false;
                $existe = false;

                $horario = Horario::where('ciclo_escolar_id', $cicloActivo->id)
                                    ->where('ciclo_seccion_id', $seccionSeleccionada)
                                    ->where('hora_id', $hora->id)
                                    ->where('turno_id', $turnoSeleccionado)
                                    ->where('dia_semana', 3)
                                    ->first();
                if($horario){
                    $existe = true;
                    $horario->ciclo_curso_id = $horarioMi[$hora->id];
                    $horario->save();
                }
                if(!$existe){
                    $horario = new Horario();
                    $horario->dia_semana = 3;
                    $horario->hora_ini = $hora->horaini;
                    $horario->hora_fin = $hora->horafin;
                    $horario->ciclo_curso_id = $horarioMi[$hora->id];
                    $horario->activo = '1';
                    $horario->borrado = '0';
                    $horario->ciclo_escolar_id = $cicloActivo->id;
                    $horario->ciclo_seccion_id = $seccionSeleccionada;
                    $horario->hora_id = $hora->id;
                    $horario->turno_id = $turnoSeleccionado;
                    
                    $horario->save();
                }  
            }

            if(isset($horarioJu[$hora->id])){
                $borrar = false;
                $existe = false;

                $horario = Horario::where('ciclo_escolar_id', $cicloActivo->id)
                                    ->where('ciclo_seccion_id', $seccionSeleccionada)
                                    ->where('hora_id', $hora->id)
                                    ->where('turno_id', $turnoSeleccionado)
                                    ->where('dia_semana', 4)
                                    ->first();
                if($horario){
                    $existe = true;
                    $horario->ciclo_curso_id = $horarioJu[$hora->id];
                    $horario->save();
                }
                if(!$existe){
                    $horario = new Horario();
                    $horario->dia_semana = 4;
                    $horario->hora_ini = $hora->horaini;
                    $horario->hora_fin = $hora->horafin;
                    $horario->ciclo_curso_id = $horarioJu[$hora->id];
                    $horario->activo = '1';
                    $horario->borrado = '0';
                    $horario->ciclo_escolar_id = $cicloActivo->id;
                    $horario->ciclo_seccion_id = $seccionSeleccionada;
                    $horario->hora_id = $hora->id;
                    $horario->turno_id = $turnoSeleccionado;
                    
                    $horario->save();
                }  
            }

            if(isset($horarioVi[$hora->id])){
                $borrar = false;
                $existe = false;

                $horario = Horario::where('ciclo_escolar_id', $cicloActivo->id)
                                    ->where('ciclo_seccion_id', $seccionSeleccionada)
                                    ->where('hora_id', $hora->id)
                                    ->where('turno_id', $turnoSeleccionado)
                                    ->where('dia_semana', 5)
                                    ->first();
                if($horario){
                    $existe = true;
                    $horario->ciclo_curso_id = $horarioVi[$hora->id];
                    $horario->save();
                }
                if(!$existe){
                    $horario = new Horario();
                    $horario->dia_semana = 5;
                    $horario->hora_ini = $hora->horaini;
                    $horario->hora_fin = $hora->horafin;
                    $horario->ciclo_curso_id = $horarioVi[$hora->id];
                    $horario->activo = '1';
                    $horario->borrado = '0';
                    $horario->ciclo_escolar_id = $cicloActivo->id;
                    $horario->ciclo_seccion_id = $seccionSeleccionada;
                    $horario->hora_id = $hora->id;
                    $horario->turno_id = $turnoSeleccionado;
                    
                    $horario->save();
                }  
            }

            if($borrar){
                $horaDelete = Horario::find($hora->id);

                if($horaDelete){
                    $horaDelete->delete();
                }
            }
        }

        //Limpiar Horario de otros turnos
        $horariosDelete = Horario::where('ciclo_escolar_id', $cicloActivo->id)
                                    ->where('ciclo_seccion_id', $seccionSeleccionada)
                                    ->where('turno_id', '!=' , $turnoSeleccionado)
                                    ->delete();


        $msj='El Horario se ha registrado con éxito';

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
