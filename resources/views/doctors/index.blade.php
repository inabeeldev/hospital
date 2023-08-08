@extends('layouts.app_main')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb mt-7">
                <div class="pull-left">
                    <h2>Doctors</h2>
                </div>
                {{-- <div class="pull-right">
                    @can('doctor-create')
                    <a class="btn btn-success" href="{{ route('doctors.create') }}"> Create New Doctor</a>
                    @endcan
                </div> --}}
            </div>
        </div>


        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif


        <table class="table table-bordered display nowrap" id="tab2">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    {{-- <th width="280px">Action</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($doctors as $doctor)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $doctor->name }}</td>
                <td>{{ $doctor->email }}</td>
            </tr>
            @endforeach
            </tbody>
        </table>


        {{-- {!! $doctors->links() !!} --}}

    </div>

@endsection
@section('scripts')

    <script>
        $(document).ready(function() {
    $('#tab2').DataTable( {
        paging: true,
        select: true,
        dom: 'lBfrtip',
        buttons: [
            { extend: 'pdf', className: 'btn btn-primary' },
            { extend: 'print', className: 'btn btn-warning' },
            { extend: 'excel', className: 'btn btn-success' },
            { extend: 'copy', className: 'btn btn-info' }
        ]
        } );
    } );
    </script>
@endsection
