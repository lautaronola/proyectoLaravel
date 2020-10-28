@extends('main')

@section('content')
<h1 align='center'>Productos Favoritos</h1>
<div class="buttons" id="productoperfilusuario">
  @forelse ($productos as $producto)
  <article class='producto'>
      <img class='imagen' src="/storage/product/{{$producto->featured_img}}" alt="" id="verproductoimg">
      <h4 class="name">{{$producto->name}}</h4>
      <p class="description">{{$producto->description}}</p>
      <p class="price">Precio: {{$producto->price}}$</p>


<form class="buttoncolor" action="/addtocarrito" method="post">
  @csrf
  <input type="hidden" name="id" value="{{$producto->id}}">
  <input type="number" name="quantity" min='0' value="">
  <button type="submit" class="btn btn-success" id="colorbtn">Agregar al carrito</a>

</form>
</article>
@empty
<h2>No has seleccionado ningún producto favorito.</h2>
@endforelse

</div>

@endsection
