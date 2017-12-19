<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstudentListController extends Controller
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

        $title='Lista de Estudiantes';

        return view('estudentList.index', compact('title','users'));
    }
}
