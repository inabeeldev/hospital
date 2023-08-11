@extends('layouts.app_main')

@section('content')

<div class="container mt-7 token-main" id="printable50">

    <div class="token-main-inner">

    <h3>Ghazala Hospital & Cardiac center</h3>
    </div>


      <div class="token-main-inner">
    <p style="font-size:12px">Taufail Shaheed Road, Near Ayesha Park, Sheikhupura</p>
    </div>



      <div class="token-main-inner">
      <div class="inner"><p style="font-size:12px; margin-bottom:30px; text-align:center">Contact Us : 056-3614646</p></div>

    </div>
      <div class="token-main-inner">
          <div class="inner">  <h6>Date : {{ $patient->created_at->format('d M Y') }}</h6></div>
    <h6>MR NO : {{$patient->mr_no}}</h6>
    </div>
    <div class="inner token-num">
    @if ($patient->token_no)
              <h6 class="text-center">Token No :</h6>
              <p>{{$patient->token_no}}</p>
                @else
              <h6 class="text-center">Token No : </h6>
              <p>{{$patient->token_no_s}}</p>
              @endif
              </div>

                  <div class="token-main-inner">
<div class="inner">    <h6>Name : {{$patient->first_name}}</h6></div>
<div class="inner">   <h6>S/O, W/O : {{$patient->patient_came_with_name}}</h6></div>

    </div>

    <div class="token-main-inner">
        <div class="inner">
    <h6>Age : {{$patient->age}}</h6>
    </div>
    <div class="inner">
    <h6>Gender : {{$patient->gender}}</h6>
    </div>
    </div>
     <div class="token-main-inner">
         <div class="inner">
    <h6>Procedures :</h6>
    @foreach ($procedures as $procedure)
        <ul type="i">
            <li>{{ $procedure->name }}</li>
        </ul>

    @endforeach
    </div>
    <div class="inner">
    <h6>Doctor : {{ $doctors->name }}</h6>
    </div>
</div>
<br>
   <div class="token-main-inner" style="justify-content:flex-start">

    <h5>Total Fee : {{$total_fees}}</h5>
    {{-- @if ($patient->discount_type)
        @if ($patient->discount_type == 'fixed')
        <h5>Total Discount : {{$discount_fixed}}</h5>
    @else
        <h5>Total Discount : {{$discount_percent}}</h5>
    @endif
    @else
    <h6>No Discount</h6>
    @endif

    @if ($patient->discount_type)
        @if ($patient->discount_type == 'fixed')
        <h5>Total Balance : {{$total_fee_fixed}}</h5>
        @else
        <h5>Total Balance : {{$total_fee_percent}}</h5>
        @endif
    @else
    <h5>Total Balance : {{ $total_fees}}</h5>
    @endif --}}
</div>
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
