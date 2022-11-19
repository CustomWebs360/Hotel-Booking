 <link rel="apple-touch-icon" href="{{ asset('admin') }}/app-assets/images/ico/apple-icon-120.png">
 <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin') }}/app-assets/images/ico/favicon.ico">
 <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
     rel="stylesheet">

 <!-- BEGIN: Vendor CSS-->
 <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/app-assets/vendors/css/vendors.min.css">
 <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/app-assets/vendors/css/charts/apexcharts.css">
 <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/app-assets/vendors/css/extensions/toastr.min.css">
 <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/app-assets/vendors/css/pickers/pickadate/pickadate.css">
 <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css">
 <!-- END: Vendor CSS-->



 <!-- BEGIN: Theme CSS-->
 <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/app-assets/css/bootstrap.css">
 <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/app-assets/css/bootstrap-extended.css">
 <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/app-assets/css/colors.css">
 <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/app-assets/css/components.css">
 <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/app-assets/css/themes/dark-layout.css">
 <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/app-assets/css/themes/bordered-layout.css">
 <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/app-assets/css/themes/semi-dark-layout.css">

 <!-- BEGIN: Page CSS-->
 <link rel="stylesheet" type="text/css"
     href="{{ asset('admin') }}/app-assets/css/core/menu/menu-types/vertical-menu.css">
 <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/app-assets/css/plugins/extensions/ext-component-toastr.css">
 {{-- <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css"> --}}
 <!-- END: Page CSS-->

 @yield('styles')

 <!-- BEGIN: Custom CSS-->
 <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/assets/css/style.css">
 <!-- END: Custom CSS-->
 <style>
     .table .thead-dark th {
         color: #FFFFFF;
         background-color: #8c83f2;
         border-color: #8c83f2;
         "

     }

     .breadcrumb {
         font-weight: bold;
     }

     .input-group-text {
         display: flex;
         align-items: center;
         padding: 0.438rem 1rem;
         margin-bottom: 0;
         font-size: 1rem;
         font-weight: 400;
         line-height: 1.45;
         color: #6e6b7b;
         text-align: center;
         white-space: nowrap;
         background-color: white;
         border: 1px solid #d8d6de;
         border-radius: 0.357rem;
         height:88%;
     }
 </style>
