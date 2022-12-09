@extends('dscreen.layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb mt-7">

            <div class="pull-right">
                <a class="btn btn-primary" href=""> Back</a>
            </div>
        </div>
    </div>


    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('doctor-screen.echo_store') }}" method="POST">

        @csrf

        <input type="hidden" name="patient_id" value="{{$patient->id}}">
        <h4>PATIENT REGISTRATION</h4>
         <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Weight:</strong>
                    <input type="text" name="weight" class="form-control">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Heart rate:</strong>
                    <input type="text" name="heart_rate" class="form-control">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Indoor/Outdoor No:</strong>
                    <input type="text" name="indoor_outdoor_no" class="form-control">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Registration No. Est:</strong>
                    <input type="text" name="registration_no_est" class="form-control">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Echo No:</strong>
                    <input type="text" name="echo_no" class="form-control">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Date:</strong>
                    <input type="date" name="date" class="form-control">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Operator:</strong>
                    <input type="text" name="operator" class="form-control">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Referred By:</strong>
                    <input type="text" name="referred_by" class="form-control">
                </div>
            </div>
         </div>
         <h4>B /M MODE DIMENSIONS</h4>
         <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Aortic Root:</strong>
                    <input type="text" name="bm_aortic_root" class="form-control">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Annulus AO:</strong>
                    <input type="text" name="annulus_ao" class="form-control">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>LA:</strong>
                    <input type="text" name="la" class="form-control">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>LA Area:</strong>
                    <input type="text" name="la_area" class="form-control">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>RV:</strong>
                    <input type="text" name="rv" class="form-control">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>MV Area(planimetry):</strong>
                    <input type="text" name="mv_area_planimetry" class="form-control">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>LVISD:</strong>
                    <input type="text" name="lvisd" class="form-control">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>LVPWD:</strong>
                    <input type="text" name="lvpwd" class="form-control">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>LVIDD:</strong>
                    <input type="text" name="lvidd" class="form-control">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>LVIDS:</strong>
                    <input type="text" name="lvids" class="form-control">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>EF:</strong>
                    <input type="text" name="ef" class="form-control">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>F.S:</strong>
                    <input type="text" name="fs" class="form-control">
                </div>
            </div>
         </div>
         <h4>DOPPLER</h4>
         <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>MV Area(PHT):</strong>
                    <input type="text" name="mv_area_pht" class="form-control">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>MV PG(P):</strong>
                    <input type="text" name="mv_pg_p" class="form-control">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>MV PG(M):</strong>
                    <input type="text" name="mv_pg_m" class="form-control">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>AO PG:</strong>
                    <input type="text" name="ao_pg" class="form-control">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>AO MPG:</strong>
                    <input type="text" name="ao_mpg" class="form-control">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>TV PG:</strong>
                    <input type="text" name="tv_pg" class="form-control">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Mean PAP:</strong>
                    <input type="text" name="mean_pap" class="form-control">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>E/A:</strong>
                    <input type="text" name="e_a" class="form-control">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>DT:</strong>
                    <input type="text" name="dt" class="form-control">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>E:</strong>
                    <input type="text" name="e" class="form-control">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>E':</strong>
                    <input type="text" name="e_" class="form-control">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>E/E:</strong>
                    <input type="text" name="e_e" class="form-control">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>RVSTDI:</strong>
                    <input type="text" name="rvstdi" class="form-control">
                </div>
            </div>
         </div>
         <h4>COLOR DOPPLER</h4>
         <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Comments 1:</strong>
                    <input type="text" name="comments_1" class="form-control">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Comments 2:</strong>
                    <input type="text" name="comments_2" class="form-control">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Comments 3:</strong>
                    <input type="text" name="comments_3" class="form-control">
                </div>
            </div>
         </div>
         <h4>OPTIONAL REMARKS</h4>
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>OPTIONAL REMARKS:</strong>
                    <input type="text" name="optional_remarks" class="form-control">
                </div>
            </div>
         </div>
         <h4>SUBJECTIVE REPORT</h4>
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>SUBJECTIVE REPORT:</strong>
                    <input type="text" name="subjective_report" class="form-control">
                </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Special Comments 1:</strong>
                    <input type="text" name="special_comments_1" class="form-control">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Special Comments 2:</strong>
                    <input type="text" name="special_comments_2" class="form-control">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Special Comments 3:</strong>
                    <input type="text" name="special_comments_3" class="form-control">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Aortic Root:</strong>
                    <input type="text" name="aortic_root" class="form-control">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Aortic Valve:</strong>
                    <input type="text" name="aortic_value" class="form-control">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Left Atrium:</strong>
                    <input type="text" name="left_atrium" class="form-control">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Mitral Valve:</strong>
                    <input type="text" name="mitral_valve" class="form-control">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Tricuspid and Pulmonary Valve:</strong>
                    <input type="text" name="tricuspid_and_pulmonary_valve" class="form-control">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Left Ventricle:</strong>
                    <input type="text" name="left_ventricle" class="form-control">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Right Ventricle:</strong>
                    <input type="text" name="right_ventricle" class="form-control">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>IAS/IVS:</strong>
                    <input type="text" name="ias_ivs" class="form-control">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Pericardium:</strong>
                    <input type="text" name="pericardium" class="form-control">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>IVC:</strong>
                    <input type="text" name="ivc" class="form-control">
                </div>
            </div>
         </div>
         <h4>CONCLUSION</h4>
         <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Biventricular Systolic Function:</strong>
                    <input type="text" name="biventricular_systolic_function" class="form-control">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Comment 2:</strong>
                    <input type="text" name="c_comment_2" class="form-control">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Comment 3:</strong>
                    <input type="text" name="c_comment_3" class="form-control">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Comment 4:</strong>
                    <input type="text" name="c_comment_4" class="form-control">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Comment 5:</strong>
                    <input type="text" name="c_comment_5" class="form-control">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Comment 6:</strong>
                    <input type="text" name="c_comment_6" class="form-control">
                </div>
            </div>
         </div>
         <h4>NOTE</h4>
         <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>YES:</strong>
                    <input type="text" name="yes" class="form-control">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>NOTE:</strong>
                    <input type="text" name="note" class="form-control">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>REMARKS:</strong>
                    <input type="text" name="remarks" class="form-control">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>


    </form>


</div>

@endsection
