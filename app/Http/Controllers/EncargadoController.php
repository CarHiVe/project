<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Asignatura;
use App\Models\Campus;
use App\Models\Curso;
use App\Models\Departamento;
use App\Models\Facultad;
use App\Models\Sala;
use Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class EncargadoController extends Controller {

	public function index()
	{
		return view('encargado.opciones');
	}

    public function campus()
    {
        $campus = Campus::all();

        return view('encargado.campus',compact('campus'));
    }


	public function findCampus()
	{
        $input = Request::all();

        $campus = Campus::where('rut_encargado','=',$input)->get();

        return view('encargado.findCampus', compact('campus'));
	}

	public function salas($id)
    {
        $campus = Campus::find($id);

        $salas = Campus::find($id)
                    ->join('salas','campus.id','=','salas.campus_id')
                    ->where('salas.campus_id','=',$id)
                    ->get();

        if(is_null($salas))
        {
            App::abort(404);
        }

        return view('encargado.salas',compact('salas','campus'));

    }

    public function editar($id)
    {
        $salas = Sala::find($id);

        if(is_null($salas))
        {
            App::abort(404);
        }

        return view('encargado.edit',compact('salas'));
    }

    public function update($id)
    {
        $salas = Sala::findOrFail($id);

        $salas->fill(Request::all());

        $salas->save();

        return redirect('encargado/salas/editar/' . $id . '/editada-con-exito');

    }

    public function actualizada()
    {
        return view('encargado.actualizada');
    }

    public function crear_curso()
    {
        return view('encargado.crear_curso');
    }

    public function store()
    {
        $input = Request::all();

        Curso::create($input);

        return redirect('encargado/crear-curso/exito');
    }

    public function exito()
    {
        return view('encargado.exito');
    }


}
