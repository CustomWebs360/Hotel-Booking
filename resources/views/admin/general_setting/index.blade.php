@extends('layouts.admin.master')
@section('title')
    {{ config('app.name') }} | General Settings
@endsection

@section('content')
    <div class="app-content content ">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Admin Dashboard</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.dashboard') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active">
                                    General Setting
                                </li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="table-head">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">General Setting</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.general.setting.update', $setting->id)}}" method="post">
                        @csrf
                            <div class="row align-items-md-center mb-2">
                                <x-image type="file" name="logo" label="Logo" required="*"/>

                                <x-image type="file" name="logo" label="Fav Icon" required="*"/>

                                <x-update-input type="email" name='email' value="{{$setting->email_frist}}" label="Email" required="*"/>
                                <x-update-input type="email" name='email' value="{{$setting->email_second}}" label="Email" required="(Optional)"/>

                                <x-update-input type="tel" name='phone_frist' value="{{$setting->phone_frist}}" label="Phone" required="*"/>
                                <x-update-input type="tel" name='phone_second' value="{{$setting->phone_second}}" label="Phone" required="(Optional)"/>

                                <x-update-text-area name="address-frist" value="{{$setting->address_frist}}" label="Address" required="*"/>
                                <x-update-text-area name="address-second" value="{{$setting->address_second}}" label="Address" required="(Optional)"/>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
        {{-- @error('search')
                    <i class="text-danger" data-feather='alert-circle'></i>
                    <span class="text-danger">{{ $message }}</span>
            @enderror --}}
