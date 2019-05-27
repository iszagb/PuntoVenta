@extends('layouts.background')

@section('content')
<div class= "row banner-bottom common-bottom-banner align-items-center justify-content-center">
  						<div class="progress-table">
                <div class="row">
                  <div class="col"><h2>Mesas</h2></div>
                  <div class="col"><a href="{{route('mesas.create')}}" class="genric-btn info">Agregar</a></div>
                </div>
    							<div class="table-head">
    								<div class="serial">id</div>
    								<div class="country">Nombre de mesa</div>
                    <div class="visit">Acciones</div>
    							</div>
                  @foreach ($mesas as $mesa)
    							<div class="table-row">
    								<div class="serial">{{$mesa->id}}</div>
    								<div class="country">{{$mesa->mesa}}</div>
                    <div class="visit">
                      <a href="{{route('mesas.show', $mesa->id)}}" class="genric-btn info">Detalle</a>
                      <a href="{{route('productos.index')}}" class="genric-btn info">Agregar pedido</a>
                    </div>
          				 </div>
                  @endforeach
  </div>
</div>
@endsection
