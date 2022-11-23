<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

use App\Constantes\Constantes;

class TipoDocumento extends Model
{
    use HasFactory;

    protected $table = 'tipo_documentos';
    protected $fillable = [
                            'nombre',
                            'activo',
                            'borrado',
                        ];
	protected $guarded = ['id'];

    public static function GetRegistros(Request $request){

        $buscar=isset($request->busca) ? $request->busca: "";

        $registros = TipoDocumento::where('borrado', Constantes::REGISTRO_NO_BORRADO)
        ->where(function($query) use ($buscar){
            $query->where('nombre','like','%'.$buscar.'%');
            })
        ->orderBy('id')
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
}
