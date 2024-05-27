@extends('layouts.app')

@section('content')
    <h1>Detalles del Accidente</h1>
    <p><strong>Hora:</strong> {{ $accidente->hora }}</p>
    <p><strong>Código:</strong> {{ $accidente->codigo }}</p>
    <p><strong>Fecha:</strong> {{ $accidente->fecha }}</p>
    <p><strong>Lugar:</strong> {{ $accidente->lugar }}</p>
    <a href="{{ route('accidentes.index') }}" class="btn btn-secondary">Volver</a>
@endsection
