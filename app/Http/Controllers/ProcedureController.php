<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Procedure;
use Illuminate\Http\Request;
use App\Models\ProcedureName;
use Illuminate\Validation\Rule;

class ProcedureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:procedure-list|procedure-create|procedure-edit|procedure-delete', ['only' => ['index','show']]);
         $this->middleware('permission:procedure-create', ['only' => ['create','store']]);
         $this->middleware('permission:procedure-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:procedure-delete', ['only' => ['destroy']]);
    }



    public function index()
    {
        $procedures = Procedure::
        join('users', 'users.id',"=",'procedures.doctor_id')
        ->select('procedures.*','users.name as doc_name')
        ->get();
        return view('procedures.index',compact('procedures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $procedure_names = ProcedureName::all();
        $doctors = User::where('job', 'Doctor')->get();
        return view('procedures.create',compact('doctors','procedure_names'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name'  => 'required',
            'fee' => 'required',
            'doctor_id'  => [

                'required',

                Rule::unique('procedures')->where(function ($query) use ($request) {

                    return $query
                        ->whereName($request->name)
                        ->whereDoctorId($request->doctor_id);
                }),
            ],


        ],
        [
            'doctor_id.unique' => 'This Procedure for following doctor already exists',
            'doctor_id.required' => 'Doctor field is empty'
        ]


    );

        Procedure::create($request->all());

        return redirect()->route('procedures.index')
                        ->with('success','procedure created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Procedure $procedure)
    {
        return view('procedures.show',compact('procedure'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Procedure $procedure)
    {
        $procedure_names = ProcedureName::all();
        $doctors = User::where('job', 'Doctor')->get();
        return view('procedures.edit',compact('procedure','procedure_names','doctors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Procedure $procedure)
    {
        request()->validate([
            'name'  => 'required',
            'fee' => 'required',
            'doctor_id'  => [

                'required',

                Rule::unique('procedures')->where(function ($query) use ($request) {

                    return $query
                        ->whereName($request->name)
                        ->whereDoctorId($request->doctor_id);
                })->ignore($procedure->id),
            ],
        ],
        [
            'doctor_id.unique' => 'This Procedure for following doctor already exists',
            'doctor_id.required' => 'Doctor field is empty'
        ]
    );

        $procedure->update($request->all());

        return redirect()->route('procedures.index')
                        ->with('success','procedure updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Procedure $procedure)
    {
        $procedure->delete();

        return redirect()->route('procedures.index')
                        ->with('success','procedure deleted successfully');
    }
}
