@extends('layouts.admin.master')
@section('title')
    {{ config('app.name') }} | General Settings
@endsection

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/quill/css/quill.snow.css') }}">
@endsection

@section('scripts')
<script src="{{ asset('admin/app-assets/quill/js/quill.min.js') }}"></script>
<script>
    $(document).ready(function (){
        (function(){
            if($(".custom-editor-wrapper").length){
                /* Initialize QUill editor */
                let quillEditor = new Quill('.custom-editor', {
                    modules: {
                        // imageResize: {
                        //     displaySize: true
                        // },
                        toolbar: [
                            [{ header: [1, 2, 3, 4, 5, 6,  false] }],
                            ['bold', 'italic', 'underline','strike'],
                            ['blockquote', 'code-block'],
                            // ['image', 'video'],
                            ['link'],
                            [{ 'script': 'sub'}, { 'script': 'super' }],
                            [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                            [{'color': []},{'background': []}],
                            [{ 'align': [] }],
                            ['clean']
                        ]
                    },
                    theme: 'snow'
                });

                /* Set QUill editor data into closest input */
                quillEditor.on('text-change', function(delta, source) {
                    getQuillEditorData();
                });

                /* Get QUill editor data function */
                function getQuillEditorData() {
                    let quillEditorData = quillEditor.root.innerHTML;
                    $(".custom-editor").closest(".custom-editor-wrapper").find(".custom-editor-input").val(quillEditorData);
                };
                getQuillEditorData();
            }
        })();
    })
</script>
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
                        <form action="{{route('admin.general.setting.update', $setting->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="row align-items-md-center mb-2">

                                <x-image type="file" name="logo" label="Logo" required="*" src="{{asset('uploads/generalsetting/'.$setting->logo)}}" width="100"/>
                                <x-image type="file" name="fav_icon" label="Fav Icon" required="*" src="{{asset('uploads/generalsetting/'.$setting->fav_icon)}}" width="100"/>


                                <x-update-input type="email" name='email_frist' value="{{$setting->email_frist}}" label="Email" required="*"/>
                                <x-update-input type="email" name='email_second' value="{{$setting->email_second}}" label="Email" required="(Optional)"/>

                                <x-update-input type="tel" name='phone_frist' value="{{$setting->phone_frist}}" label="Phone" required="*"/>
                                <x-update-input type="tel" name='phone_second' value="{{$setting->phone_second}}" label="Phone" required="(Optional)"/>

                                <x-update-text-area name="address_frist" value="{{$setting->address_frist}}" label="Address" required="*"/>
                                <x-update-text-area name="address_second" value="{{$setting->address_second}}" label="Address" required="(Optional)"/>


                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label">Copyright <span class="text-danger">*</span></label>
                                        <div class="custom-editor-wrapper">
                                            <div class="custom-editor">{!! $setting->copy_right !!}</div>
                                            <input  type="hidden" name="copy_right"  class="custom-editor-input">
                                        </div>
                                        @error('copyright')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>

                                <x-form-submit class="btn btn-primary"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection

