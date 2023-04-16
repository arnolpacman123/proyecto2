<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    @push('external-libraries')
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
        <script src="https://code.jquery.com/jquery-3.6.3.min.js"
                integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    @endpush
    <x-navbars.sidebar activePage="announcement"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Asignar Carga Horaria"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Asignar Carga Horaria</h6>
                            </div>
                        </div>
                        <div class="card-body pb-2 mt-4">
                            <div class="card card-plain h-100">
                                <div class="card-header pb-0 p-3">
                                    <div class="row">
                                        <div class="col-md-8 d-flex align-items-center">
                                            <h6 class="mb-3">Rellene los datos para asignar la carga horaria: </h6>
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
                                    <form method='POST'
                                          action='{{ route('carga-horaria.store', ['postulanteId' => $postulante->id]) }}'>
                                        @csrf
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label for="horas_asignadas" class="form-label">Horas asignadas</label>
                                                <input id="horas_asignadas" type="number" name="horas_asignadas"
                                                       class="form-control border border-2 p-2"
                                                       value="{{ old('horas_asignadas') }}">
                                                @if($errors->has('horas_asignadas'))
                                                    @foreach($errors->get('horas_asignadas') as $error)
                                                        <p class='text-danger inputerror'>{{ $error }} </p>
                                                    @endforeach
                                                @endif
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="grupos" class="form-label">Asignar los
                                                    grupos</label>
                                                <select id="grupos" name="grupos_ids[]" class="form-control border border-2 p-2"
                                                        class="form-control border border-2 p-2 form-select">
                                                    <option>Selecciona los grupos que desee</option>
                                                    @foreach($postulante->materiaConvocada->materia->grupos as $grupo)
                                                        <option
                                                            value="{{ $grupo->id }}">{{ $grupo->sigla }}</option>
                                                    @endforeach
                                                </select>
                                                @if($errors->has('horas_asignadas'))
                                                    @foreach($errors->get('horas_asignadas') as $error)
                                                        <p class='text-danger inputerror'>{{ $error }} </p>
                                                    @endforeach
                                                @endif
                                            </div>

                                            {{--                                            <div class="mb-3 col-md-6">--}}
                                            {{--                                                <label for="hora" class="form-label">Hora del Examen</label>--}}
                                            {{--                                                <input id="hora" name="hora"--}}
                                            {{--                                                       class="form-control border border-2 p-2"--}}
                                            {{--                                                       value="{{ old('hora') }}">--}}
                                            {{--                                                @if($errors->has('hora'))--}}
                                            {{--                                                    @foreach($errors->get('hora') as $error)--}}
                                            {{--                                                        <p class='text-danger inputerror'>{{ $error }} </p>--}}
                                            {{--                                                    @endforeach--}}
                                            {{--                                                @endif--}}
                                            {{--                                            </div>--}}
                                            {{--                                            <div class="mb-3 col">--}}
                                            {{--                                                <label for="lugar" class="form-label">Lugar del Examen</label>--}}
                                            {{--                                                <textarea id="lugar" name="lugar"--}}
                                            {{--                                                          class="form-control border border-2 p-2">{{ old('lugar') }}</textarea>--}}
                                            {{--                                                @if($errors->has('lugar'))--}}
                                            {{--                                                    @foreach($errors->get('lugar') as $error)--}}
                                            {{--                                                        <p class='text-danger inputerror'>{{ $error }} </p>--}}
                                            {{--                                                    @endforeach--}}
                                            {{--                                                @endif--}}
                                            {{--                                            </div>--}}
                                            {{--                                        </div>--}}
                                            {{--                                        <div class="row">--}}
                                            {{--                                            <h5 class="card-title--}}
                                            {{--                                                        text-center">Docente</h5>--}}
                                            {{--                                            <div class="mb-4 col">--}}
                                            {{--                                                <label for="usuario_id" class="form-label">Selecciona el docente</label>--}}
                                            {{--                                                <select id="usuario_id" name="usuario_id"--}}
                                            {{--                                                        class="form-control border border-2 p-2 form-select">--}}
                                            {{--                                                    <option>Selecciona un docente</option>--}}
                                            {{--                                                    @foreach($docentes as $docente)--}}
                                            {{--                                                        <option--}}
                                            {{--                                                            value="{{ $docente->id }}">{{ $docente->nombres }} {{ $docente->apellidos }}</option>--}}
                                            {{--                                                    @endforeach--}}
                                            {{--                                                </select>--}}
                                            {{--                                            </div>--}}
                                        </div>
                                        <button type="submit" class="btn bg-gradient-dark">Asignar evaluación</button>
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
                    $('#grupos').select2({
                        placeholder: 'Seleccione los grupos que desee',
                        allowClear: true,
                        multiple: true,
                    });
                });
            });
        </script>
    @endpush
</x-layout>
