

@extends('layouts.app_main')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb mt-7">
                <div class="pull-left">
                    <h2>consultants </h2>
                </div>

            </div>
        </div>

        <div class="container">
            <form action="{{ route('consultants.index') }}" method="GET">
                @csrf

            <select name="consultant_id" id="" class="form-control docs1 ">
                <option value="">select Closing #</option>
                @foreach ($cc as $c)
                    <option value="{{$c->consultant_id}}">{{$c->consultant_id}}</option>
                @endforeach
            </select><br>
            <button class="btn btn-success" type="submit">search</button>
            </form>
        </div>

        <br>
        <div class="text-center">
            <button class="btn btn-primary printco">Print</button>
        </div>

        <table class="table table-bordered printableco" id="tbc1">
            <thead>
                <tr>
                    <th>MR #</th>
                    <th>patient Name</th>
                    <th>Doctor Name</th>
                    <th>Fee</th>
                </tr>
            </thead>

            <tbody>
            @foreach ($patients as $pat)
            <tr>
                <td>{{ $pat->mr_no }}</td>
                <td>{{ $pat->first_name }}</td>
                <td>{{ $pat->doc_name }}</td>
                <td>{{ $pat->total_fee }}</td>

            </tr>

            @endforeach
        </tbody>
        </table>
<br>
        <table class="table table-bordered">
            <tr>
                <th>Total Patients</th>
                <th>Total Amount</th>

            </tr>

            <tr>
                <td>{{ $patients->count() }}</td>
                <td>{{$patients->sum('total_fee')}}</td>

            </tr>
        </table>


    </div>


@endsection
@section('scripts')
    <script>
        $(document).ready( function () {
            $('#tbc1').DataTable();
        } );
    </script>
    <script>
        $(function() {
                 $('.printco').on('click', function() {
                    $('.printableco').printThis();
                 });
             });
    </script>
@endsection
