<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;

use App\Constantes\Constantes;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){

        $iduser=Auth::user()->id;
        $user = User::find($iduser);

        if($user->activo != Constantes::REGISTRO_ACTIVO){
            Auth::guard('web')->logout();

          return redirect()->back()
            ->withErrors([
                'email' => 'usuarioActiv'
            ]);
        }

        return view('admin.inicio.index');
    }
}
