<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Patient;
use App\Models\Condition;
use App\Models\ConsultantPatient;
use App\Models\Reference;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConsultantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {

    //     // $patients = Patient::where('doctor_id', $request->doc)
    //     //     ->get();
    //     $docs = User::where('job', 'Doctor')->get();
    //         foreach ($docs as $doc) {

    //             $doc['patients'] = Patient::where('doctor_id', $doc->id)
    //             ->get();
    //         }
    //     $patients = Patient::all();
    //     $male_patients = Patient::where('gender','male')->get();
    //     $female_patients = Patient::where('gender','female')->get();
    //         // dd($docs);
    //     return view('consultant.index',compact('docs','patients','male_patients','female_patients'));
    // }
    public function index(Request $request)
    {
        // dd($request->all());
        // $patients = Patient::latest()->paginate(5);
        // return view('patients.index',compact('patients'))
        //     ->with('i', (request()->input('page', 1) - 1) * 5);
            // $patients = Patient::
            // join('users', 'users.id',"=",'patients.doctor_id')
            // ->where('patients.closed',1)
            // ->where('patients.status','Checked')
            // ->select('patients.*','users.name as doc_name')
            // ->get();

            $cc = ConsultantPatient::groupBy('consultant_id')->get();

            if ($request->consultant_id) {
                $patients = Patient::
                join('users', 'users.id',"=",'patients.doctor_id')
                ->join('consultant_patients', 'consultant_patients.patient_id',"=", 'patients.id')
                ->where('consultant_patients.consultant_id', $request->consultant_id)
                ->select('patients.*','users.name as doc_name')
                ->get();
            }
            else {
                $patients = Patient::
                join('users', 'users.id',"=",'patients.doctor_id')
                ->where('patients.closed',1)
                ->where('patients.status','Checked')
                ->select('patients.*','users.name as doc_name')
                ->get();

            }



        // dd($patients);
            // $procedures = DB::table('procedures')
            // ->join('patient_procedures', 'procedures.id',"=",'patient_procedures.procedure_id')
            // ->join('patients', 'patients.id',"=",'patient_procedures.patient_id')
            // ->where('patients.id' , $id)
            // ->select('procedures.*')
            // ->get();
            $docs = User::where('job', 'Doctor')->get();
            // dd($docs);
            return view('consultant.index',compact('cc','docs','patients'));

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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        return view('consultant.show',compact('patient','doctors','references','conditions','departments','procedures'));
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
}
