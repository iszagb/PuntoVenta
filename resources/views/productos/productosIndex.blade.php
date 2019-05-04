@extends('layouts.background')

@section('content')
<div class= "row banner-bottom common-bottom-banner align-items-center justify-content-center">
  <div class="progress-table-wrap">
  						<div class="progress-table">
                <div class="row">
                  <div class="col-10"><h2>Menu</h2></div>
                  <div class="col"><a href="{{route('productos.create')}}" class="genric-btn info">Agregar</a></div>
                </div>
    							<div class="table-head">
    								<div class="serial">id</div>
    								<div class="country">Producto</div>
    								<div class="visit">Precio</div>
    								<div class="visit">Descripcion</div>
                    <div class="visit">Detalle</div>
    							</div>
                  @foreach ($productos as $producto)
    							<div class="table-row">
    								<div class="serial">{{$producto->id}}</div>
    								<div class="country"><a href="{{route('pedidos.create', $producto->id)}}" class="genric-btn info">{{$producto->nombre_Producto}}</a></div>
    								<div class="visit">{{$producto->precio}}</div>
                    <div class="visit">{{$producto->descripcion}}</div>
                    <div class="visit"><a href="{{route('productos.show', $producto->id)}}" class="genric-btn info">detalle</a></div>
          				 </div>
                  @endforeach
  							</div>
  </div>
</div>
@endsection
