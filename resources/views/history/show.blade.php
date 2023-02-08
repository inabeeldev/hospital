@extends('layouts.app_main')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb mt-7">
                <div class="pull-left">
                    <h2>Closing # <strong>{{$cid}}</strong> &nbsp;&nbsp;&nbsp; <button class="btn btn-primary print3">Print List</button></h2>
                </div>
                <div class="pull-left">
                   <a class="btn btn-primary print2" href="{{ route('history.index') }}">Go back</a>
                </div>

            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif


<br>
            <div id="printable3">
                <h2>Closing # <strong>{{$cid}}</strong></h2>

            <div class="row">

                    <table class="table table-bordered" >
                        <tr>
                            <th>Doctor Name</th>
                            <th>total patients</th>
                            <th>Total Fee</th>

                        </tr>
                        <tr>
                            <td>{{ $closed_docs->doc_name }}</td>
                            <td>{{ $closed_patients->count() }}</td>
                            <td>{{ $closed_patients->sum('total_fee') }}</td>


                        </tr>
                    </table>

                </div>


<br>

            <div class="row ml-5 mr-5">

                <table class="table table-bordered" >
                    <tr>
                        <th>#</th>
                        <th>Patient Name</th>
                        <th>Patient Phone</th>
                        <th>patient Procedures</th>
                        <th>Fee Received</th>

                    </tr>
                    @foreach ($closed_patients as $closed_patient)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $closed_patient->first_name }}</td>
                        <td>{{ $closed_patient->phone }}</td>
                        <td>
                            <table>
                            @foreach ($closed_patient->procedures as $pros)
                            <tr>
                                <td>Name : {{ $pros->name }}</td>
                                <td>Fee : {{ $pros->fee }}</td>
                            </tr>
                        @endforeach
                    </table>
                        </td>
                        <td>{{ $closed_patient->total_fee }}</td>


                    </tr>
                    @endforeach

                </table>

            </div>
        </div>
        </div>



        {{-- {!! $patients->links() !!} --}}

    </div>

@endsection


@section('footer')
<script>
    $(function() {
             $('.print3').on('click', function() {
                $('#printable3').printThis();
             });
         });
</script>
@endsection

