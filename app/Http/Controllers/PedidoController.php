<?php

namespace App\Http\Controllers;

use App\Pedido;
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
      $pedidos = pedidos::all();
      return view('pedidos.pedidosIndex', compact('pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pedidos.pedidosForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $ped = new pedidos();
      $ped->mesa= $request->input('mesa');
      $ped->platillo= $request->input('platillo');
      $ped->cantidad= $request->input('cantidad');
      $ped->save();

      return redirect()->route('pedidos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pedidos  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function show(Pedido $pedidos)
    {
        return view('pedidos.pedidosShow', compact('pedidos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pedidos  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function edit(Pedido $pedido)
    {
        return view('pedidos.pedidosForm', compact('pedidos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pedidos  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pedidos $pedidos)
    {
      $pedidos->mesa= $request->input('mesa');
      $pedidos->platillo= $request->input('platillo');
      $pedidos->cantidad= $request->input('cantidad');
      $pedidos->save();
      return redirect()->route('pedidos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pedidos  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pedidos $pedidos)
    {
      $pedidos->delete();
      return redirect()->route('pedidos.index');
    }
}
