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


        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                {{-- <th width="280px">Action</th> --}}
            </tr>
            @foreach ($doctors as $doctor)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $doctor->name }}</td>
                <td>{{ $doctor->email }}</td>
                {{-- <td>
                    <form action="{{ route('doctors.destroy',$doctor->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('doctors.show',$doctor->id) }}">Show</a>
                        @can('doctor-edit')
                        <a class="btn btn-primary" href="{{ route('doctors.edit',$doctor->id) }}">Edit</a>
                        @endcan


                        @csrf
                        @method('DELETE')
                        @can('doctor-delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                        @endcan
                    </form>
                </td> --}}
            </tr>
            @endforeach
        </table>


        {!! $doctors->links() !!}

    </div>

@endsection
