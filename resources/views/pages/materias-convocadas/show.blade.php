<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage="announcement"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth
            titlePage="Materia Ofertada: {{ $materiaConvocada->materia->nombre }}"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Materia Ofertada</h6>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="row px-5">
                                <div class="col-12 col xl-6">
                                    <div class="card-body px-3 pt-2 pb-0">
                                        <div class="row pb-4">
                                            <div class="col-12">
                                                <h6 class="text-uppercase text-center">
                                                    Convocatoria: {{ $materiaConvocada->convocatoria->numero_convocatoria }}
                                                    - {{ $materiaConvocada->convocatoria->periodo->numero }}
                                                    /{{ $materiaConvocada->convocatoria->periodo->ano }}
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <h6>
                                                    <span class="font-weight-bold">Materia Ofertada:
{{ $materiaConvocada->materia->sigla }}
                                                    - {{ $materiaConvocada->materia->nombre }}</span>
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <h6>
                                                    <span class="font-weight-bold">Número de Convocatoria:
{{ $materiaConvocada->convocatoria->numero_convocatoria }}</span>
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <h6>
                                                    <span class="font-weight-bold">Fecha de Inicio:
{{ $materiaConvocada->convocatoria->fecha_inicio }}</span>
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <h6>
                                                    <span
                                                        class="font-weight-bold">Fecha de Cierre: {{ $materiaConvocada->convocatoria->fecha_fin }}</span>
                                                </h6>
                                            </div>
                                        </div>
                                        @if($materiaConvocada->evaluacion)
                                            <div class="row">
                                                <div class="col-12">
                                                    <h6>
                                                    <span
                                                        class="font-weight-bold">Fecha del Examen: {{ $materiaConvocada->evaluacion->fecha }}</span>
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <h6>
                                                    <span
                                                        class="font-weight-bold">Hora del Examen: {{ $materiaConvocada->evaluacion->hora }}</span>
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <h6>
                                                    <span
                                                        class="font-weight-bold">Lugar del Examen: {{ $materiaConvocada->evaluacion->lugar }}</span>
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <h6>
                                                    <span
                                                        class="font-weight-bold">Docente: {{ $materiaConvocada->evaluacion->docente->nombres }} {{ $materiaConvocada->evaluacion->docente->apellidos }}</span>
                                                    </h6>
                                                </div>
                                            </div>
                                        @endif
                                        <div class="row pb-5">
                                            <div class="col-12">
                                                <h6 class="text-uppercase text-center">
                                                    Postulantes
                                                </h6>
                                                @if($materiaConvocada->postulantes->count() > 0)
                                                    <div class="card-body">
                                                        <table class="table table-hover">
                                                            <thead>
                                                            <tr>
                                                                <th scope="col" class="text-center align-middle">
                                                                    Nombres
                                                                </th>
                                                                <th scope="col" class="text-center align-middle">
                                                                    Apellidos
                                                                </th>
                                                                <th scope="col" class="text-center align-middle">Número
                                                                    de Registro
                                                                </th>
                                                                <th scope="col" class="text-center">Nota Final</th>
                                                                <th scope="col" class="text-center align-middle">
                                                                    Acciones
                                                                </th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach ($materiaConvocada->postulantes as $postulante)
                                                                <tr>
                                                                    <td class="text-center align-middle">{{ $postulante->usuario->nombres }}</td>
                                                                    <td class="text-center align-middle">{{ $postulante->usuario->apellidos }}</td>
                                                                    <td class="text-center align-middle">{{ $postulante->usuario->numero_registro }}</td>
                                                                    <td class="text-center align-middle">{{ $postulante->formularioRelation->nota_final }}</td>
                                                                    <td class="text-center align-middle">
                                                                        <a rel="tooltip"
                                                                           class="btn btn-success btn-link"
                                                                           href="{{ route('postulantes.show', $postulante->id) }}"
                                                                           data-original-title="" title="">
                                                                            Ver
                                                                            <i class="material-icons">visibility</i>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    @php
                                                        $postulanteConMayorNota = $materiaConvocada->postulantes->sortByDesc('formularioRelation.nota_final')->first();
                                                    @endphp
                                                    <div class="row">
                                                        <div class="col-12 mt-3">
                                                            <h6 class="text-uppercase text-center">
                                                                Asignar Carga Horaria al Postulante con Mayor
                                                                Nota: {{ $postulanteConMayorNota->usuario->nombres }} {{ $postulanteConMayorNota->usuario->apellidos }}
                                                                con
                                                                nota {{ $postulanteConMayorNota->formularioRelation->nota_final }}
                                                            </h6>
                                                        </div>
                                                        <div class="col-12 align-middle text-center mt-3">
                                                            <a rel="tooltip"
                                                               class="btn btn-danger btn-link"
                                                               href="{{ route('carga-horaria.create', ['postulanteId' => $postulante->id]) }}"
                                                               data-original-title="" title="">
                                                                Asignar Cargar Horaria
                                                                <i class="material-icons">check</i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                @else
                                                    <div class="alert alert-light text-center mx-2 mt-3 mb-0 p-4">
                                                        <span class="text-bg-light">Todavía no se registraron postulantes</span>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
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
