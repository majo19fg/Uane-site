@extends('login-index')
@section('content')
    <form action="{{ route('login') }}" method="post" data-parsley-validate>
        @csrf
        <div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">
            <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white rounded shadow-base">
              <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal"><img src="/admin/images/uane-vino.png" class="img-fluid" alt=""></div>
              <div class="tx-center mg-b-30 mg-t-10" style="font-size:20px; color:#000; font-weight:500;">Experiencia que transforma </div>

              <div class="form-group">
                  <input type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" placeholder="Nombre de usuario" required>
                    @if ($errors->has('username'))
                        <strong style="color: #DC3545; list-style: none; font-size: 12px; margin: 5px 0 0;">{{ $errors->first('username') }}</strong>
                    @endif
              </div>
              
              <div class="form-group">
                <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Escribe tu contraseña" required>
                @if ($errors->has('password'))
                        <strong style="color: #DC3545; list-style: none; font-size: 12px; margin: 5px 0 0;">{{ $errors->first('password') }}</strong>
                @endif
                <a href="{{ route('password.request') }}" class="tx-info tx-12 d-block mg-t-10">¿Olvidaste tu contraseña?</a>
              </div><!-- form-group -->

              <button type="submit" class="btn btn-info btn-block">Iniciar sesión</button>
          
            </div><!-- login-wrapper -->
        </div><!-- d-flex -->
    </form>
@endsection