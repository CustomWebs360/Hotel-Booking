@extends('layouts.admin.master')
@section('title')
    {{ config('app.name') }} | Contact
@endsection
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin') }}/app-assets/css/plugins/forms/pickers/form-flat-pickr.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/app-assets/css/plugins/forms/pickers/form-pickadate.css">
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
                        <h4 class="card-title">Contacts <span class="badge"
                                style="background:#8c83f2">{{ total_contact() }}</span></h4>
                        <div class="text-rigth col-md-auto form-group">
                            <a type="button" class="btn btn-success waves-effect">
                                <i data-feather='external-link'></i>
                                <span>Export All</span>
                            </a>
                            <a type="button" class="btn btn-warning waves-effect">
                                <i data-feather='file-plus'></i>
                                <span>Import</span>
                            </a>

                            <div id="action_btn" class="btn-group  d-none">
                                <button class="btn btn-danger waves-effect">Action</button>
                                <button type="button"
                                    class="btn btn-danger dropdown-toggle dropdown-toggle-split waves-effect"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" style="">
                                    <a class="dropdown-item btn" href="javascript:void(0);"><i data-feather='trash-2'></i>
                                        Bulk Delete</a>
                                    <a class="dropdown-item btn" href="javascript:void(0);"> <i
                                            data-feather='external-link'></i> Bulk Export</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        {{-- date filter --}}
                        <form action="{{ route('admin.contact.date.filter') }}" method="get">
                            {{-- @csrf --}}
                            <div class="row">
                                <div class="col-md form-group">
                                    <label for="fp-default">Start Date</label>
                                    <input type="text" id="fp-default" class="form-control flatpickr-basic"
                                        placeholder="YYYY-MM-DD" name="start_date"
                                        @isset(request()->start_date)
                                            value="{{ request()->start_date }}"
                                        @endisset
                                        value="{{ old('start_date') }}" />
                                    @error('start_date')
                                        <div class="demo-spacing-0">
                                            <div class="mt-1 alert-validation-msg" role="alert">
                                                <div class="alert-body">
                                                    <i class="text-danger" data-feather='alert-circle'></i>
                                                    <span class="text-danger">{{ $message }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md form-group">
                                    <label for="fp-default">End Date</label>
                                    <input type="text" id="fp-default" class="form-control flatpickr-basic"
                                        placeholder="YYYY-MM-DD" name="end_date"
                                        @isset(request()->end_date)
                                            value = {{ request()->end_date }}
                                        @endisset
                                        value="{{ old('end_date') }}" />

                                    @error('end_date')
                                        <div class="demo-spacing-0">
                                            <div class="mt-1 alert-validation-msg" role="alert">
                                                <div class="alert-body">
                                                    <i class="text-danger" data-feather='alert-circle'></i>
                                                    <span class="text-danger">{{ $message }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-auto form-group">
                                    <button type="submit" class="btn btn-primary"
                                        @if(request()->routeIs('admin.contact.search'))
                                          style="margin-bottom:-73%";
                                          @else
                                         style="margin-bottom: {{ request()->routeIs('admin.contact.index') ? '-73%' : '-37%' }};"
                                         @endif
                                        >Filter</button>
                                    @if (request()->routeIs('admin.contact.date.filter'))
                                        <a href="{{ route('admin.contact.index') }}" class="btn btn-danger"
                                            style="    margin-bottom: -37%;">Clear</a>
                                    @endif
                                </div>
                            </div>
                        </form>
                        {{-- search form  --}}
                        <form action="{{ route('admin.contact.search') }}" method="get">
                        <div class="row align-items-md-center mb-2">
                            <div class="col-md">
                                    <div class="form-group mb-md-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control table_search"
                                                placeholder="Search Here" @isset(request()->search) value="{{request()->search}}" @endisset

                                               name="search">
                                            </div>
                                            @error('search')
                                                    <i class="text-danger" data-feather='alert-circle'></i>
                                                    <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                    </div>
                            </div>

                           @if (request()->routeIs('admin.contact.search'))
                            <div class="col-md-auto form-group">
                                <a href="{{route('admin.contact.index')}}" class="btn btn-danger" style=" margin-bottom: -16%;">Clear</a>
                            </div>
                            @else
                             <div class="col-md-auto form-group">
                                <button type="submit" class="btn btn-primary" style=" margin-bottom: -16%;">Search</button>
                            </div>
                           @endif

                        </div>
                    </form>
                        <div id="data_table">
                            <div class="table-responsive">
                                <table class="table table-bordered ">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>
                                                <div class="custom-control custom-control-white custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input select_all"
                                                        id="colorCheck1">
                                                    <label class="custom-control-label" for="colorCheck1"></label>
                                                </div>
                                            </th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($contacts as $contact)
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-control-white custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input one_select"
                                                            id="colorCheck_{{ $contact->id }}">
                                                        <label class="custom-control-label"
                                                            for="colorCheck_{{ $contact->id }}"></label>
                                                    </div>
                                                </td>
                                                <td>{{ $contact->name }}</td>
                                                <td><a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></td>
                                                <td><a href="tel:{{ $contact->phone }}">{{ $contact->phone }}</a></td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button"
                                                            class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light"
                                                            data-toggle="dropdown">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                height="14" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-more-vertical">
                                                                <circle cx="12" cy="12" r="1">
                                                                </circle>
                                                                <circle cx="12" cy="5" r="1">
                                                                </circle>
                                                                <circle cx="12" cy="19" r="1">
                                                                </circle>
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item"
                                                                href="{{ route('admin.contact.show', $contact->id) }}">
                                                                <i data-feather='eye'></i>
                                                                <span>Show</span>
                                                            </a>
                                                            <form id="delete_form"
                                                                action="{{ route('admin.contact.destroy', $contact->id) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('delete')
                                                                <a id="delete_item" class="dropdown-item"
                                                                    href="javascript:void(0);">
                                                                    <i data-feather='trash-2'></i>
                                                                    <span>Delete</span>
                                                                </a>
                                                            </form>
                                                            {{-- onclick="document.getElementById('delete_form').submit()" --}}
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md form-gorup"></div>
                                <div class="col-md-auto form-group text-center mt-2">
                                    {{ $contacts->appends(request()->query())->links('pagination::bootstrap-4') }}

                                    {{-- @if (request()->start_date)
                                    {{ $contacts->appends(request()->query())->links('pagination::bootstrap-4') }}
                                    @else
                                    {{ $contacts->links('pagination::bootstrap-4') }}
                                    @endif --}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endsection
                @section('scripts')
                    <script>
                        $(document).ready(function() {
                            $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                                }
                            });
                            $(document).on('click', '#delete_item', function(e) {
                                e.preventDefault();
                                Swal.fire({
                                    title: 'Are you sure?',
                                    text: "You won't be able to revert this!",
                                    icon: 'warning',
                                    showCancelButton: true,
                                    confirmButtonColor: '#3085d6',
                                    cancelButtonColor: '#d33',
                                    confirmButtonText: 'Yes, delete it!'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        $(this).closest('form').submit();
                                    }
                                });

                            });

                            //ajax pagination
                            // $(document).on('click', '.pagination li a', function(e) {
                            //     e.preventDefault();
                            //     var page = $(this).attr('href').split('?page=')[1];

                            //     pagination(page);

                            //     function pagination(page) {
                            //         $.ajax({
                            //             url: "contact/pagination?page=" + page,
                            //             success: function(response) {
                            //                 $('#data_table').html(response);
                            //             }
                            //         });
                            //     }
                            // });

                            //select alll
                            $(document).on('change', '.select_all', function(e) {
                                e.preventDefault();
                                ids = []
                                if ($(this).is(":checked")) {
                                    $('.one_select').prop('checked', true);

                                    $('.one_select').each(function() {
                                        ids.push($(this).attr('id').split('_')[1]);
                                    });

                                    if (ids.leangth != 0) {
                                        $('#action_btn').removeClass('d-none');
                                    } else {
                                        alert('jhi')
                                    }
                                } else {
                                    $('.one_select').prop('checked', false);
                                    $('#action_btn').addClass('d-none');
                                }
                            });

                            $('.one_select').change(function() {
                                ids = []
                                $('.one_select').each(function() {
                                    if ($(this).is(":checked")) {
                                        ids.push($(this).attr('id').split('_')[1]);
                                    }
                                });
                                if (ids.length == 0) {
                                    $('#action_btn').addClass('d-none');
                                    // $('.select_all').prop('checked', false);
                                } else {
                                    $('#action_btn').removeClass('d-none');

                                }
                            });
                        });
                    </script>
                @endsection
