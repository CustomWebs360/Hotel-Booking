@extends('layouts.admin.master')
@section('title')
{{ config('app.name') }} | Contact
@endsection
@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/app-assets/css/core/menu/menu-types/vertical-menu.css">
<link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/app-assets/css/plugins/forms/pickers/form-flat-pickr.css">
<link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/app-assets/css/plugins/forms/pickers/form-pickadate.css">
@endsection

@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
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
                        <h4 class="card-title">Contacts <span class="badge" style="background:#8c83f2">10</span></h4>
                        <div class="text-rigth col-md-auto form-group">
                            <a type="button" class="btn btn-success waves-effect">
                                <i data-feather='external-link'></i>
                                <span>Export All</span>
                            </a>
                            <a type="button" class="btn btn-warning waves-effect">
                                <i data-feather='file-plus'></i>
                                <span>Import</span>
                            </a>

                            <div class="btn-group">
                                <button class="btn btn-danger waves-effect">Action</button>
                                <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split waves-effect" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" style="">
                                    <a class="dropdown-item btn" href="javascript:void(0);"><i data-feather='trash-2'></i> Bulk Delete</a>
                                    <a class="dropdown-item btn" href="javascript:void(0);"> <i data-feather='external-link'></i> Bulk Export</a>
                                </div>
                            </div>
                            <a type="button" class="btn btn-primary waves-effect">
                                <i data-feather='plus-square'></i>
                                <span> Add New</span>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        {{-- date filter --}}
                        <div class="row">
                            <div class="col-md form-group">
                                <label for="fp-default">Start Date</label>
                                <input type="text" id="fp-default" class="form-control flatpickr-basic" placeholder="YYYY-MM-DD" />
                            </div>
                            <div class="col-md form-group">
                                <label for="fp-default">End Date</label>
                                <input type="text" id="fp-default" class="form-control flatpickr-basic" placeholder="YYYY-MM-DD" />
                            </div>
                            <div class="col-md-auto form-group">
                                <a href="" class="btn btn-primary" style="    margin-bottom: -30%;">Filter</a>
                                <a href="" class="btn btn-danger" style="    margin-bottom: -30%;">Clear</a>
                            </div>
                        </div>

                        {{-- search form  --}}
                        <div class="row align-items-md-center mb-2">
                            <div class="col-md-auto">
                                <div class="input-group">
                                    <div class="input-group">
                                        <button type="button" class="btn btn-outline-primary  dropdown-toggle waves-effect show" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Show
                                        </button>
                                        <div class="dropdown-menu text-center" style="">
                                            <a class="dropdown-item" href="javascript:void(0);">20</a>
                                            <a class="dropdown-item" href="javascript:void(0);">40</a>
                                            <a class="dropdown-item" href="javascript:void(0);">60</a>
                                            <div role="separator" class="dropdown-divider">80</div>
                                            <a class="dropdown-item" href="javascript:void(0);">All</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md">
                                <div class="form-group mb-md-0">
                                    <div class="input-group">
                                        <input type="search" class="form-control table_search" placeholder="Search Here">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                                    <circle cx="11" cy="11" r="8"></circle>
                                                    <line x1="21" y1="21" x2="16.65" y2="16.65">
                                                    </line>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>
                                            <div class="custom-control custom-control-white custom-checkbox">
                                                <input type="checkbox" class="custom-control-input select_all" id="colorCheck1">
                                                <label class="custom-control-label" for="colorCheck1"></label>
                                            </div>
                                        </th>
                                        <th>Client</th>
                                        <th>Client</th>
                                        <th>Users</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-control-white custom-checkbox">
                                                <input type="checkbox" class="custom-control-input one_select" id="colorCheck">
                                                <label class="custom-control-label" for="colorCheck"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <img src="../../../app-assets/images/icons/angular.svg" class="mr-75" height="20" width="20" alt="Angular">
                                            <span class="font-weight-bold">Angular Project</span>
                                        </td>
                                        <td>Peter Charls</td>
                                        <td>
                                            <div class="avatar-group">
                                                <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="top" title="" class="avatar pull-up my-0" data-original-title="Lilian Nenez">
                                                    <img src="../../../app-assets/images/portrait/small/avatar-s-5.jpg" alt="Avatar" height="26" width="26">
                                                </div>
                                                <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="top" title="" class="avatar pull-up my-0" data-original-title="Alberto Glotzbach">
                                                    <img src="../../../app-assets/images/portrait/small/avatar-s-6.jpg" alt="Avatar" height="26" width="26">
                                                </div>
                                                <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="top" title="" class="avatar pull-up my-0" data-original-title="Alberto Glotzbach">
                                                    <img src="../../../app-assets/images/portrait/small/avatar-s-7.jpg" alt="Avatar" height="26" width="26">
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-pill badge-light-primary mr-1">Active</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light" data-toggle="dropdown">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                                        <circle cx="12" cy="12" r="1">
                                                        </circle>
                                                        <circle cx="12" cy="5" r="1">
                                                        </circle>
                                                        <circle cx="12" cy="19" r="1">
                                                        </circle>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0);">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 mr-50">
                                                            <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                            </path>
                                                        </svg>
                                                        <span>Edit</span>
                                                    </a>
                                                    <a class="dropdown-item" href="javascript:void(0);">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash mr-50">
                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                            </path>
                                                        </svg>
                                                        <span>Delete</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection
