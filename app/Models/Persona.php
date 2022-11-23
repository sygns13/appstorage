<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Constantes\Constantes;

class Persona extends Model
{
    use HasFactory;

    protected $table = 'personas';
    protected $fillable = [
                            'apellidos',
                            'nombres',
                            'dni',
                            'telefono',
                            'direccion',
                        ];
	protected $guarded = ['id'];

    public static function GetRegistros(Request $request){

        $buscar=isset($request->busca) ? $request->busca: "";

        $registros = Persona::where('borrado', Constantes::REGISTRO_NO_BORRADO)
        ->where(function($query) use ($buscar){
            $query->where('dni','like','%'.$buscar.'%');
            $query->orWhere('nombres','like','%'.$buscar.'%');
            $query->orWhere('apellidos','like','%'.$buscar.'%');
            $query->orWhere('telefono','like','%'.$buscar.'%');
            $query->orWhere('direccion','like','%'.$buscar.'%');
            })
        ->orderBy('nivel')
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

    public static function GetPersonaByDNI($dni){

        $dni_search=isset($dni) ? $dni: "";
        $data = Persona::where('dni',$dni_search)->first();

        return $data;

    }
}
