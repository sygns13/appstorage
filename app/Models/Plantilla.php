<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

use App\Models\TipoDocumento;
use App\Models\User;
use App\Models\Version;
use Auth;
use DB;

use App\Constantes\Constantes;

class Plantilla extends Model
{
    use HasFactory;

    protected $table = 'plantillas';
    protected $fillable = [
                            'nombre',
                            'codigo',
                            'fecha',
                            'ubicacion_electronica',
                            'nombre_electronico',
                            'activo',
                            'borrado',
                            'observacion',
                            'estado',
                            'user_elaboracion_id',
                            'documento_id',
                            'area_id',
                            'tipo_documento_id',
                        ];
	protected $guarded = ['id'];

    public static function GetRegistros(Request $request){

        $buscar=isset($request->busca) ? $request->busca: "";
        $area_id=isset($request->area_id) ? $request->area_id: "0";

        if(Auth::user()->tipo_user_id > 1){
            $area_id = Auth::user()->area_id;
        }

        $query = DB::table('plantillas')
        ->join('tipo_documentos', 'tipo_documentos.id', '=', 'plantillas.tipo_documento_id')
        ->join('areas', 'areas.id', '=', 'plantillas.area_id')
        ->leftjoin('documentos as documento_relacionado',  function($join) {
            $join->on('documento_relacionado.id', '=', 'plantillas.documento_id');
        })
        
        ->where('plantillas.borrado', Constantes::REGISTRO_NO_BORRADO)
        //->where('plantillas.area_id', $id_area)

        ->where(function($query) use ($buscar){
            $query->where('plantillas.nombre','like','%'.$buscar.'%');
            $query->orWhere('plantillas.codigo','like','%'.$buscar.'%');
            $query->orWhere('areas.nombre','like','%'.$buscar.'%');
            $query->orWhere('areas.codigo','like','%'.$buscar.'%');
            }) 
            ->orderBy('tipo_documentos.id')
            ->orderBy('plantillas.codigo')
            ->orderBy('plantillas.nombre')
        ->select(
                'tipo_documentos.id as tipo_documentos_id',
                'tipo_documentos.nombre as tipo_documentos_nombre',

                'plantillas.id',
                'plantillas.nombre',
                'plantillas.codigo',
                'plantillas.fecha',
                'plantillas.ubicacion_electronica',
                'plantillas.nombre_electronico',
                'plantillas.activo',
                'plantillas.borrado',
                'plantillas.observacion',
                'plantillas.estado',
                'plantillas.user_elaboracion_id',
                'plantillas.documento_id',
                'plantillas.area_id',
                'plantillas.tipo_documento_id',

                'areas.id as areas_id',
                'areas.nombre as areas_nombre',
                'areas.siglas as areas_siglas',
                'areas.codigo as areas_codigo',
                'areas.nivel as areas_nivel',

                DB::Raw("IFNULL( `documento_relacionado`.`id` , '0' ) as id_documento_relacionado"),
                DB::Raw("IFNULL( `documento_relacionado`.`nombre` , '' ) as nombre_documento_relacionado"),
                DB::Raw("IFNULL( `documento_relacionado`.`codigo` , '' ) as codigo_documento_relacionado"),
                DB::Raw("IFNULL( `documento_relacionado`.`version_actual` , '' ) as version_actual_documento_relacionado"),
                DB::Raw("IFNULL( `documento_relacionado`.`revision` , '' ) as revision_documento_relacionado")
         );

        if(intval($area_id) != 0){
            $query = $query->where('areas.id', $area_id);
        }

        $registros = $query->paginate(30);

        return [
            'pagination'=>[
                'total'=> $registros->total(),
                'current_page'=> $registros->currentPage(),
                'per_page'=> $registros->perPage(),
                'last_page'=> $registros->lastPage(),
                'from'=> $registros->firstItem(),
                'to'=> $registros->lastItem(),
            ],
            'registros'=>$registros
        ];

    }


    public static function GetRegistrosRepositorio(Request $request){

        $buscar=isset($request->busca) ? $request->busca: "";
        $area_id=isset($request->area_id) ? $request->area_id: "0";
        $tipo_documento_id=isset($request->tipo_documento_id) ? $request->tipo_documento_id: "0";

        $id_area=Auth::user()->area_id;

        $query = DB::table('plantillas')
        ->join('tipo_documentos', 'tipo_documentos.id', '=', 'plantillas.tipo_documento_id')
        ->join('areas', 'areas.id', '=', 'plantillas.area_id')
        ->leftjoin('documentos as documento_relacionado',  function($join) {
            $join->on('documento_relacionado.id', '=', 'plantillas.documento_id');
        })
        
        ->where('plantillas.borrado', Constantes::REGISTRO_NO_BORRADO)
        //->where('documentos.area_id', $id_area)

        ->where(function($query) use ($buscar){
            $query->where('plantillas.nombre','like','%'.$buscar.'%');
            $query->orWhere('plantillas.codigo','like','%'.$buscar.'%');
            $query->orWhere('areas.nombre','like','%'.$buscar.'%');
            $query->orWhere('areas.codigo','like','%'.$buscar.'%');
            }) 
            ->orderBy('tipo_documentos.id')
            ->orderBy('plantillas.codigo')
            ->orderBy('plantillas.nombre')
            ->select(
                'tipo_documentos.id as tipo_documentos_id',
                'tipo_documentos.nombre as tipo_documentos_nombre',

                'plantillas.id',
                'plantillas.nombre',
                'plantillas.codigo',
                'plantillas.fecha',
                'plantillas.ubicacion_electronica',
                'plantillas.nombre_electronico',
                'plantillas.activo',
                'plantillas.borrado',
                'plantillas.observacion',
                'plantillas.estado',
                'plantillas.user_elaboracion_id',
                'plantillas.documento_id',
                'plantillas.area_id',
                'plantillas.tipo_documento_id',

                'areas.id as areas_id',
                'areas.nombre as areas_nombre',
                'areas.siglas as areas_siglas',
                'areas.codigo as areas_codigo',
                'areas.nivel as areas_nivel',

                DB::Raw("IFNULL( `documento_relacionado`.`id` , '0' ) as id_documento_relacionado"),
                DB::Raw("IFNULL( `documento_relacionado`.`nombre` , '' ) as nombre_documento_relacionado"),
                DB::Raw("IFNULL( `documento_relacionado`.`codigo` , '' ) as codigo_documento_relacionado"),
                DB::Raw("IFNULL( `documento_relacionado`.`version_actual` , '' ) as version_actual_documento_relacionado"),
                DB::Raw("IFNULL( `documento_relacionado`.`revision` , '' ) as revision_documento_relacionado")
            );

        if(intval($area_id) != 0){
            $query = $query->where('areas.id', $area_id);
        }

        if(intval($tipo_documento_id) != 0){
            $query = $query->where('tipo_documentos.id', $tipo_documento_id);
        }

        $registros = $query->paginate(30);

        return [
            'pagination'=>[
                'total'=> $registros->total(),
                'current_page'=> $registros->currentPage(),
                'per_page'=> $registros->perPage(),
                'last_page'=> $registros->lastPage(),
                'from'=> $registros->firstItem(),
                'to'=> $registros->lastItem(),
            ],
            'registros'=>$registros
        ];

    }


}
