<nav class="main_bar">
  <ul class="menu_productos">
    @foreach ($categorias as $categoria)
      <li class="botones_productos"><a href="/vercategoria/{{$categoria->id}}">{{$categoria->name}}</a></li>
    @endforeach
    <li class="botones_productos"><a href="/home">Todos los productos</a></li>
  </ul>
</nav>
