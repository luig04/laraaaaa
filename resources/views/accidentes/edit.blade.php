@extends('layouts.app')

@section('content')
    <h1>Editar Accidente</h1>
    <form action="{{ route('accidentes.update', $accidente->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="hora">Hora:</label>
            <input type="text" class="form-control" id="hora" name="hora" value="{{ $accidente->hora }}">
        </div>
        <div class="form-group">
            <label for="codigo">Código:</label>
            <input type="text" class="form-control" id="codigo" name="codigo" value="{{ $accidente->codigo }}">
        </div>
        <div class="form-group">
            <label for="fecha">Fecha:</label>
            <input type="date" class="form-control" id="fecha" name="fecha" value="{{ $accidente->fecha }}">
        </div>
        <div class="form-group">
            <label for="lugar">Lugar:</label>
            <input type="text" class="form-control" id="lugar" name="lugar" value="{{ $accidente->lugar }}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>
@endsection
