<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstudentRegController extends Controller
{
    //
    public function index()
    {
        if (Request()->has('empty')) {
            $users=[];
        }else{
             $users=[
                'Joel', 'Ellie', 'Tess', 'Tommy', 'Bill',
                ];
        }

        $title='Listado de Estudiantes';

        return view('estudentReg.index', compact('title','users'));
    }

    public function show($id)
    {
        return view('estudentReg.show', compact('id'));
    }

    public function create()
    {
        return 'Crear nuevo usuario';
    }
}
