@extends('layouts.app_main')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb mt-7">
                <div class="pull-left">
                    <h2>references</h2>
                </div>
                <div class="pull-right">
                    @can('reference-create')
                    <a class="btn btn-success" href="{{ route('references.create') }}"> Create New reference</a>
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
            @foreach ($references as $reference)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $reference->name }}</td>
                <td>
                    <form action="{{ route('references.destroy',$reference->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('references.show',$reference->id) }}">Show</a>
                        @can('reference-edit')
                        <a class="btn btn-primary" href="{{ route('references.edit',$reference->id) }}">Edit</a>
                        @endcan


                        @csrf
                        @method('DELETE')
                        @can('reference-delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                        @endcan
                    </form>
                </td>
            </tr>
            @endforeach
        </table>


        {!! $references->links() !!}

    </div>

@endsection
