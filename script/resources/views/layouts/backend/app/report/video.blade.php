@extends('layouts.backend.app')

@section('title',__('Video Reports'))

@push('css')

@endpush

@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>{{ __('Last Registered Videos') }}</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a
                            href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }}</a></div>
                    <div class="breadcrumb-item">{{ __('Last Registered Users') }}</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">{{ __('Last Registered Videos') }}</h2>
                <p class="section-lead">{{ __('Last Registered Videos Section') }}</p>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>{{ __('Last Registered Videos') }}</h4>
                                <div class="card-header-form">
                                    <form>
                                        <div class="input-group">
                                            <input type="text" id="data_search" class="form-control"
                                                   placeholder="Search">
                                            <div class="input-group-btn">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <button class="ml-3 btn btn-primary" data-toggle="modal"
                                        data-target="#exampleModal">{{ __('Generate Report') }}</button>
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
                                    <div class="f-right">
                                        {{ $videos->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="{{ route('admin.report.video.results') }}" method="POST">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{ __('Video Reports') }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="start_date">{{ __('Start Date') }}</label>
                            <input type="date" class="form-control" name="start_date" id="start_date"
                                   value="{{ date('Y-m-d') }}">
                        </div>
                        <div class="form-group">
                            <label for="end_date">{{ __('End Date') }}</label>
                            <input type="date" class="form-control" name="end_date" id="end_date"
                                   value="{{ date('Y-m-d') }}">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Close')  }}</button>
                        <button type="submit" class="btn btn-primary">{{ __('Generate and Download') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
