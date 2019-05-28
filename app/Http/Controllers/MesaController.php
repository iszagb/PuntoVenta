<?php

namespace App\Http\Controllers;

use App\Mesa;
use App\Pedido;
use Illuminate\Http\Request;

class MesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mesas = Mesa::all();
        return view('mesas.mesasIndex', compact('mesas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mesas.mesasForm');
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
                  'mesa' => 'required|max:255',
              ]);

      $mes = new mesa();
      $mes->mesa = $request->input('mesa');
      $mes->save();

      return redirect()->route('mesas.index')
              ->with([
                        'mensaje' => 'Mesa añadida con exito!',
                        'alert-class' => 'alert-success'
                    ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mesa  $mesa
     * @return \Illuminate\Http\Response
     */
    public function show(Mesa $mesa)
    {
        return view('mesas.mesasShow',compact('mesa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mesa  $mesa
     * @return \Illuminate\Http\Response
     */
    public function edit(Mesa $mesa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mesa  $mesa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mesa $mesa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mesa  $mesa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mesa $mesa)
    {
      $mesa->delete();
      return redirect()->route('mesas.index')
              ->with([
                        'mensaje' => 'Pago exitoso!',
                        'alert-class' => 'alert-success'
                    ]);
    }

    public function eliminaPedido(Request $request, Mesa $mesa)
    {
        $mesa->pedidos()->detach($request->pedido_id);
        return redirect()->route('mesas.show', $mesa->id);
    }
}
