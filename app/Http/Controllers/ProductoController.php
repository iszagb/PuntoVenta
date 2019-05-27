<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Pedido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    public function __construct()
    {
      $this->middleware('admin')->only('create', 'store', 'edit', 'update', 'destroy','show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $productos = DB::table('productos')->paginate(5);
      return view('productos.productosIndex', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productos.productosForm');
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
                  'nombre_Producto' => 'required',
              ]);

      $product = new Producto();
      $product->nombre_Producto = $request->input('nombre_Producto');
      $product->precio = $request->input('precio');
      $product->descripcion = $request->input('descripcion');
      $product->save();

      return redirect()->route('productos.index')
              ->with([
                        'mensaje' => 'Producto añadido con exito!',
                        'alert-class' => 'alert-success'
                    ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        return view('productos.productosShow',compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        return view('productos.productosForm', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
      $request->validate([
                  'nombre_Producto' => 'required',
              ]);

      $producto->nombre_Producto = $request->input('nombre_Producto');
      $producto->precio = $request->input('precio');
      $producto->descripcion = $request->input('descripcion');
      $producto->save();

      return redirect()->route('productos.index')
              ->with([
                        'mensaje' => 'Producto modificado exitosamente!',
                        'alert-class' => 'alert-success'
                    ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
      $producto->delete();
      return redirect()->route('productos.index')
              ->with([
                        'mensaje' => 'Producto eliminado correctamente',
                        'alert-class' => 'alert-danger'
                    ]);
    }
}
