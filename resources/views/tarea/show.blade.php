@extends('tema.app')

@section('title', "Tarea")

@section('contenido')
    <h5> Nombre: </h5> {{ $tarea->nombre }}
    <h5> Finalizada: </h5> {{ $tarea->estaFinalizada() }}
    <h5> Urgencia: </h5> {{ $tarea->urgencia() }}
    <h5> fecha Limite: </h5> {{ $tarea->fecha_limite->format('H:i d/m/y') }}
    <h5> Descripcion: </h5> {{ $tarea->descripcion }}

    <hr>

    <div class="row">
        <div class="col-sm-6">
            <form action="{{ route('tarea.destroy', $tarea) }}" method="POST">
                @csrf
                @method('delete')
                <button class="btn btn-danger btn-sm" type="submit">
                    Borrar
                </button>
            </form>
        </div>
    </div>


@endsection
