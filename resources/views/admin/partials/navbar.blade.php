<nav class=" clase row nav-color navbar navbar-expand-lg navbar-light bg-light">
{{-- /* ==================================================
  LOGO
================================================== */ --}}
  <div class="logo col-lg-1 col-md-1 col-sm-5 col-xs-4">
    <a href="/home"><img src="/images/LOGO.png" alt=""></a>
  </div>

  <div class="clase col-lg-8 col-md-8 col-sm-5 col-xs-4">

{{-- /* ==================================================
      MENU HAMBURGUESA
================================================== */ --}}
    <button class="botones-navbar navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="align-nav collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link fuente" href="/admin">Panel de Control <span class="sr-only"></span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link fuente" href="/admin/products/index">Volver a la lista <span class="sr-only"></span></a>
        </li>
      </ul>
    </div>
  </div>

    {{-- /* ==================================================
          USUARIO LOGUEADO
    ================================================== */ --}}
    @auth

    {{-- /* ==================================================
              BOTONES PRINCIPAR DE USUARIO
    ================================================== */ --}}
    <div class="dropdown">
      {{-- /* ==================================================
                  OPCIONES DE USUARIO LOGUEDO
      ================================================== */ --}}
      <button class="icono-banner btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img src="/images/usuarioLog.png" alt="">
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item fuente-menu" href="{{ url('/logout') }}">Cerrar Sesion</a>
      </div>
    </div>


{{-- /* ==================================================
      USUARIO NO LOGUEADO
================================================== */ --}}
    @else

    <form method="POST" action="{{ route('login') }}">
      @csrf
{{-- /* ==================================================
            INICIAR SESION
================================================== */ --}}
      <button type="button" class="icono-banner btn-lr btn btn-light" data-toggle="modal" data-target="#loginModal" data-whatever="@getbootstrap">
        <a href="#">Login</a>
      </button>
      <div class="separador">

      </div>
      <div class="modal fade" id="loginModal" tabindex="-1" role="modal" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Iniciar sesión</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

              <form id="log" method="post" enctype="multipart/form-data">

                <div class="form-group row">
                  <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                  <div class="col-md-6">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>


                      @if ($errors->has('email'))
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                          </span>
                      @endif

                  </div>
                </div>

                <div class="form-group row">
                  <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                  <div class="col-md-6">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                      @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('password') }}</strong>
                        </span>
                      @endif
                  </div>
                </div>

              <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                  </button>

                  <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('asd Your Password?') }}
                  </a>
                </div>
               </div>

              </form>

            </div>
          </div>
        </div>
      </div>
    </form>
    </div>
  @endauth
</nav>
