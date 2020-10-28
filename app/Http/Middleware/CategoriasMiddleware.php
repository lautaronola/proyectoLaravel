<?php

namespace App\Http\Middleware;

use Closure;
use App\Categoria;

class CategoriasMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      //Compartimos la lista de categorías con todas las vistas.
      $categorias = Categoria::all();
      view()->share(compact('categorias'));

      return $next($request);
    }
}
