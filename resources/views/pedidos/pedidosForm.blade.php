@extends('layouts.background')

@section('content')
<div class= "row banner-bottom common-bottom-banner align-items-center justify-content-center">
  <div align="center">
  <div class="card">
			<div class="card-header"><h1>Pedido</h1></div>
      <div class="card-body">
        @if(isset($pedidos))
          <form action="{{route('pedidos.update', $pedidos->id)}}"method="POST">
          <input type="hidden" name="_method" value="PATCH">
        @else
          <form action="{{route('pedidos.store')}}"method="POST">
        @endif
        @csrf
				<div class="mt-10">
						<input type="text" value="{{$pedidos->mesa ?? ''}}" name="mesa" placeholder="Nombre de mesa" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nombre de mesa'" >
				</div>
				<div class="mt-10">
				      <input type="text" value="{{$pedidos->platillo ?? ''}}" name="platillo" placeholder="Platillo" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Platillo'" >
				</div>
				<div class="mt-10">
							<input type="number" value="{{$pedidos->cantidad ?? ''}}" name="cantidad" placeholder="Cantidad" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Cantidad'" >
				</div>
        <div class="mt-10">
              <button type="submit" class="genric-btn info">enviar</button>
        </div>
				</form>
      </div>
  </div>
</div>
</div>
@endsection
