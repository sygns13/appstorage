<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
                            'documento_id',
                            'user_elaboracion_id',
                        ];
	protected $guarded = ['id'];
}
