@extends('layouts.app')

@section('content')
    <h1>Lista de Accidentes</h1>
    <a href="{{ route('accidentes.create') }}" class="btn btn-primary mb-2">Nuevo Accidente</a>
    <table class="table">
        <thead>
            <tr>
                <th>Hora</th>
                <th>Código</th>
                <th>Fecha</th>
                <th>Lugar</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($accidentes as $accidente)
                <tr>
                    <td>{{ $accidente->hora }}</td>
                    <td>{{ $accidente->codigo }}</td>
                    <td>{{ $accidente->fecha }}</td>
                    <td>{{ $accidente->lugar }}</td>
                    <td>
                        <a href="{{ route('accidentes.show', $accidente->id) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('accidentes.edit', $accidente->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('accidentes.destroy', $accidente->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
