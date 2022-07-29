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
            <h1 class="mt-3 mb-3">Reporte de Vídeos desde {{ $start_date }} hasta {{ $end_date }}</h1>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped">
                    <tr>
                        <th>{{ __('Id') }}</th>
                        <th>{{ __('Title') }}</th>
                        <th>{{ __('User Who Posted') }}</th>
                        <th>{{ __('Status') }}</th>
                        <th>{{ __('Views') }}</th>
                        <th>{{ __('Country')  }}</th>
                        <th>{{ __('Publication Date') }}</th>
                    </tr>
                    @foreach($videos as $key=>$video)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <th><a target="__blank"
                                   href="{{ route('video.show',$video->slug) }}">{{ $video->title }}</a>
                            </th>
                            <td>
                                <a href="{{ route('profile.show',$video->user->slug) }}">{{ $video->user->first_name . " " . $video->user->last_name }}</a>
                            </td>
                            <td>
                                @if($video->status == 'public')
                                    <span class="badge badge-success">{{ __('Public Video') }}</span>
                                @else
                                    <span class="badge badge-danger">{{ __('Private Video') }}</span>
                            @endif
                            <td>{{ $video->view }}</td>
                            <td>{{ $video->country }}</td>
                            <td>{{ $video->created_at }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>
