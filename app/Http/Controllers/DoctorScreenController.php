<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Patient;
use App\Models\Condition;
use App\Models\Procedure;
use App\Models\Reference;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Events\PatientChecked;
use App\Models\PatientEcg;
use App\Models\PatientEcho;
use App\Models\Prescription;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DoctorScreenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $patients = Patient::where('doctor_id', Auth::user()->id)->get();
        $patients = Patient::where('doctor_id', Auth::user()->id)
        ->whereDate('created_at', Carbon::today())
        ->paginate(25);
        return view('dscreen.index',compact('patients'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        // dd($patients);
        // return view('dscreen.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function StatusPatients(Request $request)
    {
        Patient::whereIn('id', $request->patient_id)->update(['status' => 'Checked']);
        return redirect()->back();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $pros = Procedure::where('doctor_id', Auth::user()->id)->get();
        $procedures = DB::table('procedures')
        ->join('patient_procedures', 'procedures.id',"=",'patient_procedures.procedure_id')
        ->join('patients', 'patients.id',"=",'patient_procedures.patient_id')
        ->where('patients.id' , $id)
        ->select('procedures.*')
        ->get();
        // dd($procedures);
        $patient = Patient::where('id', $id)->first();
        $uy = Patient::where('mr_no', '=', $patient->mr_no)->count();
        $ww = null;
        if ($uy > 1 ) {
            $ww = Patient::where('mr_no', '=', $patient->mr_no)
            ->where('status', 'Checked')->get();


        }
        // dd($ww);
        // dd($patient);
        return view('dscreen.edit',compact('patient','procedures','pros','ww'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $input2 = $request->except(['patient_id'
        ,'medicine_type1','medicine_name1','medicine_mg1','medicine_qty1','medicine_timing1'
        ,'medicine_type2','medicine_name2','medicine_mg2','medicine_qty2','medicine_timing2'
        ,'medicine_type3','medicine_name3','medicine_mg3','medicine_qty3','medicine_timing3'
        ,'medicine_type4','medicine_name4','medicine_mg4','medicine_qty4','medicine_timing4'
        ,'medicine_type5','medicine_name5','medicine_mg5','medicine_qty5','medicine_timing5'
        ,'medicine_type6','medicine_name6','medicine_mg6','medicine_qty6','medicine_timing6'
        ,'medicine_type7','medicine_name7','medicine_mg7','medicine_qty7','medicine_timing7'
        ,'medicine_type8','medicine_name8','medicine_mg8','medicine_qty8','medicine_timing8'
        ,'medicine_type9','medicine_name9','medicine_mg9','medicine_qty9','medicine_timing9'
        ,'medicine_type10','medicine_name10','medicine_mg10','medicine_qty10','medicine_timing10'
        ,'p_complaints','p_bp','p_pulse','p_weight','p_cvs','p_chest','p_ecg','p_investigation','p_comments']);


        $input5 = $request->only(['patient_id'
        ,'medicine_type1','medicine_name1','medicine_mg1','medicine_qty1','medicine_timing1'
        ,'medicine_type2','medicine_name2','medicine_mg2','medicine_qty2','medicine_timing2'
        ,'medicine_type3','medicine_name3','medicine_mg3','medicine_qty3','medicine_timing3'
        ,'medicine_type4','medicine_name4','medicine_mg4','medicine_qty4','medicine_timing4'
        ,'medicine_type5','medicine_name5','medicine_mg5','medicine_qty5','medicine_timing5'
        ,'medicine_type6','medicine_name6','medicine_mg6','medicine_qty6','medicine_timing6'
        ,'medicine_type7','medicine_name7','medicine_mg7','medicine_qty7','medicine_timing7'
        ,'medicine_type8','medicine_name8','medicine_mg8','medicine_qty8','medicine_timing8'
        ,'medicine_type9','medicine_name9','medicine_mg9','medicine_qty9','medicine_timing9'
        ,'medicine_type10','medicine_name10','medicine_mg10','medicine_qty10','medicine_timing10'
        ,'p_complaints','p_bp','p_pulse','p_weight','p_cvs','p_chest','p_ecg','p_investigation','p_comments']);
        // dd($request->all());
        if ($request->procedure_id) {
            # code...
        foreach ($input2['procedure_id'] as $pa) {
            $procedures1 = Procedure::whereIn('id' , $request->procedure_id)->get();
            $procedure_fee = $procedures1->sum('fee');
            DB::table('patient_procedures')->insert(['procedure_id'=>$pa,'patient_id'=>$id]);

        }
        }

        // dd($procedure_fee);

        $patient = Patient::findOrFail($id);
        $prescription = Prescription::create($input5);
        $input = $request->except(['procedure_id','patient_id'
        ,'medicine_type1','medicine_name1','medicine_mg1','medicine_qty1','medicine_timing1'
        ,'medicine_type2','medicine_name2','medicine_mg2','medicine_qty2','medicine_timing2'
        ,'medicine_type3','medicine_name3','medicine_mg3','medicine_qty3','medicine_timing3'
        ,'medicine_type4','medicine_name4','medicine_mg4','medicine_qty4','medicine_timing4'
        ,'medicine_type5','medicine_name5','medicine_mg5','medicine_qty5','medicine_timing5'
        ,'medicine_type6','medicine_name6','medicine_mg6','medicine_qty6','medicine_timing6'
        ,'medicine_type7','medicine_name7','medicine_mg7','medicine_qty7','medicine_timing7'
        ,'medicine_type8','medicine_name8','medicine_mg8','medicine_qty8','medicine_timing8'
        ,'medicine_type9','medicine_name9','medicine_mg9','medicine_qty9','medicine_timing9'
        ,'medicine_type10','medicine_name10','medicine_mg10','medicine_qty10','medicine_timing10'
        ,'p_complaints','p_bp','p_pulse','p_weight','p_cvs','p_chest','p_ecg','p_investigation','p_comments']);

        if ($request->procedure_id) {
            $uu = $input['total_fee'] = $request->total_fee + $procedure_fee;
            }
        if ($request->discount && $request->procedure_id) {
            if ($request->discount_type == 'fixed') {
            $input['total_fee'] = $uu - $request->discount;
            }
            else {
                $dis = ($request->discount / 100) * $uu;
                $input['total_fee'] = $uu - $dis;

            }
        }
        elseif ($request->discount && !$request->procedure_id) {

                if ($request->discount_type == 'fixed') {
                $input['total_fee'] = $request->total_fee - $request->discount;
                }
                else {
                    $dis = ($request->discount / 100) * $request->total_fee;
                    $input['total_fee'] = $request->total_fee - $dis;

                }
        }

        $doctor_id = $request->doctor_id;
        if ($patient->token_no) {
            $token_no = $patient->token_no;
        }
        else{
            $token_no = $patient->token_no_s;
        }

        $patient->update($input);
        $doctor_id = Patient::where('id', $id)->select('patients.doctor_id')->get();
        event(new PatientChecked('Patient Checked',$token_no, $doctor_id));

        return redirect()->route('doctor-screen.index')
                        ->with('success','patient updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function show_old($id)
    {
        $patient = Patient::findOrFail($id);
        $references = Reference::where('id', $patient->reference_id)->first();
        $doctors = User::where('id', $patient->doctor_id)->first();
        $conditions = Condition::where('id', $patient->condition_id)->first();
        $departments = Department::where('id', $patient->department_id)->first();
        $procedures = DB::table('procedures')
        ->join('patient_procedures', 'procedures.id',"=",'patient_procedures.procedure_id')
        ->join('patients', 'patients.id',"=",'patient_procedures.patient_id')
        ->where('patients.id' , $id)
        ->select('procedures.*')
        ->get();
        return view('dscreen.show2',compact('patient','doctors','references','conditions','departments','procedures'));
    }
    public function echo($id)
    {
        $patient = Patient::where('id',$id)->first();
        return view('dscreen.echo',compact('patient'));
    }

    public function echo_store(Request $request)
    {
        $input = $request->all();
        PatientEcho::create($input);
        // return back();
        return redirect()->route('doctor-screen.edit',$request->patient_id);

    }

    public function ecg($id)
    {
        $patient = Patient::where('id',$id)->first();
        return view('dscreen.ecg',compact('patient'));
    }
    public function ecg_store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('images'), $imageName);

        PatientEcg::create([
            'patient_id' => $request->patient_id,
            'comment' => $request->comment,
            'image' => $imageName
        ]);

        return redirect()->route('doctor-screen.edit',$request->patient_id);

    }
    public function angio($id)
    {
        $patient = Patient::find($id);
        return view('dscreen.angiography', compact('patient'));
    }

}
