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
        <li class="breadcrumb-item active">{{ __('Add') }}</li>
    </ol>
</div>
@endsection

@section('main')
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    {{ __('Form add user data') }}
                </h3>
            </div>
            <div class="card-body">
                <div class="text-right mb-3">
                    <a href="{{ route('backend.users.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left mr-2"></i>
                        {{ __('Return') }}
                    </a>
                </div>
                <div class="alert alert-info">{{ __('Password secara default akan dibuat sama dengan email') }}</div>
                <form action="{{ route('backend.users.store') }}" method="POST">
                    @csrf
                    @include('backend.user._form')
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save mr-2"></i>
                            {{ __('Save') }}
                        </button>
                        <a href="{{ route('backend.users.index') }}" class="btn btn-secondary">
                            <i class="fas fa-times mr-2"></i>
                            {{ __('Cancel') }}
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
