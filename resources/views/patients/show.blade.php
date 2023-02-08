@extends('layouts.app_main')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb mt-7">
            <div class="pull-left">
                <h2> Show Patient</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('patients.index') }}"> Back</a>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>First Name:</strong>
                {{ $patient->first_name ? $patient->first_name : '' }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>MR No:</strong>
                {{ $patient->mr_no ? $patient->mr_no : '' }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Token No:</strong>
                {{ $patient->token_no? $patient->token_no : $patient->token_no_s }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Second Name Type:</strong>
                {{ $patient->second_name_type ? $patient->second_name_type : '' }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Second Name:</strong>
                {{ $patient->second_name ? $patient->second_name : '' }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Age:</strong>
                {{ $patient->age ? $patient->age : '' }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Phone:</strong>
                {{ $patient->phone ? $patient->phone : '' }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cnic:</strong>
                {{ $patient->cnic ? $patient->cnic : '' }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gender:</strong>
                {{ $patient->gender ? $patient->gender : '' }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address:</strong>
                {{ $patient->address ? $patient->address : '' }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Patient Came With:</strong>
                {{ $patient->patient_came_with ? $patient->patient_came_with : '' }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Who came with patient:</strong>
                {{ $patient->patient_came_with_name ? $patient->patient_came_with_name : '' }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>BP:</strong>
                {{ $patient->bp ? $patient->bp : '' }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sugar:</strong>
                {{ $patient->sugar ? $patient->sugar : '' }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Temperature:</strong>
                {{ $patient->temperature ? $patient->temperature : '' }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status:</strong>
                {{ $patient->status ? $patient->status : '' }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Doctor Name:</strong>
                {{ $doctors->name ? $doctors->name : '' }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Reference Name:</strong>
                {{ $references ? $references->name : '' }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Condition:</strong>
                {{ $conditions->name ? $conditions->name : '' }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Department:</strong>
                {{ $departments->name ? $departments->name : '' }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Procedures:</strong>
                @foreach ($procedures as $procedure)
                <ul>
                    <li>{{ $procedure->name }}</li>
                </ul>

                @endforeach
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Discount:</strong>
                {{ $patient->discount? $patient->discount : 0 }}{{$patient->discount_type == 'fixed' ? '.00' : '%'}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Total fee:</strong>
                {{ $patient->total_fee ? $patient->total_fee : '' }}
            </div>
        </div>

    </div>
</div>

@endsection
