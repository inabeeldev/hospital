@extends('layouts.app_main')

@section('content')

<div class="container mt-7" id="printable50">
    <h3>Ghazala Hospital & Cardiac center</h3><br>
    <p>Taufail Shaheed Road, Near Ayesha Park, Sheikhupura</p><br>
    <p>Contact Us : 056-3614646</p><br>
    <h6>Date : {{ $patient->created_at->format('d M Y') }}</h6><br>
    <h6>MR NO : {{$patient->mr_no}}</h6><br>
    @if ($patient->token_no)
              <h6 class="text-center">Token No : {{$patient->token_no}}</h6>
                @else
              <h6 class="text-center">Token No : {{$patient->token_no_s}}</h6>
              @endif
    <h6>Name : {{$patient->first_name}}</h6>
    <h6>S/O, W/O : {{$patient->patient_came_with_name}}</h6>
    <h6>Age : {{$patient->age}}</h6>
    <h6>Gender : {{$patient->gender}}</h6>
    <h6>Procedures :</h6>
    @foreach ($procedures as $procedure)
        <ul>
            <li>{{ $procedure->name }}</li>
        </ul>

    @endforeach
    <h6>Doctor : {{ $doctors->name }}</h6>

    <h6>Total Fee : {{$total_fees}}</h6>
    {{-- @if ($patient->discount_type)
        @if ($patient->discount_type == 'fixed')
        <h6>Total Discount : {{$discount_fixed}}</h6>
    @else
        <h6>Total Discount : {{$discount_percent}}</h6>
    @endif
    @else
    <h6>No Discount</h6>
    @endif

    @if ($patient->discount_type)
        @if ($patient->discount_type == 'fixed')
        <h6>Total Balance : {{$total_fee_fixed}}</h6>
        @else
        <h6>Total Balance : {{$total_fee_percent}}</h6>
        @endif
    @else
    <h6>Total Balance : {{ $total_fees}}</h6>
    @endif --}}

</div>

    <button class="print50 btn btn-success">
      Print this
    </button><br>

    <a class="btn btn-primary" href="{{route('patients.index')}}">
        Go Back
    </a>


@endsection


@section('scripts')
<script>
    $(function() {
             $('.print50').on('click', function() {
                $('#printable50').printThis();
             });
         });
</script>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
@endsection
