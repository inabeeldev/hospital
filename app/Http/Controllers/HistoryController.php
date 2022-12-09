<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Patient;
use App\Models\Procedure;
use App\Models\proartment;
use Illuminate\Http\Request;
use App\Models\ConsultantPatient;
use Illuminate\Support\Facades\DB;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if ($request->doc && !$request->pro && !$request->from_date) {
            // dd($request->all());

            $patients = Patient::
            join('users', 'users.id',"=", 'patients.doctor_id')
            ->where('patients.doctor_id', $request->doc)
            ->where('patients.closed', 0)
            ->where('patients.status', 'Checked')
            ->select('patients.*', 'users.name as doc_name')
            ->get();
            // dd($patients);
        }
        // elseif ($request->pro && $request->doc) {
        //     $patients = Patient::
        //     join('users', 'users.id',"=", 'patients.doctor_id')
        //     ->join('patient_procedures', 'patient_procedures.patient_id',"=", 'patients.id')
        //     ->join('procedures', 'procedures.id',"=", 'patient_procedures.procedure_id')
        //     ->where('patient_procedures.procedure_id', $request->pro)
        //     ->where('patients.closed', 0)
        //     ->where('patients.status', 'Checked')
        //     ->select('patients.*', 'users.name as doc_name')
        //     ->get();
        // }

        elseif ($request->doc && $request->pro && !$request->from_date) {
            $patients = Patient::
            join('users', 'users.id',"=", 'patients.doctor_id')
            ->join('patient_procedures', 'patient_procedures.patient_id',"=", 'patients.id')
            ->join('procedures', 'procedures.id',"=", 'patient_procedures.procedure_id')
            ->where([
                ['patients.doctor_id','=',  $request->doc],
                ['patient_procedures.procedure_id','=', $request->pro]
            ])
            ->where('patients.closed', 0)
            ->where('patients.status', 'Checked')
            ->select('patients.*', 'users.name as doc_name')
            ->get();
            // dd($patients);
        }
        elseif ($request->from_date && !$request->doc && !$request->pro) {
            $patients = Patient::
            join('users', 'users.id',"=", 'patients.doctor_id')
            ->whereBetween('patients.created_at',[$request->from_date, $request->to_date])
            ->where('patients.closed', 0)
            ->where('patients.status', 'Checked')
            ->select('patients.*', 'users.name as doc_name')
            ->get();
        }
        elseif ($request->from_date && $request->doc && !$request->pro) {
            $patients = Patient::
            join('users', 'users.id',"=", 'patients.doctor_id')
            ->whereBetween('patients.created_at',[$request->from_date, $request->to_date])
            ->where('patients.doctor_id', $request->doc)
            ->where('patients.closed', 0)
            ->where('patients.status', 'Checked')
            ->select('patients.*', 'users.name as doc_name')
            ->get();
            // dd($patients);
        }
        // elseif ($request->from_date && $request->pro && !$request->doc) {
        //     $patients = Patient::
        //     join('users', 'users.id',"=", 'patients.doctor_id')
        //     ->join('patient_procedures', 'patient_procedures.patient_id',"=", 'patients.id')
        //     ->join('procedures', 'procedures.id',"=", 'patient_procedures.procedure_id')
        //     ->whereBetween('patients.created_at',[$request->from_date, $request->to_date])
        //     ->where('patient_procedures.procedure_id', $request->pro)
        //     ->where('patients.closed', 0)
        //     ->where('patients.status', 'Checked')
        //     ->select('patients.*', 'users.name as doc_name')
        //     ->get();
        // }
        elseif ($request->from_date && $request->pro && $request->doc) {
            $patients = Patient::
            join('users', 'users.id',"=", 'patients.doctor_id')
            ->join('patient_procedures', 'patient_procedures.patient_id',"=", 'patients.id')
            ->join('procedures', 'procedures.id',"=", 'patient_procedures.procedure_id')
            ->whereBetween('patients.created_at',[$request->from_date, $request->to_date])
            ->where([
                ['patients.doctor_id',  $request->doc],
                ['patient_procedures.procedure_id', $request->pro]
            ])
            ->where('patients.closed', 0)
            ->where('patients.status', 'Checked')
            ->select('patients.*', 'users.name as doc_name')
            ->get();
        }
        else {

            $patients = Patient::
            join('users', 'users.id',"=", 'patients.doctor_id')
            ->where('patients.closed', 0)
            ->where('patients.status', 'Checked')
            ->select('patients.*', 'users.name as doc_name')
            ->get();
        }

        // $patients = Patient::all();
            $docs = User::where('job', 'Doctor')->get();
            $pros = Procedure::all();
            // dd($docs);
        return view('history.index',compact('patients','docs','pros'));
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        $closed_patients = Patient::whereIn('id', $request->patient_id)->get();
        foreach ($closed_patients as $cp) {
            # code...

        $cp['procedures'] = DB::table('patient_procedures')
        ->join('procedures', 'procedures.id',"=",'patient_procedures.procedure_id')
        ->where('patient_procedures.patient_id', $cp->id)
        ->select('procedures.*')
        // ->where('additional_services.company_id',$car->company_id)
        ->get();

    }
        $closed_docs = Patient::
        join('users', 'users.id',"=", 'patients.doctor_id')
        ->where('patients.id', $request->patient_id)
        ->select('users.name as doc_name')
        ->first();
        // $ddd =  ;
        if (ConsultantPatient::latest()->first()) {
            $ddd =  ConsultantPatient::latest()->first();
            $cid = $ddd->consultant_id+1;
        }
        else {
            $cid = 1;
        }
        // $ee = [];
        $ee = $request->patient_id;
        // // implode(",",$request['patient_id']);
        // $ee = implode(',', $ee);
        // $request->patient_id = implode(',', $request->patient_id);

        // $ee = json_encode($ee);
        // dd($request->patient_id);

        //
        // dd($ee);
        // $ee = [];
        //
        // $ee = implode(",",$request['patient_id']);

        foreach ($request->patient_id as $in) {
            # code...
        // DB::table('consultant_patients')->insert(['patient_id'=>$in,'consultant_id'=>$cid, 'created_at'=> now()]);
            ConsultantPatient::create([
                'patient_id'=>$in,
                'consultant_id'=>$cid
            ]);
        }

        //    dd($closed_patients);
        Patient::whereIn('id', $request->patient_id)->update(['closed' => 1]);
        // dd($closed_patients);

        return view('history.show',compact('closed_patients','closed_docs','cid'));

        // return redirect()->route('history.index')
        // ->with('success','Selected Patients closed successfully');
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
        //
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
        //
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
    public function docs_pros($id)
    {
        $procedures = Procedure::where('doctor_id',$id)
        ->get();
        return response()->json($procedures);
    }
}
