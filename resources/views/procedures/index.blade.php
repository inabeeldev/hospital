@extends('layouts.app_main')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb mt-7">
                <div class="pull-left">
                    <h2>procedures</h2>
                </div>
                <div class="pull-right">
                    @can('procedure-create')
                    <a class="btn btn-success" href="{{ route('procedures.create') }}"> Create New procedure</a>
                    @endcan
                </div>
            </div>
        </div>
        <br>


        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif


        <table class="table table-bordered display nowrap"  id="tab4">
            <thead>
            <tr>
                <th>No</th>
                <th>Procedure Name</th>
                <th>Doctor Name</th>
                <th>Fee</th>
                <th width="280px">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($procedures as $procedure)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $procedure->name }}</td>
                <td>{{ $procedure->doc_name }}</td>
                <td>{{ $procedure->fee }}</td>
                <td>
                    <form action="{{ route('procedures.destroy',$procedure->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('procedures.show',$procedure->id) }}">Show</a>
                        @can('procedure-edit')
                        <a class="btn btn-primary" href="{{ route('procedures.edit',$procedure->id) }}">Edit</a>
                        @endcan


                        @csrf
                        @method('DELETE')
                        @can('procedure-delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                        @endcan
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>


    </div>

@endsection

@section('scripts')
<script>
    $(document).ready(function() {
$('#tab4').DataTable( {
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
