<?php

namespace App\Http\Controllers;

use App\Pedido;
use App\Mesa;
use App\Producto;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $pedidos = Pedido::all();
      return view('pedidos.pedidosIndex', compact('pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $product = Producto::find($request->producto_id);
        $mesas = Mesa::all();
        return view('pedidos.pedidosForm',compact('product','mesas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
                  'mesa_id' => 'required',
                  'cantidad' => 'required',
              ]);
      $ped = new Pedido();
      $ped->mesa_id= $request->input('mesa_id');
      $ped->producto_id= $request->input('producto_id');
      $ped->platillo= $request->input('platillo');
      $ped->cantidad= $request->input('cantidad');
      $ped->save();

      return redirect()->route('pedidos.index')
          ->with([
                    'mensaje' => 'Pedido exitoso!',
                    'alert-class' => 'alert-success'
                ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function show(Pedido $pedido)
    {
        return view('pedidos.pedidosShow',compact('pedido'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function edit(Pedido $pedido)
    {
        $mesas = Mesa::all();
        return view('pedidos.pedidosForm', compact('pedido', 'mesas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pedido $pedido)
    {
      $request->validate([
                  'mesa_id' => 'required|max:255',
              ]);

      $pedido->mesa_id= $request->input('mesa_id');
      $pedido->producto_id=$request->input('producto_id');
      $pedido->platillo= $request->input('platillo');
      $pedido->cantidad= $request->input('cantidad');
      $pedido->save();
      return redirect()->route('pedidos.index')
              ->with([
                        'mensaje' => 'Pedido modificado exitosamente!',
                        'alert-class' => 'alert-success'
                    ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pedido $pedido)
    {
      $pedido->delete();
      return redirect()->route('pedidos.index')
              ->with([
                        'mensaje' => 'Pedido eliminado exitosamente',
                        'alert-class' => 'alert-danger'
                    ]);
    }
}
