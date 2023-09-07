{{-- prescription start --}}
<section class="Specialist-black-color bg-white pre">
   
        <div class="container  bg-white">

    <div class="form-row">
    <div class="col-md-3 mb-3">
      <label for="username">Name:</label>
      <input type="text" id="username" disabled value="{{$patient->first_name}}" name="username">
    </div>
    <div class="col-md-3 mb-3">
      <label for="username">Age:</label>
      <input type="text" id="username" disabled value="{{$patient->age}}" name="username">
    </div>
    <div class="col-md-3 mb-3">
      <label for="username">Gender:</label>
      <input type="text" id="username" disabled value="{{$patient->gender}}" name="username">
    </div>
    <div class="col-md-3 mb-3">
      <label for="username">Date:</label>
      <input type="text" id="username" disabled value="{{ date('d-m-Y') }}" name="username">
    </div>
   
    </div>


           
        </div>

        <!--form--center-->

        <div class="container bg-white">
            <div class="row">
                <div class="col-lg-9 pt-0 mt-0">
                    <div class="btn-add-medicine">
                        <h3>Add New Medicine Description</h3>
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
                <div class="col-lg-3 ">
                    <div class="row ">
                        <div class="pt-6 col-lg-12">
                            <label for="username">
                                <h3>Complanints:</h3>
                                <textarea id="w3review" name="p_complaints" class="form-control ml-3" placeholder="complaints"></textarea>
                            </label>


                        </div>
                        <div class="col-lg-12 ml-2 my-4">
                            <h3 class="m-0">Examination:</h3>
                        </div>
                        <style>
                            .form-border-remove{
                                border: 0;
                                border-bottom: 1px solid;
                            }
                        </style>
                        <div class="col-lg-11 ml-2">
                        <h5 class="m-0"> <input type="text" placeholder=" BP:" class="mb-4 form-control form-border-remove" value="" id="username" name="p_bp"></h5>
                            <h5 class="m-0"><input type="text" value="" placeholder=" Pulse:" class="mb-2 form-control form-border-remove" id="username" name="p_pulse"></h5><br>
                            <h5 class="m-0"><input type="text" value="" placeholder=" Weight:" class="mb-2 form-control form-border-remove" id="username" name="p_weight">
                            </h5><br>
                            <h5 class="m-0"><input type="text" class="mb-2 form-control form-border-remove" placeholder=" CVS:" id="username" name="p_cvs">
                            </h5><br>
                            <h5 class="m-0"><input type="text" class="form-border-remove form-control mb-2" placeholder=" Chest:" id="username" name="p_chest">
                            </h5><br>
                        </div>
                        <div class="col-lg-11 ml-2">
                            <h5 class="m-0"><input type="text" class="form-border-remove mb-2 form-control" placeholder=" ECG:" id="username" name="p_ecg">
                            </h5><br>

                        </div>
                    </div>


                </div>
            </div>
        </div>



            <div class="container p-0">

                <div class="row">
                    <div class="col-lg-9 ">
                        <h3 class="m-0">Comments</h3>
                        <textarea name="p_comments" class="form-control "  placeholder="comments"></textarea>
                    </div>

                    <div class="col-lg-3 mr-1-0 mb-2">
                        <h3 class="m-0 ">Investigation:</h3>
                            <textarea id="w3review" name="p_investigation" class="form-control"  placeholder="Investigation"></textarea>

                    </div>
                </div>
            </div>

    </div>

</section>


</div>
{{-- prescription end --}}
