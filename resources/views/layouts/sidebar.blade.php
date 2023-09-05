<nav id="sidebar" aria-label="Main Navigation">
    <!-- Side Header -->
    <div class="bg-header-dark">
        <div class="content-header bg-white-10">
            <!-- Logo -->
            <a class="font-w600 text-white tracking-wide" href="index.html">
                <span class="smini-visible">
                    D<span class="opacity-75">x</span>
                </span>
                <span class="smini-hidden">
                    <img src="{{ asset('assets/media/photos/logo.png') }}" alt="" width="90%">
                </span>
            </a>
            <!-- END Logo -->


            <div>

                <a class="js-class-toggle text-white-75" data-target="#sidebar-style-toggler" data-class="fa-toggle-off fa-toggle-on" onclick="Dashmix.layout('sidebar_style_toggle');Dashmix.layout('header_style_toggle');" href="javascript:void(0)">
                    <i class="fa fa-toggle-off" id="sidebar-style-toggler"></i>
                </a>
                <!-- END Toggle Sidebar Style -->


                <a class="d-lg-none text-white ml-2" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                    <i class="fa fa-times-circle"></i>
                </a>

            </div>
            <!-- END Options -->
        </div>
    </div>
    <!-- END Side Header -->


    <div class="js-sidebar-scroll bg-primary">
        <!-- Side Navigation -->
        <div class="content-side ">
            <ul class="nav-main ">
                <li class="nav-main-item ">
                    <a class="nav-main-link" href="{{route('dashboard.index')}}">
                        <i class="nav-main-link-icon text-white fa fa-location-arrow"></i>
                        <span class="nav-main-link-name text-white">Dashboard</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link" href="{{route('patients.index')}}">
                        <i class="nav-main-link-icon fa text-white fa-list"></i>
                        <span class="nav-main-link-name text-white">Patients List</span>

                    </a>
                </li>
                @can('patient-create')
                <li class="nav-main-item">
                    <a class="nav-main-link" href="{{route('patients.create')}}">
                        <i class="nav-main-link-icon text-white fa fa-plus"></i>
                        <span class="nav-main-link-name text-white">Add Patients</span>

                    </a>
                </li>
                @endcan
                @can('doctor-list')
                <li class="nav-main-item">
                    <a class="nav-main-link" href="{{route('doctors.index')}}">
                        <i class="nav-main-link-icon text-white fa fa-user-md"></i>
                        <span class="nav-main-link-name text-white">All Doctors</span>

                    </a>
                </li>
                @endcan
                @can('user-list')
                <li class="nav-main-item">
                    <a class="nav-main-link" href="{{route('users.index')}}">
                        <i class="nav-main-link-icon text-white fa fa-border-all"></i>
                        <span class="nav-main-link-name text-white">All Users</span>

                    </a>
                </li>
                @endcan
                @can('role-list')
                <li class="nav-main-item">
                    <a class="nav-main-link" href="{{route('roles.index')}}">
                        <i class="nav-main-link-icon text-white fa fa-tint "></i>
                        <span class="nav-main-link-name text-white">All Roles</span>

                    </a>
                </li>
                @endcan
                @can('procedure-list')
                <li class="nav-main-item">
                    <a class="nav-main-link" href="{{route('procedures.index')}}">
                        <i class="nav-main-link-icon  text-white fa fa-border"></i>
                        <span class="nav-main-link-name text-white">All Procedures</span>

                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link" href="{{route('procedure_names.index')}}">
                        <i class="nav-main-link-icon text-white fa fa-user"></i>
                        <span class="nav-main-link-name text-white">All Procedure Names</span>

                    </a>
                </li>
                @endcan
                @can('department-list')
                <li class="nav-main-item">
                    <a class="nav-main-link" href="{{route('departments.index')}}">
                        <i class="nav-main-link-icon text-white fa fa-building"></i>
                        <span class="nav-main-link-name text-white">All Departments</span>

                    </a>
                </li>
                @endcan
                @can('reference-list')
                <li class="nav-main-item">
                    <a class="nav-main-link" href="{{route('references.index')}}">
                        <i class="nav-main-link-icon text-white fa fa-border-all"></i>
                        <span class="nav-main-link-name text-white">All References</span>

                    </a>
                </li>
                @endcan
                @can('condition-list')
                <li class="nav-main-item">
                    <a class="nav-main-link" href="{{route('conditions.index')}}">
                        <i class="nav-main-link-icon text-white fa fa-rss"></i>
                        <span class="nav-main-link-name text-white">All conditions</span>

                    </a>
                </li>
                @endcan
                @can('patient-list')
                <li class="nav-main-item">
                    <a class="nav-main-link" href="{{route('history.index')}}">
                        <i class="nav-main-link-icon text-white fa fa-file"></i>
                        <span class="nav-main-link-name text-white">Patients History</span>

                    </a>
                </li>
                @endcan
                @can('patient-list')
                <li class="nav-main-item">
                    <a class="nav-main-link" href="{{route('patient_bill.index')}}">
                        <i class="nav-main-link-icon text-white fa fa-border-all"></i>
                        <span class="nav-main-link-name text-white">Patients Bill</span>
                    </a>
                </li>
                @endcan

                @can('patient-list')
                <li class="nav-main-item">
                    <a class="nav-main-link" href="{{route('consultants.index')}}">
                        <i class="nav-main-link-icon text-white fa fa-briefcase"></i>
                        <span class="nav-main-link-name text-white">Consultants</span>
                    </a>
                </li>
                @endcan



            </ul>
        </div>
        <!-- END Side Navigation -->
    </div>
    <!-- END Sidebar Scrolling -->
</nav>
<!-- END Sidebar -->
