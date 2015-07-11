<?php namespace App\Http\Controllers;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Campus;
use App\Models\Rol;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

use App\Models\Rol_Usuario;
use Illuminate\Support\Facades\View;
use Request;

class EstudiantesController extends Controller
{

    public function index()
    {
        return view('estudiantes.estudiantesindex');
    }


    public function edit($id)
    {

        return view('estudiantes.edit');
    }


    public function actualizado()
    {
        return view('estudiantes.actualizado');
    }

}