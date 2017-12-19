@extends('layout')
@section('content')
<h1>help</h1>

  <h2>{{ $title }}</h2>
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>C.I.</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Genero</th>
            <th>Fecha Nacimiento</th>
            <th>Observaciones</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1,001</td>
            <td>Lorem</td>
            <td>ipsum</td>
            <td>dolor</td>
            <td>sit</td>
            <td>sit</td>
          </tr>   
        </tbody>
      </table>
    </div>

@endsection
