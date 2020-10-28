<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $products = Producto::all();
      return view('home', compact('products'));
    }

    public function entry(){
      return view('entry');
    }

    public function buscar(){
      $busqueda = '%'.$_GET['busqueda'].'%';
      $productos = Producto::where('name', 'like', "$busqueda" )
      ->orWhere('description', 'like', "$busqueda")->get();
      return view ('productoencontrado', compact('productos'));
    }
}
