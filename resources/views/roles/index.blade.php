@extends('layouts.app_main')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb mt-7">
            <div class="pull-left">
                <h2>Role Management</h2>
            </div>
            <div class="pull-right">
            {{-- @can('role-create') --}}
                <a class="btn btn-success" href="{{ route('roles.create') }}"> Create New Role</a>
                {{-- @endcan --}}
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
         <th width="">Action</th>
      </tr>
        @foreach ($roles as $key => $role)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $role->name }}</td>
            <td>
            <div class="btn-group" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-info"><a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a></button>

  <button type="button" class="btn btn-primary"><a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a></button>

  <button type="button" class="btn btn-danger">
                    {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('Delete', ['class' => ' btn btn-danger']) !!}
                    {!! Form::close() !!}
  </button>
  
</div>
              
            </td>
        </tr>
        @endforeach
    </table>


    {!! $roles->render() !!}


</div>
@endsection
