<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;
use Auth;
use App\Categoria;
class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::all();
        return view('cargarproducto', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nuevo_producto = new Producto;
        $path = $request['featured_img']->store('public/product');

        $nuevo_producto->name = $request->name;
        $nuevo_producto->description = $request->description;
        $nuevo_producto->price = $request->price;
        $nuevo_producto->featured_img = basename($path);
        $nuevo_producto->user_id = Auth::user()->id;
        $nuevo_producto->category_id = $request->category_id;
        $nuevo_producto->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $product, Request $request)
    {
        $product = Producto::find($request->id);


        return view('verProducto', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $product, Request $req)
    {
        $product = Producto::find($req->id);
        $categorias = Categoria::all();



        return view('editarProducto', compact('product', 'categorias'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      $path = $request['featured_img']->store('public/product');
       $product = Producto::find($request->id);
       // dd($product);
      $product->name = $request->name;
      $product->description = $request->description;
      $product->price = $request->price;
      $product->featured_img = basename($path);
      $product->user_id = Auth::user()->id;
      $product->category_id = $request->category_id;
      $product->save();

      return view('verProducto', compact('product'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $req)
    {
      $producto = Producto::find($req->id);
      $producto->delete();

      return view ('eliminarProducto', compact('producto'));
    }

    public function fav(Request $req){
      $producto = Producto::find($req->id);


      return view ('verfavoritos', compact('producto'));
    }

    public function showfav(){
      return view ('verfavoritos');
    }
}
