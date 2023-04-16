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
                                                        class="font-weight-bold">Materia: {{ $postulante->materiaConvocada->materia->sigla }} - {{ $postulante->materiaConvocada->materia->nombre }}</span>
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <form method='POST'
                                                  action='{{ route('formularios.update', ['postulanteId' => $postulante->id]) }}'>
                                                @csrf
                                                @method('PUT')
                                                <div class="row">
                                                    <div class="mb-3 col-md-6">
                                                        <label for="nota_inicial" class="form-label">Nota
                                                            Inicial</label>
                                                        <input id="nota_inicial" type="text" name="nota_inicial"
                                                               class="form-control border border-2 p-2"
                                                               value='{{ old('nota_inicial', $postulante->formularioRelation->nota_inicial) }}'>
                                                        @if($errors->has('nota_inicial'))
                                                            @foreach($errors->get('nota_inicial') as $error)
                                                                <p class='text-danger inputerror'>{{ $error }} </p>
                                                            @endforeach
                                                        @endif
                                                    </div>

                                                    <div class="mb-3 col-md-6">
                                                        <label for="nota_docente" class="form-label">Nota
                                                            Docente</label>
                                                        <input id="nota_docente" type="text" name="nota_docente"
                                                               class="form-control border border-2 p-2"
                                                               value='{{ old('nota_docente', $postulante->formularioRelation->nota_docente) }}'>
                                                        @if($errors->has('nota_docente'))
                                                            @foreach($errors->get('nota_docente') as $error)
                                                                <p class='text-danger inputerror'>{{ $error }} </p>
                                                            @endforeach
                                                        @endif
                                                    </div>

                                                    <div class="mb-3 col-md-6">
                                                        <label for="nota_final" class="form-label">Nota Final</label>
                                                        <input id="nota_final" type="text" name="nota_final"
                                                               class="form-control border border-2 p-2"
                                                               value='{{ old('nota_final', $postulante->formularioRelation->nota_final) }}'>
                                                        @if($errors->has('nota_final'))
                                                            @foreach($errors->get('nota_final') as $error)
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-layout>
