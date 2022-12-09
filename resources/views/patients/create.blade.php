@extends('layouts.app_main')

@section('content')
    <!-- Main Container -->
    <main id="main-container">
        <!-- Hero -->
        <form action="{{ route('patients.info') }}" method="POST">
            @csrf
        <div class="patient-rec-g-detail">
            <div class="bg-body-light">
                <div class="content content-full">
                    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                        <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Receptionist Area</h1>
                        <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Receptionist isit</li>
                                <li class="breadcrumb-item active" aria-current="page">Add patient Detail</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- END Hero -->
            @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <!-- Page Content -->
            <div class="content">
                <!-- Summernote (.js-summernote + .js-summernote-air classes are initialized in Helpers.summernote()) -->
                <!-- For more info and examples you can check out http://summernote.org/ -->
                <h2 class="content-heading">Add patient Detail </h2>
                <div class="row">
                    {{-- <div class="col-lg-12">
                        <div class="form-group">
                            <label>MR No</label>
                            <input type="text" class="form-control" name="mr_no" id="staticEmail" placeholder="Enter MR No">
                        </div>
                    </div> --}}
                    {{-- <div class="col-lg-6">
                        <div class="form-group">
                            <label for="example-flatpickr-default">Date</label>
                            <input type="text" class="js-flatpickr form-control bg-white" id="example-flatpickr-default"
                            name="first_name" placeholder="Y-m-d">
                        </div>
                    </div> --}}
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Token No:</label>
                            <input type="text" name="token_no" class="form-control" id="staticEmail"
                                placeholder="Enter Token No">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="first_name" class="form-control fnm" id="staticEmail"
                                placeholder="Enter a patient first name">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="example-select">Second name type</label>
                            <select class="form-control" id="example-select" name="second_name_type">
                                <option value="">F/Select second name value</option>
                                <option value="father">F/Name</option>
                                <option value="husband">H/Name</option>
                                <option value="wd">WD/Name</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label>Enter a Second name</label>
                            <input type="text" name="second_name" class="form-control" id="staticEmail" placeholder="Enter Second name">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label>Age</label>
                            <input type="number" name="age" class="form-control" id="staticEmail" placeholder="Enter patient age">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="example-select">Gender</label>
                            <select class="form-control" id="example-select" name="gender">
                                <option value="">Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" class="form-control phn1" id="staticEmail" placeholder="Enter phone number">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label>CNIC</label>
                            <input type="text" name="cnic" class="form-control" id="staticEmail"
                                placeholder="Enter patient CNIC number">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control" id="staticEmail" placeholder="Enter patient Address">
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="example-select">Patient came with here</label>
                            <select class="form-control" id="example-select" name="patient_came_with">
                                <option value="0">Select what's relation with patient</option>
                                <option value="family_member">Family member</option>
                                <option value="friend">Friend</option>
                                <option value="stranger">Stanger</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="form-group">
                            <label>Who came with patient</label>
                            <input type="text" class="form-control" id="staticEmail" name="patient_came_with_name"
                                placeholder="Enter name who come with patient">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="example-select">Reference</label>
                            <select class="form-control" id="example-select" name="reference_id">
                                <option value="">Select Reference</option>
                                @foreach ($references as $reference)
                                    <option value="{{$reference->id}}">{{$reference->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="form-group">
                            <label>Reference name</label>
                            <input type="text" class="form-control" id="staticEmail" name="reference_name"
                                placeholder="Enter Reffrance name / Add more detail">
                        </div>
                    </div>
                </div>
                <div class="alert alert-danger alert1 hide">
                    Please Enter First Name and Phone Number
                </div>
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <button type="button" class="btn btn-info" id="patient-detail">NEXT</button>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="patient-res-reff hide">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bg-body-light">
                        <div class="content content-full">
                            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                                <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Patient Refer Now</h1>
                                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">Patient</li>
                                        <li class="breadcrumb-item active" aria-current="page">Reff by Doctor</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="content">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="example-select">Refer By Department</label>
                            <select class="form-control" id="example-select" name="department_id">
                                <option value="">Select Department</option>
                                @foreach ($departments as $department)
                                    <option value="{{$department->id}}">{{$department->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="example-select">Refer By doctor name</label>
                            <select class="form-control" id="doc_id2" name="doctor_id">
                                <option value="">Select Doctor</option>
                                @foreach ($doctors as $doctor)
                                    <option value="{{$doctor->id}}">{{$doctor->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="example-select">Refer according to patient Condition</label>
                            <select class="form-control" id="example-select" name="condition_id">
                                <option value="">Select Condition</option>
                                @foreach ($conditions as $condition)
                                    <option value="{{$condition->id}}">{{$condition->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
{{--
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="example-select"></label>
                            <div class="form-group">
                                <label class="d-block">Initial patient test</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="" id="example-checkbox-inline1"
                                        name="example-checkbox-inline1">
                                    <label class="form-check-label" for="example-checkbox-inline1">Blood preasure
                                        test</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="" id="example-checkbox-inline2"
                                        name="example-checkbox-inline2">
                                    <label class="form-check-label" for="example-checkbox-inline2">Suger test</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="" id="example-checkbox-inline3"
                                        name="example-checkbox-inline3">
                                    <label class="form-check-label" for="example-checkbox-inline3">Temprature test</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">How much patient Blood pressure</label>
                            <input type="text" class="form-control" id="staticEmail" name="bp"
                                placeholder="formate will be '80/12'">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">How much patient Sugar</label>
                            <input type="text" class="form-control" id="staticEmail" name="sugar" placeholder="formate will be '200'">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">How much patient temperature</label>
                            <input type="text" class="form-control" id="staticEmail" name="temperature" placeholder="formate will be '99'">
                        </div>
                    </div>
                    <div class="col-md-12 pros1 d-none">
                        <div class="form-group">
                            <label for="">Select Procedures</label>
                            <select name="procedure_id[]" id="pro_id2"  style="width: 100%" class="form-control select2" multiple="multiple">
                                {{-- <option value="">Select Procedures</option>
                                @foreach ($procedures as $procedure)
                                    <option value="{{$procedure->id}}">{{$procedure->name}}</option>
                                @endforeach --}}
                            </select>
                        </div>
                    </div>
                </div>

                    <div class="col-lg-12 d-flex justify-content-center">
                        <button type="submit" id="patient-reff" class="btn btn-info">Next</button>
                    </div>
                </div>
            </div>
        </div>
        <br>






        <!-- END CKEditor 4 -->
        </div>
        <!-- END Page Content -->
        </form>
    </main>
    <!-- END Main Container -->

@endsection
@section('scripts')
    <script>
        $(document).ready(function(){

                $('#patient-detail').click(function(){
                    if ($(".fnm").val() == "") {
                        $(".fnm").validate();
                        $(".alert1").removeClass('hide');
                    }

                else{
                    $('.patient-res-reff').addClass('show');
                    $('.patient-res-reff').removeClass('hide');
                    $('.patient-rec-g-detail').addClass('hide');
                }
                });


                $('#patient-reff').click(function(){
                $('.patient-res-payment').addClass('show');
                $('.patient-res-reff').removeClass('show');
                $('.patient-res-reff').addClass('hide');
                    $('.patient-rec-g-detail').removeClass('show');
                    $('.patient-rec-g-detail').addClass('hide');
                })
                });


    </script>
    <script>
        $(document).ready(function() {
            $(".select2").select2({
            multiple: true,
            placeholder: "-- Choose Procedures --"
            });
        });
    </script>

<script>
    $(document).ready(function() {
    $('#doc_id2').on('change', function() {

       var doc_id = $(this).val();
    //    var companyID = $("#company2_id").val();
    //    console.log(cityID);
       if(doc_id) {
           $.ajax({
              //  url: '/state/'+stateID,
              url: "{{url('/doctor_procedures')}}/"+doc_id,
               type: "GET",
               data : {"_token":"{{ csrf_token() }}"},
               dataType: "json",
               success:function(data) {
                   //console.log(data);
                 if(data){
                   $('.pros1').removeClass('d-none');
                   $('#pro_id2').empty();
                   $('#pro_id2').focus;
                   $('#pro_id2').append('<option value="">-- Choose Procedures --</option>');
                   $.each(data, function(key, value){
                   $('select[name="procedure_id[]"]').append('<option value="'+ value.id +'">' + value.name+'</option>');
               });
             }else{
               $('#pro_id2').empty();
             }
             }
           });
       }else{
         $('#pro_id2').empty();
       }
    });
    });
    </script>

@endsection
