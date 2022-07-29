@php
    $option = App\Option::where('key','site_value')->first();
    $site_value = json_decode($option->value);
@endphp
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte de Usuarios</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset($site_value->favicon) }}">
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/font.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/bootstrap.min.css') }}">
    @stack('css')
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/components.css') }}">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="mt-3 mb-3">Reporte de Usuarios desde {{ $start_date }} hasta {{ $end_date }}</h1>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Rol</th>
                            <th>País Natal</th>
                            <th>Foto</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->first_name . " " . $user->last_name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role->name == 'Author' ? 'Usuario' : $user->role->name }}</td>
                                <td>{{ $user->country }}</td>
                                <td>
                                    <img src="{{ asset($user->image) }}"
                                         alt="{{ $user->first_name . " " . $user->last_name }}"
                                         class="img-fluid" width="100">
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
