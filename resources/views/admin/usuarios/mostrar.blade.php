@extends('index-admin')

@section('content')

<div class="br-pageheader">
  <nav class="breadcrumb pd-0 mg-0 tx-12">
    <a class="breadcrumb-item" href="#">Dashboard</a>
    <span class="breadcrumb-item active">Usuarios</span>
  </nav>
</div><!-- br-pageheader -->

<div class="br-pagetitle">
    <i class="icon icon ion-ios-bookmarks-outline"></i>
    <div>
      <h4>Usuarios</h4>
      <p class="mg-b-0">Datos del usuario {{ $usuario->name }} {{ $usuario->second_name }}<br></p>
    </div>

    
    
 </div><!-- d-flex -->

<div class="br-pagebody">
    <div class="br-section-wrapper"> 

    <div class="row">
        
        <div class="col-xl-6">

            @if (session()->has('flash'))
            <div class="alert alert-success alert-bordered" role="alert">
                
                <div class="d-sm-flex align-items-center justify-content-start">
                <i class="icon ion-ios-checkmark alert-icon tx-52 mg-r-20 tx-success"></i>
                <div class="mg-t-20 mg-sm-t-0">
                    <h5 class="mg-b-2 tx-success">Programa guardado exitosamente.</h5>
                    <p class="mg-b-0 tx-gray">¡El programa se ha actualizado exitosamente!</p>
                </div>
                </div><!-- d-flex -->
            </div>
            @endif
            @if ($errors->any())
            <div class="alert alert-danger alert-bordered" role="alert">
                
                <div class="d-sm-flex align-items-center justify-content-start">
                <i class="icon ion-ios-close alert-icon tx-32"></i>
                <div class="mg-t-20 mg-sm-t-0">
                    <h5 class="mg-b-2 tx-alert">Hay algunos errores al momento de actualizar</h5>
                    <p class="mg-b-0 tx-gray">
                        @foreach ($errors->all() as $error)
                                <b>- {{ $error }}</b> <br>
                        @endforeach
                    </p>
                </div>
                </div><!-- d-flex -->
            </div>
            @endif
            
            <div class="form-layout form-layout-4 mg-t-30">
                <h6 class="br-section-label">Actualizar información de {{ $usuario->name }} {{ $usuario->second_name }}</h6>
            <form action="{{ route('actualizar.usuarios', $usuario) }}" method="post">
                @csrf
                @method('PUT')
                <div class="row">
                    <label for="" class="col-sm-4 form-contrtol-label">Nombre: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                            <input type="text" class="form-control" placeholder="Ingresar nombre" name="name" value="{{ old('name', $usuario->name) }}">
                    </div>
                    
                </div>
                <div class="row mg-t-20">
                    <label for="" class="col-sm-4 form-contrtol-label">Apellido: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                            <input type="text" class="form-control" placeholder="Ingresar apellido" name="second_name" value="{{ old('second_name', $usuario->second_name) }}">
                    </div>
                    
                </div>
                <div class="row mg-t-20">
                    <label for="" class="col-sm-4 form-contrtol-label">Nombre de usuario: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                            <input type="text" class="form-control" placeholder="Ingresar nombre de usuario" name="username" value="{{ old('username', $usuario->username) }}">
                    </div>
                    
                </div>
                <div class="row mg-t-20">
                    <label for="" class="col-sm-4 form-contrtol-label">Email: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                            <input type="text" class="form-control" placeholder="Ingresar correo" name="email" value="{{ old('email', $usuario->email) }}">
                    </div>
                    
                </div>
                <div class="row mg-t-20">
                    <label for="" class="col-sm-4 form-contrtol-label">Puesto: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                            <input type="text" class="form-control" placeholder="Ingresar puesto" name="job_position" value="{{ old('job_position', $usuario->job_position) }}">
                    </div>
                    
                </div>

                <div class="row mg-t-20">
                    <label for="" class="col-sm-4 form-contrtol-label">Contraseña: <span class="tx-danger"></span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                            <input type="password" class="form-control" placeholder="Contraseña" name="password" >
                    </div>                    
                </div>
                <div class="row mg-t-20">
                    <label for="" class="col-sm-4 form-contrtol-label">Repite la contraseña: <span class="tx-danger"></span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                            <input type="password" class="form-control" placeholder="Repite la contraseña" name="password_confirmation" >
                    </div>                    
                </div>
                
                <div class="form-layout-footer mg-t-30">
                  <button class="btn btn-info btn-block">Actualizar datos</button>
                </div><!-- form-layout-footer -->
            </form>
            </div>
        </div>
        <div class="col-xl-6">

            @hasanyrole('Admin|Super Admin')
            <div class="form-layout form-layout-4 mg-t-30">
                <h6 class="br-section-label">Actualizar roles y permisos de {{ $usuario->name }} {{ $usuario->second_name }}</h6>
                <form action="{{ route('actualizar.rol.usuarios', $usuario) }}" method="post">
                    @method('PUT')
                    @csrf
                @foreach ($roles as $id => $name)
                    <label class="ckbox">
                        <input name="roles[]" type="checkbox" value="{{ $name }}" 
                        {{ $usuario->roles->contains($id)? 'checked' : '' }}>
                        <span>{{ $name }}</span>
                    </label>
                @endforeach
                    <div class="form-layout-footer mg-t-30">
                        <button class="btn btn-info btn-block">Actualizar Roles</button>
                    </div><!-- form-layout-footer -->
                </form>

            </div>
            @endhasanyrole
            
            
        </div>
    </div>
    </div>
</div>
@endsection