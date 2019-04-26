@extends('layouts.background')

@section('content')
<div class= "row banner-bottom common-bottom-banner align-items-center justify-content-center">
  <div class="progress-table-wrap">
  						<div class="progress-table">
                <div class="row">
                  <div class="col-10"><h2>Detalle</h2></div>
                </div>
    							<div class="table-head">
    								<div class="serial">Mesa</div>
                    <div class="visit">Platillo</div>
                    <div class="visit">Cantidad</div>
                    <div class="visit">Detalle</div>
    							</div>
                  @foreach($mesa->pedidos as $pedido)
    							<div class="table-row">
                    <div class="visit">{{$pedido->mesa_id}}</div>
                    <div class="visit">{{$pedido->platillo}}</div>
                    <div class="visit">{{$pedido->cantidad}}</div>
                    <a href="{{route('pedidos.edit', $pedido->id) }}" class = "btn btn-sm btn-warning">Editar</a>
                    <form action="{{route('pedidos.destroy', $pedido->id)}}" method="POST">
                       <input type="hidden" name="_method" value="DELETE">
                       @csrf
                       <button type="submit" class="btn btn-sm btn-danger">Borrar</button>
                    </form>
                  </div>
                  @endforeach
  							</div>
  </div>
</div>
@endsection
