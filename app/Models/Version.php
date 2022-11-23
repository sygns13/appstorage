<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Version extends Model
{
    use HasFactory;

    protected $table = 'versions';
    protected $fillable = [
                            'nombre',
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
                            'documento_id',
                        ];
	protected $guarded = ['id'];
}
