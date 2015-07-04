<?php namespace App\Http\Controllers;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Campus;
use App\Models\Rol;
use App\Models\Sala;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

use App\Models\Rol_Usuario;
use Illuminate\Support\Facades\View;
use Request;

class DocenteController extends Controller
{

    public function docente()
    {
        return view('docente.docente');
    }


    public function edit($id)
    {

        $input = Request::all();

        $campus = Campus::where('rut_encargado','=',$input)->get();

        return view('docente.findDocente', compact('campus'));

    }


    public function buscarse($id)
    {

        $docente = Docente::all();

        return view('docente.findDocente',compact('docente'));

    }



    public function actualizado()
    {
        return view('docente.actualizado');
    }

    public function salas()
    {


        $salas = Sala::all();

        if(is_null($salas))
        {
            App::abort(404);
        }


        return view('docente.versalas',compact('salas','campus'));

    }


}

