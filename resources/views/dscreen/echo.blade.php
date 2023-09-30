@extends('dscreen.layout')
@section('content')
<div class="container-fluid bg-white">
    <div class="row">
        <div class="col-lg-12 bg-white">

            <div class="pull-right mb-3">
                <a class="btn btn-primary" href="{{ url()->previous() }}"> Back</a>
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
            <div class="col-xs-6 col-sm-1 col-md-1">
                <div class="form-group">
                    <input type="text" name="weight" class="form-control" placeholder="Weight">
                </div>
            </div>
            <div class="col-xs-6 col-sm-1 col-md-1">
                <div class="form-group">
                    <input type="text" name="heart_rate" class="form-control" placeholder="Heart rate:">
                </div>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2">
                <div class="form-group">
                    <input type="text" name="indoor_outdoor_no" class="form-control" placeholder="Indoor/Outdoor No:">
                </div>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2">
                <div class="form-group">
                    <input type="text" name="registration_no_est" class="form-control" placeholder="Registration No. Est:">
                </div>
            </div>
            <div class="col-xs-6 col-sm-1 col-md-1">
                <div class="form-group">
                    <input type="text" name="echo_no" class="form-control" placeholder="Echo No:">
                </div>
            </div>
            <div class="col-xs-6 col-sm-1 col-md-1">
                <div class="form-group">
                    <input type="date" name="date" class="form-control" placeholder="Date:">
                </div>
            </div>
            <div class="col-xs-6 col-sm-1 col-md-1">
                <div class="form-group">
                    <input type="text" name="operator" class="form-control" placeholder="Operator:">
                </div>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2">
                <div class="form-group">
                    <input type="text" name="referred_by" class="form-control" placeholder="Referred By:">
                </div>
            </div>
         </div>
         <div class="row">
        <div class="col-lg-12">   
            <h4 class="mt-3">B /M MODE DIMENSIONS</h4>
        </div>
            <div class="col-xs-2 col-sm-2 col-md-2 mt-0">
                <div class="form-group">
                    <input type="text" name="bm_aortic_root" class="form-control" placeholder="Aortic Root:">
                </div>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group">
                    <input type="text" name="annulus_ao" class="form-control" placeholder="Annulus AO:">
                </div>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group">
                    <input type="text" name="la" class="form-control" placeholder="LA:">
                </div>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group">
                    <input type="text" name="la_area" class="form-control" placeholder="LA Area:">
                </div>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group">
                    <input type="text" name="rv" class="form-control" placeholder="RV:">
                </div>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group">
                    <input type="text" name="mv_area_planimetry" class="form-control" placeholder="MV Area(planimetry):">
                </div>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group">
                    
                    <input type="text" name="lvisd" class="form-control" placeholder="LVISD:">
                </div>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group">
                    <input type="text" name="lvpwd" class="form-control" placeholder="LVPWD:">
                </div>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group">
                    <input type="text" name="lvidd" class="form-control" placeholder="LVIDD:">
                </div>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group">
                    <input type="text" name="lvids" class="form-control" placeholder="LVIDS:">
                </div>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group">
                    <input type="text" name="ef" class="form-control" placeholder="EF:">
                </div>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group">
                    <input type="text" name="fs" class="form-control" placeholder="F.S:">
                </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12"><h4 class="mt-3">DOPPLER</h4></div>
            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group">
                  
                <input type="text"  name="mv_area_pht" class="form-control" placeholder="MV Area(PHT):">
                </div>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group">
                    
                    <input type="text" name="mv_pg_p" class="form-control" placeholder="MV PG(P):">
                </div>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group">
                    
                    <input type="text" name="mv_pg_m" class="form-control" placeholder="MV PG(M):">
                </div>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group">
                    
                    <input type="text" name="ao_pg" class="form-control" placeholder="AO PG:">
                </div>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group">
                    
                    <input type="text" name="ao_mpg" class="form-control" placeholder="AO MPG:">
                </div>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group">
                    
                    <input type="text" name="tv_pg" class="form-control" placeholder="TV PG:">
                </div>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group">
                    
                    <input type="text" name="mean_pap" class="form-control" placeholder="Mean PAP:">
                </div>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group">
                    
                    <input type="text" name="e_a" class="form-control" placeholder="E/A:">
                </div>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group">
                    
                    <input type="text" name="dt" class="form-control" placeholder="DT:">
                </div>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group">
                    
                    <input type="text" name="e" class="form-control" placeholder="E:">
                </div>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group">
   
                    <input type="text" name="e_" class="form-control" placeholder="E':">
                </div>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group">
                    <input type="text" name="e_e" class="form-control" placeholder="E/E:">
                </div>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group">
  
                    <input type="text" name="rvstdi" class="form-control" placeholder="RVSTDI:">
                </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12"> <h4 class="mt-3">COLOR DOPPLER</h4></div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <input type="text" name="comments_1" class="form-control" placeholder="Comments 1:">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <input type="text" name="comments_2" class="form-control" placeholder="Comments 2:">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <input type="text" name="comments_3" class="form-control" placeholder="Comments 3:">
                </div>
            </div>
         </div>
      
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <input type="text" name="optional_remarks" class="form-control" placeholder="OPTIONAL REMARKS">
                </div>
            </div>
         </div>
       
         <div class="row">
            <div class="col-lg-12">  <h4 class="mt-3">SUBJECTIVE REPORT</h4></div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <input type="text" name="subjective_report" class="form-control" placeholder="SUBJECTIVE REPORT:">
                </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group">
                    <input type="text" name="special_comments_1" class="form-control" placeholder="Special Comments 1:">
                </div>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group">
                    <input type="text" name="special_comments_2" class="form-control" placeholder="Special Comments 2:">
                </div>
            </div>
            <div class="col-xs-4 col-sm-2 col-md-2">
                <div class="form-group">
                    <strong></strong>
                    <input type="text" name="special_comments_3" class="form-control" placeholder="Special Comments 3:">
                </div>
            </div>
            <div class="col-xs-4 col-sm-2 col-md-2">
                <div class="form-group">
                    <input type="text" name="aortic_root" class="form-control" placeholder="Aortic Root:">
                </div>
            </div>
            <div class="col-xs-4 col-sm-2 col-md-2">
                <div class="form-group">
                    <input type="text" name="aortic_value" class="form-control" placeholder="Aortic Valve:">
                </div>
            </div>
            <div class="col-xs-4 col-sm-2 col-md-2">
                <div class="form-group">
                    <input type="text" name="left_atrium" class="form-control" placeholder="Left Atrium:">
                </div>
            </div>
            <div class="col-xs-4 col-sm-2 col-md-2">
                <div class="form-group">
                    <input type="text" name="mitral_valve" class="form-control" placeholder="Mitral Valve:">
                </div>
            </div>
            <div class="col-xs-4 col-sm-2 col-md-2">
                <div class="form-group">
                    <input type="text" name="tricuspid_and_pulmonary_valve" class="form-control" placeholder="Tricuspid and Pulmonary Valve:">
                </div>
            </div>
            <div class="col-xs-4 col-sm-2 col-md-2">
                <div class="form-group">
                    <input type="text" name="left_ventricle" class="form-control" placeholder="Left Ventricle:">
                </div>
            </div>
            <div class="col-xs-4 col-sm-2 col-md-2">
                <div class="form-group">
                    <input type="text" name="right_ventricle" class="form-control" placeholder="Right Ventricle:">
                </div>
            </div>
            <div class="col-xs-4 col-sm-2 col-md-2">
                <div class="form-group">
                    <input type="text" name="ias_ivs" class="form-control" placeholder="IAS/IVS:">
                </div>
            </div>
            <div class="col-xs-4 col-sm-2 col-md-2">
                <div class="form-group">
                    <input type="text" name="pericardium" class="form-control" placeholder="Pericardium:">
                </div>
            </div>
            <div class="col-xs-4 col-sm-2 col-md-2">
                <div class="form-group">
                    <input type="text" name="ivc" class="form-control" placeholder="IVC:">
                </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12"><h4 class="mt-3">CONCLUSION</h4></div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <input type="text" name="biventricular_systolic_function" class="form-control" placeholder="Biventricular Systolic Function:">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <input type="text" name="c_comment_2" class="form-control" placeholder="Comment 2:">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <input type="text" name="c_comment_3" class="form-control" placeholder="Comment 3:">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <input type="text" name="c_comment_4" class="form-control" placeholder="Comment 4:">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <input type="text" name="c_comment_5" class="form-control" placeholder="Comment 5:">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <input type="text" name="c_comment_6" class="form-control" placeholder="Comment 6:">
                </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12"><h4>NOTE</h4></div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <input type="text" name="yes" class="form-control" placeholder="YES:">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <input type="text" name="note" class="form-control" placeholder="NOTE:">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <input type="text" name="remarks" class="form-control" placeholder="REMARKS:">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>

@endsection
