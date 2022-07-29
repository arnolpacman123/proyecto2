@extends('layouts.backend.app')

@section('title',__('User Reports'))

@push('css')

@endpush

@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>{{ __('Last Registered Users') }}</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a
                            href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }}</a></div>
                    <div class="breadcrumb-item">{{ __('Last Registered Users') }}</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">{{ __('Last Registered Users') }}</h2>
                <p class="section-lead">{{ __('Last Registered Users Section') }}</p>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>{{ __('Last Registered Users') }}</h4>
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
                                            <th>{{ __('Username') }}</th>
                                            <th>{{ __('Email') }}</th>
                                            <th>{{ __('Country') }}</th>
                                            <th>{{ __('Image') }}</th>
                                            <th>{{ __('Status') }}</th>
                                        </tr>
                                        @foreach($users as $key=>$user)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <th><a target="__blank"
                                                       href="{{ route('profile.show',$user->slug) }}">{{ $user->username }}</a>
                                                </th>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->country }}</td>
                                                <td>
                                                    <img src="{{ asset($user->image) }}"
                                                         alt="{{ $user->username }}" width="50px" height="50px">
                                                </td>
                                                @php
                                                    $user_data = json_decode($user->value);
                                                @endphp
                                                <td>
                                                    @if($user_data->status == 'active')
                                                        <div class="badge badge-success">{{ __('Approved') }}</div>
                                                    @else
                                                        <div class="badge badge-danger">{{ __('Pending') }}</div>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                    <div class="f-right">
                                        {{ $users->links() }}
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
            <form action="{{ route('admin.report.user.results') }}" method="POST">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{ __('User Reports') }}</h5>
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
