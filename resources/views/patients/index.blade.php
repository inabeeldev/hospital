@extends('layouts.app_main')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb mt-7">
                <div class="pull-left">
                    <h2>patients</h2>
                </div>
                <div class="pull-right">
                    @can('patient-create')
                    <a class="btn btn-success" href="{{ route('patients.create') }}"> Create New patient</a>
                    @endcan
                </div>
            </div>
        </div>


        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
<br>

        {{-- <table class="table table-bordered display nowrap" id="tb1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Token No</th>
                    <th>MR NO</th>
                    <th>Name</th>

                    <th>phone</th>
                    <th>Date</th>

                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($patients as $patient)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $patient->token_no? $patient->token_no : $patient->token_no_s }}</td>
                    <td>{{ $patient->mr_no }}</td>
                    <td>{{ $patient->first_name }}</td>

                    <td>{{ $patient->phone }}</td>
                    <td>{{ $patient->created_at->format('d-m-Y') }}</td>
                    <td>
                        <form action="{{ route('patients.destroy',$patient->id) }}" method="POST">
                            <a class="btn btn-info btn-sm" href="{{ route('patients.show',$patient->id) }}">Show</a>
                            @can('patient-edit')
                            @if ($patient->closed == 0)
                            <a class="btn btn-primary btn-sm" href="{{ route('patients.edit',$patient->id) }}">Edit</a>
                            @else
                            <a class="btn btn-info btn-sm" onclick="return false;" href="{{ route('patients.edit',$patient->id) }}">Edit</a>
                            @endif
                            @endcan
                            @csrf
                            @method('DELETE')
                            @can('patient-delete')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            @endcan
                            <a class="btn btn-primary btn-warning btn-sm" href="{{ route('patients.print',$patient->id) }}">token</a>
                            </form>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table> --}}


        <table id="examplewb12" class="table table-bordered data-table1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Token No</th>
                    <th>MR NO</th>
                    <th>Name</th>
                    <th>phone</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

            </tbody>

        </table>
        {{-- {!! $patients->links() !!} --}}

    </div>

@endsection

@section('scripts')



<script type="text/javascript">
    $(function () {

      var table = $('#examplewb12').DataTable({
          processing: true,
          serverSide: true,
          select: true,
        dom: 'lBfrtip',
        buttons: [
            { extend: 'pdf', className: 'btn btn-primary' },
            { extend: 'print', className: 'btn btn-warning' },
            { extend: 'excel', className: 'btn btn-success' },
            { extend: 'copy', className: 'btn btn-info' }
        ],
          ajax: "{{ route('patients.index') }}",
          columns:
        [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'mr_no', name: 'mr_no'},
            {
                data: 'token_no',
                name: 'token_no',
                render: function (data, type, full, meta) {
                    // Use the 'token_no_s' value if 'token_no' is empty
                    return data ? data : full.token_no_s;
                }
            },
            {data: 'first_name', name: 'first_name'},
            {data: 'phone', name: 'phone'},
            {
                data: 'created_at',
                name: 'created_at',
                render: function (data, type, full, meta) {
                    // Format the date using JavaScript Date object
                    var date = new Date(data);
                    return date.toLocaleDateString('en-US');
                }
            },
            {
                data: 'action',
                name: 'action',
                orderable: false,
                searchable: false,
                render: function (data, type, full, meta) {
                    var buttonsHtml = `
                        <a class="btn btn-info btn-sm" href="{{ route('patients.show', ':id') }}">Show</a>
                    `;

                    @can('patient-edit')
                    if (full.closed === 0) {
                        buttonsHtml += `
                            <a class="btn btn-primary btn-sm" href="{{ route('patients.edit', ':id') }}">Edit</a>
                        `;
                    } else {
                        buttonsHtml += `
                            <a class="btn btn-info btn-sm" href="{{ route('patients.edit', ':id') }}">Edit</a>
                        `;
                    }
                    @endcan

                    buttonsHtml += `
                        <form action="{{ route('patients.destroy', ':id') }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            @can('patient-delete')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            @endcan
                        </form>
                        <a class="btn btn-primary btn-warning btn-sm" href="{{ route('patients.print', ':id') }}">Token</a>
                    `;

                    return buttonsHtml.replace(/:id/g, full.id);
                }
            },
        ]
      });

    });
  </script>

@endsection
