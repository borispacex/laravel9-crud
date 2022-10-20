@extends('tema.app')

@section('title', "Listado de Tareas")

@section('contenido')
    <h4>
        Listado de Tareas
    </h4>
    @livewire('tarea-index')
@endsection
