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
                                    Contact
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

                                <x-update-input type="email" name="email" label="Email" value="{{$setting->email}}"/>
                                <x-input type="email" name="email" placeholder="Enner" value="email"  label="email" />
                                <x-input type="text" name="frist_name" placeholder="Enner"  label="email" />
                                <x-input type="text" name="frist_name" placeholder="Enner"  label="email" />
                                <x-image  name='logo' label="Upload Favicon"/>

                                {{-- <x-text-area name="logn_text"/> --}}
                                <x-text-area name="logn_text" value="logn_text" label="Long Text" placeholder="Write Placeholder..."/>
                                <x-update-text-area name="logn_text" value="{{$setting->email}}" label="Update Text Area" placeholder="Write Placeholder..."/>

                                <x-form-submit/>
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
