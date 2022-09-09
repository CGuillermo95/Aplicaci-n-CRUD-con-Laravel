@extends('tema.app')

@section('title', 'Tarea')

@section('contenido')
    <h3>
        {{ $tarea->Nombre }}
    </h3>

    <ul>
        <li>
            FINALIZADA <strong>{{ $tarea->estaFinalizada() }}</strong>
        </li>

        <li>
            URGENCIA: <strong>{{ $tarea->urgencias() }}</strong>
        </li>

        <li>
            FECHA LÍMITE: <strong>{{ $tarea->Fecha_limite->Format('H:i - d/m/Y') }}</strong>
        </li>
    </ul>
    <p>
        {{ $tarea->Descripcion }}
    </p>
    <hr>
    <div class="row">
        <div class="col-sm-12">
            <form action="{{ route('tarea.destroy', $tarea) }}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-outline-danger btn-xs"><i class="fas solid fa-trash"></i></button>
            </form>
        </div>
        <div class="col-sm-12 my-2"></div>
    </div>
@endsection