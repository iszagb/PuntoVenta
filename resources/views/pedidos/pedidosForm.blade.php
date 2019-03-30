@extends('layouts.background')

@section('content')
<div class= "row banner-bottom common-bottom-banner align-items-center justify-content-center">
<div class="container-fluid">
<div class="col-lg-8 col-md-8">
							<h1 class="mb-30 title_color">Pedido</h1>
							<form action="#">
								<div class="mt-10">
									<input type="text" name="mesa" placeholder="Nombre de mesa" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nombre de mesa'" required="" class="single-input">
								</div>
								<div class="mt-10">
									<input type="text" name="platillo" placeholder="Platillo" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Platillo'" required="" class="single-input">
								</div>
								<div class="mt-10">
									<input type="number" name="cantidad" placeholder="Cantidad" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Cantidad'" required="" class="single-input">
								</div>
                <div class="mt-10">
                <button type="submit" class="genric-btn info">enviar</button>
              </div>
							</form>
						</div>
          </div>
          </div>
  @endsection
