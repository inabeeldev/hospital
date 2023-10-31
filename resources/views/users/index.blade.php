@extends('layouts.app_main')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb mt-7">
            <div class="pull-left">
                <h2>Users Management</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
    @endif


    <table class="table table-bordered display nowrap" id="tab23">

     <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Roles</th>
            <th width="280px">Action</th>
          </tr>
     </thead>
     <tbody>
        @foreach ($data as $key => $user)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>
          @if(!empty($user->getRoleNames()))
            @foreach($user->getRoleNames() as $v)
               <label class="badge badge-success">{{ $v }}</label>
            @endforeach
          @endif
        </td>
        <td>
           <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
           <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
      </tr>
     @endforeach
     </tbody>
    </table>


    {{-- {!! $data->render() !!} --}}

</div>
@endsection

@section('scripts')

    <script>
        $(document).ready(function() {
    $('#tab23').DataTable( {
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
