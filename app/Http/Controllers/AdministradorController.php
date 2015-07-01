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

class AdministradorController extends Controller {

	public function administrador()
    {
        return view('administrador.opciones');
    }

    public function campus()
    {
        $campus = Campus::all();

        return view('administrador.campus',compact('campus'));

    }

    public function crear_campus()
    {
        return view('administrador.crear_campus');
    }

    public function store()
    {
        $input = Request::all();

        Campus::create($input);

        return redirect('administrador/crear-campus/exito');
    }

    public function exito()
    {
        return view('administrador.exito');
    }

    public function edit($id)
    {
        $campus = Campus::find($id);

        if(is_null($campus))
        {
            App::abort(404);
        }

        return view('administrador.edit',compact('campus'));
    }

    public function update($id)
    {
        $campus = Campus::findOrFail($id);

        $campus->fill(Request::all());

        $campus->save();

        return redirect('administrador/campus/editar-campus/' . $id . '/actualizado');

    }

    public function actualizado()
    {
        return view('administrador.actualizado');
    }

    public function asignar($id)
    {
        $campus = Campus::find($id);

        if(is_null($campus))
        {
            App::abort(404);
        }

        return view('administrador.asignar',compact('campus'));
    }

    public function singleUpdate($id)
    {
        $campus = Campus::findOrFail($id);

        $campus->fill(Request::all());

        $campus->save();

        return redirect('administrador/campus/asignar-encargado/' . $id . '/actualizado');
    }

    public function encargadoActualizado()
    {
        return view('administrador.encargado_actualizado');
    }






}
