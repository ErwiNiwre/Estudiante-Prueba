<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estudent;

class EstudentRegController extends Controller
{
    //

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

    public function inserta(Request $request)
    {
        $title='Registro de Estudiantes';
        $estudiantes= new Estudent;

        $estudiantes->ci=$request->ci;
        $estudiantes->nombre=$request->nombre;
        $estudiantes->apellido=$request->apellido;
        $estudiantes->genero=$request->genero;
        $estudiantes->fec_nac=$request->fec_nac;

        $estudiantes->save();
        // return $request->all();

        return redirect('/lista');
    }

    public function elimina()
    {
        $estudiantes = Estudent::where($estudiantes->ci=ci);

        $estudiantes->delete();
    }

    public function modifica()
    {
        $estudiantes = Estudent::where($estudiantes->ci=ci);

        $request->nombre=$estudiantes->nombre;
        $request->apellido=$estudiantes->apellido;
        $request->genero=$estudiantes->genero;
        $request->fec_nac=$estudiantes->fec_nac;

        $estudiantes->save();
        return redirect('/lista');
    }

}
