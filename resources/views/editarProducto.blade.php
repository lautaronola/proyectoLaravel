@extends('main')

@section('content')
<div class="container">
<div class="row justify-content-center">
  <div class="col-md-8">
    <div class="card">
        <div class="card-header">{{ __('EditarProducto') }}</div>

        <div class="card-body">
            <form method="POST" action="/productoEditado" enctype='multipart/form-data'>
                @csrf

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="category_id" class="col-md-4 col-form-label text-md-right">{{ __('Categoria') }}</label>

                    <div class="col-md-6">
                      <select class="" name="category_id">
                        @foreach($categorias as $categoria)
                        <option value="{{$categoria->id}}">{{$categoria->name}}</option>
                        @endforeach
                      </select>


                        @error('category_id')

                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                    <div class="col-md-6">
                        <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>

                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>

                    <div class="col-md-6">
                        <input id="price" type="price" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price">

                        @error('price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <!-- <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Featured_img') }}</label>

                    <div class="col-md-6">
                        <input id="featured_img" type="featured_img" class="form-control @error('featured_img') is-invalid @enderror" name="featured_img" required autocomplete="new-featured_img">

                        @error('featured_img')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div> -->

                <label for="featured_img" class="col-md-4 col-form-label text-md-right">{{ __('Featured_img') }}</label>

                <div class="col-md-6">
                    <input accept="image/*" id="featured_img" type="file" class="form-control @error('featured_img') is-invalid @enderror" name="featured_img" value="{{ old('featured_img') }}" required autocomplete="featured_img" autofocus>

                    @error('featured_img')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>


                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <input type="hidden" name="id" value="{{$product->id}}">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Editar Producto') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>
</div>

</form>

@endsection
