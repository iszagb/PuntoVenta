@extends('layouts.background')

@section('content')
<div class= "row banner-bottom common-bottom-banner align-items-center justify-content-center">
  <div class="progress-table-wrap">
  						<div class="progress-table">
                <div class="row">
                  <div class="col-10"><h2>Pedidos</h2></div>
                  <div class="col"><a href="{{route('productos.index')}}" class="genric-btn info">Agregar</a></div>
                </div>
    							<div class="table-head">
    								<div class="serial">id</div>
    								<div class="country">Mesa_id</div>
    								<div class="visit">Platillo</div>
    								<div class="visit">Cantidad</div>
                    <div class="visit">Detalle</div>
    							</div>
                  @foreach ($pedidos as $pedido)
    							<div class="table-row">
    								<div class="serial">{{$pedido->id}}</div>
    								<div class="country">{{$pedido->mesa_id}}</div>
    								<div class="visit">{{$pedido->platillo}}</div>
                    <div class="visit">{{$pedido->cantidad}}</div>
                    <div class="visit"><a href="{{route('pedidos.show', $pedido->id)}}" class="genric-btn info">detalle</a></div>
          				 </div>
                  @endforeach
  							</div>
  </div>
</div>
@endsection
