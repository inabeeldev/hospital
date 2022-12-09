@extends('layouts.app_main')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb mt-7">
                <div class="pull-left">
                    <h2>conditions</h2>
                </div>
                <div class="pull-right">
                    @can('condition-create')
                    <a class="btn btn-success" href="{{ route('conditions.create') }}"> Create New condition</a>
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
            @foreach ($conditions as $condition)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $condition->name }}</td>
                <td>
                    <form action="{{ route('conditions.destroy',$condition->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('conditions.show',$condition->id) }}">Show</a>
                        @can('condition-edit')
                        <a class="btn btn-primary" href="{{ route('conditions.edit',$condition->id) }}">Edit</a>
                        @endcan


                        @csrf
                        @method('DELETE')
                        @can('condition-delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                        @endcan
                    </form>
                </td>
            </tr>
            @endforeach
        </table>


        {!! $conditions->links() !!}

    </div>

@endsection
