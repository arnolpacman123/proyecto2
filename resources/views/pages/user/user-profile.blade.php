@php
    $user = $user ?? auth()->user();
@endphp
<x-layout bodyClass="g-sidenav-show bg-gray-200">

    <x-navbars.sidebar activePage="user-profile"></x-navbars.sidebar>
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage='Perfil de Usuario'></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid px-2 px-md-4">
            <div class="page-header min-height-300 border-radius-xl mt-4"
                 style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
                <span class="mask  bg-gradient-primary  opacity-6"></span>
            </div>
            <div class="card card-body mx-3 mx-md-4 mt-n6">
                <div class="row gx-4 mb-2">
                    <div class="col-auto">
                        <div class="avatar avatar-xl position-relative">
                            <img src="{{ asset('assets') }}/img/bruce-mars.jpg" alt="profile_image"
                                 class="w-100 border-radius-lg shadow-sm">
                        </div>
                    </div>
                    <div class="col-auto my-auto">
                        <div class="h-100">
                            <h5 class="mb-1">
                                {{ $user->name }}
                            </h5>
                            <p class="mb-0 font-weight-normal text-sm">
                                {{ $user->tipoUsuario->nombre_tipo }}
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                        <div class="nav-wrapper position-relative end-0">
                            <ul class="nav nav-pills nav-fill p-1" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1 active " data-bs-toggle="tab" href="javascript:;"
                                       role="tab" aria-selected="true">
                                        <i class="material-icons text-lg position-relative">home</i>
                                        <span class="ms-1">App</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href="javascript:;"
                                       role="tab" aria-selected="false">
                                        <i class="material-icons text-lg position-relative">email</i>
                                        <span class="ms-1">Messages</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href="javascript:;"
                                       role="tab" aria-selected="false">
                                        <i class="material-icons text-lg position-relative">settings</i>
                                        <span class="ms-1">Settings</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card card-plain h-100">
                    <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-md-8 d-flex align-items-center">
                                <h6 class="mb-3">Información del Perfil</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        @if (session('status'))
                            <div class="row">
                                <div class="alert alert-success alert-dismissible text-white" role="alert">
                                    <span class="text-sm">{{ Session::get('status') }}</span>
                                    <button type="button" class="btn-close text-lg py-3 opacity-10"
                                            data-bs-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        @endif
                        @if (Session::has('demo'))
                            <div class="row">
                                <div class="alert alert-danger alert-dismissible text-white" role="alert">
                                    <span class="text-sm">{{ Session::get('demo') }}</span>
                                    <button type="button" class="btn-close text-lg py-3 opacity-10"
                                            data-bs-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        @endif
                        <form method='POST' action='{{ route('user-profile') }}'>
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="nombres" class="form-label">Nombres</label>
                                    <input id="nombres" type="text" name="nombres"
                                           class="form-control border border-2 p-2"
                                           value='{{ old('nombres', auth()->user()->nombres) }}'>
                                    @if($errors->has('nombres'))
                                        @foreach($errors->get('nombres') as $error)
                                            <p class='text-danger inputerror'>{{ $error }} </p>
                                        @endforeach
                                    @endif
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="apellidos" class="form-label">Apellidos</label>
                                    <input id="apellidos" type="text" name="apellidos"
                                           class="form-control border border-2 p-2"
                                           value='{{ old('apellidos', auth()->user()->apellidos) }}'>
                                    @if($errors->has('apellidos'))
                                        @foreach($errors->get('apellidos') as $error)
                                            <p class='text-danger inputerror'>{{ $error }} </p>
                                        @endforeach
                                    @endif
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="numero_registro" class="form-label">Número de Registro</label>
                                    <input id="numero_registro" type="text" name="numero_registro"
                                           class="form-control border border-2 p-2"
                                           value='{{ old('numero_registro', $user->numero_registro) }}'
                                           readonly>
                                    @if($errors->has('numero_registro'))
                                        @foreach($errors->get('numero_registro') as $error)
                                            <p class='text-danger inputerror'>{{ $error }} </p>
                                        @endforeach
                                    @endif
                                </div>


                                <div class="mb-3 col-md-6">
                                    <label for="correo" class="form-label">Correo electrónico</label>
                                    <input id="correo" type="email" name="correo"
                                           class="form-control border border-2 p-2"
                                           value='{{ old('correo', $user->correo) }}'
                                           @if($user->correo == null) placeholder="Agrega un correo electrónico..." @endif >
                                    @if($errors->has('correo'))
                                        @foreach($errors->get('correo') as $error)
                                            <p class='text-danger inputerror'>{{ $error }} </p>
                                        @endforeach
                                    @endif
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="celular" class="form-label">Celular</label>
                                    <input id="celular" type="text" name="celular"
                                           class="form-control border border-2 p-2"
                                           value='{{ old('celular', $user->celular) }}'
                                           @if($user->celular==null) placeholder="Agrega un celular..." @endif>
                                    @if($errors->has('celular'))
                                        @foreach($errors->get('celular') as $error)
                                            <p class='text-danger inputerror'>{{ $error }} </p>
                                        @endforeach
                                    @endif
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="tipo_usuario_id" class="form-label">Tipo de Usuario</label>
                                    <select id="tipo_usuario_id" name="tipo_usuario_id" class="form-control border border-2 p-2" readonly>
                                        <option value="{{ $user->tipoUsuario->id }}" selected>
                                            {{ $user->tipoUsuario->nombre_tipo }}
                                        </option>
                                    </select>
                                    @error('tipo_usuario_id')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label for="direccion">Dirección</label>
                                    <textarea class="form-control border border-2 p-2"
                                              id="direccion"
                                              name="direccion"
                                              @if($user->direccion == null) placeholder="Agrega la dirección donde vives..."
                                              @endif
                                              rows="4" cols="50">{{ old('about', $user->direccion) }}</textarea>
                                    @if($errors->has('direccion'))
                                        @foreach($errors->get('direccion') as $error)
                                            <p class='text-danger inputerror'>{{ $error }} </p>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                            <button type="submit" class="btn bg-gradient-dark">Actualizar</button>
                        </form>

                    </div>
                </div>


            </div>

        </div>
        <x-footers.auth></x-footers.auth>
    </div>
    <x-plugins></x-plugins>

</x-layout>
