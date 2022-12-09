@extends('layouts.app_main')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb mt-7">
                <div class="pull-left">
                    <h2>Closed patients</h2>
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
                    <th>Doctor Name</th>

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
                    <td>{{ $patient->doc_name }}</td>

                    <td>{{ $patient->phone }}</td>
                    <td>

                            <a class="btn btn-info" href="{{ route('consultants.show',$patient->id) }}">Show</a>

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
