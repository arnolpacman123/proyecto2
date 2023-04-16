<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage="periodos"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Crear Período"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Nuevo Período</h6>
                            </div>
                        </div>
                        <div class="card-body pb-2 mt-4">
                            <div class="card card-plain h-100">
                                <div class="card-header pb-0 p-3">
                                    <div class="row">
                                        <div class="col-md-8 d-flex align-items-center">
                                            <h6 class="mb-3">Rellene los datos del período</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-3">
                                    @if (session('status'))
                                        <div class="row">
                                            <div class="alert alert-success alert-dismissible text-white"
                                                 role="alert">
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
                                            <div class="alert alert-danger alert-dismissible text-white"
                                                 role="alert">
                                                <span class="text-sm">{{ Session::get('demo') }}</span>
                                                <button type="button" class="btn-close text-lg py-3 opacity-10"
                                                        data-bs-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        </div>
                                    @endif
                                    <form method='POST' action='{{ route('periodos.store') }}'>
                                        @csrf
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label for="numero" class="form-label">Número</label>
                                                <input id="numero" name="numero" type="number" min="1"
                                                       class="form-control border border-2 p-2"
                                                       value="{{ old('numero') }}">
                                                @if($errors->has('numero'))
                                                    @foreach($errors->get('numero') as $error)
                                                        <p class='text-danger inputerror'>{{ $error }} </p>
                                                    @endforeach
                                                @endif
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="ano" class="form-label">Año</label>
                                                <input id="ano" name="ano" type="number" min="1900"
                                                       class="form-control border border-2 p-2"
                                                       value="{{ old('ano') }}">
                                                @if($errors->has('ano'))
                                                    @foreach($errors->get('ano') as $error)
                                                        <p class='text-danger inputerror'>{{ $error }} </p>
                                                    @endforeach
                                                @endif
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="fecha_inicio" class="form-label">Fecha de Inicio</label>
                                                <input id="fecha_inicio" name="fecha_inicio"
                                                       class="form-control border border-2 p-2"
                                                       value="{{ old('fecha_inicio') }}">
                                                @if($errors->has('fecha_inicio'))
                                                    @foreach($errors->get('fecha_inicio') as $error)
                                                        <p class='text-danger inputerror'>{{ $error }} </p>
                                                    @endforeach
                                                @endif
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="fecha_fin" class="form-label">Fecha de Cierre</label>
                                                <input id="fecha_fin" name="fecha_fin"
                                                       class="form-control border border-2 p-2"
                                                       value="{{ old('fecha_fin') }}">
                                                @if($errors->has('fecha_fin'))
                                                    @foreach($errors->get('fecha_fin') as $error)
                                                        <p class='text-danger inputerror'>{{ $error }} </p>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                        <button type="submit" class="btn bg-gradient-dark">Crear período</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <x-plugins></x-plugins>
</x-layout>
