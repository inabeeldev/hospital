@extends('dscreen.layout')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb mt-7">
            <div class="pull-left">
                <h2>Today Date : {{ date('d-m-Y') }}</h2>
                <h2>Patients</h2>
                <h4>Total Patients : {{$patients->count()}}</h4>

            </div>

        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Token No</th>
            <th>MR NO</th>

            <th>Name</th>
            <th>phone</th>
            <th>Total Fee</th>
            <th width="200px">Action</th>
            <th width="200px">Status</th>
        </tr>
        @foreach ($patients as $patient)
        <tr>
            <td>{{ ++$i }}</td>

            <td>{{ $patient->token_no? $patient->token_no : $patient->token_no_s }}</td>
            <td>{{ $patient->mr_no }}</td>

            <td>{{ $patient->first_name }}</td>
            <td>{{ $patient->phone }}</td>
            <td>{{ $patient->total_fee }}</td>
            <td>

                    <a class="btn btn-info" href="{{ route('doctor-screen.edit',$patient->id) }}">Show</a>

            </td>
            <td class="badge {{ $patient->status == 'Checked' ? 'badge-success' : 'badge-danger' }} ">{{ $patient->status }}</td>
        </tr>
        @endforeach
    </table>


    {!! $patients->links() !!}

</div>
@endsection
