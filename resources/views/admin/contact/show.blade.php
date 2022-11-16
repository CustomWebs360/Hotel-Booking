@extends('layouts.admin.master')
@section('title')
    {{ config('app.name') }} | {{ $contact->name }}
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
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.contact.index') }}">Contact</a>
                                </li>
                                <li class="breadcrumb-item active">
                                    {{ $contact->name }}
                                </li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header email-detail-head">
                    <div class="user-details d-flex justify-content-between align-items-center flex-wrap">

                        <div class="mail-items">
                            <h5 class="mb-0">{{ $contact->name }}</h5>
                            <div class="email-info-dropup dropdown">
                                <a href="mailto:v">{{ $contact->email }}</a>
                                <div class="dropdown-menu" aria-labelledby="card_top01">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mail-meta-item d-flex align-items-center">
                        <small
                            class="mail-date-time text-muted">{{ \Carbon\Carbon::parse($contact->created_at)->format('d M y, h::m') }}</small>
                        <div class="dropdown ml-50">
                            {{-- <div role="button" class="dropdown-toggle hide-arrow" id="email_more" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-more-vertical font-medium-2">
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="12" cy="5" r="1"></circle>
                                    <circle cx="12" cy="19" r="1"></circle>
                                </svg>
                            </div> --}}
                            {{-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="email_more" style="">
                                <div class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="14"
                                        height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-corner-up-left mr-50">
                                        <polyline points="9 14 4 9 9 4"></polyline>
                                        <path d="M20 20v-7a4 4 0 0 0-4-4H4"></path>
                                    </svg>Reply</div>
                                <div class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="14"
                                        height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-corner-up-right mr-50">
                                        <polyline points="15 14 20 9 15 4"></polyline>
                                        <path d="M4 20v-7a4 4 0 0 1 4-4h12"></path>
                                    </svg>Forward</div>
                                <div class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="14"
                                        height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-trash-2 mr-50">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path
                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                        </path>
                                        <line x1="10" y1="11" x2="10" y2="17"></line>
                                        <line x1="14" y1="11" x2="14" y2="17"></line>
                                    </svg>Delete</div>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="card-body mail-message-wrapper pt-2">
                    <div class="mail-message">
                        <p class="card-text">
                            {{ $contact->message }}
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection

