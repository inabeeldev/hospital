{{-- prescription start --}}
<section class="Specialist-black-color pre">
    <div class="container Specialist-4 ">
        <div class="container  ">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <label for="username">
                        <h5>Name:</h5>
                    </label><br>
                    <input type="text" id="username" disabled value="{{$patient->first_name}}" name="username">
                    <br>
                </div>
                <div class="col-lg-2 p-0">
                    <label for="username">
                        <h5>Age:</h5>
                    </label>
                    <input type="number" disabled value="{{$patient->age}}" id="username" ><br>
                </div>
                <div class="col-lg-2 p-0">
                    <label for="username">
                        <h5>Sex:</h5>
                    </label><br>
                    <input type="text" disabled id="username" value="{{$patient->gender}}">
                    <br>

                </div>
                <div class="col-lg-2 p-0">

                    <label for="birthday">
                        <h5>Date:</h5>
                    </label>
                    <input type="text" id="username" disabled value="{{ date('d-m-Y') }}">
                </div>
            </div>
        </div>

        <!--form--center-->

        <div class="container">
            <div class="row">
                <div class="col-lg-9 p-0">
                    <div class="btn-add-medicine">
                        <h1>Add New Medicine Description</h1>
                    </div>

                    <hr>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="">
                                <label><strong>MEDICINE TYPE:</strong></label>
                                <select name="medicine_type1" class="form-control">
                                    <option value="">Select Medicine</option>
                                    <option value="tablet">Tablet</option>
                                    <option value="capsule">Capsule</option>
                                    <option value="syrup">Syrup</option>
                                    <option value="injection">Injection</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <label><strong>MEDICINE NAME:</strong></label>
                            <input type="text" class="mb-2" id="medicine-input" name="medicine_name1" placeholder="Name"
                                class="custom-select-1">
                        </div>
                        <div class="col-lg-2">
                            <label><strong>MEDICINE(MG):</strong></label>


                            <input type="text" class="mb-2" id="medicine-input" name="medicine_mg1" placeholder="mg?"
                            class="custom-select-1">


                        </div>
                        <div class="col-lg-2">
                            <label><strong>Quantity:</strong></label>
                            <input type="text" class="mb-2" id="medicine-input" name="medicine_qty1"
                                placeholder="Qty Medicine">
                            </h5><br>
                        </div>
                        <div class="col-lg-3">

                                <label><strong>MEDICINE TIMING:</strong></label>
                                <select class="custom-select-1 form-control" name="medicine_timing1">
                                    <option value="">Select Medicine Time:</option>

                                    <option value="صبح">صبح</option>
                                    <option value="دوپہر">دوپہر</option>
                                    <option value="شام">شام</option>
                                    <option value="صبح دوپہر">صبح دوپہر</option>
                                    <option value="دوپہر شام">دوپہر شام</option>
                                    <option value="صبح شام">صبح شام</option>
                                    <option value="صبح دوپہر شام">صبح دوپہر شام</option>
                                </select>

                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-2">
                            <div class="">
                                <select name="medicine_type2" class="form-control">
                                    <option value="">Select Medicine</option>
                                    <option value="tablet">Tablet</option>
                                    <option value="capsule">Capsule</option>
                                    <option value="syrup">Syrup</option>
                                    <option value="injection">Injection</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <input type="text" class="mb-2" id="medicine-input" name="medicine_name2" placeholder="Name"
                                class="custom-select-1">
                        </div>
                        <div class="col-lg-2">

                            <input type="text" class="mb-2" id="medicine-input" name="medicine_mg2" placeholder="mg?"
                            class="custom-select-1">


                        </div>
                        <div class="col-lg-2">
                            <input type="text" class="mb-2" id="medicine-input" name="medicine_qty2"
                                placeholder="Qty Medicine">
                            </h5><br>
                        </div>
                        <div class="col-lg-3">

                                <select class="custom-select-1 form-control" name="medicine_timing2">
                                    <option value="">Select Medicine Time:</option>

                                    <option value="صبح">صبح</option>
                                    <option value="دوپہر">دوپہر</option>
                                    <option value="شام">شام</option>
                                    <option value="صبح دوپہر">صبح دوپہر</option>
                                    <option value="دوپہر شام">دوپہر شام</option>
                                    <option value="صبح شام">صبح شام</option>
                                    <option value="صبح دوپہر شام">صبح دوپہر شام</option>
                                </select>

                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-2">
                            <div class="">
                                <select name="medicine_type3" class="form-control">
                                    <option value="">Select Medicine</option>
                                    <option value="tablet">Tablet</option>
                                    <option value="capsule">Capsule</option>
                                    <option value="syrup">Syrup</option>
                                    <option value="injection">Injection</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <input type="text" class="mb-2" id="medicine-input" name="medicine_name3" placeholder="Name"
                                class="custom-select-1">
                        </div>
                        <div class="col-lg-2">


                            <input type="text" class="mb-2" id="medicine-input" name="medicine_mg3" placeholder="mg?"
                            class="custom-select-1">


                        </div>
                        <div class="col-lg-2">
                            <input type="text" class="mb-2" id="medicine-input" name="medicine_qty3"
                                placeholder="Qty Medicine">
                            </h5><br>
                        </div>
                        <div class="col-lg-3">

                                <select class="custom-select-1 form-control" name="medicine_timing3">
                                    <option value="">Select Medicine Time:</option>

                                    <option value="صبح">صبح</option>
                                    <option value="دوپہر">دوپہر</option>
                                    <option value="شام">شام</option>
                                    <option value="صبح دوپہر">صبح دوپہر</option>
                                    <option value="دوپہر شام">دوپہر شام</option>
                                    <option value="صبح شام">صبح شام</option>
                                    <option value="صبح دوپہر شام">صبح دوپہر شام</option>
                                </select>

                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-2">
                            <div class="">
                                <select name="medicine_type4" class="form-control">
                                    <option value="">Select Medicine</option>
                                    <option value="tablet">Tablet</option>
                                    <option value="capsule">Capsule</option>
                                    <option value="syrup">Syrup</option>
                                    <option value="injection">Injection</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <input type="text" class="mb-2" id="medicine-input" name="medicine_name4" placeholder="Name"
                                class="custom-select-1">
                        </div>
                        <div class="col-lg-2">


                            <input type="text" class="mb-2" id="medicine-input" name="medicine_mg4" placeholder="mg?"
                            class="custom-select-1">


                        </div>
                        <div class="col-lg-2">
                            <input type="text" class="mb-2" id="medicine-input" name="medicine_qty4"
                                placeholder="Qty Medicine">
                            </h5><br>
                        </div>
                        <div class="col-lg-3">

                                <select class="custom-select-1 form-control" name="medicine_timing4">
                                    <option value="">Select Medicine Time:</option>

                                    <option value="صبح">صبح</option>
                                    <option value="دوپہر">دوپہر</option>
                                    <option value="شام">شام</option>
                                    <option value="صبح دوپہر">صبح دوپہر</option>
                                    <option value="دوپہر شام">دوپہر شام</option>
                                    <option value="صبح شام">صبح شام</option>
                                    <option value="صبح دوپہر شام">صبح دوپہر شام</option>
                                </select>

                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-2">
                            <div class="">
                                <select name="medicine_type5" class="form-control">
                                    <option value="">Select Medicine</option>
                                    <option value="tablet">Tablet</option>
                                    <option value="capsule">Capsule</option>
                                    <option value="syrup">Syrup</option>
                                    <option value="injection">Injection</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <input type="text" class="mb-2" id="medicine-input" name="medicine_name5" placeholder="Name"
                                class="custom-select-1">
                        </div>
                        <div class="col-lg-2">


                            <input type="text" class="mb-2" id="medicine-input" name="medicine_mg5" placeholder="mg?"
                            class="custom-select-1">


                        </div>
                        <div class="col-lg-2">
                            <input type="text" class="mb-2" id="medicine-input" name="medicine_qty5"
                                placeholder="Qty Medicine">
                            </h5><br>
                        </div>
                        <div class="col-lg-3">

                                <select class="custom-select-1 form-control" name="medicine_timing5">
                                    <option value="">Select Medicine Time:</option>

                                    <option value="صبح">صبح</option>
                                    <option value="دوپہر">دوپہر</option>
                                    <option value="شام">شام</option>
                                    <option value="صبح دوپہر">صبح دوپہر</option>
                                    <option value="دوپہر شام">دوپہر شام</option>
                                    <option value="صبح شام">صبح شام</option>
                                    <option value="صبح دوپہر شام">صبح دوپہر شام</option>
                                </select>

                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-2">
                            <div class="">
                                <select name="medicine_type6" class="form-control">
                                    <option value="">Select Medicine</option>
                                    <option value="tablet">Tablet</option>
                                    <option value="capsule">Capsule</option>
                                    <option value="syrup">Syrup</option>
                                    <option value="injection">Injection</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <input type="text" class="mb-2" id="medicine-input" name="medicine_name6" placeholder="Name"
                                class="custom-select-1">
                        </div>
                        <div class="col-lg-2">


                            <input type="text" class="mb-2" id="medicine-input" name="medicine_mg6" placeholder="mg?"
                            class="custom-select-1">


                        </div>
                        <div class="col-lg-2">
                            <input type="text" class="mb-2" id="medicine-input" name="medicine_qty6"
                                placeholder="Qty Medicine">
                            </h5><br>
                        </div>
                        <div class="col-lg-3">

                                <select class="custom-select-1 form-control" name="medicine_timing6">
                                    <option value="">Select Medicine Time:</option>

                                    <option value="صبح">صبح</option>
                                    <option value="دوپہر">دوپہر</option>
                                    <option value="شام">شام</option>
                                    <option value="صبح دوپہر">صبح دوپہر</option>
                                    <option value="دوپہر شام">دوپہر شام</option>
                                    <option value="صبح شام">صبح شام</option>
                                    <option value="صبح دوپہر شام">صبح دوپہر شام</option>
                                </select>

                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-2">
                            <div class="">
                                <select name="medicine_type7" class="form-control">
                                    <option value="">Select Medicine</option>
                                    <option value="tablet">Tablet</option>
                                    <option value="capsule">Capsule</option>
                                    <option value="syrup">Syrup</option>
                                    <option value="injection">Injection</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <input type="text" class="mb-2" id="medicine-input" name="medicine_name7" placeholder="Name"
                                class="custom-select-1">
                        </div>
                        <div class="col-lg-2">


                            <input type="text" class="mb-2" id="medicine-input" name="medicine_mg7" placeholder="mg?"
                            class="custom-select-1">


                        </div>
                        <div class="col-lg-2">
                            <input type="text" class="mb-2" id="medicine-input" name="medicine_qty7"
                                placeholder="Qty Medicine">
                            </h5><br>
                        </div>
                        <div class="col-lg-3">

                                <select class="custom-select-1 form-control" name="medicine_timing7">
                                    <option value="">Select Medicine Time:</option>

                                    <option value="صبح">صبح</option>
                                    <option value="دوپہر">دوپہر</option>
                                    <option value="شام">شام</option>
                                    <option value="صبح دوپہر">صبح دوپہر</option>
                                    <option value="دوپہر شام">دوپہر شام</option>
                                    <option value="صبح شام">صبح شام</option>
                                    <option value="صبح دوپہر شام">صبح دوپہر شام</option>
                                </select>

                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-2">
                            <div class="">
                                <select name="medicine_type8" class="form-control">
                                    <option value="">Select Medicine</option>
                                    <option value="tablet">Tablet</option>
                                    <option value="capsule">Capsule</option>
                                    <option value="syrup">Syrup</option>
                                    <option value="injection">Injection</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <input type="text" class="mb-2" id="medicine-input" name="medicine_name8" placeholder="Name"
                                class="custom-select-1">
                        </div>
                        <div class="col-lg-2">


                            <input type="text" class="mb-2" id="medicine-input" name="medicine_mg8" placeholder="mg?"
                            class="custom-select-1">


                        </div>
                        <div class="col-lg-2">
                            <input type="text" class="mb-2" id="medicine-input" name="medicine_qty8"
                                placeholder="Qty Medicine">
                            </h5><br>
                        </div>
                        <div class="col-lg-3">

                                <select class="custom-select-1 form-control" name="medicine_timing8">
                                    <option value="">Select Medicine Time:</option>

                                    <option value="صبح">صبح</option>
                                    <option value="دوپہر">دوپہر</option>
                                    <option value="شام">شام</option>
                                    <option value="صبح دوپہر">صبح دوپہر</option>
                                    <option value="دوپہر شام">دوپہر شام</option>
                                    <option value="صبح شام">صبح شام</option>
                                    <option value="صبح دوپہر شام">صبح دوپہر شام</option>
                                </select>

                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-2">
                            <div class="">
                                <select name="medicine_type9" class="form-control">
                                    <option value="">Select Medicine</option>
                                    <option value="tablet">Tablet</option>
                                    <option value="capsule">Capsule</option>
                                    <option value="syrup">Syrup</option>
                                    <option value="injection">Injection</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <input type="text" class="mb-2" id="medicine-input" name="medicine_name9" placeholder="Name"
                                class="custom-select-1">
                        </div>
                        <div class="col-lg-2">


                            <input type="text" class="mb-2" id="medicine-input" name="medicine_mg9" placeholder="mg?"
                            class="custom-select-1">


                        </div>
                        <div class="col-lg-2">
                            <input type="text" class="mb-2" id="medicine-input" name="medicine_qty9"
                                placeholder="Qty Medicine">
                            </h5><br>
                        </div>
                        <div class="col-lg-3">

                                <select class="custom-select-1 form-control" name="medicine_timing9">
                                    <option value="">Select Medicine Time:</option>

                                    <option value="صبح">صبح</option>
                                    <option value="دوپہر">دوپہر</option>
                                    <option value="شام">شام</option>
                                    <option value="صبح دوپہر">صبح دوپہر</option>
                                    <option value="دوپہر شام">دوپہر شام</option>
                                    <option value="صبح شام">صبح شام</option>
                                    <option value="صبح دوپہر شام">صبح دوپہر شام</option>
                                </select>

                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-2">
                            <div class="">
                                <select name="medicine_type10" class="form-control">
                                    <option value="">Select Medicine</option>
                                    <option value="tablet">Tablet</option>
                                    <option value="capsule">Capsule</option>
                                    <option value="syrup">Syrup</option>
                                    <option value="injection">Injection</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <input type="text" class="mb-2" id="medicine-input" name="medicine_name10" placeholder="Name"
                                class="custom-select-1">
                        </div>
                        <div class="col-lg-2">


                            <input type="text" class="mb-2" id="medicine-input" name="medicine_mg10" placeholder="mg?"
                            class="custom-select-1">


                        </div>
                        <div class="col-lg-2">
                            <input type="text" class="mb-2" id="medicine-input" name="medicine_qty10"
                                placeholder="Qty Medicine">
                            </h5><br>
                        </div>
                        <div class="col-lg-3">

                                <select class="custom-select-1 form-control" name="medicine_timing10">
                                    <option value="">Select Medicine Time:</option>

                                    <option value="صبح">صبح</option>
                                    <option value="دوپہر">دوپہر</option>
                                    <option value="شام">شام</option>
                                    <option value="صبح دوپہر">صبح دوپہر</option>
                                    <option value="دوپہر شام">دوپہر شام</option>
                                    <option value="صبح شام">صبح شام</option>
                                    <option value="صبح دوپہر شام">صبح دوپہر شام</option>
                                </select>

                        </div>

                    </div>


                </div>
                <div class="col-lg-3 p-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="username">
                                <h2>Complanints:</h2>
                            </label>
                                <textarea id="w3review" name="p_complaints" rows="4" cols="50" placeholder="complaints"></textarea>


                        </div>
                        <div class="col-lg-11 ml-2">
                            <h2 class="m-0">Examination:</h2>

                            <div class="display-flex">
                                <h5 class="m-0">BP: <input type="text" class="mb-2" value="" id="username" name="p_bp"></h5>
                                <h5 class="m-0">Pulse:<input type="text" value="" class="mb-2" id="username" name="p_pulse"></h5><br>
                            </div>

                        </div>
                        <div class="col-lg-11 ml-2">
                            <h5 class="m-0">Weight:<input type="text" value="" class="mb-2" id="username" name="p_weight">
                            </h5><br>
                            <h5 class="m-0">CVS:<input type="text" class="mb-2" id="username" name="p_cvs">
                            </h5><br>
                            <h5 class="m-0">Chest:<input type="text" class="mb-2" id="username" name="p_chest">
                            </h5><br>
                        </div>
                        <div class="col-lg-11 ml-2">
                            <h5 class="m-0">ECG:<input type="text" class="mb-2" id="username" name="p_ecg">
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
                        <textarea name="p_comments" placeholder="comments"></textarea>
                    </div>

                    <div class="col-lg-3 p-0 mb-2">
                        <h2 class="m-0">Investigation:</h2>
                            <textarea id="w3review" name="p_investigation" rows="3" cols="50" placeholder="Investigation"></textarea>

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
{{-- prescription end --}}
