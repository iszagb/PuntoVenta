@extends('layouts.background')

@section('content')
<div class= "row banner-bottom common-bottom-banner align-items-center justify-content-center">
  <div align="center">
  <div class="card">
			<div class="card-header"><h1>Producto</h1></div>
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
        @if(isset($producto))
          <form action="{{route('productos.update', $producto->id)}}"method="POST">
          <input type="hidden" name="_method" value="PATCH">
        @else
        <form action="{{route('productos.store')}}"method="POST">
        @endif
        @csrf
				<div class="mt-10">
						<input type="text" value="{{$producto->nombre_Producto ?? ''}}{{ old('nombre_Producto') }}" name="nombre_Producto" placeholder="Nombre de producto" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nombre de producto'" >
				</div>
        <div class="mt-10">
						<input type="number" value="{{$producto->precio ?? ''}}{{ old('precio') }}" name="precio" placeholder="Precio de producto" onfocus="this.placeholder = ''" onblur="this.placeholder = 'precio de producto'" >
				</div>
        <div class="mt-10">
						<input type="text" value="{{$producto->descripcion ?? ''}}{{ old('descripcion') }}" name="descripcion" placeholder="Descripcion de producto" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Descripcion de producto'" >
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
