@extends('layouts.app_main')

@section('content')

{{-- prescription start --}}
<div id="print_pres">
<div class="container">
<section class="Specialist-black-color pre">
    <div class="container Specialist-4 " style="margin-top: 100px">
        <div class="container  ">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <label for="username">
                        <h5>Name:</h5>
                    </label><br>
                    <h5>{{$prescription->first_name}}</h5>
                    <br>
                </div>
                <div class="col-lg-2 p-0">
                    <label for="username">
                        <h5>Age:</h5>
                    </label>
                    <h5>{{$prescription->age}}</h5>
                </div>
                <div class="col-lg-2 p-0">
                    <label for="username">
                        <h5>Sex:</h5>
                    </label><br>
                    <h5>{{$prescription->gender}}</h5>
                    <br>

                </div>
                <div class="col-lg-2 p-0">

                    <label for="birthday">
                        <h5>Date:</h5>
                    </label>
                    <h5>{{ date('d-m-Y') }}</h5>
                </div>
            </div>
        </div>

        <!--form--center-->

        <div class="container">
            <div class="row">
                <div class="col-lg-9 p-0">

                    <hr>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="">
                                <label><strong>MEDICINE TYPE:</strong></label>
                                <h6>{{$prescription->medicine_type1}}</h6>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <label><strong>MEDICINE NAME:</strong></label>
                            <h6>{{$prescription->medicine_name1}}</h6>
                        </div>
                        <div class="col-lg-2">
                            <label><strong>MEDICINE(MG):</strong></label>
                            <h6>{{$prescription->medicine_mg1}}</h6>

                        </div>
                        <div class="col-lg-2">
                            <label><strong>Quantity:</strong></label>
                            <h6>{{$prescription->medicine_qty1}}</h6>
                            <br>
                        </div>
                        <div class="col-lg-3">
                                <label><strong>MEDICINE TIMING:</strong></label>
                            <h6>{{$prescription->medicine_timing1}}</h6>

                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="">
                                <h6>{{$prescription->medicine_type2}}</h6>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <h6>{{$prescription->medicine_name2}}</h6>
                        </div>
                        <div class="col-lg-2">
                            <h6>{{$prescription->medicine_mg2}}</h6>
                        </div>
                        <div class="col-lg-2">
                            <h6>{{$prescription->medicine_qty2}}</h6>
                            <br>
                        </div>
                        <div class="col-lg-3">
                            <h6>{{$prescription->medicine_timing2}}</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="">
                                <h6>{{$prescription->medicine_type3}}</h6>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <h6>{{$prescription->medicine_name3}}</h6>
                        </div>
                        <div class="col-lg-2">
                            <h6>{{$prescription->medicine_mg3}}</h6>
                        </div>
                        <div class="col-lg-2">
                            <h6>{{$prescription->medicine_qty3}}</h6>
                            <br>
                        </div>
                        <div class="col-lg-3">
                            <h6>{{$prescription->medicine_timing3}}</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="">
                                <h6>{{$prescription->medicine_type4}}</h6>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <h6>{{$prescription->medicine_name4}}</h6>
                        </div>
                        <div class="col-lg-2">
                            <h6>{{$prescription->medicine_mg4}}</h6>
                        </div>
                        <div class="col-lg-2">
                            <h6>{{$prescription->medicine_qty4}}</h6>
                            <br>
                        </div>
                        <div class="col-lg-3">
                            <h6>{{$prescription->medicine_timing4}}</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="">
                                <h6>{{$prescription->medicine_type5}}</h6>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <h6>{{$prescription->medicine_name5}}</h6>
                        </div>
                        <div class="col-lg-2">
                            <h6>{{$prescription->medicine_mg5}}</h6>
                        </div>
                        <div class="col-lg-2">
                            <h6>{{$prescription->medicine_qty5}}</h6>
                            <br>
                        </div>
                        <div class="col-lg-3">
                            <h6>{{$prescription->medicine_timing5}}</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="">
                                <h6>{{$prescription->medicine_type6}}</h6>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <h6>{{$prescription->medicine_name6}}</h6>
                        </div>
                        <div class="col-lg-2">
                            <h6>{{$prescription->medicine_mg6}}</h6>
                        </div>
                        <div class="col-lg-2">
                            <h6>{{$prescription->medicine_qty6}}</h6>
                            <br>
                        </div>
                        <div class="col-lg-3">
                            <h6>{{$prescription->medicine_timing6}}</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="">
                                <h6>{{$prescription->medicine_type7}}</h6>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <h6>{{$prescription->medicine_name7}}</h6>
                        </div>
                        <div class="col-lg-2">
                            <h6>{{$prescription->medicine_mg7}}</h6>
                        </div>
                        <div class="col-lg-2">
                            <h6>{{$prescription->medicine_qty7}}</h6>
                            <br>
                        </div>
                        <div class="col-lg-3">
                            <h6>{{$prescription->medicine_timing7}}</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="">
                                <h6>{{$prescription->medicine_type8}}</h6>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <h6>{{$prescription->medicine_name8}}</h6>
                        </div>
                        <div class="col-lg-2">
                            <h6>{{$prescription->medicine_mg8}}</h6>
                        </div>
                        <div class="col-lg-2">
                            <h6>{{$prescription->medicine_qty8}}</h6>
                            <br>
                        </div>
                        <div class="col-lg-3">
                            <h6>{{$prescription->medicine_timing8}}</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="">
                                <h6>{{$prescription->medicine_type9}}</h6>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <h6>{{$prescription->medicine_name9}}</h6>
                        </div>
                        <div class="col-lg-2">
                            <h6>{{$prescription->medicine_mg9}}</h6>
                        </div>
                        <div class="col-lg-2">
                            <h6>{{$prescription->medicine_qty9}}</h6>
                            <br>
                        </div>
                        <div class="col-lg-3">
                            <h6>{{$prescription->medicine_timing9}}</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="">
                                <h6>{{$prescription->medicine_type10}}</h6>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <h6>{{$prescription->medicine_name10}}</h6>
                        </div>
                        <div class="col-lg-2">
                            <h6>{{$prescription->medicine_mg10}}</h6>
                        </div>
                        <div class="col-lg-2">
                            <h6>{{$prescription->medicine_qty10}}</h6>
                            <br>
                        </div>
                        <div class="col-lg-3">
                            <h6>{{$prescription->medicine_timing10}}</h6>
                        </div>
                    </div>

                </div>

            <div class="col-lg-3 p-0">
                <div class="row">
                    <div class="col-lg-12">
                        <label for="username">
                            <h2>Complaints:</h2>
                        </label>
                        <p>{{$prescription->p_complaints}}</p>

                    </div>
                    <div class="col-lg-11 ml-2">
                        <h2 class="m-0">Examination:</h2>

                        <div class="display-flex">
                            <h5 class="m-0">BP: <p>{{$prescription->p_bp}}</p></h5>
                            <h5 class="m-0">Pulse:<p>{{$prescription->p_pulse}}</p></h5><br>
                        </div>

                    </div>
                    <div class="col-lg-11 ml-2">
                        <h5 class="m-0">Weight:<p>{{$prescription->p_weight}}</p>
                        </h5><br>
                        <h5 class="m-0">CVS:<p>{{$prescription->p_cvs}}</p>
                        </h5><br>
                        <h5 class="m-0">Chest:<p>{{$prescription->p_chest}}</p>
                        </h5><br>
                    </div>
                    <div class="col-lg-11 ml-2">
                        <h5 class="m-0">ECG:<p>{{$prescription->p_ecg}}</p>
                        </h5><br>

                    </div>
                </div>


            </div>
        </div>
    </div>



        <div class="container p-0">

            <div class="row">
                <div class="col-lg-9">
                    <h2 class="m-0">Comments</h2>
                    <h6>{{$prescription->p_comments}}</h6>
                </div>

                <div class="col-lg-3 p-0 mb-2">
                    <h2 class="m-0">Investigation:</h2>
                    <h6>{{$prescription->p_investigation}}</h6>

                </div>
            </div>
        </div>

</div>

</section>

                <div class="container-fluid footer">
                    <div class="row">
                        <div class="col-lg-6">
                            <h6 class="footer-heading">Civil Lines, Tufail Shaheed Road, Near Ayesha Park, Sheikhupura</h6>
                            <h3 class="footer-head"> Contact Us:056-3614646, 0309-1391390</h3>
                        </div>
                        <div class="col-lg-6">
                            <h6 class="footer-heading">Clinic Time:</h6>
                            <h6 class="footer-heading">Monday to Saturday 1:00 pm to 3:00 pm</h6>
                            <h6 class="footer-heading ">Sunday Timing:10:00 am to 01:00 pm</h6>
                        </div>
                    </div>
                </div>
</div>
</div>
<div class="container text-center mt-4">
    <button class="print_pres1 btn btn-primary">print</button>
</div>

{{-- prescription end --}}
@endsection


@section('scripts')
<script>
    $(function() {
             $('.print_pres1').on('click', function() {
                $('#print_pres').printThis({
                    importCSS: true,
                    importStyle: true,
                    printContainer: true,
                    loadCSS: "public/assets/css/ghazala.css",
                    pageTitle: "Termly Assesment Report",
                    removeInline: false,
                    printDelay: 333,
                    header: null,
                    formValues: true
                });
             });
         });
</script>



@endsection
