<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;
use Auth;

use DB;
use App\Models\Persona;
use App\Models\TipoUser;
use App\Models\Area;

use Illuminate\Http\Request;

use App\Constantes\Constantes;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use HasTeams;
    use Notifiable;
    use TwoFactorAuthenticatable;
    

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name', 'email', 'password', 'tipo_user_id', 'activo', 'borrado', 'profile_photo_path', 'persona_id', 'area_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function adminlte_image(){
        //return 'https://picsum.photos/300/300';
        return Auth::user()->profile_photo_url;
    }

    public function adminlte_desc(){
        return "Administrador";
    }

    public function adminlte_profile_url(){
        return 'profile/username';
    }


    public static function GetUsuarios(Request $request){

        $buscar=$request->busca;

        $registros = DB::table('users')
        ->join('tipo_users', 'tipo_users.id', '=', 'users.tipo_user_id')
        ->join('personas', 'personas.id', '=', 'users.persona_id')
        ->join('areas', 'areas.id', '=', 'users.area_id')
        
        ->where('users.borrado', Constantes::REGISTRO_NO_BORRADO)

        ->where(function($query) use ($buscar){
            $query->where('areas.nombre','like','%'.$buscar.'%');
            $query->orWhere('areas.siglas','like','%'.$buscar.'%');
            $query->orWhere('areas.codigo','like','%'.$buscar.'%');
            $query->orWhere('tipo_users.nombre','like','%'.$buscar.'%');
            $query->orWhere('users.name','like','%'.$buscar.'%');
            $query->orWhere('users.email','like','%'.$buscar.'%');
            $query->orWhere('personas.dni','like','%'.$buscar.'%');
            $query->orWhere('personas.nombres','like','%'.$buscar.'%');
            $query->orWhere('personas.apellidos','like','%'.$buscar.'%');
            }) 
            ->orderBy('tipo_users.id')
            ->orderBy('personas.apellidos')
            ->orderBy('personas.nombres')
            ->orderBy('users.id')
        ->select(
                'tipo_users.id as tipo_users_id',
                'tipo_users.nombre as tipo_users_nombre',
                'tipo_users.descripcion as tipo_users_descripcion',

                'users.id',
                'users.name',
                'users.email',
                'users.activo',
                'users.tipo_user_id',
                'users.area_id',
                'users.persona_id',

                'personas.apellidos',
                'personas.nombres',
                'personas.dni',
                'personas.telefono',
                'personas.direccion',

                'areas.id as areas_id',
                'areas.nombre as areas_nombre',
                'areas.siglas as areas_siglas',
                'areas.codigo as areas_codigo',
                'areas.nivel as areas_nivel'
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
}
