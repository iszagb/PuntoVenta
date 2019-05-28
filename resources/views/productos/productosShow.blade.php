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
@endsection
