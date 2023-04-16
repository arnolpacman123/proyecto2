<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage="announcement"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Convocatoria: {{ $convocatoria->numero_convocatoria }}"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Convocatoria</h6>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="row px-5">
                                <div class="col-12 col xl-6">
                                    <div class="card-body px-3 pt-2 pb-0">
                                        <div class="row">
                                            <div class="col-12">
                                                <h6 class="text-uppercase text-center">
                                                    Información de la convocatoria
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <p class="text-md">
                                                    <span class="font-weight-bold">Número de convocatoria: </span>
                                                    {{ $convocatoria->numero_convocatoria }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <p class="text-md">
                                                    <span class="font-weight-bold">Fecha de inicio: </span>
                                                    {{ $convocatoria->fecha_inicio }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <p class="text-md">
                                                    <span class="font-weight-bold">Fecha de cierre: </span>
                                                    {{ $convocatoria->fecha_fin }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <p class="text-md">
                                                    <span class="font-weight-bold">Estado: </span>
                                                    {{ $convocatoria->estado ? 'Abierta' : 'Cerrada' }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <p class="text-md">
                                                    <span class="font-weight-bold">Descripción: </span>
                                                    {{ $convocatoria->descripcion }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row pb-5">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h6 class="text-uppercase text-center">
                                                            Materias ofertadas
                                                        </h6>
                                                    </div>
                                                    <div class="card-body">
                                                        <table class="table table-hover">
                                                            <thead>
                                                            <tr>
                                                                <th scope="col" class="text-center align-middle">Sigla
                                                                </th>
                                                                <th scope="col" class="text-center align-middle">
                                                                    Nombre
                                                                </th>
                                                                <th scope="col" class="text-center align-middle">
                                                                    Acción
                                                                </th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach ($convocatoria->materiasConvocadas as $materiaConvocada)
                                                                <tr>
                                                                    <td class="text-center align-middle">{{ $materiaConvocada->materia->sigla }}</td>
                                                                    <td class="text-center align-middle">{{ $materiaConvocada->materia->nombre }}</td>
                                                                    <td class="text-center align-middle">
                                                                        <a href="{{ route('postulantes.index', ['convocatoriaId' => $convocatoria->id, 'materiaConvocadaId' => $materiaConvocada->id]) }}"
                                                                           class="btn btn-sm btn-primary">Ver
                                                                            postulantes</a>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                        </table>
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
            </div>
        </div>
    </main>
    <x-plugins></x-plugins>
</x-layout>
