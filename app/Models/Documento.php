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

class Documento extends Model
{
    use HasFactory;

    protected $table = 'documentos';
    protected $fillable = [ 'nombre',
                            'codigo',
                            'documento_relacionado_id',
                            'area_id',
                            'area_revision_id',
                            'area_aprobacion_id',
                            'version_actual',
                            'fecha_elaboracion',
                            'fecha_revision',
                            'fecha_aprobacion',
                            'ubicacion_electronica',
                            'nombre_electronico',
                            'revision',
                            'activo',
                            'borrado',
                            'obs_elaboracion',
                            'obs_revision',
                            'obs_aprobacion',
                            'estado',
                            'user_elaboracion_id',
                            'user_revision_id',
                            'user_aprobacion_id',
                            'tipo_documento_id',
                        ];
	protected $guarded = ['id'];

    public static function GetRegistros(Request $request){

        $buscar=isset($request->busca) ? $request->busca: "";
        $id_area=Auth::user()->area_id;

        $registros = DB::table('documentos')
        ->join('tipo_documentos', 'tipo_documentos.id', '=', 'documentos.tipo_documento_id')
        ->join('areas', 'areas.id', '=', 'documentos.area_id')
        ->leftjoin('documentos as documento_relacionado',  function($join) {
            $join->on('documento_relacionado.id', '=', 'documentos.documento_relacionado_id');
        })
        
        ->where('documentos.borrado', Constantes::REGISTRO_NO_BORRADO)
        //->where('documentos.area_id', $id_area)

        ->where(function($query) use ($buscar){
            $query->where('documentos.nombre','like','%'.$buscar.'%');
            $query->orWhere('documentos.codigo','like','%'.$buscar.'%');
            $query->orWhere('areas.nombre','like','%'.$buscar.'%');
            $query->orWhere('areas.codigo','like','%'.$buscar.'%');
            }) 
            ->orderBy('tipo_documentos.id')
            ->orderBy('documentos.codigo')
            ->orderBy('documentos.nombre')
        ->select(
                'tipo_documentos.id as tipo_documentos_id',
                'tipo_documentos.nombre as tipo_documentos_nombre',

                'documentos.id',
                'documentos.nombre',
                'documentos.codigo',
                'documentos.documento_relacionado_id',
                'documentos.area_id',
                'documentos.area_revision_id',
                'documentos.area_aprobacion_id',
                'documentos.version_actual',
                'documentos.fecha_elaboracion',
                'documentos.fecha_revision',
                'documentos.fecha_aprobacion',
                'documentos.ubicacion_electronica',
                'documentos.nombre_electronico',
                'documentos.revision',
                'documentos.activo',
                'documentos.borrado',
                'documentos.obs_elaboracion',
                'documentos.obs_revision',
                'documentos.obs_aprobacion',
                'documentos.created_at',
                'documentos.updated_at',
                'documentos.estado',
                'documentos.user_elaboracion_id',
                'documentos.user_revision_id',
                'documentos.user_aprobacion_id',
                'documentos.tipo_documento_id',

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
         )
        ->paginate(30);

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

        $query = DB::table('documentos')
        ->join('tipo_documentos', 'tipo_documentos.id', '=', 'documentos.tipo_documento_id')
        ->join('areas', 'areas.id', '=', 'documentos.area_id')
        ->leftjoin('documentos as documento_relacionado',  function($join) {
            $join->on('documento_relacionado.id', '=', 'documentos.documento_relacionado_id');
        })
        
        ->where('documentos.borrado', Constantes::REGISTRO_NO_BORRADO)
        ->where('documentos.estado', Constantes::ESTADO_DOCUMENTO_EMITIDO)
        //->where('documentos.area_id', $id_area)

        ->where(function($query) use ($buscar){
            $query->where('documentos.nombre','like','%'.$buscar.'%');
            $query->orWhere('documentos.codigo','like','%'.$buscar.'%');
            $query->orWhere('areas.nombre','like','%'.$buscar.'%');
            $query->orWhere('areas.codigo','like','%'.$buscar.'%');
            }) 
            ->orderBy('tipo_documentos.id')
            ->orderBy('documentos.codigo')
            ->orderBy('documentos.nombre')
        ->select(
                'tipo_documentos.id as tipo_documentos_id',
                'tipo_documentos.nombre as tipo_documentos_nombre',

                'documentos.id',
                'documentos.nombre',
                'documentos.codigo',
                'documentos.documento_relacionado_id',
                'documentos.area_id',
                'documentos.area_revision_id',
                'documentos.area_aprobacion_id',
                'documentos.version_actual',
                'documentos.fecha_elaboracion',
                'documentos.fecha_revision',
                'documentos.fecha_aprobacion',
                'documentos.ubicacion_electronica',
                'documentos.nombre_electronico',
                'documentos.revision',
                'documentos.activo',
                'documentos.borrado',
                'documentos.obs_elaboracion',
                'documentos.obs_revision',
                'documentos.obs_aprobacion',
                'documentos.created_at',
                'documentos.updated_at',
                'documentos.estado',
                'documentos.user_elaboracion_id',
                'documentos.user_revision_id',
                'documentos.user_aprobacion_id',
                'documentos.tipo_documento_id',

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







    public static function GetRegistrosHistoricos(Request $request){

        $buscar=isset($request->busca) ? $request->busca: "";
        $area_id=isset($request->area_id) ? $request->area_id: "0";
        $tipo_documento_id=isset($request->tipo_documento_id) ? $request->tipo_documento_id: "0";

        $id_area=Auth::user()->area_id;

        $query = DB::table('documentos')
        ->join('tipo_documentos', 'tipo_documentos.id', '=', 'documentos.tipo_documento_id')
        ->join('areas', 'areas.id', '=', 'documentos.area_id')
        ->leftjoin('documentos as documento_relacionado',  function($join) {
            $join->on('documento_relacionado.id', '=', 'documentos.documento_relacionado_id');
        })
        
        ->where('documentos.borrado', Constantes::REGISTRO_NO_BORRADO)
        ->where('documentos.estado', Constantes::ESTADO_DOCUMENTO_EMITIDO)
        //->where('documentos.area_id', $id_area)

        ->where(function($query) use ($buscar){
            $query->where('documentos.nombre','like','%'.$buscar.'%');
            $query->orWhere('documentos.codigo','like','%'.$buscar.'%');
            $query->orWhere('areas.nombre','like','%'.$buscar.'%');
            $query->orWhere('areas.codigo','like','%'.$buscar.'%');
            }) 
            ->orderBy('tipo_documentos.id')
            ->orderBy('documentos.codigo')
            ->orderBy('documentos.nombre')
        ->select(
                'tipo_documentos.id as tipo_documentos_id',
                'tipo_documentos.nombre as tipo_documentos_nombre',

                'documentos.id',
                'documentos.nombre',
                'documentos.codigo',
                'documentos.documento_relacionado_id',
                'documentos.area_id',
                'documentos.area_revision_id',
                'documentos.area_aprobacion_id',
                'documentos.version_actual',
                'documentos.fecha_elaboracion',
                'documentos.fecha_revision',
                'documentos.fecha_aprobacion',
                'documentos.ubicacion_electronica',
                'documentos.nombre_electronico',
                'documentos.revision',
                'documentos.activo',
                'documentos.borrado',
                'documentos.obs_elaboracion',
                'documentos.obs_revision',
                'documentos.obs_aprobacion',
                'documentos.created_at',
                'documentos.updated_at',
                'documentos.estado',
                'documentos.user_elaboracion_id',
                'documentos.user_revision_id',
                'documentos.user_aprobacion_id',
                'documentos.tipo_documento_id',

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

        foreach ($registros as $key => $documento) {
            $historicos = Version::where('documento_id', $documento->id)->where('activo','1')->where('borrado','0')->orderBy('id', 'desc')->get();
            $documento->historicos = $historicos;
        }

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
