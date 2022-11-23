<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Auth;

use App\Models\CicloEscolar;
use App\Models\User;
use App\Models\Secciones;
use App\Models\Curso;
use App\Models\CicloNivel;
use App\Models\CicloGrado;
use App\Models\CicloSeccion;
use App\Models\CicloCurso;
use App\Models\CicloCompetencia;
use App\Models\Turno;


use stdClass;
use Illuminate\Support\Facades\Hash;

class CicloEscolarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index1()
    {
        $turnos = Turno::all();
        return view('admin.ciclo.index',compact('turnos'));
    }

    public function index(Request $request)
    {
        $response = CicloEscolar::GetCiclos($request);
        $year = date('Y');
        $response["year"] = $year;

        return $response;
    }

    public function getCicloActivo()
    {
        $response = CicloEscolar::GetCicloActivo();
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

        $year=$request->year;
        $nombre=$request->nombre;
        $fecha_ini_clases=$request->fecha_ini_clases;
        $fecha_fin_clases=$request->fecha_fin_clases;
        $opcion=$request->opcion;

        $cicloNivelInicial=$request->cicloNivelInicial;
        $cicloNivelPrimaria=$request->cicloNivelPrimaria;
        $cicloNivelSecundaria=$request->cicloNivelSecundaria;

        $result='1';
        $msj='';
        $selector='';


        $input1  = array('year' => $year);
        $reglas1 = array('year' => 'required');

        $input2  = array('nombre' => $nombre);
        $reglas2 = array('nombre' => 'required');

        $input3  = array('fecha_ini_clases' => $fecha_ini_clases);
        $reglas3 = array('fecha_ini_clases' => 'required');

        $input4  = array('fecha_fin_clases' => $fecha_fin_clases);
        $reglas4 = array('fecha_fin_clases' => 'required');

        $input5  = array('year' => $year);
        $reglas5 = array('year' => 'unique:ciclo_escolars,year'.',1,borrado');

        $input6  = array('opcion' => $opcion);
        $reglas6 = array('opcion' => 'required');


        $validator1 = Validator::make($input1, $reglas1);
        $validator2 = Validator::make($input2, $reglas2);
        $validator3 = Validator::make($input3, $reglas3);
        $validator4 = Validator::make($input4, $reglas4);
        $validator5 = Validator::make($input5, $reglas5);
        $validator6 = Validator::make($input6, $reglas6);


        if ($validator1->fails() || intval($year) < 2000)
        {
            $result='0';
            $msj='Debe ingresar un año válido';
            $selector='txtyear';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator2->fails())
        {
            $result='0';
            $msj='Debe de ingresar el Nombre del Año Escolar';
            $selector='txtnombre';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator3->fails())
        {
            $result='0';
            $msj='Debe ingresar la Fecha de Inicio de Clases';
            $selector='txtfecha_ini_clases';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator4->fails())
        {
            $result='0';
            $msj='Debe ingresar la Fecha de Finalización de Clases';
            $selector='txtnombre';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator5->fails())
        {
            $result='0';
            $msj='El Año Escolar ingresado, ya se encuentra registrado';
            $selector='txtyear';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator6->fails())
        {
            $result='0';
            $msj='Debe de seleccionar la Opción de Calificación de Notas';
            $selector='cbuopcion';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        $cicloActivo = CicloEscolar::GetCicloActivo();

        if($cicloActivo != null){
            $result='0';
            $msj='Ya existe un Año Escolar activo, No puede registrar otro hasta culminar con el Año escolar Actual';
            $selector='txtyear';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }



        CicloEscolar::where('activo',1)->update(['activo' => 0, 'activo_matricula' => 0]);

        $registro = new CicloEscolar;

        $registro->year=$year;
        $registro->nombre=$nombre;
        $registro->fecha_ini_clases=$fecha_ini_clases;
        $registro->fecha_fin_clases=$fecha_fin_clases;
        $registro->opcion=$opcion;
        $registro->activo='1';
        $registro->activo_matricula='0';
        $registro->borrado='0';

        $registro->save();

        //Tablas transaccionales inicio
        $data = Secciones::GetAllDataIE();

        foreach ($data->niveles as $keyN => $nivel)
        {
            $turno_id = $nivel->turno_id;
            if($nivel->id == "1" && $cicloNivelInicial["turno_id"] != undefined && $cicloNivelInicial["turno_id"] != null){
                $turno_id = $cicloNivelInicial["turno_id"];
            }
            if($nivel->id == "2" && $cicloNivelPrimaria["turno_id"] != undefined && $cicloNivelInicial["turno_id"] != null){
                $turno_id = $cicloNivelInicial["turno_id"];
            }
            if($nivel->id == "3" && $cicloNivelSecundaria["turno_id"] != undefined && $cicloNivelSecundaria["turno_id"] != null){
                $turno_id = $cicloNivelSecundaria["turno_id"];
            }


            $registro_nivel = new CicloNivel;
            $registro_nivel->nivel_id=$nivel->id;
            $registro_nivel->nombre=$nivel->nombre;
            $registro_nivel->institucion_educativa_id=$data->id;
            $registro_nivel->ciclo_escolar_id=$registro->id;
            $registro_nivel->turno_id = $turno_id;
            $registro_nivel->activo='1';
            $registro_nivel->borrado='0';

            $registro_nivel->save();

            foreach ($nivel->grados as $keyG => $grado) {
                
                $registro_grado = new CicloGrado;
                $registro_grado->grado_id=$grado->id;
                $registro_grado->nombre=$grado->nombre;
                $registro_grado->ciclo=$grado->ciclo;
                $registro_grado->orden=$grado->orden;
                $registro_grado->ciclo_niveles_id=$registro_nivel->id;
                $registro_grado->activo='1';
                $registro_grado->borrado='0';
                $registro_grado->ciclo_escolar_id=$registro->id;

                $registro_grado->save();

                foreach ($grado->seccions as $keyS => $seccion) {
                    
                    $registro_seccion = new CicloSeccion;
                    $registro_seccion->seccion_id=$seccion->id;
                    $registro_seccion->nombre=$seccion->nombre;
                    $registro_seccion->sigla=$seccion->sigla;
                    $registro_seccion->ciclo_grados_id=$registro_grado->id;
                    $registro_seccion->turno_id= $turno_id;
                    $registro_seccion->activo='1';
                    $registro_seccion->borrado='0';
                    $registro_seccion->ciclo_escolar_id=$registro->id;

                    $registro_seccion->save();
                }

                $cursos = Curso::GetCursosByGrado($grado->id);

                foreach ($cursos as $keyC => $curso) {
                    $registro_cursos = new CicloCurso;
                    $registro_cursos->ciclo_grado_id = $registro_grado->id;
                    $registro_cursos->nombre = $curso->nombre;
                    $registro_cursos->orden = $curso->orden;
                    $registro_cursos->curso_id = $curso->id;
                    $registro_cursos->opcion = $registro->opcion;
                    $registro_cursos->activo='1';
                    $registro_cursos->borrado='0';
                    $registro_cursos->ciclo_escolar_id=$registro->id;

                    $registro_cursos->save();

                    foreach ($curso->competencias as $keyCo => $competencia) {
                        $registro_competencia = new CicloCompetencia;
                        $registro_competencia->ciclo_cursos_id = $registro_cursos->id;
                        $registro_competencia->nombre = $competencia->nombre;
                        $registro_competencia->orden = $competencia->orden;
                        $registro_competencia->competencia_id = $competencia->id;
                        $registro_competencia->activo='1';
                        $registro_competencia->borrado='0';
                        $registro_competencia->ciclo_escolar_id=$registro->id;

                        $registro_competencia->save();
                    }
                } 
            }
        }
        //Tablas transaccionales final

        

        $msj='Nuevo Año Escolar registrado correctamente';

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

        $year=$request->year;
        $nombre=$request->nombre;
        $fecha_ini_clases=$request->fecha_ini_clases;
        $fecha_fin_clases=$request->fecha_fin_clases;
        $opcion=$request->opcion;

        $cicloNivelInicial=$request->cicloNivelInicial;
        $cicloNivelPrimaria=$request->cicloNivelPrimaria;
        $cicloNivelSecundaria=$request->cicloNivelSecundaria;

        $result='1';
        $msj='';
        $selector='';


        $input1  = array('year' => $year);
        $reglas1 = array('year' => 'required');

        $input2  = array('nombre' => $nombre);
        $reglas2 = array('nombre' => 'required');

        $input3  = array('fecha_ini_clases' => $fecha_ini_clases);
        $reglas3 = array('fecha_ini_clases' => 'required');

        $input4  = array('fecha_fin_clases' => $fecha_fin_clases);
        $reglas4 = array('fecha_fin_clases' => 'required');

        $input5  = array('year' => $year);
        $reglas5 = array('year' => 'unique:ciclo_escolars,year,'.$id.',id,borrado,0');

        $input6  = array('opcion' => $opcion);
        $reglas6 = array('opcion' => 'required');


        $validator1 = Validator::make($input1, $reglas1);
        $validator2 = Validator::make($input2, $reglas2);
        $validator3 = Validator::make($input3, $reglas3);
        $validator4 = Validator::make($input4, $reglas4);
        $validator5 = Validator::make($input5, $reglas5);
        $validator6 = Validator::make($input6, $reglas6);


        if ($validator1->fails() || intval($year) < 2000)
        {
            $result='0';
            $msj='Debe ingresar un año válido';
            $selector='txtyear';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator2->fails())
        {
            $result='0';
            $msj='Debe de ingresar el Nombre del Año Escolar';
            $selector='txtnombre';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator3->fails())
        {
            $result='0';
            $msj='Debe ingresar la Fecha de Inicio de Clases';
            $selector='txtfecha_ini_clases';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator4->fails())
        {
            $result='0';
            $msj='Debe ingresar la Fecha de Finalización de Clases';
            $selector='txtnombre';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator5->fails())
        {
            $result='0';
            $msj='El Año Escolar ingresado, ya se encuentra registrado';
            $selector='txtyear';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator6->fails())
        {
            $result='0';
            $msj='Debe de seleccionar la Opción de Calificación de Notas';
            $selector='cbuopcion';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }


        $registro = CicloEscolar::findOrFail($id);

        $registro->year=$year;
        $registro->nombre=$nombre;
        $registro->fecha_ini_clases=$fecha_ini_clases;
        $registro->fecha_fin_clases=$fecha_fin_clases;
        $registro->opcion=$opcion;

        $registro->save();

        $cursos = CicloCurso::where('ciclo_escolar_id',$id)->get();
        
        foreach ($cursos as $curso) {
            $curso->opcion = $opcion;
            $curso->save();
        }


        //Update Turno de Niveles
        $cicloNivelInicialUpd = CicloNivel::find($cicloNivelInicial["id"]);
        $cicloNivelInicialUpd->turno_id = $cicloNivelInicial["turno_id"];

        $cicloNivelInicialUpd->save();

        $gradosInicial = CicloGrado::where('ciclo_niveles_id', $cicloNivelInicial["id"])->get();
        foreach ($gradosInicial as $key => $gradosI) {
            CicloSeccion::where('ciclo_grados_id', $gradosI->id)->update(['turno_id' => $cicloNivelInicial["turno_id"]]);
        }

        $cicloNivelPrimariaUpd = CicloNivel::find($cicloNivelPrimaria["id"]);
        $cicloNivelPrimariaUpd->turno_id = $cicloNivelPrimaria["turno_id"];

        $cicloNivelPrimariaUpd->save();

        $gradosPrimaria = CicloGrado::where('ciclo_niveles_id', $cicloNivelPrimaria["id"])->get();
        foreach ($gradosPrimaria as $key => $gradosP) {
            CicloSeccion::where('ciclo_grados_id', $gradosP->id)->update(['turno_id' => $cicloNivelPrimaria["turno_id"]]);
        }

        $cicloNivelSecundariaUpd = CicloNivel::find($cicloNivelSecundaria["id"]);
        $cicloNivelSecundariaUpd->turno_id = $cicloNivelSecundaria["turno_id"];

        $cicloNivelSecundariaUpd->save();

        $gradosSecundaria = CicloGrado::where('ciclo_niveles_id', $cicloNivelSecundaria["id"])->get();
        foreach ($gradosSecundaria as $key => $gradosS) {
            CicloSeccion::where('ciclo_grados_id', $gradosS->id)->update(['turno_id' => $cicloNivelSecundaria["turno_id"]]);
        }

        $msj='Año Escolar modificado correctamente';

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

        $registro = CicloEscolar::find($id);
        $registro->borrado='1';
        $registro->activo='0';
        $registro->save();
       

        $msj='Año Escolar eliminado exitosamente';

        return response()->json(["result"=>$result,'msj'=>$msj]);
    }

    public function activar($id)
    {
        $result='1';
        $msj='';
        $selector='';

        //Inicio Validaciones

        //Fin Validaciones
        CicloEscolar::where('activo',1)->update(['activo' => 0, 'activo_matricula' => 0]);

        $registro = CicloEscolar::find($id);
        $registro->activo='1';
        $registro->save();

        $msj='El Año Escolar fue Activado exitosamente';

        return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
    }

    public function activarMatricula($id)
    {
        $result='1';
        $msj='';
        $selector='';

        //Inicio Validaciones

        //Fin Validaciones
        $registro = CicloEscolar::find($id);
        $registro->activo_matricula='1';
        $registro->save();

        $msj='Se Activó el Proceso de Matrícula del Año Escolar exitosamente';

        return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
    }

    public function desactivarMatricula($id)
    {
        $result='1';
        $msj='';
        $selector='';

        //Inicio Validaciones

        //Fin Validaciones
        $registro = CicloEscolar::find($id);
        $registro->activo_matricula='0';
        $registro->save();

        $msj='Se Cerró el Proceso de Matrícula del Año Escolar exitosamente';

        return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
    }

    public function cerrarCicloEscolar($id)
    {
        $result='1';
        $msj='';
        $selector='';

        //Inicio Validaciones

        //Fin Validaciones

        $registro = CicloEscolar::find($id);
        $registro->activo='0';
        $registro->save();

        $msj='El Ciclo Escolar fue Cerrado exitosamente';

        return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
    }
}
