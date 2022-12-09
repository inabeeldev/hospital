@extends('layouts.app_main')


@section('content')
<main id="main-container">

    <!-- Page Content -->
    <div class="content content-boxed" id="printable5">
        <!-- Invoice -->
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">#INV{{$patient->mr_no}}</h3>
                <div class="block-options">
                    <!-- Print Page functionality is initialized in Helpers.print() -->
                    <button type="button" class="btn-block-option ppt">
                        <i class="si si-printer mr-1"></i> Print Invoice
                    </button>
                </div>
            </div>
            <div class="block-content">
                <div class="p-sm-4 p-xl-7">
                    <!-- Invoice Info -->
                    <div class="row mb-5">
                        <!-- Company Info -->
                        <div class="col-6">
                            <p class="h3">Ghazala Hospital & Cardiac Center</p>
                            <h6>Name: {{$patient->first_name}}</h6>
                            <h6>Phone: {{$patient->phone}}</h6>
                        </div>
                        <!-- END Company Info -->

                        <!-- Client Info -->
                        <div class="col-6 text-right">
                            <p class="h3">Paitent Detail</p>
                            <address>
                                Address : {{$patient->address}}
                            </address>
                        </div>
                        <!-- END Client Info -->
                    </div>
                    <!-- END Invoice Info -->
<!-- DOCTOR INSTRUCTIONS  -->
<!-- Table -->
                    <!-- Table -->
                    <div class="table-responsive push">
                        <table class="table table-bordered">
                            <thead class="bg-body">
                                <tr>
                                    <th class="text-center" style="width: 60px;"></th>
                                    <th>Product</th>
                                    <th class="text-center" style="width: 90px;">Qnt</th>

                                    <th class="text-right" style="width: 120px;">Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($procedures as $procedure)

                                    <tr>
                                        <td class="text-center">{{$loop->iteration}}</td>
                                        <td>
                                            <p class="font-w600 mb-1">{{$procedure->name}}</p>

                                        </td>
                                        <td class="text-center">
                                            <span class="badge badge-pill badge-primary">1</span>
                                        </td>

                                        <td class="text-right">{{$procedure->fee}}</td>
                                    </tr>
                                @endforeach

                                {{-- <tr>
                                    <td class="text-center">2</td>
                                    <td>
                                        <p class="font-w600 mb-1">Appendectomy</p>

                                    </td>
                                    <td class="text-center">
                                        <span class="badge badge-pill badge-primary">1</span>
                                    </td>

                                    <td class="text-right">20,000</td>
                                </tr>
                                <tr>
                                    <td class="text-center">3</td>
                                    <td>
                                        <p class="font-w600 mb-1">ECG</p>

                                    </td>
                                    <td class="text-center">
                                        <span class="badge badge-pill badge-primary">1</span>
                                    </td>

                                    <td class="text-right">4000</td>
                                </tr> --}}
                                <tr>
                                    <td colspan="3" class="font-w600 text-right">Subtotal</td>
                                    <td class="text-right">{{$patient->total_fee + $patient->discount}}</td>
                                </tr>

                                <tr>
                                    <td colspan="3" class="font-w600 text-right">Discount</td>
                                    <td class="text-right">{{$patient->discount? $patient->discount : 0}}</td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="font-w700 text-uppercase text-right bg-body-light">Total Due</td>
                                    <td class="font-w700 text-right bg-body-light">{{$patient->total_fee}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- END Table -->

                    <!-- Footer -->
                    <p class="text-muted text-center my-5">
                         Ghazala Hospital & Cardiac Center
                    </p>
                    <p class="text-center">
                         Tufail Shaheed Road, Near Ayesha Park, Sheikhupura
                         <br>
                         <span class="text-center">
                              0324-8436645
                         </span>
                    </p>

                    <!-- END Footer -->
                </div>
            </div>
        </div>
        <!-- END Invoice -->
    </div>
    <!-- END Page Content -->
</main>
<!-- END Main Container -->

@endsection

@section('scripts')
<script>
    $(function() {
             $('.ppt').on('click', function() {
                $('#printable5').printThis();
             });
         });
</script>
@endsection
