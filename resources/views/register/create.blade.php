<x-layout bodyClass="">

    <div>
        <div class="container position-sticky z-index-sticky top-0">
            <div class="row">
                <div class="col-12">
                    <!-- Navbar -->
                    <x-navbars.navs.guest signin='login' signup='register'></x-navbars.navs.guest>
                    <!-- End Navbar -->
                </div>
            </div>
        </div>
        <main class="main-content  mt-0">
            <section>
                <div class="page-header min-vh-100">
                    <div class="container">
                        <div class="row">
                            <div
                                class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
                                <div
                                    class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center"
                                    style="background-image: url('../assets/img/illustrations/illustration-signup.jpg'); background-size: cover;">
                                </div>
                            </div>
                            <div
                                class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
                                <div class="card card-plain">
                                    <div class="card-header">
                                        <h4 class="font-weight-bolder">Registrarse</h4>
                                        <p class="mb-0">Ingrese sus datos</p>
                                    </div>
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('register') }}" autocomplete="off">
                                            @csrf
                                            <div class="input-group input-group-outline mt-3">
                                                <label for="nombres" class="form-label">Nombres</label>
                                                <input id="nombres" type="text" class="form-control" name="nombres"
                                                       value="{{ old('nombres') }}">
                                            </div>
                                            @error('nombres')
                                            <p class='text-danger inputerror'>{{ $message }} </p>
                                            @enderror
                                            <div class="input-group input-group-outline mt-3">
                                                <label for="apellidos" class="form-label">Apellidos</label>
                                                <input id="apellidos" type="text" class="form-control" name="apellidos"
                                                       value="{{ old('apellidos') }}">
                                            </div>
                                            @error('apellidos')
                                            <p class='text-danger inputerror'>{{ $message }} </p>
                                            @enderror
                                            <div class="input-group input-group-outline mt-3">
                                                <label for="numero_registro" class="form-label">Número de
                                                    registro</label>
                                                <input id="numero_registro" type="text" class="form-control"
                                                       name="numero_registro" value="{{ old('numero_registro') }}">
                                            </div>
                                            @error('numero_registro')
                                            <p class='text-danger inputerror'>{{ $message }} </p>
                                            @enderror
                                            <div class="input-group input-group-outline mt-3">
                                                <label for="contrasena" class="form-label">Contraseña</label>
                                                <input id="contrasena" type="password" class="form-control"
                                                       name="contrasena"
                                                       value="{{ old('contrasena') }}">
                                            </div>
                                            @error('contrasena')
                                            <p class='text-danger inputerror'>{{ $message }} </p>
                                            @enderror
                                            <div class="input-group input-group-outline mt-3">
                                                <select class="form-control" name="tipo_usuario_id">
                                                    @foreach(\App\Models\TipoUsuario::all() as $tipo_usuario)
                                                        <option
                                                            value="{{ $tipo_usuario->id }}">{{ $tipo_usuario->nombre_tipo }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-check form-check-info text-start ps-0 mt-3">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       id="flexCheckDefault" checked>
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Acepto los <a href="javascript:;"
                                                                  class="text-dark font-weight-bolder">Términos y
                                                        Condiciones</a>
                                                </label>
                                            </div>
                                            <div class="text-center">
                                                <button type="submit"
                                                        class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">
                                                    Registrarse
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                        <p class="mb-2 text-sm mx-auto">
                                            ¿Ya tienes una cuenta?
                                            <a href="{{ route('login') }}"
                                               class="text-primary text-gradient font-weight-bold">Inicia Sesión</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>

    @push('js')
        <script src="{{ asset('assets') }}/js/jquery.min.js"></script>
        <script>
            $(function () {

                var text_val = $(".input-group input").val();
                if (text_val === "") {
                    $(".input-group").removeClass('is-filled');
                } else {
                    $(".input-group").addClass('is-filled');
                }
            });
        </script>
    @endpush
</x-layout>
