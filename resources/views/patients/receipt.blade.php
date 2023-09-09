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
          <div class="inner">  <h6>Date : {{ $date->format('d M Y') }}</h6></div>
    <h6>MR NO : {{$mr_no}}</h6>
    </div>
    <div class="inner token-num">
    @if ($token_no)
              <h6 class="text-center">Token No :</h6>
              <p>{{$token_no}}</p>
                @else
              <h6 class="text-center">Token No : </h6>
              <p>{{$token_no_s}}</p>
              @endif
              </div>

                  <div class="token-main-inner">
<div class="inner">    <h6>Name : {{$first_name}}</h6></div>
<div class="inner">   <h6>S/O, W/O : {{$patient_came_with_name}}</h6></div>

    </div>

    <div class="token-main-inner">
        <div class="inner">
    <h6>Age : {{$age}}</h6>
    </div>
    <div class="inner">
    <h6>Gender : {{$gender}}</h6>
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
    <h6>Doctor : {{ $doc_name->name }}</h6>
    </div>
</div>
<br>
   <div class="token-main-inner" style="style="display : block;>

    <h5>Total Fee : {{$total_fees}}</h5>
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
</div>

<div class="container">
    <div class="row mb-4">
        <a class="btn btn-primary mx-auto" href="{{route('patients.index')}}">
            Go Back
        </a>
    <button class="print50 mx-auto btn btn-success">
      Print this
    </button><br>
</div>
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
