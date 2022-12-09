@extends('layouts.app_main')


@section('content')


<!-- Main Container -->
<main id="main-container">
    <!-- Hero -->
    <div class="content">
        <div class="d-md-flex justify-content-md-between align-items-md-center py-3 pt-md-3 pb-md-0 text-center text-md-left">
            <div>
                <h1 class="h2 mb-1">
                    Dashboard
                </h1>
                <p class="mb-0">
                    Welcome, again! </a>.
                </p>
            </div>

        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
        <!-- Overview -->
        <div class="row row-deck">
            <div class="col-sm-6 col-xl-3">
                <div class="block block-rounded text-center d-flex flex-column">
                    <div class="block-content block-content-full flex-grow-1">
                        <div class="item rounded-lg bg-body-dark mx-auto my-3">
                            <i class="fa fa-users text-muted"></i>
                        </div>
                        <div class="text-black font-size-h1 font-w700">{{$users->count()}}</div>
                        <div class="text-muted mb-3">Total Users</div>
                        {{-- <div class="d-inline-block px-3 py-1 rounded-lg font-size-sm font-w600 text-success bg-success-lighter">
                            <i class="fa fa-caret-up mr-1"></i>
                            19.2%
                        </div> --}}
                    </div>
                    <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm">
                        <a class="font-w500" href="{{route('users.index')}}">
                            View all users
                            <i class="fa fa-arrow-right ml-1 opacity-25"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="block block-rounded text-center d-flex flex-column">
                    <div class="block-content block-content-full flex-grow-1">
                        <div class="item rounded-lg bg-body-dark mx-auto my-3">
                            <i class="fa fa-users text-muted"></i>
                        </div>
                        <div class="text-black font-size-h1 font-w700">{{$doctors->count()}}</div>
                        <div class="text-muted mb-3">Total Doctors</div>
                        {{-- <div class="d-inline-block px-3 py-1 rounded-lg font-size-sm font-w600 text-danger bg-danger-lighter">
                            <i class="fa fa-caret-down mr-1"></i>
                            2.3%
                        </div> --}}
                    </div>
                    <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm">
                        <a class="font-w500" href="{{route('doctors.index')}}">
                            View all doctors
                            <i class="fa fa-arrow-right ml-1 opacity-25"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="block block-rounded text-center d-flex flex-column">
                    <div class="block-content block-content-full flex-grow-1">
                        <div class="item rounded-lg bg-body-dark mx-auto my-3">
                            <i class="fa fa-users text-muted"></i>
                        </div>
                        <div class="text-black font-size-h1 font-w700">{{$patients->count()}}</div>
                        <div class="text-muted mb-3">Total Patients</div>
                        {{-- <div class="d-inline-block px-3 py-1 rounded-lg font-size-sm font-w600 text-success bg-success-lighter">
                            <i class="fa fa-caret-up mr-1"></i>
                            7.9%
                        </div> --}}
                    </div>
                    <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm">
                        <a class="font-w500" href="{{route('patients.index')}}">
                            View all patients
                            <i class="fa fa-arrow-right ml-1 opacity-25"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="block block-rounded text-center d-flex flex-column">
                    <div class="block-content block-content-full">
                        <div class="item rounded-lg bg-body-dark mx-auto my-3">
                            <i class="fa fa-hospital text-muted"></i>
                        </div>
                        <div class="text-black font-size-h1 font-w700">{{$departments->count()}}</div>
                        <div class="text-muted mb-3">Total Departments</div>
                        {{-- <div class="d-inline-block px-3 py-1 rounded-lg font-size-sm font-w600 text-danger bg-danger-lighter">
                            <i class="fa fa-caret-down mr-1"></i>
                            0.3%
                        </div> --}}
                    </div>
                    <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm">
                        <a class="font-w500" href="{{route('departments.index')}}">
                            View all departments
                            <i class="fa fa-arrow-right ml-1 opacity-25"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Overview -->


    </div>
    <!-- END Page Content -->
</main>
<!-- END Main Container -->

@endsection
