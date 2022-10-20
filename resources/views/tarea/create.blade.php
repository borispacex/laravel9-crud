@extends('tema.app')

@section('title', "Nueva tarea")

@section('contenido')
    <h3> Registrar tarea </h3>

    <form action="{{ route('tarea.store') }}" method="POST">
        <x-tarea-form-body/>
    </form>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

@endsection
