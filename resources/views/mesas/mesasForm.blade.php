@extends('layouts.background')

@section('content')
<div class= "row banner-bottom common-bottom-banner align-items-center justify-content-center">
  <div align="center">
  <div class="card">
			<div class="card-header"><h1>Mesa</h1></div>
      <div class="card-body">
        <form action="{{route('mesas.store')}}"method="POST">
        @csrf
				<div class="mt-10">
						<input type="text" value="{{$mesa->mesa_id ?? ''}}" name="mesa_id" placeholder="Nombre de mesa" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nombre de mesa'" >
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
