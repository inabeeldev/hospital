@extends('layouts.app_main')

@section('content')
<!-- Main Container -->
<main id="main-container">
    <!-- Hero -->
<div class="patient-rec-g-detail">
<div class="bg-body-light">
<div class="content content-full">
<div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
  <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Receptionist  Area</h1>
  <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
      <ol class="breadcrumb">
          <li class="breadcrumb-item">Receptionist isit</li>
          <li class="breadcrumb-item active" aria-current="page">Add patient Detail</li>
      </ol>
  </nav>
</div>
</div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
<!-- Summernote (.js-summernote + .js-summernote-air classes are initialized in Helpers.summernote()) -->
<!-- For more info and examples you can check out http://summernote.org/ -->
<h2 class="content-heading">Add patient Detail </h2>
<div class="row">
<div class="col-lg-6">
<div class="form-group">
<label>MR No</label>
<input type="text" class="form-control" id="staticEmail" placeholder="Enter MR No">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label for="example-flatpickr-default">Date</label>
<input type="text" class="js-flatpickr form-control bg-white" id="example-flatpickr-default" name="example-flatpickr-default" placeholder="Y-m-d">
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4">
<div class="form-group">
   <label>First Name</label>
   <input type="text" class="form-control" id="staticEmail" placeholder="Enter a patient first name">
</div>
</div>
<div class="col-lg-4">
<div class="form-group">
<label for="example-select">Second name type</label>
<select class="form-control" id="example-select" name="example-select">
<option value="0">F/Select second name value</option>
  <option value="0">F/Name</option>
  <option value="1">H/Name</option>
  <option value="2">WD/Name</option>
</select>
</div>
</div>
<div class="col-lg-4">
<div class="form-group">
<label>Enter a Second name</label>
<input type="text" class="form-control" id="staticEmail" placeholder="Enter Second name">
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4">
<div class="form-group">
<label>Age</label>
<input type="number" class="form-control" id="staticEmail" placeholder="Enter patient age">
</div>
</div>
<div class="col-lg-4">
<div class="form-group">
<label>Phone</label>
<input type="phone" class="form-control" id="staticEmail" placeholder="Enter phone number">
</div>
</div>
<div class="col-lg-4">
<div class="form-group">
<label>CNIC</label>
<input type="text" class="form-control" id="staticEmail" placeholder="Enter patient CNIC number">
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4">
<div class="form-group">
<label>Address</label>
<input type="text" class="form-control" id="staticEmail" placeholder="Enter patient Address">
</div>
</div>
<div class="col-lg-4">
<div class="form-group">
<label for="example-select">Patient came with here</label>
<select class="form-control" id="example-select" name="example-select">
<option value="0">Select what's relation with patient</option>
<option value="0">Family member</option>
<option value="1">Friend</option>
<option value="2">Stanger</option>
</select>
</div>
</div>
<div class="col-lg-4">
<div class="form-group">
<label>Who came with patient</label>
<input type="text" class="form-control" id="staticEmail" placeholder="Enter name who come with patient">
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4">
<div class="form-group">
<label for="example-select">Reffrance</label>
<select class="form-control" id="example-select" name="example-select">
<option value="0">Select Reffrance</option>
<option value="0">Doctor</option>
<option value="1">Company / Panel</option>
<option value="2">Personal</option>
</select>
</div>
</div>
<div class="col-lg-8">
<div class="form-group">
<label>Reffrance name</label>
<input type="text" class="form-control" id="staticEmail" placeholder="Enter Reffrance name / Add more detail">

</div>
</div>
</div>
<div class="row">
<div class="col-lg-12 d-flex justify-content-center">
<button type="submit" Value="Submit" class="btn btn-info" id="patient-detail">NEXT</button>
</div>
</div>
</div>
</div>
<br>
<div class="patient-res-reff hide">
<div class="row">
<div class="col-lg-12">
<div class="bg-body-light">
<div class="content content-full">
<div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
    <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Patient Raffer Now</h1>
    <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Patient</li>
            <li class="breadcrumb-item active" aria-current="page">Reff by Doctor</li>
        </ol>
    </nav>
</div>
</div>
</div>
</div>
</div>
<div class="content">
<div class="row">
<div class="col-lg-4">
<div class="form-group">
<label for="example-select">Reffer By Department</label>
<select class="form-control" id="example-select" name="example-select">
<option value="0">Orthopaedics</option>
<option value="0">Chest & Vascular</option>
<option value="1">Psychiatry</option>
<option value="2">Dental Surgery</option>
<option value="2">On Duty</option>
</select>
</div>
</div>
<div class="col-lg-4">
<div class="form-group">
<label for="example-select">Reffer By doctor name</label>
<select class="form-control" id="example-select" name="example-select">
<option value="0">Select Doctor</option>
<option value="0">Doctor Umer</option>
<option value="1">Doctor Hanan</option>
<option value="2">Doctor Tahir</option>
<option value="2">Doctor Nasir</option>
<option value="2">On Duty</option>
</select>
</div>
</div>
<div class="col-lg-4">
<div class="form-group">
<label for="example-select">Reffer according to patient Condition</label>
<select class="form-control" id="example-select" name="example-select">
<option value="0">Select option</option>
<option value="0">Emergncy</option>
<option value="1">Normal Treatment</option>
</select>
</div>
</div>
</div>

<div class="row">
<div class="col-lg-12">
<div class="form-group">
<label for="example-select"></label>
<div class="form-group">
<label class="d-block">Initial patient test</label>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" value="" id="example-checkbox-inline1" name="example-checkbox-inline1">
  <label class="form-check-label" for="example-checkbox-inline1">Blood preasure test</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" value="" id="example-checkbox-inline2" name="example-checkbox-inline2">
  <label class="form-check-label" for="example-checkbox-inline2">Suger test</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" value="" id="example-checkbox-inline3" name="example-checkbox-inline3">
  <label class="form-check-label" for="example-checkbox-inline3">Temprature test</label>
</div>
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-lg-4">
<div class="form-group">
<label for="">How much patient Blod preasure</label>
<input type="text" class="form-control" id="staticEmail" placeholder="formate will be '80/12'">
</div>
</div>
<div class="col-lg-4">
<div class="form-group">
<label for="">How much patient Suger</label>
<input type="text" class="form-control" id="staticEmail" placeholder="formate will be '200'">
</div>
</div>
<div class="col-lg-4">
<div class="form-group">
<label for="">How much patient temprature</label>
<input type="text" class="form-control" id="staticEmail" placeholder="formate will be '99'">
</div>
</div>
</div>
<div class="row">

<div class="col-lg-12">
<div class="form-group">
<label for="example-select"></label>
<div class="form-group">
<label class="d-block">Procedure</label>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" value="" id="opd" name="example-checkbox-inline1">
  <label class="form-check-label" for="opd">OPD</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" value="" id="ecg" name="example-checkbox-inline2">
  <label class="form-check-label" for="ecg">ECG</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" value="" id="SK" name="example-checkbox-inline3">
  <label class="form-check-label" for="SK">SK</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" value="" id="Appendectomy" name="example-checkbox-inline3">
  <label class="form-check-label" for="Appendectomy">Appendectomy</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" value="" id="Breast" name="example-checkbox-inline3">
  <label class="form-check-label" for="Breast">Breast biopsy</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" value="" id="Carotid" name="example-checkbox-inline3">
  <label class="form-check-label" for="Carotid">Carotid endarterectomy</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" value="" id="SK" name="example-checkbox-inline3">
  <label class="form-check-label" for="SK">SK</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" value="" id="Appendectomy" name="example-checkbox-inline3">
  <label class="form-check-label" for="Appendectomy">Appendectomy</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" value="" id="Breast" name="example-checkbox-inline3">
  <label class="form-check-label" for="Breast">Breast biopsy</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" value="" id="Carotid" name="example-checkbox-inline3">
  <label class="form-check-label" for="Carotid">Carotid endarterectomy</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" value="" id="SK" name="example-checkbox-inline3">
  <label class="form-check-label" for="SK">SK</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" value="" id="Appendectomy" name="example-checkbox-inline3">
  <label class="form-check-label" for="Appendectomy">Appendectomy</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" value="" id="Breast" name="example-checkbox-inline3">
  <label class="form-check-label" for="Breast">Breast biopsy</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" value="" id="Carotid" name="example-checkbox-inline3">
  <label class="form-check-label" for="Carotid">Carotid endarterectomy</label>
</div>
</div>
</div>
</div>
<div class="col-lg-12 d-flex justify-content-center">
<button type="button" id="patient-reff" class="btn btn-info">Next</button>
</div>
</div>
</div>
</div>
<br>

<div class="patient-res-payment hide">

<div class="content res-payment-page ">
<div class="row">
<div class="col-lg-12">
<div class="bg-body-light">
<div class="content content-full">
<div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
    <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Bill Detail</h1>
    <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Patient</li>
            <li class="breadcrumb-item active" aria-current="page">Payment detail</li>
        </ol>
    </nav>
</div>
</div>
</div>
</div>
</div>
<div class="row payment-header">
<div class="col-lg-2">
<b>    Sr#</b>
</div>
<div class="col-lg-2"><b>Services</b></div>
<div class="col-lg-2"><b>Payment</b></div>
<div class="col-lg-2"><b>Test</b></div>
<div class="col-lg-2"><b>Payment</b></div>
<div class="col-lg-2"><b>Total Payment</b></div>

</div>
<div class="row">
<div class="col-lg-2">
1
</div>
<div class="col-lg-2">OPD</div>
<div class="col-lg-2">10000/- Rs</div>
<div class="col-lg-2">Suger test</div>
<div class="col-lg-2">100/- Rs</div>
<div class="col-lg-2">1100/- Rs</div>
</div>
<div class="row">
<div class="col-lg-2">
2
</div>
<div class="col-lg-2">ECG</div>
<div class="col-lg-2">10000/- Rs</div>
<div class="col-lg-2">Temprature test</div>
<div class="col-lg-2">50/- Rs</div>
<div class="col-lg-2">1050/- Rs</div>
</div>
<div class="row">
<div class="col-lg-2">
3
</div>
<div class="col-lg-2">Breast biopsy
</div>
<div class="col-lg-2">60000/- Rs</div>
<div class="col-lg-2">Temprature test</div>
<div class="col-lg-2">50/- Rs</div>
<div class="col-lg-2">1050/- Rs</div>
</div>
<div class="row">
<div class="col-lg-2">
4
</div>
<div class="col-lg-2">Carotid endarterectomy</div>
<div class="col-lg-2">4000/- Rs</div>
<div class="col-lg-2">Temprature test</div>
<div class="col-lg-2">50/- Rs</div>
<div class="col-lg-2">1050/- Rs</div>
</div>

<div class="row payment-bottom">
<div class="col-lg-2"></div>
<div class="col-lg-2"></div>
<div class="col-lg-2"></div>
<div class="col-lg-2"></div>
<div class="col-lg-2"></div>
<div class="col-lg-2"><b>5000/- Rs</b></div>
</div>
<div class="row discount">
<div class="col-lg-2"></div>
<div class="col-lg-2"></div>
<div class="col-lg-2"></div>
<div class="col-lg-2">Enter a Discount</div>
<div class="col-lg-2">
<select name="" id="">
<option value="">Discount in %</option>
<option value="">Discount in Fixed price</option>
</select></div>

<div class="col-lg-2"><input type="text"></div>

</div>
<div class="row discount">
<div class="col-lg-2"></div>
<div class="col-lg-2"></div>
<div class="col-lg-2"></div>
<div class="col-lg-2"></div>
<div class="col-lg-2">
<b>Total Price</b></div>

<div class="col-lg-2">4000/- RS</div>
<div class="col-lg-12 d-flex justify-content-center">
<button type="submit" value="Submit" class="btn btn-success" id="patient-detail">Submit & Finish</button>
</div>
</div>

</div>

</div>




        <!-- END CKEditor 4 -->
    </div>
    <!-- END Page Content -->
</main>
<!-- END Main Container -->

@endsection
