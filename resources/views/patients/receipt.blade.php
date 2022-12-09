@extends('layouts.app_main')

@section('content')

<div class="container mt-7" id="printable">
    <h3>Ghazala Hospital & Cardiac center</h3><br>
    <p>Taufail Shaheed Road, Near Ayesha Park, Sheikhupura</p><br>
    <p>Contact Us : 056-3614646</p><br>
    <h6>Date : {{ $date->format('d M Y') }}</h6><br>
    <h6>MR NO : {{$mr_no}}</h6><br>
    <h6>TOKEN NO : {{$token_no}}</h6><br>
    <h6>Name : {{$first_name}}</h6>
    <h6>S/O, W/O : {{$patient_came_with_name}}</h6>
    <h6>Age : {{$age}}</h6>
    <h6>Gender : {{$gender}}</h6>
    <h6>Procedures :</h6>
    @foreach ($procedures as $procedure)
    <h6>{{$procedure->name}}</h6>
    @endforeach
    <h6>Doctor : {{$doc_name->name}}</h6>

    <h6>Total Fee : {{$total_fees}}</h6>
    @if ($discount_type)
        @if ($discount_type == 'fixed')
        <h6>Total Discount : {{$discount_fixed}}</h6>
        @else
        <h6>Total Discount : {{$discount_percent}}</h6>
        @endif
    @else
    <h6>No Discount</h6>
    @endif

    @if ($discount_type)
        @if ($discount_type == 'fixed')
        <h6>Total Balance : {{$total_fee_fixed}}</h6>
        @else
        <h6>Total Balance : {{$total_fee_percent}}</h6>
        @endif
    @else
    <h6>Total Balance : {{$total_fees}}</h6>
    @endif

</div>

    <button class="print btn btn-success">
      Print this
    </button><br>

    <a class="btn btn-primary" href="{{route('patients.index')}}">
        Go Back
    </a>


@endsection


@section('scripts')
<script>
    $(function() {
             $('.print').on('click', function() {
                $('#printable').printThis();
             });
         });
</script>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
@endsection
