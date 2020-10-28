<?php

namespace App\Http\Controllers;
use Auth;
use App\Favoritos;
use Illuminate\Http\Request;
use App\Producto;

class FavoritosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $productos = Auth::user()->favorito;

// dd($producto);
      return view ('verfavoritos', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $favoritos = new Favoritos;
        $favoritos->product_id = $req->id;
        $favoritos->user_id = Auth::user()->id;
        $favoritos->save();

    return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Favoritos  $favoritos
     * @return \Illuminate\Http\Response
     */
    public function show(Favoritos $favoritos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Favoritos  $favoritos
     * @return \Illuminate\Http\Response
     */
    public function edit(Favoritos $favoritos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Favoritos  $favoritos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Favoritos $favoritos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Favoritos  $favoritos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Favoritos $favoritos)
    {
        //
    }
}
