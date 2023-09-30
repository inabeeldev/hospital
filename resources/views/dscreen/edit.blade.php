@extends('dscreen.layout')


@section('content')
<form class=" containerfluid p-3  bg-white" action="{{ route('doctor-screen.update',$patient->id) }}" method="POST">


    <div class="container-fluid bg-white p-0 docotor-screen">
        @csrf
        @method('PUT')


    </div>
    <div class="containerfluid p-3   bg-white">
        <div class="row  d-flex justify-content-center p-0">
            <div class="col-lg-12">
                <div class="doctor-edit-section">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="text-center curent-pa" style="margin-bottom: 0px"> Current Paitent Detail</h1>
                            <br>
                        </div>
                            <div class="col-lg-2 right-dr-info ">
                            @if ($patient->token_no)
                            <h5 class="">Token No : {{$patient->token_no}}</h5>
                            @else
                            <h5 class="">Token No: {{$patient->token_no_s}}</h5>
                            @endif
                            <h6>Date: {{ date('d-m-Y') }}</h6>
                            <h6 class="total-pa">MR-No:  {{$patient->mr_no}}</h6>
                        </div>
                        <div class="col-lg-9">

                            <table class="table">

                                <tbody>
                                    <tr>
                                        <th scope="row">Name:</th>
                                        <td>{{$patient->first_name}}</td>
                                        <th scope="row">Age:</th>
                                        <td>{{$patient->age}}</td>
                                        <th scope="row">Weight:</th>
                                        <td>{{$patient->age}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Blood pressure:</th>
                                        <td>{{$patient->bp}}</td>
                                        <th scope="row">Suger:</th>
                                        <td>{{$patient->sugar}}</td>
                                        <th scope="row">Fever:</th>
                                        <td>{{$patient->temperature}}</td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    
                        <br>
                    </div>
                </div>
            </div>
        </div>

        <div class="row bg-white ">
            <div class="col-lg-5">
                <div class="fee-section border-0">

                    <h3>fee:</h3>
                    <label for="">
                        Discount
                        <input type="text" class="form-control"
                            value="{{$patient->discount ? $patient->discount : 'No Discount'}} - {{$patient->discount_type == 'fixed' ? 'Fixed' : '%'}}"
                            disabled>
                    </label>
                    <br>
                    <input type="hidden"  class="custom-select " name="total_fee"
                        value="{{$patient->total_fee}}">
                    <select name="discount_type" style="width: 58%" class="form-control" id="">
                        <option value="">Select Discount Type</option>
                        <option value="percent">Discount in %</option>
                        <option value="fixed">Discount in Fixed price</option>
                    </select><br>
                    <label for="">
                        <input type="text" class="form-control" name="discount" placeholder="enter a amount or %">
                    </label>
                    <h5>Total Price: {{$patient->total_fee}}</h5>
                </div>

            </div>

            <div class="col-lg-5 pt-4 d-flex flex-column justify-content-center">
                <h5>Procedures</h5>
                @foreach ($procedures as $procedure)

                <ul class="doc-pat-pro-list">
                    <li>{{$loop->iteration}} - {{$procedure->name}}</li>

                </ul>
                @endforeach
                <select name="procedure_id[]" style="width: 50%" class="form-control select2p" multiple="multiple">
                    <option value="">Select Procedures</option>
                    @foreach ($pros as $pro)
                    <option value="{{$pro->id}}">{{$pro->name}}</option>
                    @endforeach
                </select><br><br>

            </div>

            <div class="col-lg-2 pt-4 d-flex flex-column justify-content-center">
                <h6>Add a Reports Data</h6>
                <ol class="reports-add-button">
                    <li><a class="btn btn-primary" href="{{ route('doctor-screen.echo',$patient->id) }}">Echo</a></li>
                    <li><a class="btn btn-primary" href="{{ route('doctor-screen.ecg',$patient->id) }}">ECG</a></li>
                    <li>  <a class="btn btn-primary" href="{{ route('doctor-screen.angio',$patient->id) }}"
                    >Angiography</a></li>
                </ol>
                
              
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
        <div class="col-lg-12 mb-3 d-flex justify-content-center">
            <button class="btn btn-info" type="submit">Submit</button>
        </div>
    </div>
</form>
@if ($ww != null)
<!-- <div class="container bg-white">
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

</div> -->
@endif

@endsection

@section('scripts1')
<script>
    $(document).ready(function () {
        $(".select2p").select2({
            multiple: true,
            placeholder: "Add another procedure"
        });
    });
</script>
@endsection