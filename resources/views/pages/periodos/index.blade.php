<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage="periodos"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Periodos"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Periodos</h6>
                            </div>
                        </div>
                        @if(auth()->user()->tipoUsuario->nombre_tipo !== 'Estudiante')
                            <p class="mt-4 ps-3 text-center">Dé clic o pulse sobre una fila para desplegar las
                                convocatorias</p>
                            @if(auth()->user()->tipoUsuario->nombre_tipo === 'Decano')
                                <div class=" me-3 my-3 text-end">
                                    <a class="btn bg-gradient-dark mb-0" href="{{ route('periodos.create') }}"><i
                                            class="material-icons text-sm">add</i>Crear Nuevo Periodo</a>
                                </div>
                            @endif
                        @endif
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive px-5">
                                <div class="table-bordered mb-0 row m-3">
                                    <div class="col">
                                        <span
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Número</span>
                                    </div>
                                    <div class="col">
                                        <span
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Año</span>
                                    </div>
                                    <div class="col">
                                        <span
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nombre</span>
                                    </div>
                                    <div class="col">
                                        <span
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fecha
                                            de Inicio</span>
                                    </div>
                                    <div class="col">
                                        <span
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fecha
                                            de Fin</span>
                                    </div>
                                    <div class="col">
                                        <span
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Estado
                                            en curso</span>
                                    </div>
                                </div>
                                <div class="table-bordered mb-0 m-3">
                                    <div class="accordion" id="accordionExample">
                                        @foreach ($periodos as $periodo)
                                            <div class="accordion-item align-items-center">
                                            <span class="accordion-header" id="headingOne">
                                                <div class="row">
                                                    <div class="col">
                                                        <button
                                                            class="accordion-button collapsed align-middle text-center"
                                                            type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapse{{ $periodo->id }}"
                                                            aria-expanded="true"
                                                            aria-controls="collapse{{ $periodo->id }}">
                                                            <span class="text-secondary text-xs font-weight-bold">{{
                                                                $periodo->numero }}</span>
                                                        </button>
                                                    </div>
                                                    <div class="col">
                                                        <button
                                                            class="accordion-button collapsed align-middle text-center"
                                                            type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapse{{ $periodo->id }}"
                                                            aria-expanded="true"
                                                            aria-controls="collapse{{ $periodo->id }}">
                                                            <span class="text-secondary text-xs font-weight-bold">{{
                                                                $periodo->ano }}</span>
                                                        </button>
                                                    </div>
                                                    <div class="col">
                                                        <button
                                                            class="accordion-button collapsed align-middle text-center"
                                                            type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapse{{ $periodo->id }}"
                                                            aria-expanded="true"
                                                            aria-controls="collapse{{ $periodo->id }}">
                                                            <span class="text-secondary text-xs font-weight-bold">{{
                                                                $periodo->nombre }}</span>
                                                        </button>
                                                    </div>
                                                    <div class="col">
                                                        <button
                                                            class="accordion-button collapsed align-middle text-center"
                                                            type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapse{{ $periodo->id }}"
                                                            aria-expanded="true"
                                                            aria-controls="collapse{{ $periodo->id }}">
                                                            <span class="text-secondary text-xs font-weight-bold">{{
                                                                $periodo->fecha_inicio }}</span>
                                                        </button>
                                                    </div>
                                                    <div class="col">
                                                        <button
                                                            class="accordion-button collapsed align-middle text-center"
                                                            type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapse{{ $periodo->id }}"
                                                            aria-expanded="true"
                                                            aria-controls="collapse{{ $periodo->id }}">
                                                            <span class="text-secondary text-xs font-weight-bold">{{
                                                                $periodo->fecha_fin }}</span>
                                                        </button>
                                                    </div>
                                                    <div class="col">
                                                        <button
                                                            class="accordion-button collapsed align-middle text-center"
                                                            type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapse{{ $periodo->id }}"
                                                            aria-expanded="true"
                                                            aria-controls="collapse{{ $periodo->id }}">
                                                            <span
                                                                class="badge badge-sm bg-gradient-{{ $periodo->estado_en_curso ? 'success' : 'warning' }}">
                                                                {{ $periodo->estado_en_curso ? 'Activo' : 'Inactivo' }}
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </span>
                                                <div id="collapse{{ $periodo->id }}" class="accordion-collapse collapse"
                                                     aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <h6 class="text-center">Convocatorias</h6>
                                                        <table class="table table-active align-items-center mb-0">
                                                            <thead>
                                                            <tr>
                                                                <th
                                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                                    Número
                                                                </th>
                                                                <th
                                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                                    Semestre
                                                                </th>
                                                                <th
                                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                                    Fecha de Inicio
                                                                </th>
                                                                <th
                                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                                    Fecha de Fin
                                                                </th>
                                                                <th
                                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                                    Estado
                                                                </th>
                                                                <th
                                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                                    Acciones
                                                                </th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach ($periodo->convocatorias as $convocatoria)
                                                                <tr>
                                                                    <td class="align-middle text-center">
                                                                    <span
                                                                        class="text-secondary text-xs font-weight-bold">{{
                                                                        $convocatoria->numero_convocatoria }}</span>
                                                                    </td>
                                                                    <td class="align-middle text-center">
                                                                    <span
                                                                        class="text-secondary text-xs font-weight-bold">{{
                                                                        $convocatoria->semestre }}</span>
                                                                    </td>
                                                                    <td class="align-middle text-center">
                                                                    <span
                                                                        class="text-secondary text-xs font-weight-bold">{{
                                                                        $convocatoria->fecha_inicio }}</span>
                                                                    </td>
                                                                    <td class="align-middle text-center">
                                                                    <span
                                                                        class="text-secondary text-xs font-weight-bold">{{
                                                                        $convocatoria->fecha_fin }}</span>
                                                                    </td>
                                                                    <td class="align-middle text-center text-sm">
                                                                    <span
                                                                        class="badge badge-sm bg-gradient-{{ $convocatoria->estado ? 'success' : 'warning' }}">
                                                                        {{ $convocatoria->estado ? 'Activo' :
                                                                        'Inactivo' }}
                                                                    </span>
                                                                    </td>
                                                                    <td class="align-middle text-center text-sm">
                                                                        <a rel="tooltip"
                                                                           class="btn btn-success btn-link"
                                                                           href="{{ route('convocatorias.show', $convocatoria) }}"
                                                                           data-original-title="" title="">
                                                                            <i class="material-icons">visibility</i>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
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
