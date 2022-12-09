@extends('layouts.app_main')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb mt-7">
                <div class="pull-left">
                    <h2>All patients History &nbsp;&nbsp;&nbsp; <button class="btn btn-primary print2">Print List</button></h2>
                </div>

            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

<br>
            <div class="container">
                {{-- <select name="sec" id="sec1" class="form-control">
                    <option value="">Select Search By</option>
                    <option value="doc1">Search By Doctor</option>
                    <option value="dep1">Search By Department</option>
                </select><br> --}}
                <form action="{{ route('history.index') }}" method="GET">
                    @csrf

                <select name="doc" id="doc_id4" class="form-control docs1 ">
                    <option value="">select Doctor</option>
                    @foreach ($docs as $doc)
                        <option value="{{$doc->id}}">{{$doc->name}}</option>
                    @endforeach
                </select><br>
                <div class="col-md-12 pros4 d-none">
                    <div class="form-group">
                        <select name="pro" id="pro_id4"  style="width: 100%" class="form-control select2" >
                            {{-- <option value="">Select Procedures</option>
                            @foreach ($procedures as $procedure)
                                <option value="{{$procedure->id}}">{{$procedure->name}}</option>
                            @endforeach --}}
                        </select>
                    </div>
                </div>
                <label for="">From</label>
                <input type="datetime-local" name="from_date" id="from_date" class="form-control" placeholder="From Date" />
                <br>
                <label for="">To</label>
                <input type="datetime-local" name="to_date" id="to_date" class="form-control" placeholder="To Date" />
                <br><button class="btn btn-success" type="submit">search</button>
                </form>
            </div>
<br>
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('history.store') }}" method="POST">
                        @csrf
                    <table class="table table-bordered tbh1" id="printable2">
                        <thead>
                        <tr>
                            <th><input type="checkbox" id="checkAll"></th>
                            <th>No</th>
                            <th>MR#</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Sex</th>
                            <th>Cell No</th>
                            <th>Address</th>
                            <th>Doctor Name</th>
                            <th>Fee</th>
                            <th>Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($patients as $patient)
                        <tr>
                            <td><input type="checkbox" name="patient_id[]" value="{{ $patient->id }}"></td>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $patient->mr_no }}</td>
                            <td>{{ $patient->first_name }}</td>
                            <td>{{ $patient->age }}</td>
                            <td>{{ $patient->gender }}</td>
                            <td>{{ $patient->phone }}</td>
                            <td>{{ $patient->address }}</td>
                            <td>{{ $patient->doc_name }}</td>

                            {{-- @foreach ($patient->procedures as $pro)
                                <tr>
                                    <td>
                                        {{$pro->name}}
                                    </td>
                                </tr>
                            @endforeach --}}
                            <td>{{ $patient->total_fee }}</td>
                            <td>{{ $patient->created_at->format('m/d/Y') }}</td>

                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                    <button type="submit" class="btn btn-warning">close</button>
                    </form>
                </div>
            </div>



        {{-- {!! $patients->links() !!} --}}

    </div>

@endsection

@section('footer')
    {{-- <script>
         $(function(){
            $('#sec1').change(function(){
                if ($('#sec1').val() == 'doc1') {
            $('.docs1').removeClass('d-none');
            $('.deps1').addClass('d-none');
            return;
        } else {
            $('.deps1').removeClass('d-none');
            $('.docs1').addClass('d-none');
        }
            });

            // console.log(a);
        });
    </script> --}}

<script>
    $(function() {
             $('.print2').on('click', function() {
                $('#printable2').printThis();
             });
         });
</script>
<script>
    $('#checkAll').click(function () {
     $('input:checkbox').prop('checked', this.checked);
 });

</script>

@endsection
@section('scripts')
<script>
    $(document).ready(function() {
    $('#doc_id4').on('change', function() {

       var doc_id = $(this).val();
       console.log(doc_id);
    //    var companyID = $("#company2_id").val();
    //    console.log(cityID);
       if(doc_id) {
           $.ajax({
              //  url: '/state/'+stateID,
              url: "{{url('/doctor_procedures_history')}}/"+doc_id,
               type: "GET",
               data : {"_token":"{{ csrf_token() }}"},
               dataType: "json",
               success:function(data) {
                   //console.log(data);
                 if(data){
                   $('.pros4').removeClass('d-none');
                   $('#pro_id4').empty();
                   $('#pro_id4').focus;
                   $('#pro_id4').append('<option value="">-- Choose Procedures --</option>');
                   $.each(data, function(key, value){
                   $('select[name="pro"]').append('<option value="'+ value.id +'">' + value.name+'</option>');
               });
             }else{
               $('#pro_id4').empty();
             }
             }
           });
       }else{
         $('#pro_id4').empty();
       }
    });
    });
    </script>
<script>
    $(document).ready(function() {
        $(".select2").select2({
        placeholder: "-- Choose Procedure --"
        });
    });
</script>
<script>
    $(document).ready( function () {
        $('.tbh1').DataTable();
    } );
</script>
@endsection
