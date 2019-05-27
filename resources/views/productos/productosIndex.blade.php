@extends('layouts.background')

@section('content')
<div class= "row banner-bottom common-bottom-banner align-items-center justify-content-center">
  <div class="progress-table-wrap">
  						<div class="progress-table">
                <div class="row">
                  <div class="col-10"><h2>Menu</h2></div>
                  @can('manejar-producto')<div class="col"><a href="{{route('productos.create')}}" class="genric-btn info">Agregar</a></div>@endcan
                </div>
    							<div class="table-head">
    								<div class="serial">id</div>
    								<div class="country">Producto</div>
    								<div class="visit">Precio</div>
    								<div class="visit">Descripcion</div>
                    @can('manejar-producto')<div class="visit">Detalle</div>@endcan
    							</div>
                  @foreach ($productos as $producto)
    							<div class="table-row">
    								<div class="serial">{{$producto->id}}</div>
    								<div class="country"><a href="{{route('pedidos.create', ['producto_id' => $producto->id])}}" class="genric-btn info">{{$producto->nombre_Producto}}</a></div>
    								<div class="visit">{{$producto->precio}}</div>
                    <div class="visit">{{$producto->descripcion}}</div>
                    @can('manejar-producto')
                    <div class="visit"><a href="{{route('productos.show', $producto->id)}}" class="genric-btn info">detalle</a></div>
                    @endcan
          				 </div>
                  @endforeach
  							</div>
                {{ $productos->links() }}

  </div>
</div>
@endsection
