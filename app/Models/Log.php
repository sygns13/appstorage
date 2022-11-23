<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Constantes\Constantes;

class Log extends Model
{
    use HasFactory;

    protected $table = 'logs';
    protected $fillable = [
                            'documento_id',
                            'estado',
                            'fecha',
                            'hora',
                            'sustento',
                            'user_id',
                            'area_id',
                        ];
	protected $guarded = ['id'];
}
