<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

  <title>Dashmix - Bootstrap 4 Admin Template &amp; UI Framework</title>

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

 <!-- Fonts and Dashmix framework -->
 <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">

 <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
 <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/xwork.min.css"> -->

 <link rel="icon" href="{{ asset('assets/media/favicons/favicon.png') }}">
 <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/media/favicons/favicon-192x192.png') }}">
 <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/media/favicons/apple-touch-icon-180x180.png') }}">

  <!-- END Icons -->

  <!-- Stylesheets -->
  <!-- Page JS Plugins CSS -->
  <link href="{{ asset('assets/js/plugins/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/dashmix.min.css') }}" rel="stylesheet" id="css-main" />
  <link href="{{ asset('assets/css/ghazala.css') }}" rel="stylesheet" id="css-main" />

  <link href="{{ asset('assets/css/dashmix.css') }}" rel="stylesheet" id="css-main" />
  <link href="{{ asset('assets/js/jquery.toast.min.css') }}" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />



  <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
  <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/xwork.min.css"> -->
  <!-- END Stylesheets -->
</head>

<body>
    <!-- Header -->
<header id="page-header">
    <!-- Header Content -->
    <div class="content-header">
        <!-- Left Section -->
        <div>
            <!-- Toggle Sidebar -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
            {{-- <button type="button" class="btn btn-dual" data-toggle="layout" data-action="sidebar_toggle">
                <i class="fa fa-fw fa-bars"></i>
            </button> --}}
            <!-- END Toggle Sidebar -->

            <!-- Open Search Section -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            {{-- <button type="button" class="btn btn-dual" data-toggle="layout" data-action="header_search_on">
                <i class="fa fa-fw fa-search"></i> <span class="ml-1 d-none d-sm-inline-block">Search</span>
            </button> --}}
            <!-- END Open Search Section -->
        </div>
        <!-- END Left Section -->

        <!-- Right Section -->
        <div>
            <!-- User Dropdown -->
            <div class="dropdown d-inline-block">
                <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            <i class="far fa-fw fa-arrow-alt-circle-left mr-1"></i>
                             Sign Out
                </a>
                {{-- <button type="button" class="btn btn-dual"  >
                    <i class="fa fa-fw fa-user d-sm-none"></i>
                    <span class="d-none d-sm-inline-block">Admin</span>
                    <i class="fa fa-fw fa-angle-down ml-1 d-none d-sm-inline-block"></i>
                </button> --}}
                <div class="dropdown-menu dropdown-menu-right p-0" aria-labelledby="page-header-user-dropdown">
                    <div class="bg-primary rounded-top font-w600 text-white text-center p-3">
                        User Options
                    </div>
                    <div class="p-2">
                        <a class="dropdown-item" href="be_pages_generic_profile.html">
                            <i class="far fa-fw fa-user mr-1"></i> Profile
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between" href="be_pages_generic_inbox.html">
                            <span><i class="far fa-fw fa-envelope mr-1"></i> Inbox</span>
                            <span class="badge badge-primary badge-pill">3</span>
                        </a>
                        <a class="dropdown-item" href="be_pages_generic_invoice.html">
                            <i class="far fa-fw fa-file-alt mr-1"></i> Invoices
                        </a>
                        <div role="separator" class="dropdown-divider"></div>

                        <!-- Toggle Side Overlay -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <a class="dropdown-item" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_toggle">
                            <i class="far fa-fw fa-building mr-1"></i> Settings
                        </a>
                        <!-- END Side Overlay -->

                        <div role="separator" class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            <i class="far fa-fw fa-arrow-alt-circle-left mr-1"></i>
                             Sign Out
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
            <!-- END User Dropdown -->


            <!-- Toggle Side Overlay -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            {{-- <button type="button" class="btn btn-dual" data-toggle="layout" data-action="side_overlay_toggle">
                <i class="far fa-fw fa-list-alt"></i>
            </button> --}}
            <!-- END Toggle Side Overlay -->
        </div>
        <!-- END Right Section -->
    </div>
    <!-- END Header Content -->

    <!-- Header Search -->
    <div id="page-header-search" class="overlay-header bg-header-dark">
        <div class="bg-white-10">
            <div class="content-header">
                <form class="w-100" action="be_pages_generic_search.html" method="POST">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <button type="button" class="btn btn-alt-primary" data-toggle="layout" data-action="header_search_off">
                                <i class="fa fa-fw fa-times-circle"></i>
                            </button>
                        </div>
                        <input type="text" class="form-control border-0" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- END Header Search -->

    <!-- Header Loader -->
    <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
    <div id="page-header-loader" class="overlay-header bg-header-dark">
        <div class="bg-white-10">
            <div class="content-header">
                <div class="w-100 text-center">
                    <i class="fa fa-fw fa-sun fa-spin text-white"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- END Header Loader -->
</header>
<!-- END Header -->
@yield('content')
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
<script src="{{ asset('assets/js/jquery.toast.min.js') }}"></script>
<script src="{{ asset('assets/js/push_notification.min.js') }}"></script>
<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@yield('scripts1')
<script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('14a4e5e5ac39c8b14745', {
    cluster: 'ap2'
    });

    var channel = pusher.subscribe('appointment-'+{{Auth::user()->id}});
    console.log(channel);
    channel.bind('my-event', function(data) {
      if(data) {

        // alert(JSON.stringify(data));
        $.toast({
            text :"Please Open Patients list to see patients <br> <a href='{{url("doctor-screen")}}''>Go To Patients List</a>",
            heading:'Received a new patient appointment',
            hideAfter: 200000,
            position:'top-right',
            stack: 6,
        })

      }
    });
  </script>

</body>
</html>
