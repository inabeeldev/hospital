<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>Admin - Ghazala Hospital</title>

        <meta name="description" content="Dashmix - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <!-- Open Graph Meta -->
        <meta property="og:title" content="Dashmix - Bootstrap 4 Admin Template &amp; UI Framework">
        <meta property="og:site_name" content="Dashmix">
        <meta property="og:description" content="Dashmix - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">
        <!-- END Icons -->


        <!-- Fonts and Dashmix framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/xwork.min.css"> -->

        <link rel="icon" href="{{ asset('assets/media/favicons/favicon.png') }}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/media/favicons/favicon-192x192.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/media/favicons/apple-touch-icon-180x180.png') }}">

        <!-- Icons Css -->
        <link href="{{ asset('assets/js/plugins/summernote/summernote-bs4.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/js/plugins/simplemde/simplemde.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/dashmix.min.css') }}" rel="stylesheet" id="css-main" />
        <link href="{{ asset('assets/css/style1.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/ghazala.css') }}" rel="stylesheet" id="css-main" />
        <link href="{{ asset('assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <link href="{{ asset('assets/js/plugins/ion-rangeslider/css/ion.rangeSlider.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/js/plugins/dropzone/min/dropzone.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/js/plugins/flatpickr/flatpickr.min.css') }}" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">

        <style>
        .hide{
          display: none;

        }
        .show{
          transition-delay: 10s;
    transition-duration: 5s;
          display: block;
        }
        .dt-buttons {
            margin-left: 130px;
        }
      </style>
    </head>
    <body>
        <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
            @include('layouts.sidebar')
            @include('layouts.navbar')



            @yield('content')

            @include('layouts.footer')


        </div>





        <script src="{{ asset('assets/js/dashmix.core.min.js') }}"></script>
        <script src="{{ asset('assets/js/dashmix.app.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('assets/js/pages/op_auth_signup.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/summernote/summernote-bs4.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/simplemde/simplemde.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/ckeditor/ckeditor.js') }}"></script>

        <script>
            jQuery(function(){Dashmix.helpers(['summernote', 'simplemde', 'ckeditor']);});

          </script>
            <!-- Page JS Plugins -->
               <!-- Page JS Plugins -->
        <script src="{{ asset('assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/jquery.maskedinput/jquery.maskedinput.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/dropzone/min/dropzone.min.js') }}"></script>

        <script src="{{ asset('assets/js/plugins/pwstrength-bootstrap/pwstrength-bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/flatpickr/flatpickr.min.js') }}"></script>

        <script
            src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

            <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
            <script src="{{ asset('assets/js/jquery.toast.min.js') }}"></script>
            <script src="{{ asset('assets/js/push_notification.min.js') }}"></script>
            <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
        <script src="{{ asset('assets/js/jQuery.print.js') }}"></script>
        <script src="{{ asset('assets/js/printThis.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
        <!-- Page JS Helpers (Flatpickr + BS Datepicker + BS Colorpicker + BS Maxlength + Select2 + Ion Range Slider + Masked Inputs + Password Strength Meter plugins) -->
        {{-- <script>jQuery(function(){Dashmix.helpers(['flatpickr', 'datepicker', 'colorpicker', 'maxlength', 'select2', 'rangeslider', 'masked-inputs', 'pw-strength']);});</script> --}}
        @yield('scripts')
        <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
        <script src="https://cdn.datatables.net/select/1.6.2/js/dataTables.select.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

<script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('14a4e5e5ac39c8b14745', {
    cluster: 'ap2'
    });

    var channel = pusher.subscribe('staff');
    console.log(channel);
    channel.bind('my-event2', function(data) {
      if(data) {

         alert('Token No '+data.patient_id+ ' has been checked. Please open Patients Bill to generate Bill ');
        // $.toast({
        //     text :"Patient has been checked <br> <a href='{{url("doctor-screen")}}''>Go To Patients List</a>",
        //     heading:'Patient Checked',
        //     hideAfter: 200000,
        //     position:'top-right',
        //     stack: 6,
        // })

      }
    });


  </script>
  @yield('footer')
    </body>
</html>
