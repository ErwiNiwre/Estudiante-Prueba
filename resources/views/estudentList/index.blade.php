@extends('layout')
@section('content')

  <center><h1>{{ $title }}</h1></center>
  <a href="/registrar">Nuevo Estudiante</a>
  <button type="button" class="btn btn-warning">Nuevo Estudiante</button>
    <div class="table-responsive">
      {{-- {{ $estudiantes }} --}}
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
          @foreach ($estudiantes as $estudiante)
            <tr>
              <td>{{ $estudiante->ci }}</td>
              <td>{{ $estudiante->nombre }}</td>
              <td>{{ $estudiante->apellido }}</td>
              <td>{{ $estudiante->genero }}</td>
              <td>{{ $estudiante->fec_nac }}</td>
              <td><a href="/modifica/{{ $estudiante->id }}">Modificar</a><br><a href="/elimina/{{ $estudiante->id }}">Eliminar</a></td>
              </tr>
          @endforeach
        </tbody>
      </table>
    </div>

@endsection
