   <!-- BEGIN: Vendor JS-->
   <script src="{{ asset('admin') }}/app-assets/vendors/js/vendors.min.js"></script>
   <script src="{{ asset('admin') }}/app-assets/vendors/js/pickers/pickadate/picker.js"></script>
   <script src="{{ asset('admin') }}/app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
   <script src="{{ asset('admin') }}/app-assets/vendors/js/pickers/pickadate/picker.time.js"></script>
   <script src="{{ asset('admin') }}/app-assets/vendors/js/pickers/pickadate/legacy.js"></script>
   <script src="{{ asset('admin') }}/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
   <!-- BEGIN Vendor JS-->

   <!-- BEGIN: Page JS-->
   <script src="{{ asset('admin') }}/app-assets/js/scripts/forms/pickers/form-pickers.js"></script>
   <!-- END: Page JS-->

   <!-- BEGIN: Page Vendor JS-->
   <script src="{{asset('admin')}}/app-assets/vendors/js/extensions/toastr.min.js"></script>
   {{-- <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script> --}}
   <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <!-- END: Page Vendor JS-->

   @yield('scripts')
   <!-- BEGIN: Theme JS-->
   <script src="{{ asset('admin') }}/app-assets/js/core/app-menu.js"></script>
   <script src="{{ asset('admin') }}/app-assets/js/core/app.js"></script>

   <!-- END: Theme JS-->


   <script>
       $(window).on('load', function() {
           if (feather) {
               feather.replace({
                   width: 14,
                   height: 14
               });
           }
       })
   </script>

   {{-- theme setting  --}}
   <script>
       $(document).ready(function() {
           $.ajaxSetup({
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               }
           });
           $("#light").click(function() {

               var value = 'dark-layout';
               $.ajax({
                   type: "get",
                   url: "{{ route('admin.theme.setting') }}",
                   dataType:"json",
                   data: {value:value},
                   success: function(response) {
                          console.log(response.success);
                   }

               });

           });
           $("#dark").click(function() {
               var value = 'light-layout';
               $.ajax({
                   type: "get",
                   url: "{{ route('admin.theme.setting') }}",
                   dataType:"json",
                   data: {value:value},
                   success: function(response) {
                          console.log(response.success);
                   }

               });

           });



       });
   </script>

    @if(session()->get('success'))
        <script>
            toastr.success(' ','{{ session()->get('success') }}');
        </script>
    @endif

    @if(session()->get('error'))
        <script>
            toastr.error(' ','{{ session()->get('error') }}');
        </script>
    @endif

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                toastr.error('{{ $error }}');
            </script>
        @endforeach
    @endif

