@extends('layouts.background')

@section('content')
<div class="row banner-bottom common-bottom-banner align-items-center justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Carga de Archivos</h3>
            </div>
            <div class="card-body">
                @include('archivos.archivoUpload', ['modelo_id' => $user->id, 'modelo_type' => 'user'])
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Listado de Archivos</h3>
            </div>
            <div class="card-body">
                <table class="table">
                    @foreach($user->archivos as $archivo)
                        <tr>
                            <td>
                                <a href="{{ route('archivo.show', $archivo->id) }}">{{ $archivo->nombre }}</a>
                            </td>
                            <td>
                                {!! Form::open(['route' => ['archivo.destroy', $archivo->id], 'method' => 'delete']) !!}
                                    <input type="hidden" name="accion" value="borrar">
                                    <button class="btn btn-sm btn-danger form-pill borrar-archivo" type="submit" id="archivo_{{ $archivo->id }}">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i> Borrar
                                    </button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
