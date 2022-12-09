@extends('dscreen.layout')


@section('content')
<form action="{{ route('doctor-screen.update',$patient->id) }}" method="POST">


<div class="container-fluid docotor-screen">
    	@csrf
        @method('PUT')
    <div class="row">
        <input type="hidden" name="patient_id" value="{{$patient->id}}">

      <div class="col-lg-6">
        <h1 class="doctor-name text-center">{{Auth::user()->name}}</h1>
      </div>
      <div class="col-lg-6">
        <h1 class="text-center"><a class="link-fx font-w700 font-size-h1" href="index.html">
            <span class="text-dark">Ghazala</span><span class="text-primary">Hospital</span>
          </a>
          <a type="button" href="{{ route('doctor-screen.index')}}"  class="btn btn-info">All Patients</a>
        </h1>

      </div>

    </div>
    <div class="row d-flex justify-content-center">
      <div class="col-lg-12">
        <div class="doctor-edit-section">
          <div class="row">
            <div class="col-lg-12">
              <h1 class="text-center curent-pa" style="margin-bottom: 0px"> Current Paitent Detail</h1>
              @if ($patient->token_no)
              <h2 class="text-center">Token No : {{$patient->token_no}}</h2>
                @else
              <h2 class="text-center">Token No : {{$patient->token_no_s}}</h2>
              @endif
            </div>
            <div class="col-lg-10">


                <label for="">Name:
                <input type="text" value="{{$patient->first_name}}" disabled></label>
                    <label for="">Contact:
                <input type="text" value="{{$patient->phone}}" disabled>
                </label>

                <label for="">Age:
                <input type="text" value="{{$patient->age}}" disabled>
                </label>
                <label for="">Weight:
                <input type="text" value="unknown" disabled>
                </label>

                <label for="">Blood pressure:
                <input type="text" value="{{$patient->bp}}" disabled>
                </label>
                <label for="">Suger:
                <input type="text" value="{{$patient->sugar}}" disabled>
                </label>
                <br>
                <label for="">Fever:
                <input type="text" value="{{$patient->temperature}}" disabled>
                </label>
                <label for="">Uric acid:
                <input type="text" value="Unknown" disabled>
                </label>
                <br>
<div class="fee-section">

  <h3>fee:</h3>
  <label for="">
    Suger test
    <input type="text" value="100" disabled>
  </label>
  <label for="">
    Blog pressure test
    <input type="text" value="100" disabled>
  </label>
  <label for="">
    Temperature test
    <input type="text" value="100" disabled>
  </label>
  {{-- <label for="">
    {{$procedures->name}}
    <input type="text" value="{{$procedures->fee}}" disabled>
  </label> --}}

  <br>
  <br>
  <label for="">
    Discount
    <input type="text" value="{{$patient->discount ? $patient->discount : 'No Discount'}} - {{$patient->discount_type == 'fixed' ? 'Fixed' : '%'}}" disabled>
  </label>
<br>
<input type="hidden" name="total_fee" value="{{$patient->total_fee}}">
  <select name="discount_type" id="">
  <option value="">Select Discount Type</option>
  <option value="percent">Discount in %</option>
  <option value="fixed">Discount in Fixed price</option>
</select>
<label for="">
  <input type="text" name="discount" placeholder="enter a amount or %">
</label>
<h5>Total Price: {{$patient->total_fee}}</h5>
</div>

            </div>
            <div class="col-lg-2 ">

              <h6>Date: {{ date('d-m-Y') }}</h6>
              <h4 class="total-pa">Patient MR-No <span class="btn btn-sucess"><small>{{$patient->mr_no}}</small></span></h4>

              <h5>Procedures</h5>
              @foreach ($procedures as $procedure)

              <ul class="doc-pat-pro-list">
                <li>{{$loop->iteration}} - {{$procedure->name}}</li>

              </ul>
              @endforeach
            <select name="procedure_id[]"  style="width: 100%" class="form-control select2p" multiple="multiple">
                <option value="">Select Procedures</option>
                @foreach ($pros as $pro)
                    <option value="{{$pro->id}}">{{$pro->name}}</option>
                @endforeach
            </select>
            <a class="btn btn-primary" href="{{ route('doctor-screen.echo',$patient->id) }}">Echo</a>

            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
    @include('dscreen.prescription')
    <div class="row">
      {{-- <div class="col-lg-6">
        <h4>Paitent History</h4>
        <textarea name="patient_history" id="" cols="50" rows="10"></textarea>
      </div>
      <div class="col-lg-6">
        <h4>Hospital History</h4>
        <textarea name="hospital_history" id="" cols="50" rows="10"></textarea>
      </div>


    </div>
    <br> --}}
    <input type="hidden" name="status" value="Checked">
    <div class="col-lg-12 d-flex justify-content-center">
      <button class="btn btn-info" type="submit">Submit</button>
    </div>
  </div>
</form>
@if ($ww != null)
<table class="table table-bordered mr-4 ml-4" id="tb1">
    <thead>
        <tr>
            <th>No</th>
            <th>MR NO</th>
            <th>Name</th>
            <th>phone</th>
            <th width="280px">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ww as $w)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $w->mr_no }}</td>
            <td>{{ $w->first_name }}</td>
            <td>{{ $w->phone }}</td>
            <td>

                    <a class="btn btn-info" href="{{ route('show.old',$w->id) }}">Show</a>

            </td>
        </tr>
        @endforeach
    </tbody>

</table>


@endif

@endsection

@section('scripts1')
<script>
    $(document).ready(function() {
        $(".select2p").select2({
        multiple: true,
        placeholder: "Add another procedure"
        });
    });
</script>
@endsection
