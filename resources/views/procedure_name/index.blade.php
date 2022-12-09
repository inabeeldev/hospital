@extends('layouts.app_main')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb mt-7">
                <div class="pull-left">
                    <h2>Procedure Names</h2>
                </div>
                <div class="pull-right">
                    @can('procedure-create')
                    <a class="btn btn-success" href="{{ route('procedure_names.create') }}"> Create New Procedure Name</a>
                    @endcan
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
                <th>Name</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($procedures as $procedure)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $procedure->name }}</td>
                <td>
                    <form action="{{ route('procedure_names.destroy',$procedure->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('procedure_names.show',$procedure->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('procedure_names.edit',$procedure->id) }}">Edit</a>



                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>



    </div>

@endsection
