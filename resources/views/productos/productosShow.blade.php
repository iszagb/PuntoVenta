@extends('layouts.background')

@section('content')
<div class= "row banner-bottom common-bottom-banner align-items-center justify-content-center">
  <div class="progress-table-wrap">
  						<div class="progress-table">
                <div class="row">
                  <div class="col-10"><h2>Detalle</h2></div>
                </div>
    							<div class="table-head">
    								<div class="serial">id</div>
    								<div class="country">Producto</div>
    								<div class="visit">Precio</div>
    								<div class="visit">Descripción</div>
                    <div class="visit">Acción</div>
    							</div>
    							<div class="table-row">
    								<div class="serial">{{$producto->id}}</div>
    								<div class="country">{{$producto->nombre_Producto}}</div>
    								<div class="visit">{{$producto->precio}}</div>
                    <div class="visit">{{$producto->descripcion}}</div>
                    <a href="{{route('productos.edit', $producto->id) }}" class = "btn btn-sm btn-warning">Editar</a>
                    <form action="{{route('productos.destroy', $producto->id)}}" method="POST">
                       <input type="hidden" name="_method" value="DELETE">
                       @csrf
                       <button type="submit" class="btn btn-sm btn-danger">Borrar</button>
                    </form>
                  </div>
  							</div>
  </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Carga de Archivos</h3>
            </div>
            <div class="card-body">
                @include('archivos.archivoUpload', ['modelo_id' => $producto->id, 'modelo_type' => 'producto'])
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
                    @foreach($producto->archivos as $archivo)
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
