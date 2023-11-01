@extends('layouts.app_main')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb mt-7">
            <div class="pull-left text-center">
                <h2> Show Patient</h2>
            </div>

        </div>
    </div>


    <div class="row">

        <!-- tadle section  -->
        <div class="container">
            <table class="table  table-bordered">

                <tbody>
                    <tr>
                        <th scope="row"> <strong>First Name:</strong></th>
                        <td> {{ $patient->first_name ? $patient->first_name : '' }}</td>

                        <th scope="row"><strong>MR No:</strong></th>
                        <td> {{ $patient->mr_no ? $patient->mr_no : '' }}</td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>Token No:</strong></th>
                        <td>{{ $patient->token_no? $patient->token_no : $patient->token_no_s }}</td>

                        <th scope="row"><strong>Second Name Type:</strong></th>
                        <td> {{ $patient->second_name_type ? $patient->second_name_type : '' }}</td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>Second Name:</strong></th>
                        <td>{{ $patient->second_name ? $patient->second_name : '' }}</td>

                        <th scope="row"> <strong>Age:</strong></th>
                        <td> {{ $patient->age ? $patient->age : '' }}</td>
                    </tr>
                    <tr>
                        <th scope="row"> <strong>Phone:</strong></th>
                        <td> {{ $patient->phone ? $patient->phone : '' }}</td>

                        <th scope="row"><strong>Cnic:</strong></th>
                        <td> {{ $patient->cnic ? $patient->cnic : '' }}</td>
                    </tr>
                    <tr>
                        <th scope="row"><strong>Gender:</strong></th>
                        <td>{{ $patient->gender ? $patient->gender : '' }}</td>

                        <th scope="row"> <strong>Address:</strong></th>
                        <td>{{ $patient->address ? $patient->address : '' }}</td>
                    </tr>
                    <tr>
                        <th scope="row"><strong>Patient Came With:</strong></th>
                        <td>{{ $patient->patient_came_with_name ? $patient->patient_came_with_name : '' }}</td>

                        <th scope="row"><strong>BP:</strong></th>
                        <td> {{ $patient->bp ? $patient->bp : '' }}</td>
                    </tr>
                    <tr>
                        <th scope="row"><strong>Sugar:</strong></th>
                        <td> {{ $patient->sugar ? $patient->sugar : '' }}</td>

                        <th scope="row"><strong>Temperature:</strong></th>
                        <td>{{ $patient->temperature ? $patient->temperature : '' }}</td>
                    </tr>
                    <tr>
                        <th scope="row"><strong>Status:</strong></th>
                        <td>{{ $patient->status ? $patient->status : '' }}</td>

                        <th scope="row"> <strong>Doctor Name:</strong></th>
                        <td> {{ $doctors->name ? $doctors->name : '' }}</td>
                    </tr>
                    <tr>
                        <th scope="row"><strong>Reference Name:</strong></th>
                        <td>{{ $references ? $references->name : '' }}</td>

                        <th scope="row"><strong>Condition:</strong></th>
                        <td>{{ $conditions->name ? $conditions->name : '' }}</td>
                    </tr>
                    <tr>
                        <th scope="row"> <strong>Department:</strong></th>
                        <td>{{ $departments->name ? $departments->name : '' }}</td>

                        <th scope="row"><strong>Procedures:</strong></th>
                        <td>
                            @foreach ($procedures as $procedure)
                            <ul>
                                <li>{{ $procedure->name }}</li>
                            </ul>

                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><strong>Discount:</strong></th>
                        <td> {{ $patient->discount? $patient->discount : 0 }}{{$patient->discount_type == 'fixed' ? '.00' : '%'}}
                        </td>

                        <th scope="row"> <strong>Total fee:</strong></th>
                        <td>{{ $patient->total_fee ? $patient->total_fee : '' }}</td>
                    </tr>
                    <tr>
                        <th scope="row"><strong>Added By:</strong></th>
                        <td> {{ $name_and_email ? $name_and_email : 'Not Specified'}}
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><strong>Added By:</strong></th>
                        <td> {{ $patient->created_at->format('d-m-Y') }}
                        </td>
                    </tr>



                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="pull-right ml-4">

    <a class="btn btn-primary" href="{{ route('patients.index') }}"><i class="fa fa-hand-o-left text-white" aria-hidden="true"></i> Back</a>
</div>

@endsection
