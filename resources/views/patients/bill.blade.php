@extends('layouts.app_main')

@section('content')
<form action="{{ route('patients.store') }}" method="POST">
    @csrf
    <input type="hidden" name="mr_no" value="{{$mr_no}}">
    <input type="hidden" name="token_no" value="{{$token_no}}">
    <input type="hidden" name="first_name" value="{{$first_name}}">
    <input type="hidden" name="second_name" value="{{$second_name}}">
    <input type="hidden" name="second_name_type" value="{{$second_name_type}}">
    <input type="hidden" name="age" value="{{$age}}">
    <input type="hidden" name="gender" value="{{$gender}}">
    <input type="hidden" name="phone" value="{{$phone}}">
    <input type="hidden" name="cnic" value="{{$cnic}}">
    <input type="hidden" name="address" value="{{$address}}">
    <input type="hidden" name="patient_came_with" value="{{$patient_came_with}}">
    <input type="hidden" name="patient_came_with_name" value="{{$patient_came_with_name}}">
    <input type="hidden" name="reference_id" value="{{$reference_id}}">
    <input type="hidden" name="reference_name" value="{{$reference_name}}">
    <input type="hidden" name="department_id" value="{{$department_id}}">
    <input type="hidden" name="doctor_id" value="{{$doctor_id}}">
    <input type="hidden" name="condition_id" value="{{$condition_id}}">
    <input type="hidden" name="bp" value="{{$bp}}">
    <input type="hidden" name="sugar" value="{{$sugar}}">
    <input type="hidden" name="temperature" value="{{$temperature}}">
    {{-- <input type="hidden" name="procedure_id[]" value="{!! jsond_encode($procedure_id) !!}"> --}}
    @foreach($procedure_id as $procedure)
    <input type="hidden" name="procedure_id[]" value="{{ $procedure }}">
    @endforeach
    <input type="hidden" name="status" value="Unchecked">
    <div class="patient-res-payment">

    <div class="content res-payment-page ">
        <div class="row">
            <div class="col-lg-12">
                <div class="bg-body-light">
                    <div class="content content-full">
                        <div
                            class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Bill Detail</h1>
                            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">Patient</li>
                                    <li class="breadcrumb-item active" aria-current="page">Payment detail</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row payment-header">
            <div class="col-lg-2">
                <b> Sr#</b>
            </div>
            <div class="col-lg-2"><b>Services</b></div>
            <div class="col-lg-2"><b>Payment</b></div>
            <div class="col-lg-2 offset-lg-2"><b>Total Payment</b></div>

        </div>
        @foreach ($procedures as $procedure)

        <div class="row">
            <div class="col-lg-2">{{$loop->iteration}}</div>
            <div class="col-lg-2">{{$procedure->name}}</div>
            <div class="col-lg-2">{{$procedure->fee}}</div>
            <div class="col-lg-2 offset-lg-2">{{$procedure->fee}}</div>
        </div>
        @endforeach

        {{-- <div class="row">
            <div class="col-lg-2">
                2
            </div>
            <div class="col-lg-2">ECG</div>
            <div class="col-lg-2">10000/- Rs</div>
            <div class="col-lg-2">Temprature test</div>
            <div class="col-lg-2">50/- Rs</div>
            <div class="col-lg-2">1050/- Rs</div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                3
            </div>
            <div class="col-lg-2">Breast biopsy
            </div>
            <div class="col-lg-2">60000/- Rs</div>
            <div class="col-lg-2">Temprature test</div>
            <div class="col-lg-2">50/- Rs</div>
            <div class="col-lg-2">1050/- Rs</div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                4
            </div>
            <div class="col-lg-2">Carotid endarterectomy</div>
            <div class="col-lg-2">4000/- Rs</div>
            <div class="col-lg-2">Temprature test</div>
            <div class="col-lg-2">50/- Rs</div>
            <div class="col-lg-2">1050/- Rs</div>
        </div>

        <div class="row payment-bottom">
            <div class="col-lg-2"></div>
            <div class="col-lg-2"></div>
            <div class="col-lg-2"></div>
            <div class="col-lg-2"></div>
            <div class="col-lg-2"></div>
            <div class="col-lg-2"><b>5000/- Rs</b></div>
        </div> --}}
        <div class="row discount">
            <div class="col-lg-2"></div>
            <div class="col-lg-2"></div>
            <div class="col-lg-2"></div>
            <div class="col-lg-2">Enter a Discount</div>
            <div class="col-lg-2">
                <select name="discount_type" id="">
                    <option value="">Select Discount type</option>
                    <option value="percent">Discount in %</option>
                    <option value="fixed">Discount in Fixed price</option>
                </select>
            </div>

            <div class="col-lg-2"><input type="text"  name="discount"></div>

        </div>
        <div class="row discount">
            <div class="col-lg-2"></div>
            <div class="col-lg-2"></div>
            <div class="col-lg-2"></div>
            <div class="col-lg-2"></div>
            <div class="col-lg-2">
                <b>Total Price</b>
            </div>

            <div class="col-lg-2">{{$procedures->sum('fee')}}/- RS</div>
            <input type="hidden" name="total_fee" value="{{$procedures->sum('fee')}}">
            <div class="col-lg-12 d-flex justify-content-center">
                <button type="submit" value="Submit" class="btn btn-success" id="patient-detail">Submit &
                    Finish</button>
            </div>
        </div>

    </div>

</div>
</form>

@endsection
