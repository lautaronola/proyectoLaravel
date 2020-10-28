@extends('main')

@section('content')
  {{-- <div class="buttons"> --}}
    <article class='producto'>
        <img class='imagen' src="/storage/product/{{$product->featured_img}}" alt="" id="verproductoimg">
        <h4 class="name">{{$product->name}}</h4>
        <p class="description">{{$product->description}}</p>
        <p class="price">Precio: {{$product->price}}$</p>

        <form class="buttoncolor" action="/addtocarrito" method="post">
          @csrf
          <input type="hidden" name="id" value="{{$product->id}}">
          <input type="number" name="quantity" min='0' value="">
          <button type="submit" class="btn btn-success" id="colorbtn">Agregar al carrito</a>
        </form>

        <form class="buttoncolor" action="/verfavoritos" method="post">
          @csrf
          <input type="hidden" name="id" value="{{$product->id}}">
          <button type="submit" class="btn btn-info" id="colorbtn">Agregar a favoritos</a>
        </form>

        <!-- <form class="buttoncolor" action="/editarProducto" method="post">
          @csrf
          <input type="hidden" name="id" value="{{$product->id}}">
          <button type="submit" class="btn btn-warning" id="colorbtn">Editar Producto</a>
        </form>

        <form class="buttoncolor" action="/eliminarProducto" method="post">
          @csrf
          <input type="hidden" name="id" value="{{$product->id}}">
          <button type="submit" class="btn btn-danger" id="colorbtn">Eliminar Producto</a>
        </form> -->
      </article>
    {{-- </div> --}}
    @endsection
