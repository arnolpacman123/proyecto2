<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    @push('external-libraries')
{{--        <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet"/>--}}
{{--        <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>--}}
{{--        <meta name="csrf-token" content="{{ csrf_token() }}" />--}}
    @endpush
    <x-navbars.sidebar activePage="convocatorias"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Registrar postulante"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white ps-3">Registrar postulante a la
                                    materia: {{ $materiaConvocada->materia->sigla }}
                                    - {{ $materiaConvocada->materia->nombre }}</h6>
                            </div>
                        </div>
                        <div class="card-body pb-2 mt-4">
                            <div class="card card-plain h-100">
                                <div class="card-header pb-0 p-3">
                                    <div class="row">
                                        <div class="col-md-8 d-flex align-items-center">
                                            <h6 class="mb-3">Rellene los datos para postular a la
                                                materia: {{ $materiaConvocada->materia->sigla }}
                                                - {{ $materiaConvocada->materia->nombre }}</h6>
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
                                    <form method='POST' action='{{ route('postulantes.store', $materiaConvocada->id) }}'
                                          enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label for="curriculum_vitae" class="form-label">Curriculum
                                                    Vitae</label>
                                                <input type="file" id="curriculum_vitae"
                                                       name="curriculum_vitae"
                                                       class="form-control border border-2 p-2"
                                                       value="{{ old('curriculum_vitae') }}">
                                                @if($errors->has('curriculum_vitae'))
                                                    @foreach($errors->get('curriculum_vitae') as $error)
                                                        <p class='text-danger inputerror'>{{ $error }} </p>
                                                    @endforeach
                                                @endif
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="carta_solicitud" class="form-label">Carta de
                                                    Solicitud</label>
                                                <input type="file" id="carta_solicitud" name="carta_solicitud"
                                                       class="form-control border border-2 p-2"
                                                       value="{{ old('carta_solicitud') }}">
                                                @if($errors->has('carta_solicitud'))
                                                    @foreach($errors->get('carta_solicitud') as $error)
                                                        <p class='text-danger inputerror'>{{ $error }} </p>
                                                    @endforeach
                                                @endif
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="fotocopia_carnet_identidad" class="form-label">Fotocopia del
                                                    Carnet de Identidad</label>
                                                <input type="file" id="fotocopia_carnet_identidad"
                                                       name="fotocopia_carnet_identidad"
                                                       class="form-control border border-2 p-2"
                                                       value="{{ old('fotocopia_carnet_identidad') }}">
                                                @if($errors->has('fotocopia_carnet_identidad'))
                                                    @foreach($errors->get('fotocopia_carnet_identidad') as $error)
                                                        <p class='text-danger inputerror'>{{ $error }} </p>
                                                    @endforeach
                                                @endif
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="avance_academico" class="form-label">Avance
                                                    Académico</label>
                                                <input type="file" id="avance_academico" name="avance_academico"
                                                       class="form-control border border-2 p-2"
                                                       value="{{ old('avance_academico') }}">
                                                @if($errors->has('avance_academico'))
                                                    @foreach($errors->get('avance_academico') as $error)
                                                        <p class='text-danger inputerror'>{{ $error }} </p>
                                                    @endforeach
                                                @endif
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="formulario" class="form-label">Formulario</label>
                                                <input type="file" id="formulario" name="formulario"
                                                       class="form-control border border-2 p-2"
                                                       value="{{ old('formulario') }}">
                                                @if($errors->has('formulario'))
                                                    @foreach($errors->get('formulario') as $error)
                                                        <p class='text-danger inputerror'>{{ $error }} </p>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                        <div class="align-middle text-center m-4">
                                            <button type="submit" class="btn btn-lg bg-gradient-dark">Postular a la
                                                materia
                                            </button>
                                        </div>
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
{{--        <script>--}}
{{--            // ejecutar cuando el documento este listo con javascript vanilla--}}
{{--            document.addEventListener('DOMContentLoaded', function () {--}}

{{--                const curriculumVitaeInput = document.querySelector('#curriculum_vitae');--}}
{{--                const cartaSolicitudInput = document.querySelector('#carta_solicitud');--}}
{{--                const fotocopiaCarnetIdentidadInput = document.querySelector('#fotocopia_carnet_identidad');--}}
{{--                const avanceAcademicoInput = document.querySelector('#avance_academico');--}}
{{--                const formularioInput = document.querySelector('#formulario');--}}

{{--                console.log('{{ csrf_token() }}');--}}

{{--                FilePond.create(curriculumVitaeInput, {--}}
{{--                    allowMultiple: false,--}}
{{--                    acceptedFileTypes: ['application/pdf'],--}}
{{--                    allowFileTypeValidation: true,--}}
{{--                    labelMaxFileSizeExceeded: 'El archivo es demasiado grande',--}}
{{--                    labelMaxFileSize: 'El tamaño máximo del archivo es {filesize}',--}}
{{--                    labelFileTypeNotAllowed: 'El tipo de archivo no es válido',--}}
{{--                    labelIdle: 'Arrastra tu Curriculum Vitae o <span class="filepond--label-action"> Busca </span>',--}}
{{--                    server: {--}}
{{--                        url: '',--}}
{{--                        process: {--}}
{{--                            url: '{{ route('postulantes.storeCurriculumVitae') }}',--}}
{{--                            method: 'POST',--}}
{{--                            headers: {--}}
{{--                                'X-CSRF-TOKEN': '{{ csrf_token() }}'--}}
{{--                            },--}}
{{--                            onload: (response) => {--}}
{{--                                console.log(response);--}}
{{--                            },--}}
{{--                            onerror: (response) => {--}}
{{--                                console.log(response);--}}
{{--                            },--}}
{{--                            ondata: (formData) => {--}}
{{--                                formData.append('curriculum_vitae', curriculumVitaeInput.files[0]);--}}
{{--                                return formData;--}}
{{--                            }--}}
{{--                        },--}}
{{--                        revert: {--}}
{{--                            url: '{{ route('postulantes.destroyCurriculumVitae') }}',--}}
{{--                            method: 'DELETE',--}}
{{--                            headers: {--}}
{{--                                'X-CSRF-TOKEN': '{{ csrf_token() }}'--}}
{{--                            },--}}
{{--                            onload: (response) => {--}}
{{--                                console.log(response);--}}
{{--                            },--}}
{{--                            onerror: (response) => {--}}
{{--                                console.log(response);--}}
{{--                            },--}}
{{--                            ondata: (formData) => {--}}
{{--                                formData.append('curriculum_vitae', curriculumVitaeInput.files[0]);--}}
{{--                                return formData;--}}
{{--                            }--}}
{{--                        },--}}
{{--                    },--}}
{{--                });--}}

{{--                FilePond.create(cartaSolicitudInput, {--}}
{{--                    allowMultiple: false,--}}
{{--                    acceptedFileTypes: ['application/pdf'],--}}
{{--                    allowFileTypeValidation: true,--}}
{{--                    labelMaxFileSizeExceeded: 'El archivo es demasiado grande',--}}
{{--                    labelMaxFileSize: 'El tamaño máximo del archivo es {filesize}',--}}
{{--                    labelFileTypeNotAllowed: 'El tipo de archivo no es válido',--}}
{{--                    labelIdle: 'Arrastra tu Carta de Solicitud o <span class="filepond--label-action"> Busca </span>',--}}
{{--                    server: {--}}
{{--                        url: '',--}}
{{--                        process: {--}}
{{--                            url: '{{ route('postulantes.storeCartaSolicitud') }}',--}}
{{--                            method: 'POST',--}}
{{--                            headers: {--}}
{{--                                'X-CSRF-TOKEN': '{{ csrf_token() }}'--}}
{{--                            },--}}
{{--                            onload: (response) => {--}}
{{--                                console.log(response);--}}
{{--                            },--}}
{{--                            onerror: (response) => {--}}
{{--                                console.log(response);--}}
{{--                            },--}}
{{--                            ondata: (formData) => {--}}
{{--                                formData.append('carta_solicitud', cartaSolicitudInput.files[0]);--}}
{{--                                return formData;--}}
{{--                            }--}}
{{--                        },--}}
{{--                        revert: {--}}
{{--                            url: '{{ route('postulantes.destroyCartaSolicitud') }}',--}}
{{--                            method: 'DELETE',--}}
{{--                            headers: {--}}
{{--                                'X-CSRF-TOKEN': '{{ csrf_token() }}',--}}
{{--                            },--}}
{{--                            onload: (response) => {--}}
{{--                                console.log(response);--}}
{{--                            },--}}
{{--                            onerror: (response) => {--}}
{{--                                console.log(response);--}}
{{--                            },--}}
{{--                            ondata: (formData) => {--}}
{{--                                formData.append('carta_solicitud', cartaSolicitudInput.files[0]);--}}
{{--                                return formData;--}}
{{--                            }--}}
{{--                        },--}}
{{--                    },--}}
{{--                });--}}

{{--                FilePond.create(fotocopiaCarnetIdentidadInput, {--}}
{{--                    allowMultiple: false,--}}
{{--                    acceptedFileTypes: ['application/pdf'],--}}
{{--                    allowFileTypeValidation: true,--}}
{{--                    labelMaxFileSizeExceeded: 'El archivo es demasiado grande',--}}
{{--                    labelMaxFileSize: 'El tamaño máximo del archivo es {filesize}',--}}
{{--                    labelFileTypeNotAllowed: 'El tipo de archivo no es válido',--}}
{{--                    labelIdle: 'Arrastra tu Fotocopia del Carnet de Identidad o <span class="filepond--label-action"> Busca </span>',--}}
{{--                    server: {--}}
{{--                        url: '',--}}
{{--                        process: {--}}
{{--                            url: '{{ route('postulantes.storeFotocopiaCarnetIdentidad') }}',--}}
{{--                            method: 'POST',--}}
{{--                            headers: {--}}
{{--                                'X-CSRF-TOKEN': '{{ csrf_token() }}'--}}
{{--                            },--}}
{{--                            onload: (response) => {--}}
{{--                                console.log(response);--}}
{{--                            },--}}
{{--                            onerror: (response) => {--}}
{{--                                console.log(response);--}}
{{--                            },--}}
{{--                            ondata: (formData) => {--}}
{{--                                formData.append('fotocopia_carnet_identidad', fotocopiaCarnetIdentidadInput.files[0]);--}}
{{--                                return formData;--}}
{{--                            }--}}
{{--                        },--}}
{{--                        revert: {--}}
{{--                            url: '{{ route('postulantes.destroyFotocopiaCarnetIdentidad') }}',--}}
{{--                            method: 'DELETE',--}}
{{--                            headers: {--}}
{{--                                'X-CSRF-TOKEN': '{{ csrf_token() }}'--}}
{{--                            },--}}
{{--                            onload: (response) => {--}}
{{--                                console.log(response);--}}
{{--                            },--}}
{{--                            onerror: (response) => {--}}
{{--                                console.log(response);--}}
{{--                            },--}}
{{--                            ondata: (formData) => {--}}
{{--                                formData.append('fotocopia_carnet_identidad', fotocopiaCarnetIdentidadInput.files[0]);--}}
{{--                                return formData;--}}
{{--                            }--}}
{{--                        }--}}
{{--                    }--}}
{{--                });--}}

{{--                FilePond.create(avanceAcademicoInput, {--}}
{{--                    allowMultiple: false,--}}
{{--                    acceptedFileTypes: ['application/pdf'],--}}
{{--                    allowFileTypeValidation: true,--}}
{{--                    labelMaxFileSizeExceeded: 'El archivo es demasiado grande',--}}
{{--                    labelMaxFileSize: 'El tamaño máximo del archivo es {filesize}',--}}
{{--                    labelFileTypeNotAllowed: 'El tipo de archivo no es válido',--}}
{{--                    labelIdle: 'Arrastra tu Avance Académico o <span class="filepond--label-action"> Busca </span>',--}}
{{--                    server: {--}}
{{--                        url: '',--}}
{{--                        process: {--}}
{{--                            url: '{{ route('postulantes.storeAvanceAcademico') }}',--}}
{{--                            method: 'POST',--}}
{{--                            headers: {--}}
{{--                                'X-CSRF-TOKEN': '{{ csrf_token() }}'--}}
{{--                            },--}}
{{--                            onload: (response) => {--}}
{{--                                console.log(response);--}}
{{--                            },--}}
{{--                            onerror: (response) => {--}}
{{--                                console.log(response);--}}
{{--                            },--}}
{{--                            ondata: (formData) => {--}}
{{--                                formData.append('avance_academico', avanceAcademicoInput.files[0]);--}}
{{--                                return formData;--}}
{{--                            }--}}
{{--                        },--}}
{{--                        revert: {--}}
{{--                            url: '{{ route('postulantes.destroyAvanceAcademico') }}',--}}
{{--                            method: 'DELETE',--}}
{{--                            headers: {--}}
{{--                                'X-CSRF-TOKEN': '{{ csrf_token() }}'--}}
{{--                            },--}}
{{--                            onload: (response) => {--}}
{{--                                console.log(response);--}}
{{--                            },--}}
{{--                            onerror: (response) => {--}}
{{--                                console.log(response);--}}
{{--                            },--}}
{{--                            ondata: (formData) => {--}}
{{--                                formData.append('avance_academico', avanceAcademicoInput.files[0]);--}}
{{--                                return formData;--}}
{{--                            }--}}
{{--                        }--}}
{{--                    }--}}
{{--                });--}}

{{--                FilePond.create(formularioInput, {--}}
{{--                    allowMultiple: false,--}}
{{--                    acceptedFileTypes: ['application/pdf'],--}}
{{--                    allowFileTypeValidation: true,--}}
{{--                    labelMaxFileSizeExceeded: 'El archivo es demasiado grande',--}}
{{--                    labelMaxFileSize: 'El tamaño máximo del archivo es {filesize}',--}}
{{--                    labelFileTypeNotAllowed: 'El tipo de archivo no es válido',--}}
{{--                    labelIdle: 'Arrastra tu Formulario o <span class="filepond--label-action"> Busca </span>',--}}
{{--                    server: {--}}
{{--                        url: '',--}}
{{--                        process: {--}}
{{--                            url: '{{ route('postulantes.storeFormulario') }}',--}}
{{--                            method: 'POST',--}}
{{--                            headers: {--}}
{{--                                'X-CSRF-TOKEN': '{{ csrf_token() }}'--}}
{{--                            },--}}
{{--                            onload: (response) => {--}}
{{--                                console.log(response);--}}
{{--                            },--}}
{{--                            onerror: (response) => {--}}
{{--                                console.log(response);--}}
{{--                            },--}}
{{--                            ondata: (formData) => {--}}
{{--                                formData.append('formulario', formularioInput.files[0]);--}}
{{--                                return formData;--}}
{{--                            }--}}
{{--                        },--}}
{{--                        revert: {--}}
{{--                            url: '{{ route('postulantes.destroyFormulario') }}',--}}
{{--                            method: 'DELETE',--}}
{{--                            headers: {--}}
{{--                                'X-CSRF-TOKEN': '{{ csrf_token() }}'--}}
{{--                            },--}}
{{--                            onload: (response) => {--}}
{{--                                console.log(response);--}}
{{--                            },--}}
{{--                            onerror: (response) => {--}}
{{--                                console.log(response);--}}
{{--                            },--}}
{{--                            ondata: (formData) => {--}}
{{--                                formData.append('formulario', formularioInput.files[0]);--}}
{{--                                return formData;--}}
{{--                            }--}}
{{--                        }--}}
{{--                    }--}}
{{--                });--}}
{{--            });--}}
{{--        </script>--}}
    @endpush
</x-layout>
