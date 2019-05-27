@extends('layouts.background')

@section('content')
<div class= "row banner-bottom common-bottom-banner align-items-center justify-content-center">
  <div class="progress-table-wrap">
  						<div class="progress-table">
                <div class="row">
                  <div class="serial"><h2>Detalle</h2></div>
                </div>
    							<div class="table-head">
    								<div class="serial">Mesa</div>
                    <div class="visit">Platillo</div>
                    <div class="visit">Cantidad</div>
                    <div class="visit">Precio</div>
                    <div class="visit">cantPlatillo</div>
                    <div class="visit">Detalle</div>
    							</div>
                  <?php $sum = 0; ?>
                  @foreach($mesa->pedidos as $pedido)
    							<div class="table-row">
                    <div class="serial">{{$pedido->mesa_id}}</div>
                    <div class="visit">{{$pedido->platillo}}</div>
                    <div class="visit">{{$pedido->cantidad}}</div>
                    @foreach($pedido->productos as $producto)
                      <div class="visit">{{$producto->precio}}</div>
                      <?php $sum += $producto->precio * $pedido->cantidad; ?>
                    @endforeach
                    <div class="visit">{{$pedido->cant_plat}}</div>
                    <a href="{{route('pedidos.edit', $pedido->id) }}" class = "btn btn-sm btn-warning">Editar</a>
                    <form action="{{route('pedidos.destroy', $pedido->id)}}" method="POST">
                       <input type="hidden" name="_method" value="DELETE">
                       @csrf
                       <button type="submit" class="btn btn-sm btn-danger">Borrar</button>
                    </form>
                  </div>
                  @endforeach
                  <div class="visit">TOTAL: {{$sum}}</div>

  							</div>
                <form action="{{route('mesas.destroy', $mesa->id)}}" method="POST">
                   <input type="hidden" name="_method" value="DELETE">
                   @csrf
                   <button type="submit" class="btn btn-sm btn-danger">Pagar</button>
                </form>
  </div>
</div>
@endsection
