@extends('layouts.app_main')

@section('content')
    <!-- Main Container -->
    <main id="main-container">
        <!-- Hero -->
        {{-- <form action="{{ route('patients.update',$patient->id) }}" method="POST">
            @csrf
            @method('PUT') --}}
            {!! Form::model($patient, array('route' => array('patients.update', $patient->id))) !!}
            @method('PUT')
            <div class="patient-rec-g-detail">
            <div class="bg-body-light">
                <div class="content content-full">
                    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                        <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Receptionist Area</h1>
                        <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Receptionist isit</li>
                                <li class="breadcrumb-item active" aria-current="page">Edit patient Detail</li>
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
                <h2 class="content-heading">Edit patient Detail </h2>
                <div class="row">
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Token No:</label>
                            <input type="text" name="token_no" value="{{ $patient->token_no }}" class="form-control" id="staticEmail"
                                placeholder="Enter Token No">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="first_name" value="{{ $patient->first_name }}" class="form-control" id="staticEmail"
                                placeholder="Enter a patient first name">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="example-select">Second name type</label>
                            <select class="form-control" id="example-select" name="second_name_type">

                                <option value="">F/Select second name value</option>
                                <option value="father" {{ $patient->second_name_type == 'father' ? 'selected' : '' }}>F/Name</option>
                                <option value="husband" {{ $patient->second_name_type == 'husband' ? 'selected' : '' }}>H/Name</option>
                                <option value="wd" {{ $patient->second_name_type == 'wd' ? 'selected' : '' }}>WD/Name</option>
                            </select>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label>Enter a Second name</label>
                            <input type="text" name="second_name" value="{{ $patient->second_name }}" class="form-control" id="staticEmail" placeholder="Enter Second name">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label>Age</label>
                            <input type="number" name="age" value="{{ $patient->age }}" class="form-control" id="staticEmail" placeholder="Enter patient age">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="example-select">Gender</label>
                            <select class="form-control" id="example-select" name="gender">
                                <option value="">Gender</option>
                                <option value="male" {{ $patient->gender == 'male' ? 'selected' : '' }}>Male</option>
                                <option value="female" {{ $patient->gender == 'female' ? 'selected' : '' }}>Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" value="{{ $patient->phone }}" class="form-control" id="staticEmail" placeholder="Enter phone number">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label>CNIC</label>
                            <input type="text" name="cnic" value="{{ $patient->cnic }}" class="form-control" id="staticEmail"
                                placeholder="Enter patient CNIC number">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="address" value="{{ $patient->address }}" class="form-control" id="staticEmail" placeholder="Enter patient Address">
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="example-select">Patient came with here</label>
                            <select class="form-control" id="example-select" name="patient_came_with">

                                <option value="">Select what's relation with patient</option>
                                <option value="family_member" {{ $patient->patient_came_with == 'family_member' ? 'selected' : '' }}>Family member</option>
                                <option value="friend" {{ $patient->patient_came_with == 'friend' ? 'selected' : '' }}>Friend</option>
                                <option value="stranger" {{ $patient->patient_came_with == 'stranger' ? 'selected' : '' }}>Stranger</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="form-group">
                            <label>Who came with patient</label>
                            <input type="text" class="form-control" value="{{ $patient->patient_came_with_name }}" id="staticEmail" name="patient_came_with_name"
                                placeholder="Enter name who come with patient">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="example-select">Reference</label>

                            {!! Form::select('reference_id', $references, null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="form-group">
                            <label>Reference name</label>
                            <input type="text" class="form-control" value="{{ $patient->reference_name }}" id="staticEmail" name="reference_name"
                                placeholder="Enter Reffrance name / Add more detail">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="patient-res-reff">
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
                            {{-- <select class="form-control" id="example-select" name="department_id">
                                <option value="">Select Department</option>
                                @foreach ($departments as $department)
                                    <option value="{{$department->id}}">{{$department->name}}</option>
                                @endforeach
                            </select> --}}
                            {!! Form::select('department_id', [''=> 'Select Department'] + $departments, null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="example-select">Refer By doctor name</label>
                            {{-- <select class="form-control" id="example-select" name="doctor_id">
                                <option value="">Select Doctor</option>
                                @foreach ($doctors as $doctor)
                                    <option value="{{$doctor->id}}">{{$doctor->name}}</option>
                                @endforeach
                            </select> --}}
                            {!! Form::select('doctor_id', [''=> 'Select Doctor'] + $doctors, null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="example-select">Refer according to patient Condition</label>
                            {{-- <select class="form-control" id="example-select" name="condition_id">
                                <option value="">Select Condition</option>
                                @foreach ($conditions as $condition)
                                    <option value="{{$condition->id}}">{{$condition->name}}</option>
                                @endforeach
                            </select> --}}
                            {!! Form::select('condition_id', [''=> 'Select Condition'] + $conditions, null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">How much patient Blood pressure</label>
                            <input type="text" class="form-control" value="{{ $patient->bp }}" id="staticEmail" name="bp"
                                placeholder="formate will be '80/12'">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">How much patient Sugar</label>
                            <input type="text" class="form-control" value="{{ $patient->sugar }}" id="staticEmail" name="sugar" placeholder="formate will be '200'">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">How much patient temperature</label>
                            <input type="text" class="form-control" value="{{ $patient->temperature }}" id="staticEmail" name="temperature" placeholder="formate will be '99'">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Selected Procedures</label>
                            @foreach ($p_procedures as $procedure)
                            <ul>
                                <li> {{$procedure->name}}</li>
                            </ul>
                            @endforeach

                        </div>
                    </div>
                    {{-- <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Select Procedures</label>
                            {{Form::select('procedure_id', $procedures,null,array('class'=>'form-control select2','multiple'=>'multiple','name'=>'procedure_id[]'))}}
                        </div>
                    </div> --}}
                    <div class="col-md-12 pros1">
                        <div class="form-group">
                            <label for="">Select Procedures</label>
                            <select name="procedure_id[]" style="width: 100%" class="form-control select2" multiple="multiple">
                                <option value="">Select Procedures</option>
                                @foreach ($procedures as $procedure)
                                    <option value="{{$procedure->id}}">{{$procedure->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="">Total Fee</label>
                            <input type="text" class="form-control" disabled value="{{ $patient->total_fee }}"  id="staticEmail" >
                        </div>
                    </div>


                </div>
                <div class="row">

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="example-select"></label>
                            {{-- <div class="form-group">
                                <label class="d-block">Procedure</label>
                                @foreach ($procedures as $procedure)
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="{{$procedure->id}}" id="opd"
                                        name="procedure_id">
                                    <label class="form-check-label" for="opd">{{$procedure->name}}</label>
                                </div>
                                @endforeach
                            </div>
                        </div> --}}
                    </div>

                </div>
            </div>
        </div>
        <br>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>




        <!-- END CKEditor 4 -->
        </div>
        <!-- END Page Content -->
        {{-- </form> --}}
        {!! Form::close() !!}
    </main>
    <!-- END Main Container -->

@endsection
@section('scripts')
<script>
    $(document).ready(function() {
        $(".select2").select2({
        multiple: true
        });
    });
</script>
@endsection
