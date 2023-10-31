@extends('dscreen.layout')

@section('content')

<div class="container-fluid bg-white">


            <div class="pull-right ">
                <a class="btn btn-primary" href="{{ url()->previous() }}"> Back</a>
            </div>



    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


        <h2 class="text-center my-5">Patient Data</h2>

            <form action="" method="POST">

                @csrf

                <input type="hidden" name="patient_id" value="">
            <div class="row">
                <div class="col-lg-3 col-sm-12 col-md-6 mb-3">
                    <input type="text" class="form-control" value="{{ $patient->mr_no }}" disabled>
                </div>
                <div class="col-lg-3 col-sm-12 col-md-6 mb-3">
                    <input type="text" class="form-control" value="{{ $patient->first_name.' '.$patient->second_name }}" disabled>
                </div>
                <div class="col-lg-3 col-sm-12 col-md-6 mb-3">
                    <input type="text" class="form-control" value="{{ $patient->address }}" disabled>

                </div>
                <div class="col-lg-3 col-sm-12 col-md-6 mb-3">
                    <input type="text" class="form-control" value="{{ $patient->age }}" disabled>
                </div>
                <div class="col-lg-3 col-sm-12 col-md-6 mb-3">
                    <input type="text" class="form-control" value="{{ $patient->gender }}" disabled>
                </div>
                <div class="col-lg-3 col-sm-12 col-md-6 mb-3">
                    <input type="text" class="form-control" value="{{ $patient->weight}}" placeholder="{{ $patient->weight ? "" : "Enter Weight" }}">

                        {{-- <select name="gender" class="custom-select">
                            <option selected> Select your sex</option>
                            <option value="volvo">Male</option>
                            <option value="fiat">Female</option>
                            <option value="audi">Custom</option>
                        </select> --}}

                </div>

                <div class="col-lg-3 col-sm-12 col-md-6 mb-3">
                    <input type="number" class="form-control" value="{{ $patient->bp }}" disabled>

                </div>
                <div class="col-lg-3 col-sm-12 col-md-6 mb-3">
                    <input type="number" class="form-control" value="{{ $patient->phone }}" disabled>

                </div>

            </div>
    </div>
    <br>
    <!-- Registration -->

    <div class="container-fluid bg-white">
        <h2 class="text-center my-5">Registration</h2>

            <div class="row">
                <div class="col-lg-3 col-sm-12 col-md-6 mb-3">
                    <input type="number" class="form-control" placeholder="Catch no" name="Catch no">
                </div>

                <div class="col-lg-3 col-sm-12 col-md-6 mb-3">
                    <input type="text" class="form-control" placeholder="hospitil" name="hospitil">
                </div>

                <div class="col-lg-3 col-sm-12 col-md-6 mb-3">
                    <input type="text" class="form-control" placeholder="Reffer By" name="Reffer">
                </div>
                <div class="col-lg-3 col-sm-12 col-md-6 mb-3">
                    <input type="text" class="form-control" placeholder="Sub-Reffer" name="Sub-Reffer">
                </div>
                <div class="col-lg-3 col-sm-12 col-md-6 mb-3">
                    <input type="text" class="form-control" placeholder="Stamp-ctagories" name="Stamp-ctagories">
                </div>
                <div class="col-lg-3 col-sm-12 col-md-6 mb-3">
                    <input type="text" class="form-control" placeholder="Stamp-ctagories-2" name="Stamp-ctagories-2">
                </div>
                <div class="col-lg-3 col-sm-12 col-md-6 mb-3">
                    <input type="text" class="form-control" placeholder="Stamp Addres 1" name="Stamp Addres 1">
                </div>
                <div class="col-lg-3 col-sm-12 col-md-6 mb-3">
                    <input type="text" class="form-control" placeholder="Stamp Addres 2" name="Stamp Addres 2">
                </div>
                <div class="col-lg-3 col-sm-12 col-md-6 mb-3">
                    <input type="text" class="form-control" placeholder="Stamp Addres 3" name="Stamp Addres 3">
                </div>

            </div>
    </div>

    <!-- PROCEDURER-->

    <div class="container-fluid">
        <h2 class="text-center my-5">PROCEDURE</h2>

            <div class="row">
                <div class="col-lg-3 col-sm-12 col-md-6 mb-3">
                    <input type="text" class="form-control" placeholder="Access" name="Access">
                </div>
                <div class="col-lg-3 col-sm-12 col-md-6 mb-3">
                    <input type="text" class="form-control" placeholder="Contrast" name="Contrast">
                </div>
                <div class="col-lg-3 col-sm-12 col-md-6 mb-3">
                    <input type="text" class="form-control" placeholder="Report" name="Report ">
                </div>
                <div class="col-lg-3 col-sm-12 col-md-6 mb-3">
                    <input type="text" class="form-control" placeholder="Catheters" name="Catheters">
                </div>
            </div>
    </div>

    <!-- Report -->
    <div class="container-fluid">
        <h2 class="text-center my-5">PROCEDURE</h2>

            <div class="row">
                <div class="col-lg-3 col-sm-12 col-md-6 mb-3">
                    <input type="text" class="form-control" placeholder="Left Main Stem" name="Left Main Stem">
                </div>
                <div class="col-lg-3 col-sm-12 col-md-6 mb-3">
                    <input type="text" class="form-control" placeholder="LAD" name="LAD">
                </div>
                <div class="col-lg-3 col-sm-12 col-md-6 mb-3">
                    <input type="text" class="form-control" placeholder="LCX" name="LCX ">
                </div>
                <div class="col-lg-3 col-sm-12 col-md-6 mb-3">
                    <input type="text" class="form-control" placeholder="RI" name="RI">
                </div>
                <div class="col-lg-3 col-sm-12 col-md-6 mb-3">
                    <input type="text" class="form-control" placeholder="RCA" name="RCA">
                </div>
                <div class="col-lg-3 col-sm-12 col-md-6 mb-3">
                    <input type="text" class="form-control" placeholder="LV Angiogram" name="LV Angiogram">
                </div>
            </div>
    </div>
    <!-- CONCLUSION section  -->

    <div class="container-fluid mb-5">
        <h2 class="text-center my-5">CONCLUSION</h2>

            <div class="row">
                <div class="col-lg-6 col-sm-12 col-md-6 mb-3">
                    <input type="text" class="form-control" placeholder="CONCLUSION" name="CONCLUSION">
                </div>
                <div class="col-lg-6 col-sm-12 col-md-6 mb-3">
                    <input type="text" class="form-control" placeholder="Plan" name="Plan">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="button" class="btn btn-primary">Submit</button>
            </div>
        </form>
</div>

@endsection
