@extends('layouts.main')

@section('title', 'User')

@section('breadcump')
    <div class="col-sm-6">
        <h1 class="m-0">{{ __('User') }}</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('backend.dashboard.index') }}">{{ __('Home') }}</a></li>
            <li class="breadcrumb-item">{{ __('User') }}</li>
            <li class="breadcrumb-item active">{{ __('Detail') }}</li>
        </ol>
    </div>
@endsection

@section('main')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    {{ __('User details') }}
                </h3>
            </div>
            <div class="card-body">
                <div class="text-right mb-3">
                    <a href="{{ route('backend.users.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left mr-2"></i>
                        {{ __('Return') }}
                    </a>
                </div>
                <div class="row">
                    <div class="col-md-4 text-center">
                        <img src="{{ asset('storage') . "/" . $user->image }}" width="200" alt="img" class="img-thumbnail">
                        <table class="table table-bordered table-hover text-left mt-3">
                            <tr>
                                <th>{{ __('Email') }}</th>
                                <td>{{ $user->email }}</td>
                            </tr>
                            <tr>
                                <th>{{ __('Phone Number') }}</th>
                                <td>{{ $user->phone_number }}</td>
                            </tr>
                            <tr>
                                <th>{{ __('Date created') }}</th>
                                <td>{{ $user->created_at->diffForHumans() }}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-8">
                        <table class="table table-hover table-bordered">
                            <tr>
                                <th>{{ __('Nama') }}</th>
                                <td>{{ $user->name }}</td>
                            </tr>
                            <tr>
                                <th>{{ __('Role') }}</th>
                                <td>
                                    @foreach ($user->roles as $user_role)
                                    <span class="badge badge-info">{{ $user_role->name }}</span>
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <th>{{ __('Address') }}</th>
                                <td>{{ $user->address }}</td>
                            </tr>
                            <tr>
                                <th>{{ __('Birth Place') }}</th>
                                <td>{{ $user->birth_place }}</td>
                            </tr>
                            <tr>
                                <th>{{ __('Birthday') }}</th>
                                <td>{{ $user->birth_date }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
