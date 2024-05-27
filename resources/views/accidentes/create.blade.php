@extends('layouts.app')

@section('content')
    <h1>Nuevo Accidente</h1>
    <form action="{{ route('accidentes.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="hora">Hora:</label>
            <input type="text" class="form-control" id="hora" name="hora">
        </div>
        <div class="form-group">
            <label for="codigo">Código:</label>
            <input type="text" class="form-control" id="codigo" name="codigo">
        </div>
        <div class="form-group">
            <label for="fecha">Fecha:</label>
            <input type="date" class="form-control" id="fecha" name="fecha">
        </div>
        <div class="form-group">
            <label for="lugar">Lugar:</label>
            <input type="text" class="form-control" id="lugar" name="lugar">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
