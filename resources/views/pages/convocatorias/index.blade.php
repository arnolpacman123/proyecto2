<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage="convocatorias"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Convocatorias"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Convocatorias</h6>
                            </div>
                        </div>
                        @if(auth()->user()->tipoUsuario->nombre_tipo !== 'Estudiante')
                            <p class="mt-4 ps-3 text-center">
                                Dé clic o pulse sobre una fila para desplegar las convocatorias
                            </p>
                            @if(auth()->user()->tipoUsuario->nombre_tipo === 'Decano')
                                <div class=" me-3 my-3 text-end">
                                    <a class="btn bg-gradient-dark mb-0" href="{{ route('convocatorias.create') }}"><i
                                            class="material-icons text-sm">add</i>Crear Nueva Convocatoria</a>
                                </div>
                            @endif
                        @endif
                        <div class="card-body px-0 pb-2">
                            @if($convocatorias->count() > 0)
                                <div class="table-responsive p-0">
                                    <div class="table-bordered mb-0 row m-3">
                                        <div class="col">
                                        <span
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Número</span>
                                        </div>
                                        <div class="col">
                                        <span
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Semestre</span>
                                        </div>
                                        <div class="col">
                                        <span
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fecha de Inicio</span>
                                        </div>
                                        <div class="col">
                                        <span
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fecha
                                            de Fin</span>
                                        </div>
                                        <div class="col">
                                        <span
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Estado</span>
                                        </div>
                                    </div>
                                    <div class="table-bordered mb-0 m-3">
                                        <div class="accordion" id="accordionExample">
                                            @foreach ($convocatorias as $convocatoria)
                                                <div class="accordion-item align-items-center">
                                                <span class="accordion-header" id="headingOne">
                                                    <div class="row">
                                                        <div class="col">
                                                            <button
                                                                class="accordion-button collapsed align-middle text-center"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapse{{ $convocatoria->id }}"
                                                                aria-expanded="true"
                                                                aria-controls="collapse{{ $convocatoria->id }}">
                                                            <span class="text-secondary text-xs font-weight-bold">{{
                                                                $convocatoria->numero_convocatoria }}</span>
                                                            </button>
                                                        </div>
                                                        <div class="col">
                                                            <button
                                                                class="accordion-button collapsed align-middle text-center"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapse{{ $convocatoria->id }}"
                                                                aria-expanded="true"
                                                                aria-controls="collapse{{ $convocatoria->id }}">
                                                            <span class="text-secondary text-xs font-weight-bold">0{{
                                                                $convocatoria->periodo->numero }}/{{ $convocatoria->periodo->ano }}</span>
                                                            </button>
                                                        </div>
                                                        <div class="col">
                                                            <button
                                                                class="accordion-button collapsed align-middle text-center"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapse{{ $convocatoria->id }}"
                                                                aria-expanded="true"
                                                                aria-controls="collapse{{ $convocatoria->id }}">
                                                            <span class="text-secondary text-xs font-weight-bold">{{
                                                                $convocatoria->fecha_inicio }}</span>
                                                            </button>
                                                        </div>
                                                        <div class="col">
                                                            <button
                                                                class="accordion-button collapsed align-middle text-center"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapse{{ $convocatoria->id }}"
                                                                aria-expanded="true"
                                                                aria-controls="collapse{{ $convocatoria->id }}">
                                                            <span class="text-secondary text-xs font-weight-bold">{{
                                                                $convocatoria->fecha_fin }}</span>
                                                            </button>
                                                        </div>
                                                        <div class="col">
                                                            <button
                                                                class="accordion-button collapsed align-middle text-center"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapse{{ $convocatoria->id }}"
                                                                aria-expanded="true"
                                                                aria-controls="collapse{{ $convocatoria->id }}">
                                                                <span
                                                                    class="badge badge-sm bg-gradient-{{ $convocatoria->estado ? 'success' : 'warning' }}">
                                                                    {{ $convocatoria->estado ? 'Activo' : 'Inactivo' }}
                                                                </span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </span>
                                                    <div id="collapse{{ $convocatoria->id }}"
                                                         class="accordion-collapse collapse"
                                                         aria-labelledby="headingOne"
                                                         data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            <h6 class="text-center">Materias Ofertadas</h6>
                                                            @if($convocatoria->materiasConvocadas->count() > 0)
                                                                <table
                                                                    class="table table-active align-items-center mb-0">
                                                                    <thead>
                                                                    <tr>
                                                                        <th class="text-uppercase align-middle text-center">
                                                                        <span
                                                                            class="text-dark text-md">Sigla</span>
                                                                        </th>
                                                                        <th class="text-uppercase align-middle text-justify">
                                                                        <span
                                                                            class="text-dark text-md">Nombre</span>
                                                                        </th>
                                                                        <th class="text-uppercase align-middle text-center">
                                                                        <span
                                                                            class="text-dark text-md">Acción</span>
                                                                        </th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    @foreach ($convocatoria->materiasConvocadas as $materiaConvocada)
                                                                        <tr>
                                                                            <td class="align-middle text-center">
                                                                            <span
                                                                                class="text-dark text-md">{{ $materiaConvocada->materia->sigla }}</span>
                                                                            </td>
                                                                            <td class="align-middle text-justify">
                                                                            <span
                                                                                class="text-dark text-md">{{ $materiaConvocada->materia->nombre }}</span>
                                                                            </td>
                                                                            <td class="align-middle text-center">
                                                                                <a rel="tooltip"
                                                                                   class="btn btn-success btn-link"
                                                                                   href="{{ route('convocatorias.materias-convocadas.show', $materiaConvocada->id) }}"
                                                                                   data-original-title="" title="">
                                                                                    Ver
                                                                                    <i class="material-icons">visibility</i>
                                                                                </a>
                                                                                @if(auth()->user()->tipoUsuario->nombre_tipo !== 'Estudiante')
                                                                                    <a rel="tooltip"
                                                                                       class="btn btn-danger btn-link"
                                                                                       href="{{ route('evaluaciones.create', ['materiaConvocadaId' => $materiaConvocada->id]) }}"
                                                                                       data-original-title="" title="">
                                                                                        Asignar Examen
                                                                                        <i class="material-icons">check</i>
                                                                                    </a>
                                                                                @endif
                                                                                @if(auth()->user()->tipoUsuario->nombre_tipo === 'Estudiante')
                                                                                    <a rel="tooltip"
                                                                                       class="btn btn-danger btn-link"
                                                                                       href="{{ route('postulantes.create', ['materiaConvocadaId' => $materiaConvocada->id]) }}"
                                                                                       data-original-title="" title="">
                                                                                        Postular
                                                                                        <i class="material-icons">task</i>
                                                                                    </a>
                                                                                @endif
                                                                            </td>
                                                                        </tr>
                                                                    @endforeach
                                                                    </tbody>
                                                                </table>
                                                            @else
                                                                <div class="alert alert-light text-center">
                                                                    <span class="text-bg-light">Todavía no hay materias ofertadas...</span>
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @else
                                @if(auth()->user()->tipoUsuario->nombre_tipo === 'Estudiante')
                                    <div class="alert alert-light text-center mx-5 my-3">
                                        <span class="text-bg-light">Todavía no se lanzaron convocatorias para este semestre... Revise luego...</span>
                                    </div>
                                @else
                                    <div class="alert alert-light text-center">
                                        <span class="text-bg-light">Todavía no hay convocatorias...</span>
                                    </div>
                                @endif
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <x-plugins></x-plugins>
</x-layout>
