<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage="announcement"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth
            titlePage="Postulante: {{ $postulante->usuario->nombres }} {{ $postulante->usuario->apellidos }}"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">
                                    Postulante: {{ $postulante->usuario->nombres }} {{ $postulante->usuario->apellidos }}</h6>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="row px-5">
                                <div class="col-12 col xl-6">
                                    <div class="card-body px-3 pt-2 pb-0">
                                        <div class="row pb-4">
                                            <div class="col-12">
                                                <h6 class="text-uppercase text-center">
                                                    Postulante: {{ $postulante->usuario->nombres }} {{ $postulante->usuario->apellidos }}
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <h6>
                                                    <span
                                                        class="font-weight-bold">Postulante: {{ $postulante->usuario->nombres }} {{ $postulante->usuario->apellidos }}</span>
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <h6>
                                                    <span
                                                        class="font-weight-bold">Registro: {{ $postulante->usuario->numero_registro }}</span>
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <h6>
                                                    <span class="font-weight-bold">Materia postulada: {{ $postulante->materiaConvocada->materia->sigla }} - {{ $postulante->materiaConvocada->materia->nombre }}</span>
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <h6>
                                                    <span class="font-weight-bold">Convocatoria: {{ $postulante->materiaConvocada->convocatoria->numero_convocatoria }} - {{ $postulante->materiaConvocada->convocatoria->periodo->numero }}/{{ $postulante->materiaConvocada->convocatoria->periodo->ano }}</span>
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <h6>
                                                    <span class="font-weight-bold">
                                                Curriculum Vitae:
                                                    </span>

                                                    <a href="#" class="btn btn-primary mx-4">Ver</a>
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <h6>
                                                    <span class="font-weight-bold">
                                                Carta de Solicitud:
                                                    </span>

                                                    <a href="#" class="btn btn-primary mx-4">Ver</a>
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <h6>
                                                    <span class="font-weight-bold">
                                                Fotocopia de Carnet de Identidad:
                                                    </span>

                                                    <a href="#" class="btn btn-primary mx-4">Ver</a>
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <h6>
                                                    <span class="font-weight-bold">
                                                Formulario:
                                                    </span>

                                                    <a href="{{ route('formularios.show', ['postulanteId' => $postulante->id]) }}" class="btn btn-primary mx-4">Ver</a>
                                                </h6>
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
