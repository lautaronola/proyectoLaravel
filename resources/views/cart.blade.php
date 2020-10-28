@extends('main')

@section('content')
<h1 class= 'titulo'>Mi Carrito</h1>
<h2 class= 'subtitulo'>Lista de productos</h2>
<br>
<br>
<div class="container" id="carritovista">

<h1>Mi Carrito</h1>
    @forelse ($items as $product)
      <article class= 'producto'>
        <img src="/storage/product/{{$product->featured_img}}" alt="" id="imgcart">
        <h4 class="name">{{$product->name}}</h4>
        <p class="description">{{$product->description}}</p>
        <p class="price">Precio: {{$product->price}}$</p>
        <p class="quantity">Cantidad: {{$product->quantity}}</p>
        <p class='subtotal'>Subtotal: {{$product->subtotal}}</p>
        <div class="botoneditarperfil">
          <form class="" action="/sacarDeCarrito" method="post">
          @csrf
          <!-- <input type="hidden" name="id" value="{{$product->id}}">
          <button type="submit" class="btn btn-success">Comprar</a> -->

          <input type="hidden" name="id" value="{{$product->id}}">
          <button type="submit" class="btn btn-danger">Sacar de carrito</a>
        </form>
      </div>

      </article>

    @empty
      <p>No hay productos disponibles</p>
    @endforelse

    <article class="">
      <h2>Total:{{$total}}</h2>
      <form class="" action="/finalizarcompra" method="post">
      @csrf
      <input type="hidden" name="id" value="">
      <button type="submit" class="btn btn-success">Comprar</a>
        </article>
    </form>



</div>
@endsection
