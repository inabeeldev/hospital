@extends('layouts.app_main')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb mt-7">
                <div class="pull-left">
                    <h2>patients</h2>
                </div>
                <div class="pull-right">
                    @can('patient-create')
                    <a class="btn btn-success" href="{{ route('patients.create') }}"> Create New patient</a>
                    @endcan
                </div>
            </div>
        </div>


        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
<br>

        <table class="table table-bordered" id="tb1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Token No</th>
                    <th>MR NO</th>
                    <th>Name</th>

                    <th>phone</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($patients as $patient)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $patient->token_no? $patient->token_no : $patient->token_no_s }}</td>
                    <td>{{ $patient->mr_no }}</td>
                    <td>{{ $patient->first_name }}</td>

                    <td>{{ $patient->phone }}</td>
                    <td>
                        <form action="{{ route('patients.destroy',$patient->id) }}" method="POST">
                            <a class="btn btn-info btn-sm" href="{{ route('patients.show',$patient->id) }}">Show</a>
                            @can('patient-edit')
                            @if ($patient->closed == 0)
                            <a class="btn btn-primary btn-sm" href="{{ route('patients.edit',$patient->id) }}">Edit</a>
                            @else
                            <a class="btn btn-info btn-sm" onclick="return false;" href="{{ route('patients.edit',$patient->id) }}">Edit</a>
                            @endif
                            @endcan
                            @csrf
                            @method('DELETE')
                            @can('patient-delete')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            @endcan
                            <a class="btn btn-primary btn-warning btn-sm" href="{{ route('patients.print',$patient->id) }}">token</a>
                            <a class="btn btn-primary btn-warning btn-sm" href="{{ route('patients.prescription',$patient->id) }}">Prescription</a>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>


        {{-- {!! $patients->links() !!} --}}

    </div>

@endsection

@section('scripts')
    <script>
        $(document).ready( function () {
            $('#tb1').DataTable();
        } );
    </script>
@endsection
