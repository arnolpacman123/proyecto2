<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    @push('external-libraries')
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
        <script src="https://code.jquery.com/jquery-3.6.3.min.js"
                integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    @endpush
    <x-navbars.sidebar activePage="convocatorias"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Crear Convocatoria"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Nueva Convocatoria</h6>
                            </div>
                        </div>
                        <div class="card-body pb-2 mt-4">
                            <div class="card card-plain h-100">
                                <div class="card-header pb-0 p-3">
                                    <div class="row">
                                        <div class="col-md-8 d-flex align-items-center">
                                            <h6 class="mb-3">Rellene los datos de la convocatoria</h6>
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
                                    <form method='POST' action='{{ route('convocatorias.store') }}'>
                                        @csrf
                                        <div class="row">
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
                                            <div class="mb-3 col-md-6">
                                                <label for="periodo_id" class="form-label">Periodo</label>
                                                <select id="periodo_id" name="periodo_id"
                                                        class="form-control border border-2 p-2">
                                                    <option class="text-center">Seleccione el periodo</option>
                                                    @foreach($periodos as $periodo)
                                                        <option value="{{ $periodo->id }}">0{{ $periodo->numero }}
                                                            /{{ $periodo->ano }}</option>
                                                    @endforeach
                                                </select>
                                                @if($errors->has('periodo_id'))
                                                    @foreach($errors->get('periodo_id') as $error)
                                                        <p class='text-danger inputerror'>{{ $error }} </p>
                                                    @endforeach
                                                @endif
                                            </div>
                                            <div class="mb-3 col">
                                                <label for="descripcion" class="form-label">Descripción</label>
                                                <textarea id="descripcion" name="descripcion"
                                                          class="form-control border border-2 p-2">{{ old('descripcion') }}</textarea>
                                                @if($errors->has('descripcion'))
                                                    @foreach($errors->get('descripción') as $error)
                                                        <p class='text-danger inputerror'>{{ $error }} </p>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row">
                                            <h5 class="card-title
                                                        text-center">Materias</h5>
                                            <div class="mb-4 col">
                                                <label for="materias" class="form-label">Materias</label>
                                                <select multiple id="materias" name="materias_ids[]"
                                                        class="form-control border border-2 p-2 form-select">
                                                    @foreach($materias as $materia)
                                                        <option
                                                            value="{{ $materia->id }}">{{ $materia->nombre }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn bg-gradient-dark">Crear convocatoria</button>
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
    @push('custom-scripts')
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                $(document).ready(function () {
                    $('#materias').select2({
                        placeholder: 'Seleccione las materias que desee',
                        allowClear: true,
                        multiple: true,
                    });
                });
            });
        </script>
    @endpush
</x-layout>
