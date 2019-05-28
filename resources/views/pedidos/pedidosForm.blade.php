@extends('layouts.background')

@section('content')
<div class= "row banner-bottom common-bottom-banner align-items-center justify-content-center">
  <div align="center">
  <div class="card">
			<div class="card-header"><h1>Pedido</h1></div>
      <div class="card-body">
        @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
        @endif
        @if(isset($pedido))
          <form action="{{route('pedidos.update', $pedido)}}"method="POST">
          <input type="hidden" name="_method" value="PATCH">
        @else
          <form action="{{route('pedidos.store')}}"method="POST">
        @endif
        @csrf
        <label for ="mesa" class = "form-control">Mesa</label>
        <select id="mesa" name="mesa_id" class="form-control">
                    @foreach($mesas as $mesa)
                        <option value="{{ $mesa->id }}" {{ isset($pedido) && $pedido->mesa_id == $mesa->mesa_id ? 'selected' : '' }}>{{ $mesa->id}}</option>
                    @endforeach
        </select>
        <div class="mt-10">
              <input type="text" value="{{isset($pedido) ? $pedido->platillo : $product->nombre_Producto}}" name="platillo" readonly>
        </div>
        <div class="mt-10">
				      <input type="hidden" value="{{isset($pedido) ? $pedido->producto_id : $product->id}}" readonly name="producto_id" placeholder="Product id" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Product id'" >
				</div>
				<div class="mt-10">
							<input type="number" value="{{$pedido->cantidad ?? ''}}{{ old('cantidad') }}" name="cantidad" placeholder="Cantidad" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Cantidad'" >
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
