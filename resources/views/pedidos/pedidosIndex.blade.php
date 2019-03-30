@extends('layouts.background')

@section('content')
<div class= "row banner-bottom common-bottom-banner align-items-center justify-content-center">
  <div class="progress-table-wrap">
  						<div class="progress-table">
                <div class="row">
                  <div class="col-10"><h2>Pedidos</h2></div>
                  <div class="col"><a href="{{route('pedidos.create')}}" class="genric-btn info">Agregar</a></div>
                </div>
    							<div class="table-head">
    								<div class="serial">id</div>
    								<div class="country">Mesa</div>
    								<div class="visit">Platillo</div>
    								<div class="percentage">Cantidad</div>
    							</div>
                  @foreach ($pedidos as $pedido)
    							<div class="table-row">
    								<div class="serial">{{$pedido->id}}</div>
    								<div class="country">{{$pedido->mesa}}</div>
    								<div class="visit">{{$pedido->platillo}}</div>
                    <div class="visit">{{$pedido->cantidad}}</div>
    							</div>
                  @endforeach
  							</div>
  </div>
</div>
@endsection
