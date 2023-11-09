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
                    <input type="text" class="form-control" value="{{ $patient->mr_no }}">
                </div>
                <div class="col-lg-3 col-sm-12 col-md-6 mb-3">
                    <input type="text" class="form-control" value="{{ $patient->first_name.' '.$patient->second_name }}" >
                </div>
                <div class="col-lg-3 col-sm-12 col-md-6 mb-3">
                    <input type="text" class="form-control" value="{{ $patient->address }}">

                </div>
                <div class="col-lg-3 col-sm-12 col-md-6 mb-3">
                    <input type="text" class="form-control" value="{{ $patient->age }}">
                </div>
                <div class="col-lg-3 col-sm-12 col-md-6 mb-3">
                    <input type="text" class="form-control" value="{{ $patient->gender }}">
                </div>
                <div class="col-lg-3 col-sm-12 col-md-6 mb-3">
                    <input type="text" class="form-control" value="{{ $patient->weight}}" placeholder='{{ $patient->weight ? "" : "Enter Weight" }}'>

                   

                </div>

                <div class="col-lg-3 col-sm-12 col-md-6 mb-3">
                    <input type="text" class="form-control" value="{{ $patient->bp }}" placeholder='{{ $patient->bp ? "" : " blood Presure " }}'>

                </div>
                <div class="col-lg-3 col-sm-12 col-md-6 mb-3">
                    <input type="text" class="form-control" value="{{ $patient->phone }}" >

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
                    <input type="text" class="form-control" placeholder="hospitil" name="hospitil" value="GHAZALA HOSPITAL & CARDIAC CENTER
">
                </div>

                <div class="col-lg-3 col-sm-12 col-md-6 mb-3">
                    <select class="form-control" id="reffer-by" name="reffer-by">
                        <option value="1">Reffer By</option>
                        <option value="dr-umer-and-dr-hannan">
                            Dr. Muhammad Umer & Dr. Muhammad Hannan
                        </option>
                         <option value="dr-nouman">
                            Dr. Nouman 
                        </option>

                    </select>
               

                </div>
                <div class="col-lg-3 col-sm-12 col-md-6 mb-3">
                    <input type="text" class="form-control" placeholder="Sub-Reffer" name="Sub-Reffer" id="sub-reffer" vlaue="rfrf">
                 
                </div>
                <div class="col-lg-3 col-sm-12 col-md-6 mb-3">
                    <input type="text" class="form-control" placeholder="Stamp-ctagories" name="Stamp-ctagories" id="stamp-cat">
                </div>
                <div class="col-lg-3 col-sm-12 col-md-6 mb-3">
                    <input type="text" class="form-control" placeholder="Stamp-ctagories-2" name="Stamp-ctagories-2" id="stamp-cat2">
                </div>
                <div class="col-lg-3 col-sm-12 col-md-6 mb-3">
                    <input type="text" class="form-control" placeholder="Stamp Addres 1" name="Stamp Addres 1" id="stamp-address-1">
                </div>
                <div class="col-lg-3 col-sm-12 col-md-6 mb-3">
                    <input type="text" class="form-control" placeholder="Stamp Addres 2" name="Stamp Addres 2" id="stamp-address-2">
                </div>
                <div class="col-lg-3 col-sm-12 col-md-6 mb-3">
                    <input type="text" class="form-control" placeholder="Stamp Addres 3" name="Stamp Addres 3" id="stamp-address-3">
                </div>

            </div>
    </div>

    <!-- PROCEDURER-->

    <div class="container-fluid">
        <h2 class="text-center my-5">PROCEDURE</h2>

            <div class="row">
                <div class="col-lg-3 col-sm-12 col-md-6 mb-3">
                  <select class="form-control">
                    <option>Access</option>
                      <option>Left Femoral Artery </option>
                      <option>Right Femoral Artery </option>
                      <option>Right Radial Artery </option>
                      <option>Right Radial Artery ( Limited views due to renal dysfunction.) </option>
                      <option>Right Radial Artery + Right Femoral Artery  </option>
            

                  </select>
                </div>
                <div class="col-lg-3 col-sm-12 col-md-6 mb-3">
                    <select class="form-control">
                      <option>Contrast</option>
                      <option>Non-Ionic </option>
                  </select>
                </div>
                <div class="col-lg-3 col-sm-12 col-md-6 mb-3">
                    <select class="form-control">
                      <option>Report</option>
                      <option>Normal </option>
                  </select>
                </div>
                <div class="col-lg-3 col-sm-12 col-md-6 mb-3">
                         <select class="form-control">
                      <option>Catheters</option>
                      <option>JL 3.5 5F & JR 4.0 5F </option>
                      <option>JL 3.5 5F & JR 4.0 6F</option>
                      <option>JL 3.5 6F</option>
                      <option>JL 3.5 6F & JR 4.0 5F</option>
                      <option>JL 3.5 6F & JR 4.0 6F</option>
                      <option>JL 4.0 5F & JR 4.0 5F</option>
                      <option>JL 4.0 6F & JR 4.0 5F</option>
                      <option>JL 4.0 6F & JR 4.0 6F</option>
                      <option>JL 4.0 6F, JL 3.5 5F & JR 4.0 6F</option>
                      <option>PB 3.0 Guiding Catheter</option>
                      <option>Radial TiG 6F </option>

                  </select>
                </div>
            </div>
    </div>

    <!-- Report -->
    <div class="container-fluid">
        <h2 class="text-center my-5">PROCEDURE</h2>

            <div class="row">
                <div class="col-lg-3 col-sm-12 col-md-6 mb-3">
              
                    <select class="form-control">
                        <option>Left Main Stem</option>
                        <option>1E+26</option>
                        <option>Absent</option>
                        <option>Bifurcating calcified vessel</option>
                        <option>Bifurcating calcified vessel with moderate mid disease and tight distal stenosis having haziness.</option>
                        <option>Bifurcating Ectatic vessel.</option>
                        <option>Bifurcating vessel with critical distal stenosis having intraluminal haziness.</option>
                        <option>Bifurcating vessel with critical distal stenosis.</option>
                        <option>Bifurcating vessel with critical distal stenosis. Patient developed VT during first injection so limited views taken.</option>
                        <option>Bifurcating vessel with critical ostial stenosis.</option>
                        <option>Bifurcating vessel with distal aneurysmal dilatation.</option>
                        <option>Bifurcating vessel with distal tapering.</option>
                        <option>Bifurcating vessel with mild disease in mid distal segment. </option>
                        <option>Bifurcating vessel with mild distal disease. </option>
                        <option>Bifurcating vessel with mild distal tapering having intraluminal haziness.</option>
                        <option>Bifurcating vessel with mild distal tapering. </option>
                        <option>Bifurcating vessel with mild ostial & distal disease.</option>
                        <option>Bifurcating vessel with mild ostial disease.</option>
                        <option>Bifurcating vessel with mild ostial stenosis.</option>
                        <option>Bifurcating vessel with mild to moderate distal disease having intraluminal haziness.</option>
                        <option>Bifurcating vessel with mild to moderate distal tapering.</option>
                        <option>Bifurcating vessel with mild to moderate ostial stenosis and tight distal stenosis . </option>
                        <option>Bifurcating vessel with mild to moderate ostial stenosis. </option>
                        <option>Bifurcating vessel with moderate distal disease.</option>
                        <option>Bifurcating vessel with moderate distal stenosis.</option>
                        <option>Bifurcating vessel with moderate ostial stenosis.</option>
                        <option>Bifurcating vessel with moderately tight distal stenosis.</option>
                        <option>Bifurcating vessel with moderately tight proximal stenosis.</option>
                        <option>Bifurcating vessel with tight (70%) ostial stenosis.</option>
                        <option>Bifurcating vessel with tight distal stenosis and calcification.</option>
                        <option>Bifurcating vessel with tight distal stenosis having intraluminal haziness involving ostium of LAD/LCx.</option>
                        <option>Bifurcating vessel with tight distal stenosis having intraluminal haziness.</option>
                        <option>Bifurcating vessel with tight distal stenosis. </option>
                        <option>Bifurcating vessel with tight ostial stenosis. </option>
                        <option>Long Bifurcating normal vessel</option>
                        <option>Long Bifurcating vessel into LAD and OM</option>
                        <option>Long Bifurcating vessel with mild distal tappering and dividing into D1 and LAD Vessel.</option>
                        <option>Long Bifurcating vessel with mild distal tappering.</option>
                        <option>Long bifurcating vessel.</option>
                        <option>Long Calcified bifurcation vessel with mild mid disease.</option>
                        <option>Long left main continues as LAD having intraluminal haziness.</option>
                        <option>Long trifurcating normal vessel. </option>
                        <option>Normal trifurcating vessel. </option>
                        <option>Normal vessel continues as LAD. </option>
                        <option>Trifurcating vessel with tight distal stenosis. </option>
                        <option>Normal bifurcating vessel with intraluminal haziness. </option>
                        <option>Trifurcating moderately tight distal tappering.</option>
                        <option>Normal Bifurcating vessel.</option>
                        <option>Short Bifurcating vessel.</option>
                        <option>Mild distal tapering</option>
                        <option>Normal Trifurcating vessel with ostial haziness.</option>
                        <option>Normal Bifurcating vessel with calcification.</option>
                        <option>Trifurcating vessel with mild distal tappering.</option>
                        <option>Trifurcating vessel with moderate ostial stenosis.</option>
                        <option>Mild ostial disease and continues as LAD.</option>
                        <option>Normal short Bifurcating vessel</option>
                        <option>Normal Bifurcating vessel with intraluminal haziness in  Distal part.</option>
                        <option>Tight ostial stenosis</option>
                        <option>Trifurcating vessel with severe ectasia.</option>
                        <option>Trifurcating vessel mild ostial stenosis.</option>
                        <option>Normal Bifurcating vessel. Limited views due to renal dysfunction.</option>
                        <option>Normal Bifurcating vessel with clot at distal segment.</option>







                    </select>
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



