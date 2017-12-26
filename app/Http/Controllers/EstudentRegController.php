<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estudent;

// use Illuminate\Http\Requests\CreateEstudenRequest;

class EstudentRegController extends Controller
{
    //
    public function index()
    {
        $title='Estudiantes';
        return view('estudentReg.blown', compact('title'));
    }

    public function crear()
    {
        $title='Registro de Estudiantes';
        return view('estudentReg.index', compact('title'));
    }

    public function lista()
    {
        $title='Lista de Estudiantes';
        //$estudent =new Estudent;
        $estudiantes=Estudent::all();

        return view('estudentList.index', compact('title','estudiantes'));
        // return 'index';
    }

    // public function inserta(CreateEstudenRequest $request)
    public function inserta(Request $request)
    {
        $title='Registro de Estudiantes';
        $estudiantes= new Estudent;

        $v=\Validator::make($request->all(),[

            'ci' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
            'genero' => 'required',
            'fec_nac' => 'required',
        ]);

        $estudiantes->ci=$request->ci;
        $estudiantes->nombre=$request->nombre;
        $estudiantes->apellido=$request->apellido;
        $estudiantes->genero=$request->genero;
        $estudiantes->fec_nac=$request->fec_nac;

        $estudiantes->save();
        // return $request->all();

        return redirect('/lista');
    }

    public function elimina($id)
    {
        $title='Lista de Estudiantes';
        $estudiantes = Estudent::find($id);

        $estudiantes->delete();
        return redirect('/lista');
    }

    public function modifica(Request $request)
    {
        $title='Modificar Estudiantes';
        $estudiantes = Estudent::where('id',$request->id)->first();

        // $estudiantes->ci=$request->ci;
        $estudiantes->nombre=$request->nombre;
        $estudiantes->apellido=$request->apellido;
        $estudiantes->genero=$request->genero;
        $estudiantes->fec_nac=$request->fec_nac;

        $estudiantes->save();
        return redirect('/lista');
    }

    public function estudiante($id)
    {
        $title='Modificar Estudiante';
        $estudiante = Estudent::where('id',$id)->first();

        // return $ci;
        return view('estudentMod.index', compact('title','estudiante'));
    }

}
