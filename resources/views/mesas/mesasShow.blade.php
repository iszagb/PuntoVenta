@extends('layouts.background')

@section('content')
<div class= "row banner-bottom common-bottom-banner align-items-center justify-content-center">
  <div class="progress-table-wrap">
  						<div class="progress-table">
                <div class="row">
                  <div class="col-10"><h2>Detalle</h2></div>
                </div>
    							<div class="table-head">
    								<div class="serial">Mesa_id</div>
    								<div class="visit">Pedido_id</div>
                    <div class="visit">Detalle</div>
    							</div>
    							<div class="table-row">
    								<div class="country">{{$mesa->pedidos->mesa_id}}</div>
    								<div class="visit">{{$mesa->pedidos->pedido_id}}</div>
                    <a href="{{route('pedidos.edit', $pedido->id) }}" class = "btn btn-sm btn-warning">Editar</a>
                    <form action="{{route('pedidos.destroy', $pedido->id)}}" method="POST">
                       <input type="hidden" name="_method" value="DELETE">
                       @csrf
                       <button type="submit" class="btn btn-sm btn-danger">Borrar</button>
                    </form>
                  </div>
  							</div>
  </div>
</div>
@endsection
