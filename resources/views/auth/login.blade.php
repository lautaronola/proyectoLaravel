@extends('main')

@section('content')
  <br>
  <br>
  <br>
  <br>
 <div class="container">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <br>
                        <br>
                      <div class="container-login">
                        <div class="form-group row" id="remember">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Recuerdame') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row mb-0" id="botonlogin">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Login') }}
                                </button>
                                <br>
                                <br>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('¿Olvidaste tu contraseña?') }}
                                    </a>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                @endif
                            </div>
                        </div>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <h1>Login</h1>
<form action="{{ route('login') }}" method="post">
  @csrf
  <div class="form">
      <div class="form-group-email">
        <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
        <input type="email" name="email" class="form-control" id="email" placeholder="example@email.com">
      </div>

      <div class="form-group-password">
        <label for="Password" class="col-md-4 col-form-label text-md-right">Password</label>
        <input type="password" class="form-control" id="Password" name="password" placeholder="Password">
      </div>
  </div>

<!-- Buttons -->

<div class="form-group">
  <div class="form-check">
    <input class="form-check-input" type="checkbox" id="gridCheck">
    <label class="form-check-label" for="gridCheck">
      Remember me
    </label>
  </div>
</div>
<div class="button">
   <button type="submit" class="btn btn-primary">Sign in</button>
</div>
</form> --}}

@endsection
