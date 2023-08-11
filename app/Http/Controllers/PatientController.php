<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Condition;
use App\Models\Procedure;
use App\Models\Reference;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Events\NewAppointment;
use App\Models\PatientProcedure;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:patient-list|patient-create|patient-edit|patient-delete', ['only' => ['index','show']]);
         $this->middleware('permission:patient-create', ['only' => ['create','store']]);
         $this->middleware('permission:patient-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:patient-delete', ['only' => ['destroy']]);
    }



    public function index()
    {
        // $patients = Patient::latest()->paginate(5);
        // return view('patients.index',compact('patients'))
        //     ->with('i', (request()->input('page', 1) - 1) * 5);
            $patients = Patient::orderBy('updated_at','desc')->get();
            $docs = User::where('job', 'Doctor')->get();
            // dd($docs);
        return view('patients.index',compact('patients','docs'));

    }
    public function search(Request $request)
    {
        // $patients = Patient::latest()->paginate(5);
        // return view('patients.index',compact('patients'))
        //     ->with('i', (request()->input('page', 1) - 1) * 5);
            $patients = Patient::where('doctor_id', $request->doc)->get();
            // dd($docs);
        return view('patients.index',compact('patients'));

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $data = [
            'references' => Reference::all(),
            'departments' => Department::all(),
            'conditions' => Condition::all(),
            'procedures' => Procedure::all(),
            'doctors' => User::where('job', 'Doctor')->get()
        ];
        return view("patients.create", $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function info(Request $request)
    {
        // $request->procedure_id);
            $this->validate($request, [
                'first_name' => 'required',
                'phone' => 'required',
                'department_id' => 'required',
                'doctor_id' => 'required',
                'condition_id' => 'required',
                'procedure_id' => 'required',
            ]);
            $input = $request->all();

            $mr_no = $request->input('mr_no', false);
            $token_no = $request->input('token_no', false);
            $first_name = $request->input('first_name', false);
            $second_name_type = $request->input('second_name_type', false);
            $second_name = $request->input('second_name', false);
            $age = $request->input('age', false);
            $gender = $request->input('gender', false);
            $phone = $request->input('phone', false);
            $cnic = $request->input('cnic', false);
            $address = $request->input('address', false);
            $patient_came_with = $request->input('patient_came_with', false);
            $patient_came_with_name = $request->input('patient_came_with_name', false);
            $reference_id = $request->input('reference_id', false);
            $reference_name = $request->input('reference_name', false);
            $department_id = $request->input('department_id', false);
            $doctor_id = $request->input('doctor_id', false);
            $condition_id = $request->input('condition_id', false);
            $bp = $request->input('bp', false);
            $sugar = $request->input('sugar', false);
            $temperature = $request->input('temperature', false);
            $procedure_id = $request->input('procedure_id', false);
            // foreach ($request->procedure_id as $procedure) {
            //     $procedure1 = Procedure::where('id' , $procedure)->get();
            //     dd($procedure1);
            // }
             $procedures = Procedure::whereIn('id' , $request->procedure_id)->get();
            // dd($procedures);

            // dd($request->procedure_id);
            // foreach ($input['procedure_id'] as $pa) {

            //     // $procedures = Procedure::where('id' , $pa)->get();
            //     dd($pa[2]);
            // }



            return view("patients.bill", compact('mr_no','first_name','second_name_type','second_name',
            'age','gender','phone','cnic','address','patient_came_with','patient_came_with_name','reference_id','reference_name'
            ,'department_id','doctor_id','token_no','condition_id','bp','sugar','temperature','procedure_id','procedures'));
    }
    public function store(Request $request)
    {
        // dd($request->procedure_id);
        // dd($request->all());
        $first_name = $request->first_name;
        $doc_name = User::where('id', $request->doctor_id)->first();

        $patient_came_with_name = $request->patient_came_with_name;
        $age = $request->age;
        $gender = $request->gender;
        $total_fees = $request->total_fee;
        $discount_fixed = $request->discount;
        $discount_percent = ($request->discount / 100) * $request->total_fee;
        $discount_type = $request->discount_type;
        $total_fee_fixed = $total_fees - $discount_fixed;
        $total_fee_percent = $total_fees - $discount_percent;
        $procedures = Procedure::whereIn('id' , $request->procedure_id)->get();
        // dd($procedure);


        $input = $request->except(['procedure_id']);

        if (!$request->token_no) {
            if(Patient::whereDate('created_at', Carbon::today())->latest()->first()){
                $t1 = Patient::whereDate('created_at', Carbon::today())
                ->where('doctor_id', $request->doctor_id)
                ->max('token_no_s');
                // dd($t1);

                $input['token_no_s'] = $t1+2;
                }
                else {
                    $input['token_no_s'] = 2;
                }
        }
        elseif ($request->token_no) {
            $input['token_no'] = $request->token_no;
        }
        if (Patient::where('phone', '=', $request->phone)->exists()) {
            $existed_mr =  Patient::where('phone', '=', $request->phone)->select('mr_no')->first();
            $input['mr_no'] = $existed_mr->mr_no;
         }
         else{

            if(Patient::latest()->first()){
                $id_last = Patient::latest()->first()->id;
                $input['mr_no'] = date('myd').'-'.$id_last+1;
                }
                else {
                    $input['mr_no'] = date('myd').'-1';
                }
         }


        if ($request->discount) {
            if ($request->discount_type == 'fixed') {
            $input['total_fee'] = $request->total_fee - $request->discount;
            }
            else {
                $dis = ($request->discount / 100) * $request->total_fee;
                $input['total_fee'] = $request->total_fee - $dis;
            }
        }
        $doctor_id = $request->doctor_id;
        $patient_id = $request->id;
        $input['closed'] = 0;
        $cr_patient =  Patient::create($input);
        $input1 = $request->all();
        if ($request->procedure_id) {
            # code...
        foreach ($input1['procedure_id'] as $pa) {
                # code...
            DB::table('patient_procedures')->insert(['procedure_id'=>$pa,'patient_id'=>$cr_patient->id]);

        }
        }

        if (!$request->token_no) {
            $token_no = $cr_patient->token_no_s;
            }
            else {
                $token_no = $request->token_no;
            }

        $date = $cr_patient->created_at;
        $mr_no = $cr_patient->mr_no;

        event(new NewAppointment('New Patient Received',$patient_id, $doctor_id));
        // return redirect()->route('patients.index')
        //                 ->with('success','patient created successfully.');
        return view('patients.receipt',compact('mr_no','token_no','first_name','date','patient_came_with_name',
        'total_fees','discount_fixed','discount_percent','discount_type','age','procedures','gender',
        'total_fee_fixed','total_fee_percent','doc_name'));
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
        // dd($references);
        return view('patients.show',compact('patient','doctors','references','conditions','departments','procedures'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $patient = Patient::where('id',$id)->first();
        $patient = Patient::findOrFail($id);
        $references = Reference::pluck('name','id')->all();
        $doctors = User::pluck('name','id')->all();
        $conditions = Condition::pluck('name','id')->all();
        $departments = Department::pluck('name','id')->all();
        $procedures = Procedure::where('doctor_id', $patient->doctor_id)->get();
        // $procedures = PatientProcedure::join('procudures', 'patient_procedures')
        // ->where('patient_id', $patient->id)->get();
        $p_procedures = DB::table('procedures')
        ->join('patient_procedures', 'procedures.id',"=",'patient_procedures.procedure_id')
        ->join('patients', 'patients.id',"=",'patient_procedures.patient_id')
        ->where('patients.id' , $id)
        ->select('procedures.*')->get();
        // dd($procedures);
        return view('patients.edit',compact('patient','references','doctors','conditions','departments','procedures','p_procedures'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
        // dd($request->all());

        $patient = Patient::findOrFail($patient->id);
        //  dd($patient);
        $pat =  $patient->update($request->except(['procedure_id']));

        $input1 = $request->all();
        if ($request->procedure_id) {
            PatientProcedure::where('patient_id', $patient->id)->delete();
            $procedures = Procedure::whereIn('id' , $request->procedure_id)->get();
            $fee = $procedures->sum('fee');
            $patient->update(['total_fee' => $fee]);
        foreach ($input1['procedure_id'] as $pa) {
                # code...
            DB::table('patient_procedures')
            ->insert(['procedure_id'=>$pa,'patient_id'=>$patient->id]);

        }
        }


        return redirect()->route('patients.index')
                        ->with('success','patient updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        $patient->delete();

        return redirect()->route('patients.index')
                        ->with('success','patient deleted successfully');
    }

    public function print($id)
    {
        $patient = Patient::findOrFail($id);
        $references = Reference::where('id', $patient->reference_id)->first();
        $doctors = User::where('id', $patient->doctor_id)->first();
        $conditions = Condition::where('id', $patient->condition_id)->first();
        $departments = Department::where('id', $patient->department_id)->first();
        $total_fees = $patient->total_fee;
        $discount_fixed = $patient->discount;
        $discount_percent = ($patient->discount / 100) * $patient->total_fee;
        $total_fees1 = $patient->total_fee + $discount_fixed + $discount_percent;
        $discount_type = $patient->discount_type;
        $total_fee_fixed = $total_fees - $discount_fixed;
        $total_fee_percent = $total_fees - $discount_percent;
        $procedures = DB::table('procedures')
        ->join('patient_procedures', 'procedures.id',"=",'patient_procedures.procedure_id')
        ->join('patients', 'patients.id',"=",'patient_procedures.patient_id')
        ->where('patients.id' , $id)
        ->select('procedures.*')
        ->get();
        return view('patients.print',compact('patient','doctors',
        'references','conditions','departments','procedures','total_fees','discount_fixed','discount_percent',
    'discount_type','total_fee_fixed','total_fee_percent','total_fees1'));
    }

    public function doc_pro($id)
    {
        $procedures = Procedure::where('doctor_id',$id)
        ->get();
        return response()->json($procedures);
    }

    public function prescription($id)
    {
        $prescription = DB::table('prescriptions')
        ->join('patients', 'patients.id',"=",'prescriptions.patient_id')
        ->where('patients.id' , $id)
        ->first();
        // dd($prescription);
        return view('patients.prescription',compact('prescription'));
    }



}
