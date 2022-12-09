@extends('layouts.app_main')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb mt-7">
                <div class="pull-left">
                    <h2>Checked Patients</h2>
                </div>

            </div>
        </div>

<br>

        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Token No</th>
                <th>MR NO</th>
                <th>Name</th>
                <th>phone</th>
                <th>Action</th>
            </tr>
            @foreach ($patients as $patient)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $patient->token_no? $patient->token_no : $patient->token_no_s }}</td>
                <td>{{ $patient->mr_no }}</td>
                <td>{{ $patient->first_name }}</td>
                <td>{{ $patient->phone }}</td>
                <td><a class="btn btn-info" href="{{ route('patient_bill.show',$patient->id) }}">Show Bill</a></td>
                <td>

                </td>
            </tr>
            @endforeach
        </table>


        {{-- {!! $patients->links() !!} --}}

    </div>

@endsection
